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

// Returns page
Route::get('/test', function () {
    return view('test');
});

// Returns string
Route::get('/string', function () {
    return 'Hello World';
});

// Returns JSON
Route::get('/json', function () {
    return ['foo' => 'bar'];
});

// Return variable. Eg. 127.0.0.1:8000/variable?name=jeff
Route::get('/variable', function () {
    $name = request('name');
    return view('variable', [
        'name' => $name
    ]);
});

// Wildcard route
/*
Route::get('/posts/{post}', function ($post) {
    $posts = [
        'my-first-post' => 'Hello! This is my first blog post',
        'my-second-post' => 'Now I am getting the hang of this blogging thing'
    ];

    if (! array_key_exists($post, $posts)) {
        abort(404, 'Sorry that post was not found');
    }

    return view('post', [
        'post' => $posts[$post]
    ]);
});
*/

// Controller route
Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

