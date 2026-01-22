<?php

use App\Http\Controllers\PrendaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('prendas.index');
});

Route::resource('/prendas', PrendaController::class);