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
        <a href="<?= $this->Url->build(['controller' => 'Search', 'action' => 'index']) ?>">🔍 検索</a>
        <a href="/posts/add">➕ 投稿</a>
        <a href="/reels">🎞 リール</a>
        <a href="/users/profile">👤 ユーザー情報</a>
    </nav>

    <h1><?= h($message) ?></h1>
    <p>ここに検索フォームを作っていきましょう！</p>

</div>