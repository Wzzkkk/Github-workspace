<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>留言板 - Wzzkkk</title>
    <link rel="stylesheet" href="/css/style.css">
    <style>
        .container { max-width: 600px; margin: 50px auto; padding: 20px; }
        .form-card { background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); margin-bottom: 30px; }
        input, textarea { width: 100%; margin-bottom: 15px; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        button { background: #2a5298; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; width: 100%; font-size: 16px; }
        button:hover { background: #1e3c72; }
        .message-item { background: rgba(255,255,255,0.9); padding: 15px; border-radius: 10px; margin-bottom: 15px; border-left: 5px solid #2a5298; }
        .meta { font-size: 12px; color: #888; margin-bottom: 5px; }
        .content { font-size: 15px; color: #333; }
        .back-btn { text-align: center; display: block; margin-top: 20px; color: white; text-decoration: none; opacity: 0.8; }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-card">
            <h2 style="margin-top:0; color:#333;">✍️ 写个留言吧</h2>
            <form action="/guestbook" method="POST">
                @csrf <input type="text" name="name" placeholder="你的名字" required>
                <textarea name="content" rows="3" placeholder="想说点什么..." required></textarea>
                <button type="submit">提交留言</button>
            </form>
        </div>

        <h3 style="color: white; text-align: center;">💬 最新留言</h3>
        @foreach ($messages as $msg)
            <div class="message-item">
                <div class="meta">{{ $msg->name }} · {{ $msg->created_at->diffForHumans() }}</div>
                <div class="content">{{ $msg->content }}</div>
            </div>
        @endforeach

        <a href="/" class="back-btn">← 返回首页</a>
    </div>
</body>
</html>