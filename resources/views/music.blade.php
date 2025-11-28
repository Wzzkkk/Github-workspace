<x-layout title="左右声道音乐 - Wzzkkk">
    <style>
        .music-container { font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial; padding: 20px; max-width: 800px; margin: 0 auto; background: rgba(255,255,255,0.05); border-radius: 10px; }
        .row { display:flex; gap:12px; align-items:center; margin:15px 0; flex-wrap: wrap; }
        .row label { width:110px; margin-bottom: 0; font-weight: bold; }
        .row input[type="range"] { flex: 1; min-width: 150px; }
        .row button { padding:10px 20px; cursor: pointer; }
        h1 { margin-bottom: 30px; border-bottom: 1px solid rgba(255,255,255,0.3); padding-bottom: 10px; }
    </style>

    <div id="main" class="alt">
        <section id="one">
            <div class="inner">
                
                <div class="music-container">
                    <h1>🎵 左右声道不同音轨示例</h1>

                    <audio id="leftAudio" preload="auto" crossorigin="anonymous">
                        <source src="/left.mp3" type="audio/mpeg">
                        你的浏览器不支持 audio 元素。
                    </audio>

                    <audio id="rightAudio" preload="auto" crossorigin="anonymous">
                        <source src="/right.mp3" type="audio/mpeg">
                    </audio>

                    <div class="row">
                        <button id="startBtn" class="primary">▶ 开始播放 (必须先点)</button>
                        <button id="pauseBtn">⏸ 全部暂停</button>
                    </div>

                    <div class="row">
                        <label>左声道音量</label>
                        <input id="leftVol" type="range" min="0" max="1" step="0.01" value="1">
                        <span id="leftVolLabel">1.00</span>
                    </div>

                    <div class="row">
                        <label>右声道音量</label>
                        <input id="rightVol" type="range" min="0" max="1" step="0.01" value="1">
                        <span id="rightVolLabel">1.00</span>
                    </div>

                    <div class="row">
                        <input id="muteLeft" type="checkbox" name="muteLeft">
                        <label for="muteLeft">左声道静音</label>
                        
                        <input id="muteRight" type="checkbox" name="muteRight">
                        <label for="muteRight">右声道静音</label>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <script>
        const startBtn = document.getElementById('startBtn');
        const pauseBtn = document.getElementById('pauseBtn');
        const leftAudio = document.getElementById('leftAudio');
        const rightAudio = document.getElementById('rightAudio');
        const leftVol = document.getElementById('leftVol');
        const rightVol = document.getElementById('rightVol');
        const leftVolLabel = document.getElementById('leftVolLabel');
        const rightVolLabel = document.getElementById('rightVolLabel');
        const muteLeft = document.getElementById('muteLeft');
        const muteRight = document.getElementById('muteRight');

        let audioCtx, leftSource, rightSource, leftPanner, rightPanner, leftGain, rightGain;

        function initAudio() {
            if (audioCtx) return;
            audioCtx = new (window.AudioContext || window.webkitAudioContext)();

            // 创建节点
            leftSource  = audioCtx.createMediaElementSource(leftAudio);
            rightSource = audioCtx.createMediaElementSource(rightAudio);

            leftPanner  = audioCtx.createStereoPanner();
            rightPanner = audioCtx.createStereoPanner();

            // 确保 panner 完全左/右
            leftPanner.pan.value = -1;   // 完全左
            rightPanner.pan.value = 1;   // 完全右

            // 用 GainNode 控制独立音量
            leftGain  = audioCtx.createGain();
            rightGain = audioCtx.createGain();

            // 连接链：media -> gain -> panner -> destination
            leftSource.connect(leftGain).connect(leftPanner).connect(audioCtx.destination);
            rightSource.connect(rightGain).connect(rightPanner).connect(audioCtx.destination);

            // 初始音量
            leftGain.gain.value = parseFloat(leftVol.value);
            rightGain.gain.value = parseFloat(rightVol.value);
        }

        startBtn.addEventListener('click', async () => {
            initAudio();
            // 某些浏览器要求用户交互后才可 resume()
            try {
                await audioCtx.resume();
            } catch (e) {
                console.warn('AudioContext resume error:', e);
            }
            leftAudio.play();
            rightAudio.play();
        });

        pauseBtn.addEventListener('click', () => {
            leftAudio.pause();
            rightAudio.pause();
        });

        leftVol.addEventListener('input', () => {
            if (!leftGain) return;
            leftGain.gain.value = parseFloat(leftVol.value) * (muteLeft.checked ? 0 : 1);
            leftVolLabel.textContent = parseFloat(leftVol.value).toFixed(2);
        });

        rightVol.addEventListener('input', () => {
            if (!rightGain) return;
            rightGain.gain.value = parseFloat(rightVol.value) * (muteRight.checked ? 0 : 1);
            rightVolLabel.textContent = parseFloat(rightVol.value).toFixed(2);
        });

        muteLeft.addEventListener('change', () => {
            if (!leftGain) return;
            leftGain.gain.value = muteLeft.checked ? 0 : parseFloat(leftVol.value);
        });

        muteRight.addEventListener('change', () => {
            if (!rightGain) return;
            rightGain.gain.value = muteRight.checked ? 0 : parseFloat(rightVol.value);
        });
    </script>
</x-layout>