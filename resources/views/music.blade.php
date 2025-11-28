<x-layout title="双声道音乐 - Wzzkkk">
    <style>
        .music-container {
            background: rgba(255, 255, 255, 0.05);
            padding: 40px;
            border-radius: 10px;
            margin-bottom: 40px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .channel-box {
            background: rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            border-left: 4px solid;
        }
        
        .channel-left { border-left-color: #9bf1ff; }
        .channel-right { border-left-color: #ff9f43; }
        
        .control-row {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 10px 0;
            flex-wrap: wrap;
        }
        
        .control-row label {
            min-width: 80px;
            margin-bottom: 0;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.8);
        }
        
        .control-row input[type="text"] {
            flex: 1;
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: #fff;
            padding: 8px 12px;
            border-radius: 4px;
        }
        
        .control-row input[type="range"] {
            flex: 1;
            cursor: pointer;
        }
        
        .info-text {
            font-size: 0.85em;
            color: rgba(255, 255, 255, 0.5);
            margin-top: 5px;
        }
        
        .main-controls {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 30px 0;
            padding: 20px;
            background: rgba(255, 255, 255, 0.02);
            border-radius: 50px;
        }
        
        .btn-play { background-color: #28a745 !important; }
        .btn-pause { background-color: #e0a800 !important; }
    </style>

    <div id="main" class="alt">
        <section id="one">
            <div class="inner">
                <header class="major">
                    <h1>🎵 双声道音乐实验室</h1>
                </header>
                
                <p>在这里，你可以为左耳和右耳分别指定不同的音源。支持本地上传 MP3/WAV，或直接粘贴音频直链。</p>

                <div class="music-container">
                    
                    <div class="channel-box channel-left">
                        <h3>🎧 左声道 (Left Channel)</h3>
                        
                        <div class="control-row">
                            <label>本地文件</label>
                            <input type="file" id="leftFile" accept="audio/*">
                        </div>
                        
                        <div class="control-row">
                            <label>网络链接</label>
                            <input type="text" id="leftUrl" placeholder="粘贴音频直链 (如 https://example.com/song.mp3)">
                            <button id="leftLoadBtn" class="small">加载 URL</button>
                        </div>
                        <div id="leftStatus" class="info-text">当前状态：未加载</div>
                        
                        <div class="control-row" style="margin-top: 15px;">
                            <label>音量</label>
                            <input id="leftVol" type="range" min="0" max="1" step="0.01" value="1">
                            <span id="leftVolLabel" style="width: 40px; text-align: right;">1.00</span>
                        </div>
                        <div class="control-row">
                            <input type="checkbox" id="muteLeft" name="muteLeft">
                            <label for="muteLeft">静音</label>
                        </div>
                    </div>

                    <div class="channel-box channel-right">
                        <h3>🎧 右声道 (Right Channel)</h3>
                        
                        <div class="control-row">
                            <label>本地文件</label>
                            <input type="file" id="rightFile" accept="audio/*">
                        </div>
                        
                        <div class="control-row">
                            <label>网络链接</label>
                            <input type="text" id="rightUrl" placeholder="粘贴音频直链 (如 https://example.com/song.mp3)">
                            <button id="rightLoadBtn" class="small">加载 URL</button>
                        </div>
                        <div id="rightStatus" class="info-text">当前状态：未加载</div>
                        
                        <div class="control-row" style="margin-top: 15px;">
                            <label>音量</label>
                            <input id="rightVol" type="range" min="0" max="1" step="0.01" value="1">
                            <span id="rightVolLabel" style="width: 40px; text-align: right;">1.00</span>
                        </div>
                        <div class="control-row">
                            <input type="checkbox" id="muteRight" name="muteRight">
                            <label for="muteRight">静音</label>
                        </div>
                    </div>

                    <div class="main-controls">
                        <button id="startBtn" class="button primary btn-play icon solid fa-play"> 开始播放</button>
                        <button id="pauseBtn" class="button btn-pause icon solid fa-pause"> 暂停</button>
                    </div>

                    <audio id="leftAudio" crossorigin="anonymous"></audio>
                    <audio id="rightAudio" crossorigin="anonymous"></audio>

                </div>
            </div>
        </section>
    </div>

    <script>
        // 配置：如果你搭建了后端解析服务，把地址填在这里
        const API_BASE = ""; // 例如 "http://localhost:3000"，留空则只支持直链

        const leftAudio = document.getElementById('leftAudio');
        const rightAudio = document.getElementById('rightAudio');
        const startBtn = document.getElementById('startBtn');
        const pauseBtn = document.getElementById('pauseBtn');

        // 音频上下文
        let audioCtx, leftSource, rightSource, leftPanner, rightPanner, leftGain, rightGain;

        // 初始化 Web Audio API
        function initAudio() {
            if (audioCtx) return;
            
            const AudioContext = window.AudioContext || window.webkitAudioContext;
            audioCtx = new AudioContext();

            // 创建源
            leftSource = audioCtx.createMediaElementSource(leftAudio);
            rightSource = audioCtx.createMediaElementSource(rightAudio);

            // 创建声相器 (Panner) - 核心：把声音彻底分到左/右
            leftPanner = audioCtx.createStereoPanner();
            leftPanner.pan.value = -1; // 极左

            rightPanner = audioCtx.createStereoPanner();
            rightPanner.pan.value = 1; // 极右

            // 创建增益 (音量)
            leftGain = audioCtx.createGain();
            rightGain = audioCtx.createGain();

            // 连接：源 -> 音量 -> 声相 -> 输出
            leftSource.connect(leftGain).connect(leftPanner).connect(audioCtx.destination);
            rightSource.connect(rightGain).connect(rightPanner).connect(audioCtx.destination);
        }

        // --- 播放控制 ---
        startBtn.addEventListener('click', async () => {
            initAudio();
            if (audioCtx.state === 'suspended') {
                await audioCtx.resume();
            }
            
            // 尝试同步播放
            const playPromiseLeft = leftAudio.play();
            const playPromiseRight = rightAudio.play();
            
            if (playPromiseLeft !== undefined) {
                playPromiseLeft.catch(error => { console.log('左声道播放受阻，请先加载音频'); });
            }
            if (playPromiseRight !== undefined) {
                playPromiseRight.catch(error => { console.log('右声道播放受阻，请先加载音频'); });
            }
        });

        pauseBtn.addEventListener('click', () => {
            leftAudio.pause();
            rightAudio.pause();
        });

        // --- 文件加载逻辑 (封装函数) ---
        function handleFileSelect(fileInput, audioElement, statusElement) {
            fileInput.addEventListener('change', function() {
                if (this.files.length > 0) {
                    const file = this.files[0];
                    const objectUrl = URL.createObjectURL(file);
                    audioElement.src = objectUrl;
                    statusElement.textContent = "✅ 已加载本地文件: " + file.name;
                    statusElement.style.color = "#9bf1ff";
                }
            });
        }

        function handleUrlLoad(btn, input, audioElement, statusElement) {
            btn.addEventListener('click', async () => {
                const url = input.value.trim();
                if (!url) {
                    alert("请输入有效的 URL");
                    return;
                }

                statusElement.textContent = "⏳ 正在加载...";
                
                // 如果配置了后端解析 API
                if (API_BASE) {
                    try {
                        const resp = await fetch(`${API_BASE}/parse?url=${encodeURIComponent(url)}`);
                        const data = await resp.json();
                        if (data.streamPath) {
                            audioElement.src = API_BASE + data.streamPath;
                            statusElement.textContent = "✅ 已解析并加载: " + (data.title || "未知音频");
                            statusElement.style.color = "#9bf1ff";
                            return;
                        }
                    } catch (e) {
                        console.error("API 解析失败", e);
                    }
                }

                // 默认尝试直链播放
                audioElement.src = url;
                statusElement.textContent = "🔗 已设置直链地址 (尝试播放中...)";
                statusElement.style.color = "#9bf1ff";
            });
        }

        // 绑定左声道
        handleFileSelect(document.getElementById('leftFile'), leftAudio, document.getElementById('leftStatus'));
        handleUrlLoad(document.getElementById('leftLoadBtn'), document.getElementById('leftUrl'), leftAudio, document.getElementById('leftStatus'));

        // 绑定右声道
        handleFileSelect(document.getElementById('rightFile'), rightAudio, document.getElementById('rightStatus'));
        handleUrlLoad(document.getElementById('rightLoadBtn'), document.getElementById('rightUrl'), rightAudio, document.getElementById('rightStatus'));

        // --- 音量与静音控制 ---
        function updateVolume(side) {
            const volInput = document.getElementById(side + 'Vol');
            const volLabel = document.getElementById(side + 'VolLabel');
            const muteCheck = document.getElementById('mute' + (side.charAt(0).toUpperCase() + side.slice(1)));
            const gainNode = side === 'left' ? leftGain : rightGain;

            const volume = parseFloat(volInput.value);
            volLabel.textContent = volume.toFixed(2);

            if (gainNode) {
                gainNode.gain.value = muteCheck.checked ? 0 : volume;
            }
        }

        ['left', 'right'].forEach(side => {
            document.getElementById(side + 'Vol').addEventListener('input', () => updateVolume(side));
            document.getElementById('mute' + (side.charAt(0).toUpperCase() + side.slice(1))).addEventListener('change', () => updateVolume(side));
        });

    </script>
</x-layout>