<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- HEADER -->
  <header class="header" id="header">
    <div class="container header__container">
      <a href="/" class="logo">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="">
      </a>
      <div class="burger__menu" id="burger-menu">
        <!-- Burger Close Button -->
        <button type="button" class="burger__close" id="burger-close">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/close.svg" alt="close burger menu">
        </button>
        <?php
        wp_nav_menu([
          'theme_location' => 'header',
          'container' => '',
          'menu_class' => 'nav__menu',
          'menu_id' => false,
          'echo' => true,
          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        ]);
        ?>
        <div class="nav__links">
          <!-- <div id="pp-menu">
            <ul>
              <li data-menuanchor="section1" class="active"><a href="#section1">Page 1</a></li>
              <li data-menuanchor="section2"><a href="#section2">Page 2</a></li>
              <li data-menuanchor="section3"><a href="#section3">Page 3</a></li>
              <li data-menuanchor="section4"><a href="#section4">Page 4</a></li>
              <li data-menuanchor="section5"><a href="#section5">Page 5</a></li>
            </ul>
          </div>-->
          <a data-fancybox href="#modal-order" data-options='{"touch" : false}'>Заказать расчет стоимости</a>
          <?php
          $phone = get_field('phone', 'options');
          if ($phone):
            $phone_url = $phone['url'];
            $phone_title = $phone['title'];
            $phone_target = $phone['target'] ? $phone['target'] : '_self';
            ?>
            <a href="<?php echo esc_url($phone_url); ?>" target="<?php echo esc_attr($phone_target); ?>" class="phone">
              <?php echo esc_html($phone_title); ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
      <!-- Burger Open Button -->
      <button type="button" class="burger__open" id="burger-open">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/burger.svg" alt="open burger menu">
      </button>
    </div>
  </header>