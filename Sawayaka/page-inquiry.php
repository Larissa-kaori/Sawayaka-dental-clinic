<?php
/*
Template Name:お問い合わせ
*/
?>

<?php get_header();?>

<!--お問い合わせ-->
<div class="inquiry">
    <div>
        <p class="title">お問い合わせ</p>

        <!-- ここで固定ページの本文（WPFormsショートコード含む）を出力 -->
        <div class="form-area">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<!--フッター-->
<?php get_footer(); ?>