<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/Post', function () {
    return view('Post');
});
Route::redirect('/', 'post');

Route::resource('Post',PostController::class);


