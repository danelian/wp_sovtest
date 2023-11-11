<?php
/*
Template Name: Шаблон страницы услуги
*/
get_header(); ?>

<!-- HERO -->
<section class="vertical-scrolling hero" style="background-image: url('<?php the_field('hero_bg'); ?>');">
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
          <form action="#" class="form">
            <div class="form-group">
              <input type="text" class="form-input" placeholder="ФИО">
            </div>
            <div class="form-group">
              <input type="number" class="form-input" placeholder="+7 ___ ___ __ __">
            </div>
            <div class="form-group">
              <input type="text" class="form-input" placeholder="Whitelist">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="10" placeholder=""></textarea>
            </div>
            <div class="form-bottom">
              <div class="input-group file-upload">
                <span class="wpcf7-form-control-wrap file-801 file-input">
                  <input type="file" size="40"
                    class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required form-control-file" id="cv_file"
                    accept=".jpg,.jpeg,.png,.gif,.pdf,.doc,.docx,.ppt,.pptx,.odt,.avi,.ogg,.m4a,.mov,.mp3,.mp4,.mpg,.wav,.wmv">
                </span>
                <label></label>
              </div>
              <input type="submit" value="Отправить заявку" class="button">
            </div>
          </form>
          <?php $form_accept_link = get_field('form_accept_link', 'options');
          if ($form_accept_link):
            $form_accept_link_url = $form_accept_link['url'];
            $form_accept_link_title = $form_accept_link['title'];
            $form_accept_link_target = $form_accept_link['target'] ? $form_accept_link['target'] : '_self';
            ?>
          <?php endif; ?>
          <p class="accept">
            <?php the_field('form_accept', 'options') ?> <a href="<?php echo esc_url($form_accept_link_url); ?>"
              target="<?php echo esc_attr($form_accept_link_target); ?>">
              <?php echo esc_html($form_accept_link_title); ?>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="vertical-scrolling about">
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
                          <?php the_field('item'); ?>
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
<section class="vertical-scrolling gallery">
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
                  <div class="swiper-slide">
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
                <img src="<?php the_sub_field('img'); ?>" alt="">
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
        <?php endif;
      endwhile;
    endif; ?>
  </div>
</section>

<!-- BENEFITS -->
<section class="vertical-scrolling benefits">
  <div class="container">
    <h2 class="section-title">Наши преимущества</h2>
    <div class="benefits__cards">
      <div class="benefits-item" style="background-image: url('../img/benefits-quality.jpg');">
        <h3 class="benefits-item__title">Высокое качество</h3>
        <p class="benefits-item__text">Благодаря современному оборудованию</p>
      </div>
      <div class="benefits-item" style="background-image: url('../img/benefits-cycle.jpg');">
        <h3 class="benefits-item__title">Полный цикл производства</h3>
        <ul class="benefits-item__points">
          <li>Разработка</li>
          <li>Резка</li>
          <li>Гибка</li>
          <li>Сварка</li>
          <li>Покраска</li>
          <li>Сборка</li>
        </ul>
      </div>
      <div class="benefits-item" style="background-image: url('../img/benefits-experience.jpg');">
        <h3 class="benefits-item__title">Большой опыт в гибке листового металла</h3>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<div class="vertical-scrolling" style="justify-content: flex-end;">
  <section class="cta">
    <div class="container">
      <div class="cta__wrapper" style="background-image: url('../img/gibka-cta.jpg')">
        <div class="hero__left">
          <div class="hero__content">
            <h1 class="hero__title">Гибка листового металла от&nbsp;SOVTEST ATE</h1>
            <div class="hero__text">
              <p>Формирование, угловые изгибы, кромка, прочность, кастомизация.</p>
            </div>
          </div>
        </div>
        <div class="hero__right">
          <div class="form-wrapper">
            <h2 class="form-title">Оставьте заявку и мы свяжемся с вами</h2>
            <form action="#" class="form">
              <div class="form-group">
                <input type="text" class="form-input" placeholder="ФИО">
              </div>
              <div class="form-group">
                <input type="number" class="form-input" placeholder="+7 ___ ___ __ __">
              </div>
              <div class="form-group">
                <input type="text" class="form-input" placeholder="Whitelist">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="10" placeholder=""></textarea>
              </div>
              <div class="form-bottom">
                <div class="input-group file-upload">
                  <span class="wpcf7-form-control-wrap file-801 file-input">
                    <input type="file" size="40"
                      class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required form-control-file" id="cv_file"
                      accept=".jpg,.jpeg,.png,.gif,.pdf,.doc,.docx,.ppt,.pptx,.odt,.avi,.ogg,.m4a,.mov,.mp3,.mp4,.mpg,.wav,.wmv">
                  </span>
                  <label></label>
                </div>
                <input type="submit" value="Отправить заявку" class="button">
              </div>
            </form>
            <p class="accept">Нажимая кнопку “Отправить заявку” вы соглашаетесь с <a href="#">политикой
                конфиденциальности</a></p>
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
          <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="">
        </a>
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
      <div class="footer__bottom">
        <p class="footer__copy">© 1991-2023 «Совтест АТЕ», ООО <a href="#">Политика конфиденциальности</a></p>
        <ul class="footer__contacts">
          <li>
            <span>Телефон в Курске:</span>
            <p>8 (4712) 54 54 17, 73 04 90</p>
          </li>
          <li>
            <span>Факс:</span>
            <p>(472) 54 54 24</p>
          </li>
          <li>
            <span>Email:</span>
            <a href="mailto:rev-e@sovtest-ate.com">rev-e@sovtest-ate.com</a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
</div>

<?php get_footer(); ?>