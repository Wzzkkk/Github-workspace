<!DOCTYPE HTML>
<html>
<head>
    <title>留言板 - Wzzkkk</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="/assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

    <div id="wrapper">

        <header id="header">
            <a href="/" class="logo"><strong>Wzzkkk</strong> <span>个人主页</span></a>
            <nav>
                <a href="#menu">菜单</a>
            </nav>
        </header>

        <nav id="menu">
            <ul class="links">
                <li><a href="/">首页</a></li>
                <li><a href="/about">关于我</a></li>
                <li><a href="/guestbook">留言板</a></li>
            </ul>
        </nav>

        <div id="main" class="alt">

            <section id="one">
                <div class="inner">
                    <header class="major">
                        <h1>💬 留言板</h1>
                    </header>
                    
                    <div class="row gtr-200">
                        <div class="col-6 col-12-medium">
                            <h3>写下你的想法</h3>
                            <form method="post" action="/guestbook">
                                @csrf
                                <div class="row gtr-uniform">
                                    <div class="col-6 col-12-xsmall">
                                        <input type="text" name="name" id="name" value="" placeholder="你的名字" required />
                                    </div>
                                    <div class="col-12">
                                        <textarea name="content" id="content" placeholder="想说点什么..." rows="6" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <ul class="actions">
                                            <li><input type="submit" value="提交留言" class="primary" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="col-6 col-12-medium">
                            <h3>最新留言</h3>
                            <div class="table-wrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>名字</th>
                                            <th>内容</th>
                                            <th>时间</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $msg)
                                        <tr>
                                            <td>{{ $msg->name }}</td>
                                            <td>{{ $msg->content }}</td>
                                            <td style="font-size: 0.8em; color: #888;">{{ $msg->created_at->diffForHumans() }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

        </div>

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