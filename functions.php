<?php
  include('customizer.php');


  add_action( 'customize_preview_init', 'cd_customizer' );
  function cd_customizer() {
    wp_enqueue_script(
        'cd_customizer',
        get_template_directory_uri() . '/customizer.js',
        array( 'jquery','customize-preview' ),
        '',
        true
    );
  }
