<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Models\Category;

Route::resource('category', CategoryController::class);
Route::resource('item', ItemController::class);

Route::get('/', function () {
    return view('welcome');
});
