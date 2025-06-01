<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BabyController;
use Illuminate\Support\Facades\Artisan;

Route::get('/', [BabyController::class, 'index'])->name('bayi.index');
Route::resource('bayi', BabyController::class);
Route::post('/baby/store', [BabyController::class, 'store'])->name('baby.store');

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return 'Storage link has been created!';
});
