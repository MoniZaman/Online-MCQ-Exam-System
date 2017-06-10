<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\QuestionModel;
use App\ResultModel;


class ResultController  extends Controller
{

    public function result(Request  $request){       
        $result=new ResultModel();
       
        $total_question=Input::get('total_question');
        $marks=0;
        for ($i=0; $i <$total_question ; $i++) { 
            $question_answer=Input::get('question_answer_'.$i);
            $user_answer=Input::get('get_answer_0'.$i);
            if($question_answer==$user_answer)
            {
                $marks=$marks+1;
            }
        }    
        $result->subject=$request->subject_name;
        $result->user_id=$request->user_id;
        $result->total_questoin=$total_question;
        $result->correct_answer=$marks;
        $result->time_taken=$request->time_taken;
        $result->score=$marks;
        $result->save();
        return redirect('result/'.$result->id);
    }

   
}
