<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/bar-chart', [ChartController::class, 'barChart']);
 

