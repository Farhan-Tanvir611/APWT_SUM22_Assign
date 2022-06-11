<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can create web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[PublicController::class,'welcome'])->name('welcome');
// Route::get('/create',function(){
//     return view('public.registration');
// })->name('registration');

Route::get('/create',[PublicController::class,'create'])->name('public.create');
Route::post('/create',[PublicController::class,'createAction'])->name('public.create.submit');
Route::get('/login',[PublicController::class,'login'])->name('public.login');
Route::post('/login',[PublicController::class,'loginAction'])->name('public.login.action');
Route::get('/dashboard',[PublicController::class,'dashboard'])->name('public.dashboard');
Route::get('/public/details/{id}',[PublicController::class,'details'])->name('public.details');