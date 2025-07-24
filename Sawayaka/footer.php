<!--フッター-->
<footer>
<section class="footer">
 <div>
  <ul>
   <li><a href="index.html"> <img src="<?php echo get_template_directory_uri(); ?>/images/logo2.svg" alt="ロゴ" class="footerlogo"></a></li>
  </ul>
 </div>
<div class="footeralign">
<div>
 <p class="footeradd">アクセス<br>
 〒105-0001<br>
 東京都港区虎ノ門１丁目３−１<br>
 東京メトロ 虎ノ門駅より直結・徒歩1分<br>
 駐車場なし<br>
 (近隣のコインパーキングをご利用ください)</p>
  <img src="images/営業時間.png" alt 営業時間 class="openingtime">
</div>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.2806732290146!2d139.7494883!3d35.6700904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b9278cad6bd%3A0xf8a15f79423fdee0!2z44CSMTA1LTAwMDEg5p2x5Lqs6YO95riv5Yy66JmO44OO6ZaA77yR5LiB55uu77yT4oiS77yR!5e0!3m2!1sja!2sjp!4v1749618589451!5m2!1sja!2sjp" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div>
 <ul class="footermenu">
  <li class="nav"><a href="<?php echo home_url(); ?>">ホーム</a>
  <li ><a href="<?php echo home_url(); ?>/introduce">クリニック紹介</a></li>
  <li ><a href="<?php echo home_url(); ?>/treatment">診療内容</a></li>
  <li ><a href="<?php echo home_url(); ?>/treatment#access">アクセス</a></li>
  <li><a href="<?php echo home_url(); ?>/appointment">オンライン予約</a></li>
  <li><a href="<?php echo home_url(); ?>/inquiry">お問い合わせ</a></li>
 </ul>
</div>
</div>
<div>
 <p class="rights">© 2025 さわやか歯科クリニック All rights reserved.</p>
</div>
</section>
</footer>

<?php wp_footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const hamburger = document.getElementById('hamburger');
  const navMenu = document.querySelector('.menu ul');

  if (hamburger && navMenu) {
    hamburger.addEventListener('click', () => {
      navMenu.classList.toggle('active');
    });
  }
});
</script>

</body>
</html>