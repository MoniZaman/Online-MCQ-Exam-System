<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CategoryModel;
use Illuminate\Support\Facades\Input;
class CategoryController extends Controller
{	




    public function store(Request $request)
    {           

    	$category=new CategoryModel();
    	$this->validate($request, [
            'category_name' => 'required'
        ]);
        $category->category_name=$request->category_name;
        $active=Input::has('active') ?  true : false;
        $category->status=$active;
        $category->save();
        return redirect('/manage_category');       
    }
    public function show(Request $request){
    	$category=CategoryModel::all();
    	return view('admin.manage_category',compact('category','uri'));
    	
    }

    public function show_again(Request $request){
    	$category=CategoryModel::all();
    	return view('admin.add_subject',compact('category'));
    	
    }

    public function edit_category($id)
    {   
        $category=CategoryModel::find($id)->where('id',$id)->first();    
        return view('admin.edit_category',compact('category')); 
    }

    public function update_category(Request $request)
    {   
      
      $category=new CategoryModel();
      $id=$request->input('id');
      
      $category=CategoryModel::find($id);
        $category->category_name=$request->category_name;
        $active=Input::has('active') ?  true : false;
        $category->status=$active;
        $category->save();
      return redirect('/manage_category');
    }
    public function delete_category($id)
    {
        CategoryModel::find($id)->delete();
        return redirect('/manage_category');
    }


}
