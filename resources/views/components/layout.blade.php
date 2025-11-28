<!DOCTYPE HTML>
<html>
<head>
    <title>{{ $title ?? 'Wzzkkk 的个人网站' }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="/assets/css/noscript.css" /></noscript>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        .contact-method { display: flex !important; flex-direction: row !important; align-items: flex-start !important; padding-left: 0 !important; margin-bottom: 40px !important; border: none !important; }
        .contact-method .icon { position: static !important; margin-right: 20px !important; width: 48px !important; height: 48px !important; line-height: 48px !important; text-align: center !important; font-size: 1.2em !important; background-color: #ffffff !important; color: #242943 !important; border-radius: 50% !important; flex-shrink: 0 !important; margin-top: 5px !important; }
        .contact-method > div { text-align: left !important; flex: 1 !important; }
        .contact-method h3 { margin-bottom: 5px !important; color: #ffffff !important; }
        .contact-method a, .contact-method span { color: rgba(255,255,255,0.7) !important; display: block !important; line-height: 1.5 !important; }
        .contact-method .icons { margin: 15px 0 0 0 !important; padding: 0 !important; list-style: none !important; display: flex !important; flex-wrap: wrap !important; gap: 10px !important; }
        .contact-method .icons li { padding: 0 !important; margin: 0 !important; border: none !important; }
        .contact-method .icons .icon { width: 32px !important; height: 32px !important; line-height: 32px !important; font-size: 0.9em !important; margin: 0 !important; margin-top: 0 !important; }
        .contact-method .icons .label { display: none !important; }
    </style>
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