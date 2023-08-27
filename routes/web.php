<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/series', SeriesController::class)
// temos todas as rotas definidas com exceção da show
    ->except(['show']);

