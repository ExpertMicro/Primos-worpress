<?php

add_action('cmb2_admin_init', 'cmb2_fields_casamentos');

function cmb2_fields_casamentos() {
  $cmb = new_cmb2_box([
    'id' => 'casamentos_box',
    'title' => 'Casamentos',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-casamentos.php',
    ],
  ]);

  $cmb->add_field([
    'name' => 'Título Casamento',
    'id' => 'titulo_casamento',
    'type' => 'text',  
  ]);

  $cmb->add_field([
    'name' => 'Frase de efeito Casamento',
    'id' => 'frase_efeito_casamento',
    'type' => 'textarea_small',  
  ]);

  $cmb->add_field([
    'name' => 'Parágrafo Casamento',
    'id' => 'paragrafo_casamento',
    'type' => 'textarea_small',  
  ]);


  // Galeria Casamentos
  $galeria_imagem_casamentos = $cmb->add_field([
    'name' => 'Galeria Casamentos',
    'id' => 'galeria_imagem_casamentos',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar Imagem',
      'remove_button' => 'Remover Imagem',
    ],
  ]);

  $cmb->add_group_field($galeria_imagem_casamentos, [
    'name' => 'Imagem Full - Galeria Casamento (1024x682 - .jpg)',
    'id' => 'imagem_full_galeria_casamentos',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);
  
  $cmb->add_group_field($galeria_imagem_casamentos, [
    'name' => 'Imagem Padrão - Galeria Casamento (545x400 - .jpg)',
    'id' => 'imagem_galeria_casamentos',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_group_field($galeria_imagem_casamentos, [
    'name' => 'Descrição da imagem',
    'id' => 'descricao_imagem_casamento',
    'type' => 'textarea_small',  
  ]);
}

?>