<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/.com','Ahmed_controller@Action');

// Route::get('/.com1','Ahmed_controller@Action2');

/*
1- Creat Route in begginer to user to use URL
2- define new controller
3- define new view
4- define $poste to array becouse theris not any database

*/



Route::get('/posts', 'PostController@Index')->name('posts.index');

Route::get('/posts/create', 'PostController@Create')->name('posts.create');

Route::post('/posts', 'PostController@Store')->name('posts.store');

Route::get('/posts/{Post}/edit', 'PostController@Edit')->name('posts.edit');

Route::put('/posts/{Post}', 'PostController@Update')->name('posts.update');

Route::delete('/posts/{Post}','PostController@Destory')->name('posts.destory');

Route::get('/posts/{Post}', 'PostController@Show')->name('posts.show');

// to open or reload or request any data
Route::get('test', function () {
    return '<form method="POST">
                <input type="hidden" name="_token" value="'.csrf_token().'" />   
                <input type="text" name="foo" />
                <input type="submit" value="send">
                <input type="hidden" name="_method" value="delete" />
           </form>
           ';
});

// to send data from form to database
Route::post('test', function() {
    return "You Are Welcome In This Page ".request('foo');
});

Route::put('test', function() {
    return "You Are Welcome In This Page ".request('foo');
});
Route::delete('test', function() {
    return "You Are Welcome In This Page ".request('foo');
});

Route::get('user/{id?}/{username?}',function($id =null,$username=null) {
    return "You Are Welcome In Theis Page id => ".$id." | UserName =>".$username;
})->where(['id' => '[0-9]+', 'username'=>'[A-Za-z]+']);



Route::resource('users','ahmedcontroller');
// submit the form to URL
// stor data in db
// Make a redirection to /post

 
