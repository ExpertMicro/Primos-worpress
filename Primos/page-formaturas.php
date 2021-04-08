<?php
  //Template Name: Formaturas
  get_header();
?>
<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
  <section class="section-birthday">
    <h1 data-aos="fade-up" data-aos-duration="3000" class="title-home-all"><?php the_field('titulo_formatura'); ?></h1>
    <p data-aos="fade-up" data-aos-duration="3000" class="quote-birthday">
      <?php the_field('frase_efeito_formatura'); ?>?>
    </p>
    <div class="container">
      <p class="birthday-description"><?php the_field('paragrafo_formatura'); ?></p>

      <div class="birthday-gallery">
        <div class="row">
          <?php
            
            $galeria_imagem_foramturas = get_field('galeria_imagem_formaturas');
            if(isset($galeria_imagem_foramturas)) { foreach($galeria_imagem_foramturas as $galeria_formaturas) { ?>

              <div>
                <a class="lightbox" href="<?php echo $galeria_formaturas['imagem_full_galeria_formaturas']; ?>">
                  <img class="lozad" data-src="<?php echo $galeria_formaturas['imagem_galeria_formaturas']; ?>" alt="<?php echo $galeria_formaturas['descricao_imagem_formatura']; ?>">
                </a>
              </div>
              
          <?php } } ?>

        </div>

      </div>
    </div>
  </section>


  <?php include(TEMPLATEPATH . "/inc/sessao-contato.php"); ?>

  <?php endwhile; else: endif; ?>
<?php get_footer(); ?>