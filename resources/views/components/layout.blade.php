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
        /* 1. 修复：底部“联系方式” (Email/About) 布局 */
        .contact-method {
            display: flex !important;           /* 强制使用弹性布局 */
            flex-direction: row !important;     /* 强制横向排列 */
            align-items: flex-start !important; /* 顶部对齐 */
            margin-bottom: 40px !important;     /* 增加间距 */
            padding-left: 0 !important;         /* 去除左边距 */
            border: none !important;            /* 去除边框 */
        }

        /* 2. 重塑左侧图标 (白色圆圈) */
        .contact-method .icon {
            position: static !important;        /* 核心：取消绝对定位 */
            width: 48px !important;
            height: 48px !important;
            line-height: 48px !important;
            text-align: center !important;
            font-size: 1.2em !important;
            margin-right: 20px !important;      /* 与右侧文字的距离 */
            margin-top: 5px !important;         /* 微调垂直位置 */
            background-color: #ffffff !important;
            color: #242943 !important;
            border-radius: 50% !important;
            flex-shrink: 0 !important;          /* 防止挤压 */
        }

        /* 3. 修复右侧文字区域 */
        .contact-method > div {
            text-align: left !important;
            flex: 1 !important;
        }
        
        .contact-method h3 {
            margin-bottom: 5px !important;
            color: #ffffff !important;
        }
        
        .contact-method a, 
        .contact-method span {
            color: rgba(255,255,255,0.7) !important;
            display: block !important;
            line-height: 1.5 !important;
        }

        /* 4. ✅ 修复：独立的社交图标容器样式 (无分割线版) */
        .social-wrapper {
            margin-top: 40px !important;    /* 与上面的文字拉开距离 */
            padding-top: 0 !important;
            border-top: none !important;    /* ❌ 删掉分割线 */
            width: 100% !important;
        }

        .social-wrapper .icons {
            display: flex !important;
            flex-wrap: wrap !important;
            gap: 15px !important;
            padding: 0 !important;
            margin: 0 !important;
            list-style: none !important;
        }

        .social-wrapper .icon {
            width: 36px !important;
            height: 36px !important;
            line-height: 36px !important;
            text-align: center !important;
            font-size: 1em !important;
            margin: 0 !important;
            border-bottom: none !important;
        }
        
        .social-wrapper .label { display: none !important; }

        /* 5. 修复导航栏 */
        #menu ul.links { list-style: none !important; padding: 0 !important; }
        #menu ul.links li { border-top: 1px solid rgba(255,255,255,0.1) !important; padding: 0 !important; }
        #menu ul.links li a { display: block !important; padding: 1em 0 !important; border: none !important; }
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