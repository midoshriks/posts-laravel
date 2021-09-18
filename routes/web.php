<?php

use App\Http\Controllers\pagesController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

// public $posts;
// $posts = Post::all();

// public function __construct($posts){
    // $posts = Post::all();
// }
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//  @test route midoshriks
/*
Make Frist route
Route::get('/user', function () {
    return view('user.index');
});

Route::get('/users/{id}/{name}', function( $name, $id ){
    return 'This is  '.$name .' with an id of '.$id;
});

Route::get('/about', function(){
    return view('pages.about');
});
*/

// Route::get('/', [pagesController::class, 'index']);
// Route::get('/about', [pagesController::class, 'about']);
//Route::get('/services', [pagesController::class, 'services']);


Route::get('/','App\Http\Controllers\pagesController@index');
Route::get('/about','App\Http\Controllers\pagesController@about');
Route::get('/services','App\Http\Controllers\pagesController@services');

Route::resource('posts','App\Http\Controllers\PostsController');

Route::resource('student','App\Http\Controllers\StudentController');

// function send mail
Route::get('/send-mail/{id}', function(){
    $details = [
        'title' => 'Mail From Ecommerce Media',
        'body' => 'this is from testing email using stmp',
        $posts = Post::all(),
        // $email = Post::where('id', $posts->email)->select("id", "email")->first(),
        // dd($user->email),
    ];
    \Mail::to('Midoshriks36@gmail.com')->send(new \App\Mail\TestMail($details));
    echo 'Email has been sent!';
});


Auth::routes();

Route::get('/dashbord', [App\Http\Controllers\DashboardController::class, 'index']);
// Route::get('/dashbord', 'DashboardController@index');
