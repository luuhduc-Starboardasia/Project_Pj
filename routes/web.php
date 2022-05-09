<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\T_A_Controller;
use Illuminate\Http\Request;
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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/menu', function () {
    return view('menu.menu');
});

Route::get('/menu-salary', function () {
    return view('menu.menu-salary');
});

Route::get('/salary-1','T_A_Controller@getlist');

Route::get('/salary-2', function () {
    return view('select.salary-2');
});

Route::get('/infor-salary-1', function () {
    return view('infor-salary.infor-salary-1');
});

Route::get('/infor-salary-2', function () {
    return view('infor-salary.infor-salary-2');
});



