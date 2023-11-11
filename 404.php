<?php get_header(); ?>

<div class="errorpage">
  <a href="/" class="logo">
    <img src="<?php echo get_template_directory_uri() ?>/img/logo-dark.png" alt="">
  </a>
  <img src="<?php echo get_template_directory_uri() ?>/img/errorpage-img.jpg" class="errorpage__img" alt="Этой странице не существует">
  <div class="errorpage__title">Этой страницы не существует</div>
  <a href="/" class="errorpage__link">Вернуться на главную</a>
</div>

<?php get_footer(); ?>