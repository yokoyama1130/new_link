<?= $this->Html->css('top') ?>

<!-- ☰ ハンバーガーメニュー -->
<button class="menu-toggle" onclick="
  const sidebar = document.querySelector('.sidebar');
  this.classList.toggle('active');
  sidebar.classList.toggle('open');
  this.blur(); // ← これでクリック後の focus 状態を外せる！
">☰</button>


<div class="layout">

    <!-- ✅ サイドバー -->
    <nav class="sidebar">
        <a href="<?= $this->Url->build(['controller' => 'Top', 'action' => 'index']) ?>">🏠 ホーム</a>
        <a href="/search">🔍 検索</a>
        <a href="/posts/add">➕ 投稿</a>
        <a href="/reels">🎞 リール</a>
        <a href="/users/profile">👤 ユーザー情報</a>
    </nav>

    <!-- ✅ メインコンテンツ -->
    <div class="main-content">
        <h1><?= h($message) ?></h1>
        <p>これはトップページの index.php です。</p>

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
    </div>
</div>

