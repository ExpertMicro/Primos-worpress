<?php

add_action('cmb2_admin_init', 'cmb2_fields_sobre');

function cmb2_fields_sobre() {
  $cmb = new_cmb2_box([
    'id' => 'sobre_box',
    'title' => 'Sobre',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-sobre.php',
    ],
  ]);

  // Título
  $cmb->add_field([
    'name' => 'Título Sobre',
    'id' => 'titulo_sobre',
    'type' => 'text',
  ]);

  $paragrafos_sobre = $cmb->add_field([
    'name' => 'Parágrafos Sobre',
    'id' => 'paragrafos_sobre',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar Parágrafo',
      'remove_button' => 'Remover Parágrafo',
    ],
  ]);

  $cmb->add_group_field($paragrafos_sobre, [
    'name' => 'Paragrafo Sobre',
    'id' => 'paragrafo_sobre',
    'type' => 'textarea_small',
  ]);

}

?>