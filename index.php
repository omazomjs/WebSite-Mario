<?php
get_header(); ?>
<section class="hero">
  <img class="hero-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/portada.jpg" alt="Portada">
  <div class="hero-content">
    <h1>Mario Vera</h1>
    <p class="sub">1976 (Elda, Alicante)</p>
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
    <p>Artista Visual que crea su obra a partir de la unión de sus dos mundos: la precisión analítica de la optometría y la necesidad vital de crear.</p>
    <p>Su ejercicio profesional se ha desarrollado en el campo de la salud como Optometrista, profesión que adora, ya que gracias a ella ha podido conocer y ayudar a personas increíbles. Es en el acto de crear donde encuentra el sentido más profundo y la mayor plenitud de su vida.</p>
    <p>La materialización de ideas, ya sea pintando, esculpiendo o restaurando, es su motor esencial.</p>
  </div>
</section>
<section>
  <div class="gallery-cat">
    <h3>Tentación</h3>
    <div class="gallery">
      <a href="#" class="gallery-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/tablet.jpg" alt=""></a>
      <a href="#" class="gallery-item"><img src="https://picsum.photos/seed/t1/600/800" alt=""></a>
      <a href="#" class="gallery-item"><img src="https://picsum.photos/seed/t2/600/600" alt=""></a>
      <a href="#" class="gallery-item"><img src="https://picsum.photos/seed/t3/600/700" alt=""></a>
    </div>
  </div>
  <div class="gallery-cat">
    <h3>Retratos</h3>
    <div class="gallery">
      <a href="#" class="gallery-item"><img src="https://picsum.photos/seed/r1/600/900" alt=""></a>
      <a href="#" class="gallery-item"><img src="https://picsum.photos/seed/r2/600/500" alt=""></a>
      <a href="#" class="gallery-item"><img src="https://picsum.photos/seed/r3/600/800" alt=""></a>
      <a href="#" class="gallery-item"><img src="https://picsum.photos/seed/r4/600/600" alt=""></a>
    </div>
  </div>
</section>
<?php get_footer(); ?>
