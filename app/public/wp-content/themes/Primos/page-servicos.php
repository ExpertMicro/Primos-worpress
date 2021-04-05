<?php
  //Template Name: Servicos
  get_header();
?>
<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
  <section class="session-services">
    <h1 class="title-home-all" data-aos="fade-up" data-aos-duration="2000"><?php the_field('titulo_servicos'); ?></h1>
    <div class="container-services">
      <div class="services-description">
      <?php

        $paragrafos_sevicos = get_field('paragrafos_servicos');
        if(isset($paragrafos_sevicos)) { foreach($paragrafos_sevicos as $servicos) { ?>
  
          <p><?php echo $servicos['paragrafo_servicos']; ?></p>

      <?php } } ?>
      </div>    
      
      <div class="list-services">
        <h3><?php the_field('titulo_profissionais_servicos'); ?></h3>
        <ul>
          <li class="name-service">
            <?php

              $lista_sevicos_01 = get_field('lista_servicos_01');
              if(isset($lista_sevicos_01)) { foreach($lista_sevicos_01 as $lista) { ?>
              <li class="name-service">
                <img class="icon-service" src="<?php echo $lista['imagem_lista_01']; ?>" alt="<?php echo $lista['descricao_imagem_servico_01']; ?>">
                <span><?php echo $lista['nome_servico_01']; ?></span>
              </li>
            <?php } } ?>
          </li>
        </ul>
        <h3><?php the_field('titulo_come_bebes_servicos'); ?></h3>
        <ul>
          <li class="name-service">
          <?php

            $lista_sevicos_02 = get_field('lista_servicos_02');
            if(isset($lista_sevicos_02)) { foreach($lista_sevicos_02 as $lista02) { ?>
            <li class="name-service">
              <img class="icon-service" src="<?php echo $lista02['imagem_lista_02']; ?>" alt="<?php echo $lista02['descricao_imagem_servico_02']; ?>">
              <span><?php echo $lista02['nome_servico_02']; ?></span>
            </li>
          <?php } } ?>
          </li>
        </ul>
      </div>

      <div class="decoration">
        <h3><?php the_field('titulo_decoracao_servicos'); ?></h3>
        <p><?php the_field('paragrafo_decoracao_servicos'); ?></p>
        <div class="container-carousel">
          <div class="glide">
            <div class="glide__track" data-glide-el="track">
              <div class="glide__slides">

                <?php   
                  $slider_decoracao = get_field('slider_decoracao');
                  if(isset($slider_decoracao)) { foreach($slider_decoracao as $slide) { ?>
                    <div class="carousel-image">
                      <img src="<?php echo $slide['imagem_slide_decoracao']; ?>" alt="<?php echo $slide['imagem_decoracao_descricao']; ?>">
                    </div>
                <?php } } ?>
                
              </div>
            </div>
            <div class="glide__arrows" data-glide-el="controls">
              <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-left.svg" alt="seta esquerda">
              </button>
              <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right.svg" alt="seta esquerda">
              </button>
            </div>
          </div>
        </div>
      </div>
  
      <div class="doubt-contact">
        <style type="text/css">
          .doubt-contact {
	          background: url("<?php the_field('background_doubt_contact'); ?>") no-repeat center;
            background-size: cover;
            background-position: center;
          }
        </style>
        <h4><?php the_field('titulo_duvida'); ?></h4>
        <p><?php the_field('paragrafo_duvida'); ?></p>

        <div class="button-services">
          <a class="btn-desktop" href="/contato/"><?php the_field('chamada_contato_duvida'); ?></a>
        </div>
        
      </div>
    </div>
  </section>
  
  

  <?php include(TEMPLATEPATH . "/inc/sessao-contato.php"); ?>
  
  <?php endwhile; else: endif; ?>
  
<?php get_footer(); ?>