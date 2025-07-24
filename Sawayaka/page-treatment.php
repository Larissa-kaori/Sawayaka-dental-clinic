<?php
/*
Template Name:診療内容
*/
?>

<?php get_header();?>

<!--診療科目-->
<section>
 <div>
    <p class="title">診療内容</p>
 </div>

 <div class="treatment">
    <div class="detail2">
        <h3 class="detail3">一般歯科</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/images/ippan.png" class="treatmentpic">
       <p class="treatmenttext">
       むし歯や歯周病の治療を行い、患者さんの健康な歯を守るための基本的なケアを提供します。痛みを抑えた治療を心がけ、できるだけ歯を残す治療を大切にしています。</p>
       <p>
       ・むし歯の治療・詰め物・かぶせ物<br>
       ・歯周病の治療・歯石除去<br>
       ・神経の治療（根管治療）</p>
    </div>
    <div class="detail2">
        <h3 class="detail3">小児歯科</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/images/shouni.png" class="treatmentpic">
        <p class="treatmenttext">お子さまの歯の健康を守るために、むし歯の予防と治療を
        中心に、楽しく通える歯医者 を目指しています。
        初めての歯医者さんでも安心できるよう、
        やさしく丁寧な対応を心がけています。</p>
        <p>・乳歯のむし歯治療<br>
        ・シーラント（むし歯予防処置）<br>
        ・フッ素塗布・歯磨き指導</p>
    </div>
    <div class="detail2">
        <h3 class="detail3">口腔外科</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/images/kouku.png" class="treatmentpic">
        <p class="treatmenttext">親知らずの抜歯や顎関節症など、お口の中の外科的な治療
        を専門的に行います。痛みや負担の少ない治療を心がけ、
        患者さん一人ひとりに合わせた適切な治療 を提供します。</p>
        <p>・親知らずの抜歯<br>
        ・顎関節症の治療 口内炎<br>
        ・粘膜疾患の診療</p>
    </div>
    <div class="detail2">
        <h3 class="detail3">予防歯科</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/images/yobou.png" class="treatmentpic">
        <p class="treatmenttext">「痛くなってから行く」のではなく、むし歯や歯周病を防
        ぐことを目的とした診療です。定期的な検診と
        クリーニングで、お口の健康を長く保ちましょう。</p>
        <p>・定期検診・クリーニング（PMTC）<br>
        ・フッ素塗布で歯を強くする<br>
        ・歯周病の予防と早期発見</p>
    </div>
 </div>

 <!--診療時間-->
 <div class="time">
    <img src="<?php echo get_template_directory_uri(); ?>/images/診療時間.png" alt="診療時間">
 </div>
</section>

  <!--アクセス-->
<section id="access">
 <div>
    <p class="title">アクセス</p>
 </div>
 <div class="access">
    <p>〒105-0001<br>
東京都港区虎ノ門１丁目３−１<br>
東京メトロ 虎ノ門駅より直結・徒歩1分<br>
駐車場なし<br>
(近隣のコインパーキングをご利用ください)</p>
</div>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.2806732290146!2d139.7494883!3d35.6700904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b9278cad6bd%3A0xf8a15f79423fdee0!2z44CSMTA1LTAwMDEg5p2x5Lqs6YO95riv5Yy66JmO44OO6ZaA77yR5LiB55uu77yT4oiS77yR!5e0!3m2!1sja!2sjp!4v1750233452929!5m2!1sja!2sjp" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</section>

 <!--フッター-->
<?php get_footer(); ?>