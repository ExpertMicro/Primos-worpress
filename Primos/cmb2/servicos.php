<?php 

add_action('cmb2_admin_init', 'cmb2_fields_servicos');

function cmb2_fields_servicos() {
  $cmb = new_cmb2_box([
    'id' => 'servicos_box',
    'title' => 'Serviços',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-servicos.php',
    ],
  ]);

  $cmb->add_field([
    'name' => 'Título Serviços',
    'id' => 'titulo_servicos',
    'type' => 'text',
  ]);

  $paragrafos_servicos = $cmb->add_field([
    'name' => 'Parágrafos',
    'id' => 'paragrafos_servicos',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar Parágrafo',
      'remove_button' => 'Remover Parágrafo',
    ],
  ]);

  $cmb->add_group_field($paragrafos_servicos, [
    'name' => 'Parágrafo',
    'id' => 'paragrafo_servicos',
    'type' => 'textarea_small',
  ]);

  $cmb->add_field([
    'name' => 'Título profissionais para serviços',
    'id' => 'titulo_profissionais_servicos',
    'type' => 'text',
  ]);

  // Lista de Serviços 01
  $lista_servicos_01 = $cmb->add_field([
    'name' => 'Lista de Serviços 01',
    'id' => 'lista_servicos_01',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar Item lista',
      'remove_button' => 'Remover Item lista',
    ],
  ]);

  $cmb->add_group_field($lista_servicos_01, [
    'name' => 'Lista 01',
    'id' => 'nome_servico_01',
    'type' => 'text',
  ]);

  $cmb->add_group_field($lista_servicos_01, [
    'name' => 'Imagem Lista 01',
    'id' => 'imagem_lista_01',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_group_field($lista_servicos_01, [
    'name' => 'Descrição da Imagem',
    'id' => 'descricao_imagem_servico_01',
    'type' => 'text',
  ]);


  $cmb->add_field([
    'name' => 'Título Comes e Bebes',
    'id' => 'titulo_come_bebes_servicos',
    'type' => 'text',
  ]);


  // Lista de Serviços 02
  $lista_servicos_02 = $cmb->add_field([
    'name' => 'Lista de Serviços 02',
    'id' => 'lista_servicos_02',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar Item lista',
      'remove_button' => 'Remover Item lista',
    ],
  ]);

  $cmb->add_group_field($lista_servicos_02, [
    'name' => 'Lista 02',
    'id' => 'nome_servico_02',
    'type' => 'text',
  ]);

  $cmb->add_group_field($lista_servicos_02, [
    'name' => 'Imagem Lista 02',
    'id' => 'imagem_lista_02',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_group_field($lista_servicos_02, [
    'name' => 'Descrição Imagem',
    'id' => 'descricao_imagem_servico_02',
    'type' => 'text',
  ]);


  //Decoração
  $cmb->add_field([
    'name' => 'Título Decoração',
    'id' => 'titulo_decoracao_servicos',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Parágrafo descrião Decoração',
    'id' => 'paragrafo_decoracao_servicos',
    'type' => 'textarea_small',
  ]);


  // Sessão contato sendo puxada da página serviços
  $cmb->add_field([
    'name' => 'Título Sessão Contato',
    'id' => 'titulo_section_contato',
    'type' => 'textarea_small',
  ]);

  $cmb->add_field([
    'name' => 'Chamada Sessão Contato',
    'id' => 'chamada_section_contato',
    'type' => 'text',
  ]);


  // Carousel Imagens Decoração
  $slider_decoracao = $cmb->add_field([
    'name' => 'Slider Decoracao',
    'id' => 'slider_decoracao',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar Item Slider',
      'remove_button' => 'Remover Item Slider',
    ],
  ]);

  $cmb->add_group_field($slider_decoracao, [
    'name' => 'Imagem Decoracao Slider',
    'id' => 'imagem_slide_decoracao',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_group_field($slider_decoracao, [
    'name' => 'Descrição Imagem',
    'id' => 'imagem_decoracao_descricao',
    'type' => 'text',
  ]);


  // Imagem Dúvida
  $cmb->add_field([
    'name' => 'Título Dúvida',
    'id' => 'titulo_duvida',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Parágrafo Dúvida',
    'id' => 'paragrafo_duvida',
    'type' => 'textarea_small',
  ]);

  $cmb->add_field([
    'name' => 'Imagem Dúvida',
    'id' => 'background_doubt_contact',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);
  
  $cmb->add_field([
    'name' => 'Chamada Contato',
    'id' => 'chamada_contato_duvida',
    'type' => 'text',
  ]);
  
}

?>