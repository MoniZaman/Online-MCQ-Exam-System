<?php
use App\SubjectModel;
use App\QuestionModel;
use App\ResultModel;
use App\User;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Route::group(['middleware' => ['admin']], function () {

Route::get('/admin/login','AdminAuth\AuthController@showLoginForm');
Route::post('/admin/login','AdminAuth\AuthController@login');
Route::get('/admin/logout','AdminAuth\AuthController@logout');

    // Registration Routes...
Route::get('admin/register', 'AdminAuth\AuthController@showRegistrationForm');
Route::post('admin/register', 'AdminAuth\AuthController@register');

    // Route::get('/admin', 'AdminController@index');

//}); 


Route::get('/', function () {
    return view('welcome');
});
//For Back End
// Route::get('/admin/home', function () {
//     return view('admin.welcome');
// });

//Admin Panal 
Route::get('/manage_question/{id}', function () {
    return view('admin.manage_question');
});

Route::get('admin', function () {
    return view('admin.welcome');
});

Route::get('/manage_user', function () {
    $user=User::all();
    return view('admin.manage_user',compact('user'));
});

Route::get('/exam_result', function () {
    $users = DB::table('users')
    ->Join('result', 'users.id', '=', 'result.user_id')
    ->select('users.name','users.email', 'result.subject','result.time_taken','result.score','result.created_at')
    ->get();
    return view('admin.exam_result',compact('users'));
    
});

//Admin Panal Main menu list route list

Route::get('/add_category', function () {
    return view('admin.add_category');
});
Route::get('/manage_category', function () {
    return view('admin.manage_category');
});
Route::get('/add_subject', function () {
    return view('admin.add_subject');
});
Route::get('/manage_subject', function () {
    return view('admin.manage_subject');
});



//For Category
Route::post('/admin/categorylist/store','CategoryController@store');
Route::get('/manage_category','CategoryController@show');
Route::get('/add_subject','CategoryController@show_again');


//


//Category Edit Update & Delete
Route::get('/manage_category_edit/{id}','CategoryController@edit_category');
Route::post('/manage_category/','CategoryController@update_category');
Route::get('/manage_category_delete/{id}','CategoryController@delete_category');


//For subject
Route::post('/admin/subjectlist/store','SubjectController@store');
Route::get('/manage_subject','SubjectController@show');

//Front Page Controller data show
//Route::get('/','SubjectController@show_in_home');
//Route::get('/home/start','SubjectController@show_in_start');
// Route::get('/home/start/exam','QuestionController@show');

//Subject Edit Update & Delete
Route::get('/manage_subject_edit/{id}','SubjectController@edit_subject');
Route::post('/manage_subject/','SubjectController@updateSubject');
Route::get('/manage_subject_delete/{id}','SubjectController@deletesubject');

//For Queston
Route::get('/manage_question/{id}','SubjectController@edit_sub_ques');
Route::post('/admin/questionlist/store','QuestionController@store');
Route::get('/manage_question/','QuestionController@show');
Route::get('/delete_question/{id}','QuestionController@delete_question');
Route::post('/update_question/','QuestionController@update');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => ['web']], function () {
    //
});
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', function () {
        return view('front_end.home');
    });
    Route::get('/home/start/{id}', function($id) {
        $subject=SubjectModel::find($id)->where('id',$id)->first();    
        return view('front_end.start',compact('subject'));        
    });

    Route::get('/home/start/exam/{id}', function($id) {
        $subject=SubjectModel::find($id)->where('id',$id)->first();
        $question=QuestionModel::all();
        return view('front_end.exam',compact('subject','question'));        
    });  

    Route::post('/home/start/exam/result','ResultController@result');

    Route::get('/user_all_result/{id}', function($id) {
        $results=\DB::table('result')->where('user_id',$id)->get();
        //dd($results);
        return view('front_end.user_all_result',compact('results'));        
    }); 

    Route::get('/result/{id}', function($id) {
        $result=ResultModel::find($id)->where('id',$id)->first();
        //dd($result);
        return view('front_end.result',compact('result'));        
    });
});
