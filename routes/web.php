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

Route::get('/view-cart', function () {
    return view('viewcart');
})->name('view-cart');
 

Route::get('/signup', [projectcontroller::class, 'signup'])->name('signup');
Route::get('/login', [projectcontroller::class, 'login'])->name('login');
Route::get('/add', [productcontroller::class, 'addview'])->name('add');
Route::get('/view', [productcontroller::class, 'view'])->name('view');
