<div style="display: none;" class="modal modal-order" id="modal-order">
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
  <p class="accept">Нажимая кнопку “Отправить заявку” вы соглашаетесь с <a target="_blank"
      href="<?php echo get_privacy_policy_url(); ?>">политикой конфиденциальности</a></p>
</div>

<div style="display: none;" class="modal modal-order-yes" id="modal-order-yes">
  <div class="modal-heading">
    <h2 class="title-1">The application <span>is&nbsp;complete</span></h2>
    <p class="title-2">You will receive payment details
      in the specified messenger</p>
  </div>
  <div class="modal-bottom">
    <p class="title-2"><span>Thank you</span> for choosing tpboost.io</p>
  </div>
</div>

<!-- Script-->
<?php wp_footer(); ?>

</body>

</html>