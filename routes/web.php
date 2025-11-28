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

use App\Http\Controllers\DeployController;

// 自动化部署接口
Route::post('/deploy-webhook', [DeployController::class, 'deploy']);



// 管理员登录页面
Route::get('/login', [MessageController::class, 'showLogin']);
// 提交登录密码
Route::post('/login', [MessageController::class, 'verifyLogin']);
// 退出登录
Route::get('/logout', [MessageController::class, 'logout']);

// 删除留言 (注意这里用了 {id} 来代表要删哪一条)
Route::delete('/guestbook/{id}', [MessageController::class, 'destroy']);

// 项目经历页面
Route::get('/projects', function () {
    return view('projects');
});

// 音乐播放器页面
Route::get('/music', function () {
    return view('music');
});



















