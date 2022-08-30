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
Route::get('/f', function () {
    return view('f1');
});
Route::get('/oop', function () {
    return view('oop');
});
Route::get('/admin_1', function () {
    return view('admin1.index');
});
Route::get('/admin_2', function () {
    return view('admin1.admin2.index');
});
Route::get('/abc', function () {
    return 'Hello World';
});
Route::get('/abc/{name}', function ($name) {
    
    $a="Hello $name";
    return $a;
});
Route::get('/abc/{name}/{num}', function ($name,$num) {
    
    $a="Hello $name<br>$num";
    return $a;
});
Route::get('/abc/{name}/{num}/{str}', function ($name,$num,$str) {
    
    $a="Hello $name<br>$num<br>招呼語:$str";
    return $a;
});
