<?php 

namespace App\Resulters;

use App\Question;
use App\Test;
use App\Resulters\RSKResulter;

class ASRSResult{
	
	protected $test;

	public function __construct(Test $test){
		$this->test = $test;
		$this->test->load('answers');
	}

	// numery pytań zliczane dla RSK
	protected $rsk = [ 1,3,4,5,7,13,14,15,16,17,18,19,21,22,24,25,28,29,30,32,33,35,36,37,38,40,43,44,49,50,51,52,54,55,57,61,62,63,67];

	// NUmery pytań zliczane dla NZ
	protected $nz = [2,8,9,10,11,12,20,26,27,39,41,42,45,46,47,48,53,56,60,64,65,69,70];

	protected $dsm = [1,3,4,5,8,9,10,11,13,14,16,18,19,20,21,26,28,29,38,39,40,41,42,43,47,48,50,51,53,54,56,61,64,65,70];

	protected $rr = [4,15,24,30,40,49,51,52,61];

	protected $rd = [21,23,31,33,44];

	protected $wse = [1,3,5,13,14,16,19,36,38,43,50,54];

	protected $nj = [6,22,42,53,59,70];

	protected $st = [11,39,47,64,65,68];

	protected $sz = [8,9,10,20,27,48,56,60];

	protected $ws = [2,12,45,46,66,69];

	protected $us = [17,25,32,34,37,55,57,58,62,63];

	protected $keys = [
		'rsk', 'nz', 'dsm', 'rr', 'rd', 'wse', 'nj', 'st', 'sz', 'ws','us' 
	];

	/**
	 * Surowe sumy
	 * @return [type] [description]
	 */
	public function raw(){
		$sums = [];

		foreach ($this->keys as $key) {
			$sums[$key] = $this->getRawSum($key);
		}
		return $sums;
	}

	/**
	 * Wyniki jako obiekty
	 * @return [type] [description]
	 */
	public function results(){
		$results = [];

		foreach ($this->keys as $key) {
			$class = '\App\Resulters\\' . strtoupper($key) . 'Resulter';
			
			$raw = $this->getRawSum($key);

			$results[$key] = new $class($raw);
		}

		$results['wo'] = new WOResulter($results['rsk']->ten() + $results['nz']->ten());

		return $results;
	}

	/**
	 * Suma surowa dla określonego parametru
	 * @param  [type] $key [description]
	 * @return [type]      [description]
	 */
	public function getRawSum($key){
		$ids = $this->$key;
		
		return $this->test->answers->filter(function($answer) use($ids){
			return in_array($answer->question->number, $ids);
		})->sum('value');
	}

}