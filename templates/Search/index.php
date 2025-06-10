<?= $this->Html->css('top') ?>
<?= $this->Html->script('https://kit.fontawesome.com/9bd6e1f03c.js', ['block' => true]) ?>


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
        <a href="<?= $this->Url->build(['controller' => 'Top', 'action' => 'index']) ?>"><i class="fa-solid fa-house"></i> ホーム</a>
        <a href="<?= $this->Url->build(['controller' => 'Search', 'action' => 'index']) ?>"><i class="fa-solid fa-magnifying-glass"></i> 検索</a>
        <a href="/posts/add">➕ 投稿</a>
        <a href="/reels">🎞 リール</a>
        <a href="/users/profile">👤 ユーザー情報</a>
    </nav>

    <?= $this->Html->css('search') ?>

<div class="search-page">
    <h1><i class="fa-solid fa-magnifying-glass"></i> 投稿を検索</h1>

    <form class="search-form" method="get" action="/search/results">
        <input type="text" name="q" placeholder="キーワードを入力..." />
        <button type="submit">検索</button>
    </form>

    <div class="trend-tags">
        <span>#ファッション</span>
        <span>#グルメ</span>
        <span>#旅行</span>
        <span>#メイク</span>
        <span>#最新トレンド</span>
    </div>

    <div class="search-results">
        <!-- ダミーの検索結果カード -->
        <div class="result-card">
            <img src="/images/sample.jpg" alt="検索結果">
            <div class="info">
                <strong>#渋谷カフェ</strong>
                <p>話題のカフェがオープン！</p>
            </div>
        </div>
        <div class="result-card">
            <video autoplay muted loop playsinline>
                <source src="/videos/sample.mp4" type="video/mp4">
            </video>
            <div class="info">
                <strong>#春ファッション</strong>
                <p>2025年注目のスタイル！</p>
            </div>
        </div>
    </div>
</div>


</div>