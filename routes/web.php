<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Home routes
Route::get('homepage', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('contact', [\App\Http\Controllers\HomeController::class, 'contactStore'])->name('contact.store');
Route::get('detail/{motor:slug}', [\App\Http\Controllers\HomeController::class, 'detail'])->name('detail');

// Admin dashboard route
Route::get('admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');

// Admin motor resource routes
Route::resource('admin/motor', \App\Http\Controllers\Admin\MotorController::class);
Route::put('admin/motor/update-image/{id}', [\App\Http\Controllers\Admin\MotorController::class, 'updateImage'])->name('admin.motor.updateImage');

Route::get('pesan', [\App\Http\Controllers\Admin\PesanController::class, 'index'])->name('admin.pesan.index');
Route::delete('pesan/{pesan}', [\App\Http\Controllers\Admin\PesanController::class, 'destroy'])->name('admin.pesan.destroy');

Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Auth::routes();

