<?php

add_action('cmb2_admin_init', 'cmb2_fields_aniversarios');

function cmb2_fields_aniversarios() {
  $cmb = new_cmb2_box([
    'id' => 'aniversarios_box',
    'title' => 'Aniversários',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-aniversarios.php',
    ],
  ]);

  $cmb->add_field([
    'name' => 'Título Aniversário',
    'id' => 'titulo_aniversario',
    'type' => 'text',  
  ]);

  $cmb->add_field([
    'name' => 'Frase de efeito Aniversário',
    'id' => 'frase_efeito_aniversario',
    'type' => 'textarea_small',  
  ]);

  $cmb->add_field([
    'name' => 'Parágrafo Aniversário',
    'id' => 'paragrafo_aniversario',
    'type' => 'textarea_small',  
  ]);


  // Galeria Aniversarios
  $galeria_imagem_aniversario = $cmb->add_field([
    'name' => 'Galeria Aniversários',
    'id' => 'galeria_imagem_aniversarios',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar Imagem',
      'remove_button' => 'Remover Imagem',
    ],
  ]);

  $cmb->add_group_field($galeria_imagem_aniversario, [
    'name' => 'Imagem Full - Galeria Aniversário (1024x682 - .jpg)',
    'id' => 'imagem_full_galeria_aniversarios',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);
  
  $cmb->add_group_field($galeria_imagem_aniversario, [
    'name' => 'Imagem Padrão - Galeria Aniversário (545x400 - .jpg)',
    'id' => 'imagem_galeria_aniversario',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_group_field($galeria_imagem_aniversario, [
    'name' => 'Descrição da imagem',
    'id' => 'descricao_imagem_aniversario',
    'type' => 'textarea_small',  
  ]);
}

?>