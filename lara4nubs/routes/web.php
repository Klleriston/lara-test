<?php

use App\Http\Controllers\Userscontroller;
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

Route::get('/user/ROOT', [Userscontroller::class, 'getAdminProfile'])-> where (name: 'username', expression: '[A-Z]+');
Route::get('/user/{username}', [Userscontroller::class, 'getProfile'])-> name(name: 'user-profile');
Route::get('/test', [Userscontroller::class,'test'] );

