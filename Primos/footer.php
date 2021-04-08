<?php $contato = 18; ?>
<style type="text/css">
    .whatsapp-plug-icon {
      position: fixed;
      z-index: 1000;
      bottom: 20px;
      right: 20px;
      width: 70px;
      height: 70px;
      -webkit-border-radius: 50%;
      cursor: pointer;
      background-color: #0ba360;
      transition: .3s;
      background-position: center;
      background-repeat: no-repeat;
      background-image: url(http://primos.test/wp-content/themes/Primos/img/whatsapp.png);
      background-size: 50% auto;
      /* https://adsconcept.com.br/wp-content/uploads/2020/10/Whatsapp_AdsConcept.png */
    }

    .whatsapp-plug-icon:hover {
      background-color: #15cc74;
    }

    .whatsapp-plug-icon::after, .whatsapp-plug-icon::before {
      content: '';
      position: absolute;
      opacity: 0;
      border: 4px solid #0ba360;
      left: -10px;
      top: -10px;
      right: -10px;
      bottom: -10px;
      -webkit-border-radius: 50%;
      animation: WaveWhatsApp 1.5s ease infinite;
    }

    .whatsapp-plug-icon::after {
      animation-delay: .5s;
    }
    .whatsapp-plug-icon:hover::after {
      border: 4px solid #15cc74;
    }
    .whatsapp-plug-icon:hover::before {
      border: 4px solid #15cc74;
    }
    @keyframes WaveWhatsApp {
      0%{
        transform: scale(0.5);
      }
      50%{
        opacity: 1;
      }
      100%{
        transform: scale(1.2);
        opacity: 0;
      }
    }
  </style>

  <a target="_blank" class="whatsapp-plug-icon" href="https://api.whatsapp.com/send?phone=5519999999999&text=Texto%20aqui"></a>

  
  <footer class="footer">
    <div class="footer-content container">
      <div class="footer-phone">
        <div>
          <h3 class="phone"><?php the_field('tipo_telefone_contato01', $contato); ?></h3>
          <span><?php the_field('numero_telefone_contato01', $contato); ?></span>
        </div>

        <div>
          <h3 class="whatsapp"><?php the_field('tipo_telefone_contato02', $contato); ?></h3>
          <span><?php the_field('numero_telefone_contato02', $contato); ?></span>
        </div>
        
      </div>

      <div class="footer-social">
        <h3><?php the_field('titulo_redes_sociais', $contato); ?></h3>
        <ul>

          <?php
            $redes_sociais = get_field('redes_sociais', $contato);
            if(isset($redes_sociais)) { foreach($redes_sociais as $rede) { ?>
              <li>
                <a href="<?php echo $rede['link_social'] ?>" target="_blank">
                  <img src="<?php echo $rede['imagem_social'] ?>" 
                  alt="<?php echo $rede['nome_social'] ?>">
                </a></li>
          <?php } } ?>
          
        </ul>
      </div>

      <div class="footer-email">
        <h3><?php the_field('titulo_email_home', $contato); ?></h3>
        <span><?php the_field('email_home', $contato); ?></span>
      </div>
    </div>
    <div class="copy">
      <p><?php the_field('copy', $contato); ?></p>
    </div>
  </footer>

  

  <!-- Inicio wordpress Footer-->
  <?php wp_footer(); ?>

  <script>
    baguetteBox.run('.birthday-gallery');
  </script>
  
  <!-- Inicializa o lozad -->
  <script>
    lozad('.lozad', {
      load: function(el) {
        el.src = el.dataset.src;
        el.onload = function() {
          el.classList.add('fade')
        }
      }
    }).observe()
  </script>

  <!-- Init do Glide da Home sessão Clientes -->
  <script>
    const config = {
      type: 'carousel',
      perView: 3,
      gap: 40,
      autoplay: 3000,
      perTouch: 1,
      breakpoints: {
        1060: {
          perView: 2
        },
        730: {
          perView: 1,
        },
      }
    }

    new Glide('.glide-clientes', config).mount()
    
  </script>
  
  <!-- Init do Glide da página serviços Carousel decorações -->
  <script>
    const config2 = {
      type: 'carousel',
      perView: 4,
      breakpoints: {
        1550: {
          perView: 3
        },
        1160: {
          perView: 4
        },
        599: {
          perView: 2
        }
      }
    }
  
    new Glide('.glide', config2).mount()
  </script>
  
  <!-- AOS init -->
  <script>
    AOS.init({
        // Global settings:
        disable: 'mobile', // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 400, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });
  </script>
 
  <!-- Final wordpress Footer--> 
</body>
</html>
