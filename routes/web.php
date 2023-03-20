<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Session;

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

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::post('/register',[userController::class, 'register']);
Route::post('/login',[userController::class, 'login']);
Route::get('/',[productController::class, 'index']);
Route::get('/detail/{id}',[productController::class, 'detail']);

Route::post('/add_to_cart',[productController::class, 'addToCart']);
Route::get('/cartlist',[productController::class, 'cartlist']);
Route::get('/removecart/{id}',[productController::class, 'removecart']);
Route::get('/ordernow',[productController::class, 'ordernow']);
Route::post('/orderplace',[productController::class, 'orderplace']);
Route::get('/myorders',[productController::class, 'myorders']);

