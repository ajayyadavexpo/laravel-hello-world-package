<?php

use Illuminate\Support\Facades\Route;
use HelloWorld\PostList;
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

Route::get('hello/{title}',function($title){
    $post = new PostList($title);
    dd($post);
});


Route::get('/', function () {
    return view('welcome');
});
