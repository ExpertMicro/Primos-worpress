<?php
  //Template Name: Home
  get_header();
?>
<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>

	<style type="text/css">
		.intro {
			background: url('<?php the_field('background_home_desktop'); ?>') no-repeat center;
			background-size: cover;
		}

		@media only screen and (max-width: 375px) {
			.intro {
			background: url('<?php the_field('background_home_mobile'); ?>') no-repeat center;
			background-size: cover;
		}

		}
	</style>

  <main>
    <div class="intro">
      <h1 data-aos="fade-up" data-aos-duration="3000"><?php the_field('titulo_introducao'); ?></h1>
      <p><?php the_field('paragrafo_introducao'); ?></p>

      <div class="button">
        <a class="btn-desktop" href="/contato/">Contate-nos</a>
      </div>
    </div>
  </main>

  <section class="events">
    <div class="my-events">
      <h3><?php the_field('meus_eventos_introducao'); ?></h3>
    </div>

    <div class="container-events">
      <div class="events-description">
        <h2 class="title-home-all"><?php the_field('titulo_eventos_introducao'); ?></h2>
        <p><?php the_field('descricao_eventos_introducao'); ?></p>
      </div>

      <div class="cards-events" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="50">
        <div class="item card-single">
          <div class="hover-effect">
            <picture>
              <source media="(max-width: 899px)" srcset="<?php the_field('imagem_mobile_casamento_home'); ?>">
              <img src="<?php the_field('imagem_desktop_casamento_home'); ?>" alt="Casamentos">
            </picture>
            <div class="overlay">
              <h3><?php the_field('titulo_casamento_intro'); ?></h3>
              <a class="btn-card-events" href="/casamentos/"><?php the_field('chamada_casamento_intro'); ?> </a>
            </div>
          </div>
        </div>

        <div class="item card-single">
          <div class="hover-effect">
            <picture>
              <source media="(max-width: 899px)" srcset="<?php the_field('imagem_mobile_aniversarios_home'); ?>">
              <img src="<?php the_field('imagem_desktop_aniversarios_home'); ?>" alt="Aniversários">
            </picture>
            <div class="overlay">
              <h3><?php the_field('titulo_aniversarios_intro'); ?></h3>
              <a class="btn-card-events" href="/aniversarios/"><?php the_field('chamada_aniversarios_intro'); ?></a>
            </div>
          </div>
        </div>

        <div class="item card-single">
          <div class="hover-effect">
            <picture>
              <source media="(max-width: 899px)" srcset="<?php the_field('imagem_mobile_formaturas_home'); ?>">
              <img src="<?php the_field('imagem_desktop_formaturas_home'); ?>" alt="Formatura">
            </picture>
            <div class="overlay">
              <h3><?php the_field('titulo_formaturas_intro'); ?></h3>
              <a class="btn-card-events" href="/formaturas/"><?php the_field('chamada_formaturas_intro'); ?></a>
            </div>
          </div>
        </div>

        <div class="item card-single">
          <div class="hover-effect">
            <picture>
              <source media="(max-width: 899px)" srcset="<?php the_field('imagem_mobile_corporativos_home'); ?>">
              <img src="<?php the_field('imagem_desktop_corporativos_home'); ?>" alt="Eventos Corporativos">
            </picture>
            <div class="overlay">
              <h3><?php the_field('titulo_corporativos_intro'); ?></h3>
              <a class="btn-card-events" href="/eventos-corporativos/"><?php the_field('chamada_corporativos_intro'); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>

  <section class="structure-session" data-aos="fade-up" data-aos-duration="2000">
    <h2 class="title-home-all"><?php the_field('titulo_espaco_introducao'); ?></h2>
    <div class="container">
      <div class="ceremony">
        <picture>
          <source media="(max-width: 599px)" srcset="<?php the_field('imagem01_mobile_corporativos_home'); ?>">
          <img src="<?php the_field('imagem01_desktop_espaco_home'); ?>" alt="Cerimônia de Casamento">
        </picture>
        <p><?php the_field('descricao_espaco_introducao'); ?></p>

        <a class="btn-desktop" href="/espaco/"><?php the_field('chamada_espaco_introducao'); ?></a>
      </div>

      <div class="ceremony-2">
        <img src="<?php the_field('imagem02_desktop_espaco_home'); ?>" alt="Sala de Cerimônia">
      </div>
    </div>
    
  </section>

  <section class="client-session" data-aos="fade-up" data-aos-duration="2000">
    <h2 class="title-home-all"><?php the_field('titulo_clientes_introducao'); ?></h2>
    <div class="container glide-clientes">
      <div class="glide__track" data-glide-el="track">
        <div class="glide__slides">

          <?php
            $slider_clientes_home = get_field('slider_clientes_home');
            if(isset($slider_clientes_home)) { foreach($slider_clientes_home as $slider) { ?>

            <div class="client">
              <img src="<?php echo $slider['foto_casamento_introducao']; ?>" alt="Casamento Sara e 
              Roberto">
              <h3><?php echo $slider['nome_casamento_introducao']; ?></h3>
              <p><?php echo $slider['descricao_casamento_introducao']; ?></p>
            </div>
            
          <?php } } ?>

        </div>
        
      </div>
      
    </div>
  </section>

  <section class="localization" data-aos="fade-up" data-aos-duration="2000">
    <h2 class="title-home-all"><?php the_field('titulo_localizacao_introducao'); ?></h2>
    <div class="container">
      <div class="map">
        <img src="<?php the_field('imagem_localizacao'); ?>" alt="Mapa">
      </div>
      <div class="address">
        <h3><?php the_field('titulo_endereco_introducao'); ?></h3>
        <p><?php the_field('descricao_endereco_introducao'); ?></p>
        <a href="https://goo.gl/maps/RGeVrc3i5AQCsEvV8"><?php the_field('chamada_endereco_introducao'); ?></a>
      </div>
    </div>
  </section>
<?php endwhile; else: endif; ?>
  <?php get_footer(); ?>