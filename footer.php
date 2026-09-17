</main>
<footer class="site-footer">
  <div class="footer-inner">
    <p>Mario Vera © <?php echo date('Y'); ?></p>
    <nav>
      <?php
      wp_nav_menu([
        'theme_location' => 'footer',
        'container'      => false,
        'items_wrap'     => '<ul class="footer-menu">%3$s</ul>',
        'menu_class'     => 'footer-menu'
      ]);
      ?>
    </nav>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
