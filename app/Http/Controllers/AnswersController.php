<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;

class AnswersController extends Controller
{
    
	public function __construct(){
		$this->middleware('auth');
	}

	/**
	 * Aktualizuje dane
	 * @param  Answer  $answer  [description]
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function patch(Answer $answer, Request $request){

		$request->validate([
			'answer'	=> 'numeric|min:0|max:4'
		]);
		

		$answer->update([
			'answer' => $request->answer,
			'value'	 => $answer->question->value($request->answer)
		]);

		return $answer->fresh();
	}

}
