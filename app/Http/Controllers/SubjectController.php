<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SubjectModel;
use App\QuestionModel;
use App\CategoryModel;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\File;
use View;

class SubjectController extends Controller
{




     public function store(Request $request)
    {           

    	$subject=new SubjectModel();
    	$this->validate($request,[
         'subject'=> 'required',
         'category'=> 'required',
         'duration'=> 'required',
         'sub_active'=> 'required'
        ]);
        
        $subject->subject=$request->subject;
        $subject->category=$request->category;
        $subject->duration=$request->duration;    
        $active=Input::has('sub_active') ?  true : false;
        $subject->status=$active;
        $subject->save();
        return redirect('/manage_subject');       
    }


     public function show(Request $request){
        $subject=SubjectModel::all();
        return view('admin.manage_subject',compact('subject'));
        
    }
    // public function show_in_home(Request $request){
    //     $subject=SubjectModel::all();      
    //     $view=View::make('front_end.home',compact('subject'));
    //     return $view;       
    // }

    //  public function show_in_start(Request $request){
    //     $subject=SubjectModel::all();      
    //     $view=View::make('front_end.start',compact('subject'));
    //     return $view;       
    // }
    





     public function edit_sub_ques($id)
    {   
        $subject=SubjectModel::find($id)->where('id',$id)->first();
        $question=QuestionModel::all();
        return view('admin.manage_question',compact('subject','question'));      
        // return view('admin.manage_question',compact('question'));
    }
    public function edit_subject($id)
    {   
        $subject=SubjectModel::find($id)->where('id',$id)->first();
         $category=CategoryModel::all();
          return view('admin.edit_subject',compact('subject','category')); 
    }

//////////////////For Front Page

    // public function subject_show($id)
    // {   
    //     $subject=SubjectModel::find($id)->where('id',$id)->first();
       
    //     return view('front_end.start',compact('subject')); 
    // }



    public function updateSubject(Request $request)
    {   
      
      $subject=new SubjectModel();
      $id=$request->input('id');
      
      $subject=SubjectModel::find($id);
       $subject->subject=$request->subject;
        $subject->category=$request->category;
        $subject->duration=$request->duration;    
        $active=Input::has('sub_active') ?  true : false;
        $subject->status=$active;
        $subject->save();
      return redirect('/manage_subject');
    }
    public function deletesubject($id)
    {
        SubjectModel::find($id)->delete();
        return redirect('/manage_subject');
    }




    

    
}
