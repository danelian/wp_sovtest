<?php get_header('main'); ?>

<!-- MAIN -->
<section class="main">
  <div class="main__cards">

    <a href="<?php the_field('main-one_link'); ?>" class="main-card one" style="background-image: url('<?php the_field('main-one_image'); ?>')">
      <?php if (get_field('main-one_title')) { ?>
        <h1><?php the_field('main-one_title'); ?></h1>
      <?php } ?>
      <?php if (get_field('main-one_text')) { ?>
        <p><?php the_field('main-one_text'); ?></p>
      <?php } ?>
    </a>

    <a href="<?php the_field('main-two_link'); ?>" class="main-card two" style="background-image: url('<?php the_field('main-two_image'); ?>')">
      <?php if (get_field('main-two_title')) { ?>
        <h1><?php the_field('main-two_title'); ?></h1>
      <?php } ?>
      <?php if (get_field('main-two_text')) { ?>
        <p><?php the_field('main-two_text'); ?></p>
      <?php } ?>
    </a>

    <a href="<?php the_field('main-three_link'); ?>" class="main-card three" style="background-image: url('<?php the_field('main-three_image'); ?>')">
      <?php if (get_field('main-three_title')) { ?>
        <h1><?php the_field('main-three_title'); ?></h1>
      <?php } ?>
      <?php if (get_field('main-three_text')) { ?>
        <p><?php the_field('main-three_text'); ?></p>
      <?php } ?>
    </a>

    <a href="<?php the_field('main-four_link'); ?>" class="main-card four" style="background-image: url('<?php the_field('main-four_image'); ?>')">
      <?php if (get_field('main-four_title')) { ?>
        <h1><?php the_field('main-four_title'); ?></h1>
      <?php } ?>
      <?php if (get_field('main-four_text')) { ?>
        <p><?php the_field('main-four_text'); ?></p>
      <?php } ?>
    </a>

    <a href="<?php the_field('main-five_link'); ?>" class="main-card five" style="background-image: url('<?php the_field('main-five_image'); ?>')">
      <?php if (get_field('main-five_title')) { ?>
        <h1><?php the_field('main-five_title'); ?></h1>
      <?php } ?>
      <?php if (get_field('main-five_text')) { ?>
        <p><?php the_field('main-five_text'); ?></p>
      <?php } ?>
    </a>

  </div>
</section>

<?php get_footer('main'); ?>