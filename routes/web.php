<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TempatPklController;
use App\Http\Controllers\BidangController;





Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('blog-single', [HomeController::class, 'bsingle'])->name('bsingle');
Route::get('blog', [HomeController::class, 'blog'])->name('blog');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('portfolio-detail', [HomeController::class, 'pordetail'])->name('pordetail');
Route::get('portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('service', [HomeController::class, 'service'])->name('service');
Route::get('testimoni', [HomeController::class, 'testimoni'])->name('testimoni');
Route::get('register',[AuthController::class, 'register'])->name('register');
Route::post('register',[AuthController::class, 'registerproses'])->name('registerproses');
Route::post('tambah-tempat-pkl',[TempatPklController::class, 'tambah'])->name('tambahtempatpkl');
Route::post('tambah-bidang',[BidangController::class, 'tambahBidang'])->name('tambahbidang');

