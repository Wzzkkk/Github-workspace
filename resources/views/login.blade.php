<x-layout title="管理员登录">
    <div id="main" class="alt">
        <section id="one">
            <div class="inner">
                <header class="major">
                    <h1>🔐 管理员登录</h1>
                </header>
                
                <div class="row gtr-200">
                    <div class="col-6 col-12-medium">
                        @if($errors->any())
                            <div style="color: red; margin-bottom: 10px;">{{ $errors->first() }}</div>
                        @endif

                        <form method="post" action="/login">
                            @csrf
                            <div class="row gtr-uniform">
                                <div class="col-12">
                                    <input type="password" name="password" placeholder="请输入管理员密码" required />
                                </div>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li><input type="submit" value="登录" class="primary" /></li>
                                        <li><a href="/guestbook" class="button">返回</a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>