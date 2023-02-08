<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/item/detail/{item:id}', [HomeController::class, 'itemDetails'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'create'])->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login_auth'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/profile/{user:id}', [ProfileController::class, 'index'])->middleware('auth');
Route::post('/profile/update', [ProfileController::class, 'update']);

Route::get('/carts/{user:id}', [CartController::class, 'index'])->middleware('auth');
Route::post('/carts/add', [CartController::class, 'add'])->middleware('auth');
Route::get('/carts/delete/{cart:id}', [CartController::class, 'delete'])->middleware('auth');
Route::post('/carts/purchase', [CartController::class, 'purchase'])->middleware('auth');

Route::get('/manage', [AccountController::class, 'index'])->middleware('admin');
Route::get('/manage/role/{user:id}', [AccountController::class, 'setRole'])->middleware('admin');
Route::post('/manage/role/update', [AccountController::class, 'updateRole'])->middleware('admin');
Route::get('/manage/delete/{user:id}', [AccountController::class, 'deleteAccount'])->middleware('admin');
