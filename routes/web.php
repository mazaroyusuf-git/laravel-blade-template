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


//setelah membuat view seperti pada contoh di chapter 85, kita perlu merendernya, kita bisa lewat Route atau Controller
//disini contoh lewat Route, kita bisa gunakan method view(uri, template, array) pada class Route, array nya berisi data
//yang akan ditampilkan di template
Route::get("/hello", function () {
    return view("hello", ["name" => "laravel"]);
});

//saat project sudah cukup besar kadang kita ingin memanage template dengan folder yang berbeda untuk mengakses template di
//dalam folder kita bisa gunakan titik sebagai tanda, misal nya: hello.world , artinya kita mengakses template world yang
//ada dalam folder hello
Route::get("/world", function () {
    return view("hello.world", ["name" => "hello world"]);
});

