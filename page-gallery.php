<?php
/*
Template Name: Galería Mario
Description: Galería masonry completa de fotos de Mario Vera.
*/
get_header(); ?>
<section class="gallery-page">
  <h2>Galería</h2>
  <p class="section-intro">Obra seleccionada de Mario Vera — artista visual entre la precisión analítica de la optometría y la necesidad vital de crear.</p>
  <div class="gallery">
    <?php
    $args = [
      'post_type'      => 'attachment',
      'post_mime_type' => 'image',
      'posts_per_page' => -1,
      'order'          => 'DESC',
      'orderby'        => 'date'
    ];
    $gallery = new WP_Query($args);
    if ($gallery->have_posts()) :
      while ($gallery->have_posts()) : $gallery->the_post();
        $full = wp_get_attachment_url(get_the_ID());
    ?>
        <a href="<?php echo esc_url($full); ?>" class="gallery-item" target="_blank" rel="noopener">
          <?php the_post_thumbnail('large'); ?>
        </a>
    <?php
      endwhile;
    endif;
    wp_reset_postdata();
    ?>
  </div>
</section>
<?php get_footer(); ?>
