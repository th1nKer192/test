<?php

use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dang-nhap', [MasterController::class, 'dangNhap']);
Route::get('/dang-ky', [MasterController::class, 'dangKy']);
Route::get('/main-menu', [MasterController::class, 'mainMenu']);
Route::get('/home-page', [MasterController::class, 'homePage']);
Route::get('/detail-post', [MasterController::class, 'detailPost']);
Route::get('/cart-page', [MasterController::class, 'cartPage']);
Route::get('/custom-page', [MasterController::class, 'customPage']);
Route::get('/book-list', [MasterController::class, 'bookList']);
