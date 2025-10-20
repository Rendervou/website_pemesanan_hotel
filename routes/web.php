<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

// Halaman utama
Route::get('/', [HotelController::class, 'index'])->name('home');

// Menu navigasi
Route::get('/produk', [HotelController::class, 'products'])->name('products');
Route::get('/harga', [HotelController::class, 'prices'])->name('prices');
Route::get('/tentang-kami', [HotelController::class, 'about'])->name('about');

// Pemesanan
Route::get('/pesan-kamar', [HotelController::class, 'bookingForm'])->name('booking.form');
Route::post('/pesan-kamar', [HotelController::class, 'store'])->name('booking.store');
Route::get('/booking-success/{id}', [HotelController::class, 'success'])->name('booking.success');

// Daftar pemesanan
Route::get('/daftar-pemesanan', [HotelController::class, 'list'])->name('booking.list');