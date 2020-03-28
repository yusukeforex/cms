<?php

use Illuminate\Support\Facades\Route;
use App\Post;
use App\User;

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

//   DB::insert('insert into posts(title, content) value(?, ?)', ['Laravel is cool', 'laravel is interesting framework, period']);

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

// Route::get('/read', function(){
//   $posts = Post::all();

//   foreach($posts as $post){
//     return $post->title;
//   }

// });

// Route::get('/find', function(){
//   $post = Post::find(2);
//   return $post->title;
//   // foreach($posts as $post){
//   //   return $post->title;
//   // }

// });


// Route::get('/findwhere', function(){
//   $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
//   return $posts;
// });


// Route::get('/findmore', function(){
//   // $posts = Post::findOrFail(1);

//   // return $posts;

//   $posts = Post::where('users_count', '<', 50)->firstOrFail();


// });

// Route::get('/basicinsert', function(){
//   $post = new Post;

//   $post->title = 'New Eloquent tile insert';
//   $post->content = 'Wow eloqunet is really cool, look at this content';
//   $post->save();
// });

// Route::get('/basicinsert2', function(){
//   $post = Post::find(2);

//   $post->title = 'New Eloquent tile insert2';
//   $post->content = 'Wow eloqunet is really cool, look at this content2';
//   $post->save();
// });


// Route::get('/create', function(){
//   Post::create(['title'=>'the create method 1', 'content'=>'i am learning alot php 1']);
// });


// Route::get('/update', function(){
//   Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'NEW PHP TITLE', 'content'=>'laravel tsting ']);
// });

// Route::get('/delete', function(){
//   $post = Post::find(16);
//   $post->delete();
// });

// Route::get('/delete2', function(){
//   Post::destroy([4,5]);

// });


// Route::get('/softdelete', function(){
//   Post::find(2)->delete();
// });

// Route::get('/readsoftdelete', function(){
//   // $post = Post::find(1);
//   // return $post;
//   // $post = Post::withTrashed()->where('id', 1)->get();
//   // return $post;
//   // $post = Post::onlyTrashed()->where('is_admin', 0)->get();
//   // return $post;
//   $post = Post::withTrashed()->where('is_admin', 0)->get();
//   return $post;  
// });

// Route::get('/restore', function(){
//   Post::withTrashed()->where('is_admin', 0)->restore();
// });

// Route::get('/forcedelete', function(){
//   Post::onlyTrashed()->where('is_admin',0)->forceDelete();
// });


//REALATIONSHIPS

//ONE TO ONE RELATIONSHIP

// Route::get('/user/{id}/post', function($id){

//   return User::find($id)->post->content;

// });

// Route::get('/post/{id}/user', function($id){
//   return Post::find($id)->user->name;
// });


//ONE TO MANY RELATIONSHIP

// Route::get('/posts/', function(){
//   $user = User::find(1);

//   foreach($user->posts as $post){
//     echo $post->title . "<br>";
//   }
// });


//MANY TO MANY RELATIONSHIPS

// Route::get('/user/{id}/role', function($id){
//   $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
//   return $user;
// });


// ACCESSING THE INTEMIDIATE TABLE / PIVOT

