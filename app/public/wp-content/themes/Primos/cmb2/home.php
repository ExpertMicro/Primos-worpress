<?php

add_action( 'cmb2_admin_init', 'cmb2_fields_home' );

function cmb2_fields_home() {
  $cmb = new_cmb2_box([
    'id' => 'home_box',
    'title' => 'Home',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php'
    ],
  ]);


  // Intro
  $cmb->add_field([
    'name' => 'Background Desktop Home (1440x620 - .jpg)',
    'id' => 'background_home_desktop',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_field([
    'name' => 'Background Mobile Home (375x359 - .jpg)',
    'id' => 'background_home_mobile',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_field([
    'name' => 'Titulo Introdução Home',
    'id' => 'titulo_introducao',
    'type' => 'textarea_small',
  ]);

  $cmb->add_field([
    'name' => 'Parágrafo Introdução Home',
    'id' => 'paragrafo_introducao',
    'type' => 'text',
  ]);


  // Sessão Eventos
  $cmb->add_field([
    'name' => 'Meus eventos Home',
    'id' => 'meus_eventos_introducao',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Título eventos Home',
    'id' => 'titulo_eventos_introducao',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Descrição eventos Home',
    'id' => 'descricao_eventos_introducao',
    'type' => 'textarea',
  ]);
  
  // Casamentos
  $cmb->add_field([
    'name' => 'Título Casamento Home',
    'id' => 'titulo_casamento_intro',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Chamada Casamento Home',
    'id' => 'chamada_casamento_intro',
    'type' => 'text',
  ]);
  
  $cmb->add_field([
    'name' => 'Imagem Casamento Desktop Home (277x501 - .jpg)',
    'id' => 'imagem_desktop_casamento_home',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_field([
    'name' => 'Imagem Mobile Casamentos Home (315x500 - .jpg)',
    'id' => 'imagem_mobile_casamento_home',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);


  // Aniversários
  $cmb->add_field([
    'name' => 'Título Aniversários Home',
    'id' => 'titulo_aniversarios_intro',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Chamada aniversarios Home',
    'id' => 'chamada_aniversarios_intro',
    'type' => 'text',
  ]);
  
  $cmb->add_field([
    'name' => 'Imagem Desktop aniversarios Home (277x501 - .jpg)',
    'id' => 'imagem_desktop_aniversarios_home',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_field([
    'name' => 'Imagem Mobile aniversarios Home (315x500 - .jpg)',
    'id' => 'imagem_mobile_aniversarios_home',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);


  // Formaturas
  $cmb->add_field([
    'name' => 'Título Formaturas Home',
    'id' => 'titulo_formaturas_intro',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Chamada formaturas Home',
    'id' => 'chamada_formaturas_intro',
    'type' => 'text',
  ]);
  
  $cmb->add_field([
    'name' => 'Imagem Desktop formaturas Home (277x501 - .jpg)',
    'id' => 'imagem_desktop_formaturas_home',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_field([
    'name' => 'Imagem Mobile aniversarios Home (315x500 - .jpg)',
    'id' => 'imagem_mobile_formaturas_home',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);


  // Eventos Corporativos
  $cmb->add_field([
    'name' => 'Título Eventos Corporativos Home',
    'id' => 'titulo_corporativos_intro',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Chamada corporativos Home',
    'id' => 'chamada_corporativos_intro',
    'type' => 'text',
  ]);
  
  $cmb->add_field([
    'name' => 'Imagem Desktop corporativos Home (277x501 - .jpg)',
    'id' => 'imagem_desktop_corporativos_home',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_field([
    'name' => 'Imagem Mobile corporativos Home (315x500 - .jpg)',
    'id' => 'imagem_mobile_corporativos_home',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);


  // Sessão Espaço / Estrutura 
  $cmb->add_field([
    'name' => 'Título Espaço Home',
    'id' => 'titulo_espaco_introducao',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Descrição Espaço Home',
    'id' => 'descricao_espaco_introducao',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Botão Chamada Espaço Home',
    'id' => 'chamada_espaco_introducao',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Imagem-01 Desktop Nosso Espaço Home (635x391 - .jpg)',
    'id' => 'imagem01_desktop_espaco_home',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_field([
    'name' => 'Imagem-01 Mobile Nosso Espaço Home (345x390 - .jpg)',
    'id' => 'imagem01_mobile_corporativos_home',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_field([
    'name' => 'Imagem-02 Desktop Nosso Espaço Home (445x651 - .jpg)',
    'id' => 'imagem02_desktop_espaco_home',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);



  // Sessão Clientes
  $slider_clientes_home = $cmb->add_field([
    'name' => 'Slider Clentes Home',
    'id' => 'slider_clientes_home',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar Slider',
      'remove_button' => 'Remover Slider',
    ],
  ]);

  $cmb->add_field([
    'name' => 'Título clientes Home',
    'id' => 'titulo_clientes_introducao',
    'type' => 'text',
  ]);

  $cmb->add_group_field($slider_clientes_home, [
    'name' => 'Foto Casamento Home (150x150 - .jpg)',
    'id' => 'foto_casamento_introducao',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_group_field($slider_clientes_home, [
    'name' => 'Nome Casamento Home',
    'id' => 'nome_casamento_introducao',
    'type' => 'text',
  ]);

  $cmb->add_group_field($slider_clientes_home, [
    'name' => 'Descrição Casamento Home',
    'id' => 'descricao_casamento_introducao',
    'type' => 'textarea_small',
  ]);



  // Sessão Localização
  $cmb->add_field([
    'name' => 'Título localização Home',
    'id' => 'titulo_localizacao_introducao',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Imagem Mapa Localização Home (730x400 - .jpg)',
    'id' => 'imagem_localizacao',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_field([
    'name' => 'Título endereço Home',
    'id' => 'titulo_endereco_introducao',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Descrição endereço Home',
    'id' => 'descricao_endereco_introducao',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Chamada endereço Home',
    'id' => 'chamada_endereco_introducao',
    'type' => 'text',
  ]);

}

?>