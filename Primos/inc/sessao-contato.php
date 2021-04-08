<?php $servicos = get_page_by_title('servicos')->ID; ?>
<section class="section-contact">
  <h3><?php the_field('titulo_section_contato', $servicos); ?></h3>
  <div class="button-contact">
    <a class="btn-desktop" href="/contato/"><?php the_field('chamada_section_contato', $servicos); ?></a>
  </div>
</section>