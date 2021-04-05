<?php

add_action( 'cmb2_admin_init', 'cmb2_fields_home' );

function cmb2_fields_home() {
  $cmb = new_cmb2_box([
    'id' => 'home_box',
    'title' => 'Home',
    'object_types' => ['page', 'post'],
  ]);


  // Intro
  $cmb->add_field([
    'name' => 'XXXXXXXXXXXXXX',
    'id' => 'background_home_desktop',
    'type' => 'text',
  ]);

}

?>