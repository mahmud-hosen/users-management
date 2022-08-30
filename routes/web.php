<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/user', function () {
    $email = Auth::id();
    dd($email);
});

Route::get('/', function () {
    return view('employee');
});
Route::get('/','EmployeeController@index')->name('index');

 //............................ Excel File Import/export ...............
 
//  Route::get('/excelFile', function () {
//    return view('Excel.file');  
//  });

 Route::get('/excelFile','StudentController@index')->name('index');
 Route::post('/excelImport','StudentController@import')->name('import');
 Route::get('/excelExport','StudentController@export')->name('export');
