<div style="display: none;" class="modal" id="modal-order">
  <h2 class="form-title">
    <?php the_field('form_title', 'options') ?>
  </h2>
  <div class="form">
    <?php echo do_shortcode('[contact-form-7 id="1518b7a" title="Форма в модальном окне"]'); ?>
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

<div style="display: none;" class="modal" id="modal-order-success">
  <h2 class="form-title">Ваша заявка успешно отправлена, ближайшее время с Вами свяжется наш менеджер</h2>
</div>

<!-- Script-->
<?php wp_footer(); ?>

</body>

</html>