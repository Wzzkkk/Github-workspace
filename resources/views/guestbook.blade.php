<x-layout title="留言板 - Wzzkkk">
    <div id="main" class="alt">
        <section id="one">
            <div class="inner">
                <header class="major">
                    <h1>💬 留言板</h1>
                </header>

                @if(session('success'))
                    <div style="background: rgba(40, 167, 69, 0.2); border: 1px solid #28a745; color: #fff; padding: 15px; border-radius: 4px; margin-bottom: 30px;">
                        <strong>✅ 成功：</strong> {{ session('success') }}
                    </div>
                @endif

                <div class="row gtr-200">
                    <div class="col-6 col-12-medium">
                        <h3>写下你的想法</h3>
                        <form method="post" action="/guestbook">
                            @csrf
                            <div class="row gtr-uniform">
                                <div class="col-6 col-12-xsmall">
                                    <input type="text" name="name" id="name" placeholder="你的名字" required />
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
                                <thead><tr><th>名字</th><th>内容</th><th>时间</th></tr></thead>
                                <tbody>
                                    @foreach ($messages as $msg)
                                    <tr>
                                        <td>{{ $msg->name }}</td>
                                        <td>{{ $msg->content }}</td>
                                        <td>
                                            <span style="font-size: 0.8em; color: #888;">{{ $msg->created_at->diffForHumans() }}</span>
                                            @if(session('is_admin'))
                                                <form action="/guestbook/{{ $msg->id }}" method="POST" style="display:inline; margin-left: 5px;">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" style="font-size: 0.6em; padding: 0 8px; height: 24px; line-height: 24px; background-color: #e74c3c; border: none; box-shadow:none;">删</button>
                                                </form>
                                            @endif
                                        </td>
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
</x-layout>