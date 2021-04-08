<?php

add_action('cmb2_admin_init', 'cmb2_fields_seo');

function cmb2_fields_seo() {
  $cmb = new_cmb2_box([
    'id' => 'seo_box',
    'title' => 'SEO',
    'object_types' => ['page', 'posts']
  ]);
  
  $cmb->add_field([
    'name' => 'Título do Site / Página',
    'id' => 'title_description',
    'type' => 'textarea_small',
  ]);

  $cmb->add_field([
    'name' => 'OG Title',
    'id' => 'og_title',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'OG Description',
    'id' => 'og_description',
    'type' => 'textarea_small',
  ]);

  $cmb->add_field([
    'name' => 'OG Site Name',
    'id' => 'og_site_name',
    'type' => 'text',
  ]);
}

?>