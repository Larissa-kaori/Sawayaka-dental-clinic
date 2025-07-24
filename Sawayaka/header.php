<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>さわやか歯科クリニック</title>
 <meta charset="UTF-8" />
 <meta name="description" content="地域の皆さまが安心して通える家族みんなの歯科クリニック" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link rel="stylesheet" href="style.css" />
 <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
  <?php wp_head(); ?>
</head>


<body>
<!--ヘッダー-->
<header>
  <div class="header">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo2.svg" alt="ロゴ" class="logo">
    <h1>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="home">さわやか歯科クリニック</a>
    </h1>
  </div>

  <!-- ハンバーガーアイコン -->
  <div class="hamburger" id="hamburger">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <!-- ナビゲーションメニュー -->
  <nav class="menu">
    <ul>
      <li class="nav"><a href="<?php echo home_url(); ?>">ホーム</a></li>
      <li class="nav"><a href="<?php echo home_url(); ?>/introduce">クリニック紹介</a></li>
      <li class="nav"><a href="<?php echo home_url(); ?>/treatment">診療内容</a></li>
      <li class="nav"><a href="<?php echo home_url(); ?>/treatment#access">アクセス</a></li>
      <li class="nav"><a href="<?php echo home_url(); ?>/appointment">オンライン予約</a></li>
      <li class="nav"><a href="<?php echo home_url(); ?>/inquiry">お問い合わせ</a></li>
    </ul>
  </nav>
</header>