
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('test');
});

Route::get('/home', function () {
    return view('home');
});

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
