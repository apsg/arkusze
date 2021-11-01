<?php

namespace App\Http\Controllers;

use App\Test;
use App\Answer;
use App\Question;
use App\TestType;
use Illuminate\Http\Request;
use Gate;
use App\Resulters\ASRSResult;
use DataTables;

class TestsController extends Controller
{
    
	public function __construct(){
		$this->middleware('auth')->except('getPdf');
	}

	/**
	 * Pokaż widok listowania 
	 * @return [type] [description]
	 */
	public function index()
	{
		$tests = \Auth::user()->tests;
		return view('tests.index')->with(compact('tests'));
	}

	/**
	 * Pokaż widok tworzenia nowego testu
	 * @return [type] [description]
	 */
	public function create()
	{
		$types = \App\TestType::orderBy('name')->get();

		return view('tests.create')->with(compact('types'));
	}

	/**
	 * Zapisz nowy test
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function store(Request $request)
	{
		$request->validate([
			'test_type_id' 	=> 'required|integer|exists:test_types,id',
			'identifier'	=> 'required',
		]);

		$test = \Auth::user()->tests()->create($request->all());

		$qids = Question::where('test_type_id', $test->test_type_id)->get()->pluck('id');

		foreach($qids as $id){
			Answer::create([
				'question_id'	=> $id, 
				'test_id'		=> $test->id,
			]);
		}

		return redirect('/tests/'.$test->id);
	}

	/**
	 * Pokaż widok testu
	 * @param  Test   $test [description]
	 * @return [type]       [description]
	 */
	public function show(Test $test)
	{
		if(Gate::denies('test-view', $test)){
			return back()->withErrors(['Nie masz uprawnień by przeglądać ten arkusz.']);
		}

		return view('tests.show')->with(compact('test'));
	}

	/**
	 * Zwraca wynik testu
	 * @param  Test   $test [description]
	 * @return [type]       [description]
	 */
	public function result(Test $test)
	{
		if(Gate::denies('test-view', $test)){
			return back()->withErrors(['Nie masz uprawnień by przeglądać ten arkusz.']);
		}

		if($test->isCompleted()){

			$results = (new ASRSResult($test))->results();
			return view('tests.result')
				->with(compact('test','results'));
		}

		return back();
	}

	/**
	 * Zakończ test
	 * @param  Test   $test [description]
	 * @return [type]       [description]
	 */
	public function finish(Test $test)
	{
		if(Gate::denies('test-edit', $test)){
			return back()->withErrors(['Nie masz uprawnień by przeglądać ten arkusz.']);
		}

		if(!$test->isCompleted()){
			return back()->withErrors(['Kwestionariusz nie został wypełniony w całości']);
		}

		if(!$test->isFinished()){
			$test->update([
				'finished_at' => \Carbon\Carbon::now()
			]);
		}

		return redirect('/tests/'.$test->id.'/result');
	}

	/**
	 * Delete resource
	 * @param  Test   $test [description]
	 * @return [type]       [description]
	 */
	public function delete(Test $test)
	{
		if(Gate::denies('test-edit', $test)){
			return back()->withErrors(['Nie masz uprawnień by edytować ten arkusz.']);
		}

		$test->answers()->delete();

		$test->delete();

		return redirect('/tests');
	}

	/**
	 * Returns data for datatables
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
    public function getData(Request $request)
    {
        return DataTables::of(Test::forUser(\Auth::user()))
            ->addColumn('options', function(Test $test){
            	return view('tests.partials.options')
            		->with(compact('test'));
            })
            ->addColumn('completed', function(Test $test){
            	if($test->isCompleted())
            		return "<i class='fas fa-check'></i>";
            	else
            		return "<i class='fas fa-times'></i>";
            })
            ->rawColumns(['options', 'completed'])
            ->make(true);
    }

    /**
     * Zwraca pdf
     * Tymczasowo przekierowuje do strony do druku
     * @param  Test   $test [description]
     * @return [type]       [description]
     */
    public function getPdf(Test $test)
    {
		$results = (new ASRSResult($test))->results();

    	$pdf = \PDF::loadView('tests.print', compact('test', 'results'));

    	return view('tests.print')->with(compact('test', 'results'));

    	return $pdf->download('wyniki.pdf');
    }
}
