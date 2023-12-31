<?php
/*
Template Name: Шаблон страницы услуги
*/
get_header(); ?>

<div id="pagepiling">

<!-- HERO -->
<section class="section hero" id="section1" style="background-image: url('<?php the_field('hero_bg'); ?>');">
  <div class="container">
    <div class="hero__container">
      <div class="hero__left">
        <div class="hero__content">
          <h1 class="hero__title">
            <?php the_field('hero_title'); ?>
          </h1>
          <?php if (get_field('hero_text')) { ?>
            <div class="hero__text">
              <?php the_field('hero_text'); ?>
            </div>
          <?php } ?>
        </div>
        <?php if (have_rows('hero_benefits')): ?>
          <ul class="hero__benefits">
            <?php while (have_rows('hero_benefits')):
              the_row(); ?>
              <li>
                <img src="<?php the_sub_field('icon'); ?>" alt="icon">
                <p>
                  <?php if (get_sub_field('title')) {
                    the_sub_field('title');
                  } ?>
                  <?php if (get_sub_field('value')) { ?><span>
                      <?php the_sub_field('value'); ?>
                    </span>
                  <?php } ?>
                </p>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>
      <div class="hero__right">
        <div class="form-wrapper">
          <h2 class="form-title">
            <?php the_field('form_title', 'options') ?>
          </h2>
          <div class="form">
            <?php echo do_shortcode('[contact-form-7 id="71a72c8" title="Форма на главном экране"]'); ?>
          </div>
          <?php $form_accept_link = get_field('form_accept_link', 'options');
          if ($form_accept_link):
            $form_accept_link_url = $form_accept_link['url'];
            $form_accept_link_title = $form_accept_link['title'];
            $form_accept_link_target = $form_accept_link['target'] ? $form_accept_link['target'] : '_self';
            ?>
          <?php endif; ?>
          <p class="accept">Нажимая кнопку “Отправить заявку” вы соглашаетесь с <a target="_blank" href="<?php echo get_privacy_policy_url(); ?>">политикой конфиденциальности</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="section about" id="section2">
  <img src="<?php the_field('about_illustration'); ?>" class="about__illustration" alt="">
  <div class="container">
    <div class="about__container">
      <div class="about__content">
        <h2 class="about__title">
          <?php the_field('about_title'); ?>
        </h2>
        <div class="about__text">
          <?php the_field('about_text'); ?>
        </div>
      </div>
      <?php if (have_rows('about')):
        while (have_rows('about')):
          the_row();

          if (get_row_layout() == 'first'): ?>
            <div class="about__first">

              <?php if (get_sub_field('content')) { ?>
                <div class="about__first-content">
                  <?php the_sub_field('content'); ?>
                </div>
              <?php } ?>

              <div class="about__first-wrapper">

                <?php if (have_rows('imgs')): ?>
                  <div class="swiper aboutImgSwiper">
                    <div class="swiper-wrapper">
                      <?php while (have_rows('imgs')):
                        the_row(); ?>
                        <div class="swiper-slide"><img src="<?php the_sub_field('img'); ?>" alt="image"></div>
                      <?php endwhile; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                <?php endif; ?>

                <?php if (get_sub_field('info')) { ?>
                  <div class="about__info">
                    <?php the_sub_field('info'); ?>
                  </div>
                <?php } ?>

              </div>
            </div>

          <?php elseif (get_row_layout() == 'second'): ?>
            <div class="about__second">
              <?php if (have_rows('info_slider')): ?>
                <div class="swiper aboutInfoSwiper">
                  <div class="swiper-wrapper">
                    <?php while (have_rows('info_slider')):
                      the_row(); ?>
                      <div class="swiper-slide">
                        <div class="about__info">
                          <?php the_sub_field('item'); ?>
                        </div>
                      </div>
                    <?php endwhile; ?>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              <?php endif; ?>
            </div>
          <?php endif;
        endwhile;
      endif; ?>
    </div>
  </div>
</section>

<!-- GALLERY -->
<section class="section gallery" id="section3">
  <div class="container">
    <h2 class="section-title">
      <?php the_field('gallery_title'); ?>
    </h2>
    <?php if (have_rows('gallery')):
      while (have_rows('gallery')):
        the_row();
        if (get_row_layout() == 'first'): ?>
          <?php if (have_rows('slider')): ?>
            <div class="swiper gallerySwiper">
              <div class="swiper-wrapper">
                <?php while (have_rows('slider')):
                  the_row(); ?>
                  <div class="swiper-slide" data-fancybox="gallery" href="<?php the_sub_field('img'); ?>">
                    <img src="<?php the_sub_field('img'); ?>" alt="">
                  </div>
                <?php endwhile; ?>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
            </div>
          <?php endif; ?>

        <?php elseif (get_row_layout() == 'second'): ?>
          <?php if (have_rows('cards')): ?>
            <div class="gallery__cards">
              <?php while (have_rows('cards')):
                the_row(); ?>
                <a data-fancybox="gallery" href="<?php the_sub_field('img'); ?>">
                  <img src="<?php the_sub_field('img'); ?>" alt="">
                </a>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
        <?php endif;
      endwhile;
    endif; ?>
  </div>
</section>

<!-- BENEFITS -->
<section class="section benefits" id="section4">
  <div class="container">
    <h2 class="section-title">
      <?php the_field('benefits_title'); ?>
    </h2>
    <?php if (have_rows('benefits_cards')): ?>
      <div class="benefits__cards">
        <?php while (have_rows('benefits_cards')):
          the_row(); ?>
          <div class="benefits-item" style="background-image: url('<?php the_sub_field('bg') ?>');">
            <?php if (get_sub_field('title')) { ?>
              <h3 class="benefits-item__title">
                <?php the_sub_field('title'); ?>
              </h3>
            <?php } ?>
            <?php if (get_sub_field('text')) { ?>
              <p class="benefits-item__text">
                <?php the_sub_field('text'); ?>
              </p>
            <?php } ?>
            <?php if (have_rows('points')): ?>
              <ul class="benefits-item__points">
                <?php while (have_rows('points')):
                  the_row(); ?>
                  <li>
                    <?php the_sub_field('point'); ?>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- CTA -->
<div class="section pp-scrollable" id="section5">
  <section class="cta">
    <div class="container">
      <div class="cta__wrapper" style="background-image: url('<?php the_field('hero_bg'); ?>')">
        <div class="hero__left">
          <div class="hero__content">
            <h1 class="hero__title">
              <?php the_field('hero_title'); ?>
            </h1>
            <?php if (get_field('hero_text')) { ?>
              <div class="hero__text">
                <?php the_field('hero_text'); ?>
              </div>
            <?php } ?>
          </div>
        </div>
        <div class="hero__right">
          <div class="form-wrapper">
            <h2 class="form-title">
              <?php the_field('form_title', 'options') ?>
            </h2>
            <div class="form">
              <?php echo do_shortcode('[contact-form-7 id="f376e8d" title="Форма в последнем блоке"]'); ?>
            </div>
            <?php $form_accept_link = get_field('form_accept_link', 'options');
            if ($form_accept_link):
              $form_accept_link_url = $form_accept_link['url'];
              $form_accept_link_title = $form_accept_link['title'];
              $form_accept_link_target = $form_accept_link['target'] ? $form_accept_link['target'] : '_self';
              ?>
            <?php endif; ?>
            <p class="accept">Нажимая кнопку “Отправить заявку” вы соглашаетесь с <a target="_blank"
                href="<?php echo get_privacy_policy_url(); ?>">политикой конфиденциальности</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container">
      <div class="footer__top">
        <a href="/" class="logo">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="">
        </a>
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
          <a data-fancybox href="#modal-order">Заказать расчет стоимости</a>
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
      <div class="footer__bottom">
        <p class="footer__copy">© 1991-2023 «Совтест АТЕ», ООО <a target="_blank"
            href="<?php echo get_privacy_policy_url(); ?>">Политика конфиденциальности</a></p>
        <ul class="footer__contacts">
          <?php $phone_kursk = get_field('phone_kursk', 'options');
          if ($phone_kursk): ?>
            <li>
              <span>
                <?php echo $phone_kursk['title']; ?>
              </span>
              <p>
                <?php echo $phone_kursk['number']; ?>
              </p>
            </li>
          <?php endif; ?>
          <?php $faks = get_field('faks', 'options');
          if ($faks): ?>
            <li>
              <span>
                <?php echo $faks['title']; ?>
              </span>
              <p>
                <?php echo $faks['faks']; ?>
              </p>
            </li>
          <?php endif; ?>
          <?php $email = get_field('email', 'options');
          if ($email): ?>
            <li>
              <span>
                <?php echo $email['title']; ?>
              </span>
              <?php
              $email_link = get_field('email_link', 'options');
              if ($email_link):
                $email_link_url = $email_link['url'];
                $email_link_title = $email_link['title'];
                ?>
                <a href="<?php echo esc_url($email_link_url); ?>">
                  <?php echo esc_html($email_link_title); ?>
                </a>
              <?php endif; ?>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </footer>
</div>

</div>

<?php get_footer(); ?>