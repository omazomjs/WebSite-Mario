<?php
get_header(); ?>
<section class="hero">
  <img class="hero-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/portada.jpg" alt="Portada">
  <div class="hero-inner">
    <h1>Mario Vera</h1>
    <p>Artista Visual. La precisión analítica de la optometría y la necesidad vital de crear.</p>
    <a href="<?php echo esc_url(get_permalink(get_page_by_path('galeria-2'))); ?>" class="btn">Ver galería</a>
  </div>
</section>
<section class="about">
  <div>
    <img class="firma" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/firma.png" alt="Firma">
    <img class="about-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/tablet.jpg" alt="Mario Vera">
  </div>
  <div class="about-text">
    <h2>Sobre mí</h2>
    <p>Mario Vera (Elda, Alicante, 1976). Artista Visual que crea su obra a partir de la unión de sus dos mundos: la precisión analítica de la optometría y la necesidad vital de crear.</p>
    <p>Su ejercicio profesional se ha desarrollado en el campo de la salud como Optometrista, profesión que adora, ya que gracias a ella ha podido conocer y ayudar a personas increíbles. Es en el acto de crear donde encuentra el sentido más profundo de su vida.</p>
    <p>La materialización de ideas, ya sea pintando, esculpiendo o restaurando, es su motor esencial.</p>
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
