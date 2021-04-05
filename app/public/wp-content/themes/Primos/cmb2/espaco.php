<?php

add_action('cmb2_admin_init', 'cmb2_fields_espaco');

function cmb2_fields_espaco() {
  $cmb = new_cmb2_box([
    'id' => 'espaco_box',
    'title' => 'Espaco',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-espaco.php',
    ],
  ]);

  // Título
  $cmb->add_field([
    'name' => 'Título Espaço',
    'id' => 'titulo_espaco',
    'type' => 'text',
  ]);
  
  $cmb->add_field([
    'name' => 'Parágrafo Espaço',
    'id' => 'paragrafo_espaco',
    'type' => 'textarea_small',
  ]);
  
  // Galeria Imagens
  $galeria_imagem_espaco = $cmb->add_field([
    'name' => 'Galeria Espaco',
    'id' => 'galeria_espaco',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar Imagem',
      'remove_button' => 'Remover Imagem',
    ],
  ]);

  $cmb->add_group_field($galeria_imagem_espaco, [
    'name' => 'Imagem Galeria Espaço (350x300 - .jpg)',
    'id' => 'imagem_galeria_espaco',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_group_field($galeria_imagem_espaco, [
    'name' => 'Título Imagem Galeria',
    'id' => 'título_imagem_galeria',
    'type' => 'text',
  ]);

  $cmb->add_group_field($galeria_imagem_espaco, [
    'name' => 'Descrição Imagem Galeria',
    'id' => 'descricao_imagem_galeria',
    'type' => 'text',
  ]);

}

?>