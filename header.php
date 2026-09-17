<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header" id="siteHeader">
  <div class="header-inner">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.png" alt="Mario Vera">
    </a>
    <button class="nav-toggle" id="navToggle" aria-label="Abrir menú">☰</button>
    <nav class="site-nav" id="siteNav">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'items_wrap'     => '<ul id="%1$s" class="menu">%3$s</ul>',
        'menu_class'     => 'menu'
      ]);
      ?>
    </nav>
  </div>
</header>
<main>
