<?php
  //Template Name: Eventos Corporativos
  get_header();
?>
<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
  <section class="section-birthday">
    <h1 data-aos="fade-up" data-aos-duration="3000" class="container title-home-all"><?php the_field('titulo_eventos_corporativos'); ?></h1>
    <p data-aos="fade-up" data-aos-duration="3000" class="quote-birthday">
      <?php the_field('frase_efeito_eventos_corporativos'); ?>
    </p>
    <div class="container">
      <p class="birthday-description"><?php the_field('paragrafo_eventos_corporativos'); ?></p>

      <div class="birthday-gallery">
        <div class="row">
        <?php
            
          $galeria_imagem_eventos_corporativos = get_field('galeria_imagem_eventos_corporativos');
          if(isset($galeria_imagem_eventos_corporativos)) { foreach($galeria_imagem_eventos_corporativos as $galeria_corporativo) { ?>

            <div>
              <a class="lightbox" href="<?php echo $galeria_corporativo['imagem_full_galeria_eventos_corporativos']; ?>">
              <img class="lozad" data-src="<?php echo $galeria_corporativo['imagem_galeria_eventos_corporativos']; ?>" alt="<?php echo $galeria_corporativo['descricao_imagem_eventos_corporativos']; ?>">
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