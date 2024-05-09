<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contact;

Route::get('/', function () {
    return view('home');
});

Route::post('/contact/submit', [Contact::class, 'submit'])->name('submit');
