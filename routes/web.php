<?php

use App\Http\Controllers\Controller;
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
    // return view('welcome', ['name'=>'Khaled', 'age'=>35]);
    // return view('welcome', ['name'=>"<script>alert('TEST')</script>", 'age'=>35]);
    return view('welcome', ['name'=>"<h1>Khaled</h1>", 'age'=>35]);
});

// Basic Route
Route::get('welcome2', function(){
    return 'Hello Laravel';
});

// Controller Route
Route::get('croute', [Controller::class, 'login']);

//Redirect Route
// Route::redirect('welcome2', 'croute');

//Redirect External Route
Route::redirect('welcome2', 'https://www.google.com/');

// View Route
Route::view('vroute', 'student.page');

// View Route with data
// Route::get('vroute', function () {
//     return view('welcome');
// });

// Named Route
Route::redirect('ssdgdgvdkufhlfhe', 'https://www.google.com/')->name('go.to.google');