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


  if ( class_exists( 'WP_Customize_Control' ) ) {
  	require_once( dirname(__FILE__) . '/customizer-range-value' . '/class-customizer-range-value-control.php' );
  }



  add_action( 'init', 'custom_script_load' );
  function custom_script_load() {
    wp_enqueue_script(
        'custom_script_load',
        get_template_directory_uri() . '/js/script.js',
        array( 'jquery' ),
        '',
        true
    );
  }
