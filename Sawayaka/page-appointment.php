<?php
/*
Template Name:オンライン予約
*/
?>

<?php get_header();?>

<!--予約-->
<div>
    <div>
     <p class="title">オンライン予約</p>
    </div>
           <!-- ここで固定ページの本文（WPFormsショートコード含む）を出力 -->
        <div class="form-area">
            <?php the_content(); ?>
        </div>
</div>

 <!--フッター-->
<?php get_footer(); ?>