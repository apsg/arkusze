<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestType extends Model
{
       
	protected $fillable = [ 'name' ];

	/**
	 * Pytania przypisane do tego typu kwestionariusza
	 * @return [type] [description]
	 */
	public function questions(){
		return $this->hasMany(\App\Question::class);
	}

}
