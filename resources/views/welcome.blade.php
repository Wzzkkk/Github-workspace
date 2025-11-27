<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>ZWWKKK</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="/assets/css/noscript.css" /></noscript>
	<style>
        /* 1. 强制让联系方式变成弹性盒子，横向排列 */
        .contact-method {
            display: flex !important;
            flex-direction: row !important;
            align-items: center !important; /* 垂直居中 */
            padding-left: 0 !important;
            margin-bottom: 30px !important;
            border: none !important;
        }

        /* 2. 强制把图标“按”在原地，不让它乱飘 */
        .contact-method .icon {
            position: static !important; /* 关键：取消绝对定位 */
            margin-right: 20px !important; /* 给右边留空隙 */
            
            width: 48px !important;
            height: 48px !important;
            line-height: 48px !important;
            text-align: center !important;
            font-size: 1.2em !important;
            
            background-color: #ffffff !important;
            color: #242943 !important;
            border-radius: 50% !important;
            flex-shrink: 0 !important; /* 禁止被压扁 */
            
            /* 重置可能残留的定位属性 */
            left: auto !important;
            top: auto !important;
        }

        /* 3. 整理文字区域 */
        .contact-method > div {
            text-align: left !important;
            flex: 1 !important;
        }
        
        .contact-method h3 {
            margin-bottom: 5px !important;
            color: #ffffff !important;
        }
        
        .contact-method a, .contact-method span {
            color: rgba(255,255,255,0.7) !important;
            display: block !important;
            line-height: 1.5 !important;
        }
        /* ✅ 新增：让搬家后的图标排版更漂亮 */
        .contact-method .icons {
            margin-top: 20px !important;  /* 和上面文字拉开距离 */
            padding-left: 0 !important;   /* 去掉左边距 */
            list-style: none !important;  /* 去掉前面的点 */
            display: flex !important;     /* 横向排列 */
            flex-wrap: wrap !important;   /* 自动换行 */
            gap: 10px !important;         /* 图标之间的间距 */
        }
        
        .contact-method .icons li {
            padding: 0 !important;
            border: none !important;
        }
        
        /* 稍微缩小一点图标，适应紧凑布局 */
        .contact-method .icons .icon {
            width: 36px !important;
            height: 36px !important;
            line-height: 36px !important;
            font-size: 1em !important;
            margin-right: 0 !important; /* 由 gap 控制间距 */
        }
    </style>
    </head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="index.html" class="logo"><strong>Forty</strong> <span>by HTML5 UP</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.html">Home</a></li>
							<li><a href="landing.html">Landing</a></li>
							<li><a href="generic.html">Generic</a></li>
							<li><a href="elements.html">Elements</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="#" class="button primary fit">Get Started</a></li>
							<li><a href="#" class="button fit">Log In</a></li>
						</ul>
					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>hello, 我是 Wzzkkk</h1>
							</header>
							<div class="content">
								<p>全栈开发者 / Laravel 爱好者<br />
                                这是我的个人网站，运行在 Ubuntu VPS 上。</p>
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">开始探索</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="/images/pic01.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">关于我</a></h3>
										<p>了解我的技术栈与个人经历</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="/images/pic02.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">留言板</a></h3>
										<p>欢迎留下你的足迹</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="/images/pic03.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Magna</a></h3>
										<p>Lorem etiam nullam</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="/images/pic04.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Ipsum</a></h3>
										<p>Nisl sed aliquam</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="/images/pic05.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Consequat</a></h3>
										<p>Ipsum dolor sit amet</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="/images/pic06.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Etiam</a></h3>
										<p>Feugiat amet tempus</p>
									</header>
								</article>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="inner">
									<header class="major">
										<h2>Massa libero</h2>
									</header>
									<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet pharetra et feugiat tempus.</p>
									<ul class="actions">
										<li><a href="landing.html" class="button next">Get Started</a></li>
									</ul>
								</div>
							</section>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="/guestbook">
                                    @csrf
                                    <div class="fields">
                                        <div class="field">
                                            <label for="name">你的名字</label>
                                            <input type="text" name="name" id="name" required />
                                        </div>
                                    <div class="field">
                                        <label for="message">你想说的话</label>
                                        <textarea name="content" id="message" rows="6" required></textarea>
                                    </div>
                                    </div>
                                    <ul class="actions">
                                    <li><input type="submit" value="提交留言" class="primary" /></li>
                                    <li><input type="reset" value="清空" /></li>
                                    </ul>
                                </form>         
							</section>
							<section class="split">
                            <section>
                                <div class="contact-method">
                                    <span class="icon solid alt fa-envelope"></span>
                                    <div>
                                        <h3>Email</h3>
                                        <a href="mailto:admin@zwk369.me">admin@zwk369.me</a>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <div class="contact-method">
                                    <span class="icon solid alt fa-home"></span>
                                    <div>
                                        <h3>关于本站</h3>
                                        <span>这是一个使用 Laravel + Forty 模板<br />
                                        构建的全栈个人网站。</span>
                                        <ul class="icons">
								<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
							</ul>
                                    </div>
                                </div>
                            </section>
                        </section>
				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="/assets/js/jquery.min.js"></script>
			<script src="/assets/js/jquery.scrolly.min.js"></script>
			<script src="/assets/js/jquery.scrollex.min.js"></script>
			<script src="/assets/js/browser.min.js"></script>
			<script src="/assets/js/breakpoints.min.js"></script>
			<script src="/assets/js/util.js"></script>
			<script src="/assets/js/main.js"></script>

	</body>
</html>