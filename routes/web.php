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
//root bisa return view , string, funsi dll bisa kompleks pokoknya
// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     //mengirim data ke view
//     $nama = 'Aditia Kusuma';
//     return view('about', ['nama' => $nama]);
// });

// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/mahasiswa', 'MahasiswaController@index');


// Route::get('/students', 'StudentsController@index');
// Route::get('/students/create', 'StudentsController@create');
// Route::get('/students/{student}', 'StudentsController@show');
// //create
// Route::post('/students', 'StudentsController@store');
// //delete
// Route::delete('/students/{student}', 'StudentsController@destroy');
// //edit
// Route::get('/students/{student}/edit', 'StudentsController@edit');
// Route::patch('/students/{student}', 'StudentsController@update');

Route::resource('students', 'StudentsController');