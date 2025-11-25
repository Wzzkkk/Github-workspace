<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});


use App\Http\Controllers\MessageController; // 引入控制器

// 留言板页面
Route::get('/guestbook', [MessageController::class, 'index']);
// 提交留言的动作
Route::post('/guestbook', [MessageController::class, 'store']);

