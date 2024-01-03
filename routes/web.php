<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectcontroller;
use App\Http\Controllers\productcontroller;
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
    return view('index');
});

Route::get('/add/{id}', [productcontroller::class, 'addview'])->name('add');


Route::get('/signup', [projectcontroller::class, 'signupview'])->name('signup');
Route::post('/signup', [projectcontroller::class, 'signup'])->name('signup');

Route::get('/login', [projectcontroller::class, 'loginview'])->name('loginview');
Route::post('/login', [projectcontroller::class, 'login'])->name('login');

Route::get('/search', [productcontroller::class, 'productview'])->name('search');
Route::get('/', [productcontroller::class, 'productview'])->name('productview');
Route::post('/cart/add/{product}', [productcontroller::class, 'add'])->name('cart.add');
Route::get('/cart', [productcontroller::class, 'cartview'])->name('cartview');