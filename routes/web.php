<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/send-test-email', function () {
    Mail::raw('This is a test email from Laravel SMTP setup.', function ($message) {
        $message->to(['Mdnajmulhasan619@gmail.com', 'shikderplay@gmail.com'])
            ->subject('Laravel SMTP Test');
    });

    return 'Test email sent!';
});

require __DIR__.'/auth.php';
