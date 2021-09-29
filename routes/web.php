<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;

Route::get('/registration',[RegistrationController::class, 'registration'])->name('registration');
Route::post('/registration',[RegistrationController::class, 'registrationSubmit'])->name('registration');
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/login',[LoginController::class, 'loginAction'])->name('login');
Route::get('/contact',[ContactController::class, 'contact'])->name('contact');
Route::post('/contact',[ContactController::class, 'contactSubmit'])->name('contact');