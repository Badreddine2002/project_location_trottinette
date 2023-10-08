<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\infoController;
use App\Http\Controllers\AuthController;
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
Route::get('/RegisterForm',[AuthController::class,'register'])->name('register_gmao');
Route::get('/loginForm',[AuthController::class,'login'])->name('login_gmao');
Route::Post('/login',[AuthController::class,'loginCompte'])->name('loginCompte_gmao');
Route::Post('/Register',[AuthController::class,'registerCompte'])->name('registerCompte_gmao');
Route::get('/index',[infoController::class,'index'])->name('index');
Route::get('/create',[infoController::class,'create'])->name('createInfo');
Route::post('/store',[infoController::class,'store'])->name('storeInfo');
Route::get('/edite/{id}', [infoController::class,'edite'])->name('editeInfo');
Route::post('Update/{id}',[infoController::class,'update'])->name('updateInfo');
Route::get('/delete/{id}',[infoController::class,'destroy'])->name('deleteInfo');
