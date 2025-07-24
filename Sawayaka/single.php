<?php get_header(); ?>

<main class="post-content">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div class="post-body"><?php the_content(); ?></div>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>