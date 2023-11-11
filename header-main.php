<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- favicons -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.svg">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.svg">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.svg">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.svg">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.svg">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.svg">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.svg">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.svg">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.svg">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.svg">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.svg">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.svg">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.svg">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.svg" type="image/x-icon">
  <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.svg" type="image/x-icon">
  <meta name="msapplication-tilecolor" content="#fff">
  <meta name="msapplication-tileimage" content="<?php echo get_template_directory_uri() ?>/assets/img/favicon.svg">

  <!-- CSS -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- HEADER -->
  <header class="header header-main" id="header">
    <a href="/" class="logo">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="">
    </a>
    <div class="container header__container">
      <a href="/" class="logo">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="">
      </a>
      <div class="burger__menu" id="burger-menu">
        <!-- Burger Close Button -->
        <button type="button" class="burger__close" id="burger-close">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/close.svg" alt="close burger menu">
        </button>
        <ul class="nav__menu">
          <li><a href="#">Резка</a></li>
          <li><a href="#">Гибка</a></li>
          <li><a href="#">Сварка</a></li>
          <li><a href="#">Покраска</a></li>
          <li><a href="#">Сложные корпусные изделия</a></li>
        </ul>
        <div class="nav__links">
          <a href="#">Заказать расчет стоимости</a>
          <a href="tel:+88005674578" class="phone">8 800 567 45 78</a>
        </div>
      </div>
      <!-- Burger Open Button -->
      <button type="button" class="burger__open" id="burger-open">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/burger.svg" alt="open burger menu">
      </button>
    </div>
  </header>