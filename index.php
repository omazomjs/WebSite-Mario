<?php
get_header(); ?>
<section class="hero">
  <div class="hero-inner">
    <h1>Mario Vera</h1>
    <p>Artista Visual. La precisión analítica de la optometría y la necesidad vital de crear.</p>
    <a href="<?php echo esc_url(get_permalink(get_page_by_path('galeria-2'))); ?>" class="btn">Ver galería</a>
  </div>
</section>
<section>
  <h2>Obra reciente</h2>
  <p class="section-intro">Selección de piezas de la colección de Mario Vera.</p>
  <div class="gallery">
    <?php
    $args = ['post_type' => 'attachment', 'post_mime_type' => 'image', 'posts_per_page' => 9, 'order' => 'DESC', 'orderby' => 'date'];
    $q = new WP_Query($args);
    if ($q->have_posts()) : while ($q->have_posts()) : $q->the_post();
      $full = wp_get_attachment_url(get_the_ID());
    ?>
      <a href="<?php echo esc_url($full); ?>" class="gallery-item" target="_blank" rel="noopener"><?php the_post_thumbnail('large'); ?></a>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</section>
<?php get_footer(); ?>
