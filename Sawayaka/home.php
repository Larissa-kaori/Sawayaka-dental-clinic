<?php get_header();?>

<!--メイン画像-->
<div>
 <img src="<?php echo get_template_directory_uri(); ?>/images/メイン画像.jpg" alt="メイン画像" class="mainpic">
</div>

<!--クリニック紹介-->
<section>
<div id="rounded-box">
    <p class="title">クリニック紹介</p>
    <p class="maintext">当院は、小さなお子さまからご年配の方まで、<br>
どなたでも安心して通える歯科クリニックを目指しています。<br>
単に「治療をする」のではなく、患者さんの不安を和らげ、笑顔で通えることを大切にし、<br>
最新の設備とやさしい診療で家族みんなの健康な歯を守れるようサポートしていきます。</p>
</div>
<div class="shortintro">
 <div class="shortintro1">
    <img src="<?php echo get_template_directory_uri(); ?>/images/痛みの少ない治療.png" alt="痛みの少ない優しい治療" class="shortintro1">
    <p>痛みの少ないやさしい治療</p>
 </div>
 <div class="shortintro1">
    <img src="<?php echo get_template_directory_uri(); ?>/images/予防歯科.png" alt="お口の健康を守る予防歯科" class="shortintro1">
    <p>お口の健康を守る予防歯科</p>
 </div>
 <div class="shortintro1">
    <img src="<?php echo get_template_directory_uri(); ?>/images/設備.png" alt="清潔で最新の設備" class="shortintro1">
    <p>清潔で最新の設備</p>
 </div>
</div>
<div class="kuwashiku">
    <a href="<?php echo home_url(); ?>/introduce" class="kuwashikupic">詳しく見る</a>
</div>
</section>

<!--ブログ-->
<section class="blogcontent">
 <div class="blog">
    <a href="<?php echo home_url(); ?>/blog" class="title">さわやかブログ</a>
 </div>
  <?php if (have_posts()) : ?>
    <ul class="blog-list">
  <?php while (have_posts()) : the_post(); ?>
    <li class="blog-item">
      <a href="<?php the_permalink(); ?>">
        <h3><?php the_title(); ?></h3>
        <p><?php
           $content = get_the_content();
           echo wp_trim_words($content, 47, '...'); // 20語だけ表示して「...」を追加?>
        </p>
      </a>
    </li>
  <?php endwhile; ?>
</ul>
  <?php else : ?>
    <p>投稿がまだありません。</p>
  <?php endif; ?>
</section>

<!--フッター-->
<?php get_footer(); ?>