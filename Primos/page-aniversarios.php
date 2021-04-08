<?php
  //Template Name: Aniversarios
  get_header();
?>
<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
  <section class="section-birthday">
    <h1 data-aos="fade-up" data-aos-duration="3000" class="title-home-all"><?php the_field('titulo_aniversario'); ?></h1>
    <p data-aos="fade-up" data-aos-duration="3000" class="quote-birthday">
      <?php the_field('frase_efeito_aniversario'); ?>
    </p>
    <div class="container">
      <p class="birthday-description"><?php the_field('paragrafo_aniversario'); ?></p>

      <div class="birthday-gallery">
        
      <div class="row">
        <?php
          
          $galeria_imagem_aniversarios = get_field('galeria_imagem_aniversarios');
          if(isset($galeria_imagem_aniversarios)) { foreach($galeria_imagem_aniversarios as $galeria_aniversarios) { ?>

            <div>
              <a class="lightbox" href="<?php echo $galeria_aniversarios['imagem_full_galeria_aniversarios']; ?>">
                <img class="lozad" data-src="<?php echo $galeria_aniversarios['imagem_galeria_aniversario']; ?>" alt="<?php echo $galeria_aniversarios['descricao_imagem_aniversario']; ?>">
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