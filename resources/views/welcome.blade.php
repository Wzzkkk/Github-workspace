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
        <link rel="shortcut icon" type="image/jpg" href="/favicon.jpg">
		<noscript><link rel="stylesheet" href="/assets/css/noscript.css" /></noscript>
	<style>
        /* 1. 布局修复：顶部对齐 */
        .contact-method {
            display: flex !important;
            flex-direction: row !important;
            align-items: flex-start !important; /* ✅ 关键修复：让房子图标停在顶部，不要居中挡路 */
            padding-left: 0 !important;
            margin-bottom: 40px !important;
            border: none !important;
        }

        /* 2. 左侧大图标 (房子/信封) */
        .contact-method .icon {
            position: static !important;
            margin-right: 20px !important;
            
            width: 48px !important;
            height: 48px !important;
            line-height: 48px !important;
            text-align: center !important;
            font-size: 1.2em !important;
            
            background-color: #ffffff !important;
            color: #242943 !important;
            border-radius: 50% !important;
            flex-shrink: 0 !important;
            
            /* 稍微往下一点点，对齐第一行文字 */
            margin-top: 5px !important; 
        }

        /* 3. 右侧内容区域 */
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

        /* 4. ✅ 新增：修复社交小图标排版 */
        .contact-method .icons {
            margin: 15px 0 0 0 !important; /* 和上面文字拉开距离 */
            padding: 0 !important;
            list-style: none !important;
            display: flex !important;
            flex-wrap: wrap !important;
            gap: 10px !important; /* 图标间距 */
        }

        .contact-method .icons li {
            padding: 0 !important;
            margin: 0 !important;
            border: none !important;
        }

        /* 社交图标样式 */
        .contact-method .icons .icon {
            width: 32px !important;
            height: 32px !important;
            line-height: 32px !important;
            font-size: 0.9em !important;
            margin: 0 !important; /*甚至不需要右边距，因为有 gap */
            margin-top: 0 !important;
        }

        /* ✅ 关键修复：隐藏 "Twitter/Facebook" 这些文字标签 */
        .contact-method .icons .label {
            display: none !important; 
        }
        .contact-method .icons {
            margin: 15px 0 0 0 !important; /* 与上方文字拉开距离 */
            padding: 0 !important;
            list-style: none !important;
            display: flex !important;      /* 横向排列 */
            flex-wrap: nowrap !important;  /* ⚠️ 强制不换行，都在一行显示 */
            gap: 8px !important;           /* 稍微减小间距，确保放得下 */
        }

        .contact-method .icons li {
            padding: 0 !important;
            margin: 0 !important;
            border: none !important;
            flex-shrink: 0 !important;     /* 防止图标被挤压 */
        }

        /* 统一图标大小 */
        .contact-method .icons .icon {
            width: 32px !important;
            height: 32px !important;
            line-height: 32px !important;
            font-size: 0.9em !important;
            margin: 0 !important;
            margin-top: 0 !important;
        }
        
        /* 再次确保标签隐藏 */
        .contact-method .icons .label {
            display: none !important;
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
       								<h3><a href="/projects" class="link">我的项目</a></h3>
       								<p>这里记录了我的折腾历程</p>
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