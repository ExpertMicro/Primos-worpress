<?php
  //Template Name: Contato
  get_header();
?>
<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
  <section class="session-contact">
    <div class="container">
      
      <div class="head-contact">
        <h3><?php the_field('titulo_contato') ?></h3>
        <p><?php the_field('endereco_contato'); ?></p>

        <div class="down-head">
          <div class="phone">
            <h4 class="h4-phone"><?php the_field('tipo_telefone_contato01'); ?></h4>
            <span class="span-phone"><?php the_field('numero_telefone_contato01'); ?></span>
          </div>
          <div class="phone">
            <h4 class="h4-phone"><?php the_field('tipo_telefone_contato02'); ?></h4>
            <span class="span-phone"><?php the_field('numero_telefone_contato02'); ?></span>
          </div>
        </div>
      </div>

      <div class="container-form">
        <form action="enviar.php" method="post" name="form" class="formphp">
          <div class="form-row">
            <div class="form-group">
              <label for="nome">Nome</label>
              <input id="nome" name="nome" class="form-control" type="text" placeholder="*Nome Completo" required>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" name="email" class="form-control" type="email" placeholder="*Seu email" required>
            </div>

            <div class="form-group">
              <label for="telefone">Telefone para Contato</label>
              <input id="telefone" name="telefone" class="form-control" type="number" placeholder="*Telefone para contato" required>
            </div>

            <!-- Anti-spam -->
            <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
            <input type="text" class="nao-aparece" name="leaveblank">
            <label class="nao-aparece" for="">Se você não é um robô, não mude este campo.</label>
            <input type="text" class="nao-aparece" name="dontchange" value="http://">
            <!--  -->

            <div class="form-group">
              <label for="tipoEvento">Tipo de Evento</label>
              <select name="tipoEvento" id="tipoEvento">
                <option value="">- Selecione o Evento -</option>
                <option value="casamento">Casamento</option>
                <option value="aniversario">Aniversário</option>
                <option value="formatura">Formatura</option>
                <option value="corporativo">Corporativo</option>
              </select>
            </div>

            <div class="col-md-6">

              <div class="form-group col-6">
                <label for="dataEvento">Data do Evento</label>
                <input id="dataEvento" name="dataEvento" class="form-control" type="date" placeholder="Data do Evento">
              </div>
  
              <div class="form-group col-6">
                <label for="conheceuSite">Como conheceu o site?</label>
                <select name="conheceuSite" id="conheceuSite" required>
                  <option value="">- *Como conheceu o site? -</option>
                  <option value="google">Google</option>
                  <option value="redes-sociais">Redes Sociais</option>
                  <option value="outros">Outros</option>
                </select>
              </div>
            </div>
            

            <div class="form-group">
              <label for="numeroConvidados">Número de convidados</label>
              <input id="numeroConvidados" name="numeroConvidados" class="form-control" type="number" placeholder="Número de convidados">
            </div>

            <div class="form-group">
              <label for="mensagem">Mensagem</label>
              <textarea name="mensagem" id="mensagem" cols="10" rows="5" placeholder="Mensagem"></textarea>
            </div>
            
          </div>

          <div class="button">
            <button id="enviar" name="enviar" type="submit" class="btn-desktop">Enviar</button>
          </div>
        </form>
        
        
      </div>
    </div>
  </section>
  <?php endwhile; else: endif; ?>

<?php get_footer(); ?>