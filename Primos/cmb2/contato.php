<?php

add_action('cmb2_admin_init', 'cmb2_fields_contato');

function cmb2_fields_contato() {
  $cmb = new_cmb2_box([
    'id' => 'contato_box',
    'title' => 'Contato',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-contato.php',
    ],
  ]);

  $cmb->add_field([
    'name' => 'Título Contato',
    'id' => 'titulo_contato',
    'type' => 'text',  
  ]);

  $cmb->add_field([
    'name' => 'Endereço Contato',
    'id' => 'endereco_contato',
    'type' => 'textarea_small',  
  ]);

  $cmb->add_field([
    'name' => 'Tipo Telefone',
    'id' => 'tipo_telefone_contato01',
    'type' => 'text',  
  ]);

  $cmb->add_field([
    'name' => 'Número de Telefone',
    'id' => 'numero_telefone_contato01',
    'type' => 'text',  
  ]);

  $cmb->add_field([
    'name' => 'Tipo Telefone',
    'id' => 'tipo_telefone_contato02',
    'type' => 'text',  
  ]);

  $cmb->add_field([
    'name' => 'Número de Telefone',
    'id' => 'numero_telefone_contato02',
    'type' => 'text',  
  ]);


  // Início do Footer
  $cmb->add_field([
    'name' => 'Tipo Telefone',
    'id' => 'tipo_telefone_contato01',
    'type' => 'text',  
  ]);

  $cmb->add_field([
    'name' => 'Número de Telefone',
    'id' => 'numero_telefone_contato01',
    'type' => 'text',  
  ]);

  $cmb->add_field([
    'name' => 'Tipo Telefone',
    'id' => 'tipo_telefone_contato02',
    'type' => 'text',  
  ]);

  $cmb->add_field([
    'name' => 'Número de Telefone',
    'id' => 'numero_telefone_contato02',
    'type' => 'text',  
  ]);
  
  $cmb->add_field([
    'name' => 'Titulo redes sociais',
    'id' => 'titulo_redes_sociais',
    'type' => 'text',  
  ]);

  $redes_sociais = $cmb->add_field([
    'name' => 'Redes Sociais',
    'id' => 'redes_sociais',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar Rede',
      'remove_button' => 'Remover Rede',
    ],
  ]);

  $cmb->add_group_field($redes_sociais, [
    'name' => 'Link Social',
    'id' => 'link_social',
    'type' => 'text_url',
  ]);

  $cmb->add_group_field($redes_sociais, [
    'name' => 'Imagem Social',
    'id' => 'imagem_social',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_group_field($redes_sociais, [
    'name' => 'Nome da Rede Social',
    'id' => 'nome_social',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Título Email página Home',
    'id' => 'titulo_email_home',
    'type' => 'text',  
  ]);

  $cmb->add_field([
    'name' => 'Email página Home',
    'id' => 'email_home',
    'type' => 'text',  
  ]);

  $cmb->add_field([
    'name' => 'Copy',
    'id' => 'copy',
    'type' => 'text',  
  ]);

}

?>