<?php

add_action('cmb2_admin_init', 'cmb2_fields_formaturas');

function cmb2_fields_formaturas() {
  $cmb = new_cmb2_box([
    'id' => 'formaturas_box',
    'title' => 'Formaturas',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-formaturas.php',
    ],
  ]);

  $cmb->add_field([
    'name' => 'Título Formatura',
    'id' => 'titulo_formatura',
    'type' => 'text',  
  ]);

  $cmb->add_field([
    'name' => 'Frase de efeito Formatura',
    'id' => 'frase_efeito_formatura',
    'type' => 'textarea_small',  
  ]);

  $cmb->add_field([
    'name' => 'Parágrafo Formatura',
    'id' => 'paragrafo_formatura',
    'type' => 'textarea_small',  
  ]);


  // Galeria Aniversarios
  $galeria_imagem_formaturas = $cmb->add_field([
    'name' => 'Galeria Formaturas',
    'id' => 'galeria_imagem_formaturas',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar Imagem',
      'remove_button' => 'Remover Imagem',
    ],
  ]);

  $cmb->add_group_field($galeria_imagem_formaturas, [
    'name' => 'Imagem Full - Galeria Formaturas (1024x682 - .jpg)',
    'id' => 'imagem_full_galeria_formaturas',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);
  
  $cmb->add_group_field($galeria_imagem_formaturas, [
    'name' => 'Imagem Padrão - Galeria Formaturas (545x400 - .jpg)',
    'id' => 'imagem_galeria_formaturas',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_group_field($galeria_imagem_formaturas, [
    'name' => 'Descrição da imagem',
    'id' => 'descricao_imagem_formatura',
    'type' => 'textarea_small',  
  ]);
}

?>