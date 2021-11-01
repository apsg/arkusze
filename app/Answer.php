<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
       
	protected $fillable = [ 'question_id', 'test_id', 'answer', 'value' ];

	protected $touches = ['test'];

	protected $with = ['question'];

	/**
	 * Do którego pytania to jest odpowiedź?
	 * @return [type] [description]
	 */
	public function question(){
		return $this->belongsTo(\App\Question::class);
	}

	/**
	 * Test, w ramach którego udzielono tej odpowiedzi
	 * @return [type] [description]
	 */
	public function test(){
		return $this->belongsTo(\App\Test::class);
	}

	/**
	 * Mutator dla wartości value
	 * @param  [type] $value [description]
	 * @return [type]        [description]
	 */
	public function getValueAttribute($value){

		if(is_null($this->answer))
			return null;

		if(!is_null($value))
			return $value;

		// $value = $this->question->value($this->answer);
		// $this->update(['value' => $value]);
		return $value;
	}

}
