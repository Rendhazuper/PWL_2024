<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'hello World';
});

Route::get('/world', function (){
    return 'World';
});

Route::get ('/', function () {
    return 'Selamat Datang';
});

Route::get ('/about', function () {
    return 'NIM : 2341720010 <br> Nama : Rendha Putra Rahmadya';
});

Route:: get('/user/{name?}',  function ($name='John'){
    return 'Nama Saya ' .$name;
});

Route::get ('/posts/{post}/comments/{comment}', function ($postId, $commentId){
    return 'Pos ke-'.$postId.' Komentar ke-'.$commentId;
});

Route::get('/articles/{article}', function ($articleId){
    return 'ini artikel ke-' .$articleId;
});

