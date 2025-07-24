<?php
/*
Template Name: ブログ一覧
*/
?>

<?php get_header(); ?>

<main class="blog-content">
  <p class="title">さわやかブログ</p>
  <ul class="blog-list">
    <?php
    $args = array('post_type' => 'post', 'posts_per_page' => 10);
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()):
      while ($the_query->have_posts()): $the_query->the_post(); ?>
        <li class="blog-item">
  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

  <p class="post-date"><?php echo get_the_date('Y年n月j日'); ?></p>

  <p class="post-cat">
    <?php
      $categories = get_the_category();
      if ($categories) {
        foreach ($categories as $category) {
          echo esc_html($category->name) . ' ';
        }
      }
    ?>
  </p>

  <p>
    <a href="<?php the_permalink(); ?>">
      <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
    </a>
  </p>
</li>

      <?php endwhile;
      wp_reset_postdata();
    else: ?>
      <li>投稿がありません</li>
    <?php endif; ?>
  </ul>
</main>

<?php get_footer(); ?>
