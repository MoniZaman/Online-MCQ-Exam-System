<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\QuestionModel;
use Illuminate\Support\Facades\Input;

class QuestionController extends Controller
{

    public function store(Request $request)
    {           

    	$queston=new QuestionModel();
        $queston->question=$request->question;
        $queston->subject_id=$request->id;
        $queston->option_1=$request->option_1;
        $queston->option_2=$request->option_2;
        $queston->option_3=$request->option_3;
        $queston->option_4=$request->option_4;
        $queston->answer=$request->answer;
        $queston->save();   
         return redirect('/manage_question/'.$queston->subject_id)->with('question');
    
    }

    public function update(Request $request){
        $id=$request->input('id');    
        $queston=QuestionModel::find($id);
        $queston->question=$request->question;
        $queston->subject_id=$request->id;
        $queston->option_1=$request->option_1;
        $queston->option_2=$request->option_2;
        $queston->option_3=$request->option_3;
        $queston->option_4=$request->option_4;
        $queston->answer=$request->answer;
        $queston->save();   
      return redirect('/manage_question/'.$queston->subject_id);
    }

    public function delete_question($id){
        QuestionModel::find($id)->delete();
        return redirect('/manage_question');
    }

     


   
}
