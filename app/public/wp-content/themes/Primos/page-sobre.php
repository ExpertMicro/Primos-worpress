<?php
  //Template Name: Sobre
  get_header();
?>
<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
  <section class="session-about">
    <h1 data-aos="fade-up" data-aos-duration="2000"><?php the_field('titulo_sobre'); ?></h1>

    <div class="container">
      <?php

        $paragrafos_sobre = get_field('paragrafos_sobre');
        if(isset($paragrafos_sobre)) { foreach($paragrafos_sobre as $p) { ?>
          <p><?php echo $p['paragrafo_sobre']; ?></p>

      <?php } } ?>
    </div>
  </section>

  <?php include(TEMPLATEPATH . "/inc/sessao-contato.php"); ?>

  <?php endwhile; else: endif; ?>
<?php get_footer(); ?>