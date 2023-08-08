<?php

use App\Http\Controllers\CustomAuthController;
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

//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('/',[CustomAuthController::class,'home']);
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login',[CustomAuthController::class,'index'])->name('login');
Route::post('postlogin',[CustomAuthController::class,'login'])->name('postlogin');
Route::get('signup',[CustomAuthController::class,'signup'])->name('register_user');
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');