<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    // 显示留言板
    public function index()
    {
        $messages = Message::latest()->get();
        return view('guestbook', ['messages' => $messages]);
    }

    // 保存留言
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'content' => 'required|max:200',
        ]);
        Message::create($request->only('name', 'content'));
        return back();
    }

    // === 下面是新增的管理员功能 ===

    // 1. 显示登录页面
    public function showLogin()
    {
        return view('login');
    }

    // 2. 验证密码
    public function verifyLogin(Request $request)
    {
        // 比对输入的密码和服务器 .env 里的密码
        if ($request->password === env('ADMIN_PASSWORD')) {
            // 密码对，记录到 Session 里
            session(['is_admin' => true]);
            return redirect('/guestbook');
        }
        return back()->withErrors(['msg' => '密码错误']);
    }

    // 3. 退出登录
    public function logout()
    {
        session()->forget('is_admin');
        return redirect('/guestbook');
    }

    // 4. 删除留言
    public function destroy($id)
    {
        // 安全检查：如果不是管理员，禁止删除
        if (!session('is_admin')) {
            abort(403, '你不是管理员！');
        }

        Message::destroy($id);
        return back();
    }
}