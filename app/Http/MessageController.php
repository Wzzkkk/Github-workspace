<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message; // 引入刚才建的模型

class MessageController extends Controller
{
    // 1. 显示留言板页面
    public function index()
    {
        // 获取所有留言，最新的排前面
        $messages = Message::latest()->get();
        return view('guestbook', ['messages' => $messages]);
    }

    // 2. 处理提交的留言
    public function store(Request $request)
    {
        // 验证输入：名字必填且不超50字，内容必填
        $request->validate([
            'name' => 'required|max:50',
            'content' => 'required|max:200',
        ]);

        // 存入数据库
        Message::create($request->only('name', 'content'));

        // 刷新页面
        return back();
    }
}