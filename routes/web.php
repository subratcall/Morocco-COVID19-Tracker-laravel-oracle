<?php

use App\User;
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
//abe.legros@example.net
Route::get('/', function () {

    $users = User::all();

    return view('welcome')->with('users',$users);

});
// admin login route : ******/admin/login
Route::group(['prefix' => 'admin'], function () {

    Auth::routes();

});

Route::get('/home', 'HomeController@index')->name('home');
