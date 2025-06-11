<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemilihController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(PemilihController::class)->group(function() {
    Route::get('pemilih', 'index');
});
