<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoListController;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
})->name("home");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/videolist', [VideoListController::class, "index"])->name("videolist.index");
Route::get('/userlist', [UserListController::class, "index"])->name("userlist.index");
Route::get("/products", [ProductController::class, "index"])->name('product.index');
Route::get("/add", [ProductController::class, "add"])->name('product.add');
