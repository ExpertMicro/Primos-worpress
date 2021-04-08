<?php

add_action('cmb2_admin_init', 'cmb2_fields_eventos_corporativos');

function cmb2_fields_eventos_corporativos() {
  $cmb = new_cmb2_box([
    'id' => 'eventos_corporativos_box',
    'title' => 'Eventos Corporativos',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-eventos-corporativos.php',
    ],
  ]);

  $cmb->add_field([
    'name' => 'Título Eventos Corporativos',
    'id' => 'titulo_eventos_corporativos',
    'type' => 'text',  
  ]);

  $cmb->add_field([
    'name' => 'Frase de efeito Eventos Corporativos',
    'id' => 'frase_efeito_eventos_corporativos',
    'type' => 'textarea_small',  
  ]);

  $cmb->add_field([
    'name' => 'Parágrafo Eventos Corporativos',
    'id' => 'paragrafo_eventos_corporativos',
    'type' => 'textarea_small',  
  ]);


  // Galeria Aniversarios
  $galeria_eventos_corporativos = $cmb->add_field([
    'name' => 'Galeria Eventos Corporativos',
    'id' => 'galeria_imagem_eventos_corporativos',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar Imagem',
      'remove_button' => 'Remover Imagem',
    ],
  ]);

  $cmb->add_group_field($galeria_eventos_corporativos, [
    'name' => 'Imagem Full - Galeria Eventos Corporativos (1024x682 - .jpg)',
    'id' => 'imagem_full_galeria_eventos_corporativos',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);
  
  $cmb->add_group_field($galeria_eventos_corporativos, [
    'name' => 'Imagem Padrão - Galeria Eventos Corporativos (545x400 - .jpg)',
    'id' => 'imagem_galeria_eventos_corporativos',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_group_field($galeria_eventos_corporativos, [
    'name' => 'Descrição da imagem',
    'id' => 'descricao_imagem_eventos_corporativos',
    'type' => 'textarea_small',  
  ]);
}

?>