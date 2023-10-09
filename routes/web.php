<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayPalContoller;
use App\Http\Controllers\testController;
use App\Http\Controllers\MahnoorController;


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
});


Route::get('test', [testController::class, 'test']);
Route::get('create-transaction', [PayPalContoller::class, 'createTransaction'])->name('createTransaction');
Route::get('process-transaction', [PayPalContoller::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PayPalContoller::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PayPalContoller::class, 'cancelTransaction'])->name('cancelTransaction');




Route::get('/login',[MahnoorController::class,'loginpage']);