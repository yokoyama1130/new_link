<!-- CSSの読み込み -->
<?= $this->Html->css('top') ?>

<div class="hero-video-container">
    <video autoplay muted loop playsinline>
        <source src="/videos/top.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>new_linkへようこそ</h1>
        <p>最新のトレンドを、映像とともに。</p>
    </div>
</div>

<div class="trend-section">
    <!-- サンプルのトレンドカード（画像・動画どちらもOK） -->
    <div class="trend-card">
        <video autoplay muted loop playsinline>
            <source src="/videos/trend1.mp4" type="video/mp4">
        </video>
        <div class="info">
            <strong>#ファッション</strong>
            <p>2025年の春トレンド</p>
        </div>
    </div>

    <div class="trend-card">
        <img src="/images/trend2.jpg" alt="トレンド画像">
        <div class="info">
            <strong>#グルメ</strong>
            <p>渋谷の最新カフェ</p>
        </div>
    </div>
</div>