<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    
	protected $fillable = [ 'identifier', 'user_id', 'finished_at', 'test_type_id' ];

	protected $casts = [
		'finished_at'	=> 'datetime',
	];

	protected $with = ['answers', 'type'];

	/**
	 * Użytkownik, który utworzył ten test
	 * @return [type] [description]
	 */
	public function user(){
		return $this->belongsTo(\App\User::class);
	}

	/**
	 * Jakiego typu to test?
	 * @return [type] [description]
	 */
	public function type(){
		return $this->belongsTo(\App\TestType::class, 'test_type_id');
	}

	/**
	 * Odpowiedzi przypisane do tego testu
	 * @return [type] [description]
	 */
	public function answers()
	{
		return $this->hasMany(\App\Answer::class);
	}

	/**
	 * Czy wszystkie odpowiedzi są uzupełnione?
	 * @return boolean [description]
	 */
	public function isCompleted()
	{
		return $this->answers()
			->whereNull('answer')
			->count() == 0;
	}

	/**
	 * Czy test jest ukończony
	 * @return boolean [description]
	 */
	public function isFinished()
	{
		return !is_null($this->finished_at);
	}

	public function scopeForUser($query, User $user)
	{
		$query->where('user_id', '=', $user->id);
	}
}
