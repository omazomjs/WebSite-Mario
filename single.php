<?php get_header(); ?>
<article class="page-content">
  <?php while(have_posts()): the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div class="page-body"><?php the_content(); ?></div>
  <?php endwhile; ?>
</article>
<?php get_footer(); ?>
