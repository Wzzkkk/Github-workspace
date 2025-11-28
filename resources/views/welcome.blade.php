<x-layout>
    <section id="banner" class="major">
        <div class="inner">
            <header class="major">
                <h1>Hi, 我是 Wzzkkk</h1>
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

    <div id="main">

        <section id="one" class="tiles">
            <article>
                <span class="image">
                    <img src="/images/pic01.jpg" alt="" />
                </span>
                <header class="major">
                    <h3><a href="/about" class="link">关于我</a></h3>
                    <p>了解我的技术栈与个人经历</p>
                </header>
            </article>
            <article>
    			<span class="image">
        			<img src="/images/pic02.jpg" alt="" />
    			</span>
    			<header class="major">
        			<h3><a href="/music" class="link">双声道音乐</a></h3>
        			<p>体验 Web Audio API 的魅力</p>
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
                    <h3><a href="#" class="link">更多功能</a></h3>
                    <p>正在开发中...</p>
                </header>
            </article>
        </section>

        <section id="two">
            <div class="inner">
                <header class="major">
                    <h2>构建全栈思维</h2>
                </header>
                <p>从服务器运维到前端交互，每一个环节都亲力亲为。这个网站是我技术能力的最佳证明。</p>
                <ul class="actions">
                    <li><a href="/about" class="button next">了解更多</a></li>
                </ul>
            </div>
        </section>

    </div>

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
                            </ul>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </section>
</x-layout>