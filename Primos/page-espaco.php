<?php
  //Template Name: Espaco
  get_header();
?>
<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
  <section class="session-space">
    <h1 class="title-home-all" data-aos="fade-up" data-aos-duration="2000"><?php the_field('titulo_espaco'); ?></h1>

    <div class="container-space">
      <p class="space-description"><?php the_field('paragrafo_espaco'); ?></p>


      <div class="gallery">
        <?php
          $galeria_espaco = get_field('galeria_espaco');
          if(isset($galeria_espaco)) { foreach($galeria_espaco as $galeria) { ?>
            <div class="photo-gallery">
              <img src="<?php echo $galeria['imagem_galeria_espaco']; ?>" alt="<?php echo $galeria['descricao_imagem_galeria']; ?>">
              <div class="description-img">
                <p><?php echo $galeria['título_imagem_galeria']; ?></p>
              </div>
            </div>
        <?php } } ?>
      </div>
    </div>
  </section>


  <?php include(TEMPLATEPATH . "/inc/sessao-contato.php"); ?>

  <?php endwhile; else: endif; ?>
<?php get_footer(); ?>