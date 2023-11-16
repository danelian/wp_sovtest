<!-- FOOTER -->
<footer class="footer">
  <div class="container">
    <div class="footer__top">
      <a href="<?php echo get_home_url(); ?>" class="logo">
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

<!-- Script-->
<?php wp_footer(); ?>

</body>

</html>