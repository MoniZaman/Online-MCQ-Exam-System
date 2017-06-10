<?php

namespace App\Http\ViewComposer;

use Illuminate\View\View;
use App\SubjectModel;
class ExamSubjectComposer
{
    
    public function compose(View $view)
    {   
        $all_subjects = SubjectModel::all();
        //var_dump($allcategorytype);
        $view->with('all_subjects', $all_subjects);
    }
}