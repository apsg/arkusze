<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

	protected $fillable = [ 'test_type_id', 'content', 'number', 'is_inverted' ];

	/**
	 * Typ kwestionariusza, do którego należy to pytanie
	 * @return [type] [description]
	 */
	public function type(){
		return $this->belongsTo(\App\TestType::class);
	}


	/**
	 * Oblicz wartość numeryczną w oparciu o odpowiedź
	 * @param  [type] $answer [description]
	 * @return [type]         [description]
	 */
	public function value($answer){

		if(is_null($answer))
			return null;
		
		if($this->is_inverted){
			return 4 - $answer;
		}

		return $answer;
	}

}
