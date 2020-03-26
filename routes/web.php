<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes. This is going to be "routes.php" file.
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {

//     return view('welcome');

// });

// Route::get('/about', function () {

//     return "this is about page";

// });

// Route::get('/contact', function () {

//     return "this is contact page";

// });

// Route::get('/post/{id}/{name}', function($id, $name){
//     return "this is post number ".$id." ".$name;
// });

// Route::get('admin/posts/example', array('as'=>'admin.home' ,function(){
//     $url = route('admin.home');
//     return "this url is ".$url;
// }));


//Route::get('/post/{id}', 'PostsController@index');

// Route::resource('posts', 'PostsController');

// Route::get('/', function(){
//   return 'this is going to be the homepage. Not xampp dashboard page.';
// });

// Route::get('/contact', 'PostsController@contact');

// Route::get('post/{id}/{name}/{password}', 'PostsController@show_post');


// use Illuminate\Support\Facades\DB;

// Route::get('/insert', function(){

//   DB::insert('insert into posts(title, content) value(?, ?)', ['PHP with laravel', 'laravel is interesting framework']);

// });



//database raw sql queries

// Route::get('/read', function(){
//   $results = DB::select('select * from posts where id = ?', [1]);

//   return var_dump($results);

//   // foreach($results as $post){
//   //   return $post->title;
//   // }
// });

// Route::get('/update', function(){

//   $updated = DB::update('update posts set title = "update title" where id = ?', [1]);

//   return $updated;

// });

// Route::get('/delete', function(){
//   $deleted = DB::delete('delete from posts where id = ?', [1]);
//   return $deleted;
// });;



//ELOQUENT