<!DOCTYPE HTML>
<html>
<head>
    <title>{{ $title ?? 'Wzzkkk 的个人网站' }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    
    <link rel="stylesheet" href="/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="/assets/css/noscript.css" /></noscript>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="/assets/css/custom.css">
   
</head>
<body class="is-preload">

    <div id="wrapper">

        <header id="header" class="{{ request()->is('/') ? 'alt' : '' }}">
            <a href="/" class="logo"><strong>Wzzkkk</strong> <span>个人主页</span></a>
            <nav>
                <a href="#menu">菜单</a>
            </nav>
        </header>

        <nav id="menu">
            <ul class="links">
                <li><a href="/">首页</a></li>
                <li><a href="/about">关于我</a></li>
                <li><a href="/projects">我的项目</a></li>
                <li><a href="/gallery">我的相册</a></li>
                <li><a href="/music">双声道音乐</a></li>
                <li><a href="/guestbook">留言板</a></li>
            </ul>
            <ul class="actions stacked">
                @if(session('is_admin'))
                    <li><a href="/logout" class="button primary fit">退出登录</a></li>
                @else
                    <li><a href="/login" class="button fit">管理员入口</a></li>
                @endif
            </ul>
        </nav>

        {{ $slot }}

        <footer id="footer">
            <div class="inner">
                <ul class="copyright">
                    <li>&copy; Wzzkkk</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
                </ul>
            </div>
        </footer>

    </div>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/jquery.scrolly.min.js"></script>
    <script src="/assets/js/jquery.scrollex.min.js"></script>
    <script src="/assets/js/browser.min.js"></script>
    <script src="/assets/js/breakpoints.min.js"></script>
    <script src="/assets/js/util.js"></script>
    <script src="/assets/js/main.js"></script>

</body>
</html>
