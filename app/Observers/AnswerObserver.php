<?php

namespace App\Observers;

use App\Answer;

class AnswerObserver{
	
	public function saved(Answer $answer){

		// if($answer->isDirty('value')){
		// 	$answer->update([
		// 		'value' => $answer->question->value($answer->answer)
		// 	]);
		// }
	}
}
