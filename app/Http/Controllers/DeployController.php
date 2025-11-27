<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Process\Process;

class DeployController extends Controller
{
    public function deploy(Request $request)
    {
        // 1. 安全检查：验证 GitHub 发来的密码是否正确
        // 我们稍后会在 .env 里设置这个密码 DEPLOY_TOKEN
        $token = $request->header('X-Hub-Signature-256') ?? $request->query('secret');
        
        // 简单验证：如果不想折腾复杂的签名，我们就对比简单的 secret 字符串
        if ($request->query('secret') !== env('DEPLOY_TOKEN', 'wzzkkk_secret_123')) {
            return response()->json(['message' => '密码错误！'], 403);
        }

        // 2. 执行自动部署命令
        // 进入项目目录 -> 拉取代码 -> 强制迁移数据库 -> 清理缓存
        $commands = [
            'cd /var/www/zwk369.me',
            'git pull origin main',
            'php artisan migrate --force',
            'php artisan config:clear',
            'php artisan view:clear',
        ];

        $output = [];
        foreach ($commands as $command) {
            // 这里使用 exec 执行 Linux 命令
            // 2>&1 意思是把错误信息也输出出来，方便调试
            exec($command . ' 2>&1', $output);
        }

        // 3. 记录日志（如果出错了可以去 storage/logs/laravel.log 看）
        Log::info('Auto Deploy Triggered', ['output' => $output]);

        return response()->json([
            'message' => '部署成功！',
            'output' => $output
        ]);
    }
}