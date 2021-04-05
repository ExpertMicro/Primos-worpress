<?php
  //Template Name: Casamentos
  get_header();
?>
<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
  <section class="section-birthday">
    <h1 data-aos="fade-up" data-aos-duration="3000" class="title-home-all"><?php the_field('titulo_casamento') ?></h1>
    <p data-aos="fade-up" data-aos-duration="3000" class="quote-birthday">
      <?php the_field('frase_efeito_casamento'); ?>
    </p>
    <div class="container">
      <p class="birthday-description"><?php the_field('paragrafo_casamento'); ?></p>
 
      <div class="birthday-gallery">
        <div class="row">
        <?php
          
          $galeria_imagem_casamentos = get_field('galeria_imagem_casamentos');
          if(isset($galeria_imagem_casamentos)) { foreach($galeria_imagem_casamentos as $galeria_casamentos) { ?>

            <div>
              <a class="lightbox" href="<?php echo $galeria_casamentos['imagem_full_galeria_casamentos']; ?>">
                <img class="lozad" data-src="<?php echo $galeria_casamentos['imagem_galeria_casamentos']; ?>" alt="<?php echo $galeria_casamentos['descricao_imagem_casamento']; ?>">
              </a>
            </div>
              
          <?php } } ?>
          
        </div>
      </div>
  </section>

  <?php include(TEMPLATEPATH . "/inc/sessao-contato.php"); ?>

  <?php endwhile; else: endif; ?>
<?php get_footer(); ?>