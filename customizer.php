<?php
add_action( 'customize_register', 'cd_customizer_settings' );
function cd_customizer_settings( $wp_customize ) {
  /* General
  -------------------------------------------------------
  */

  $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
  $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

/* Brand
-------------------------------------------------------
*/
  $wp_customize->add_panel( 'brand_panel', array(
    'title' => 'Branding',
    'description' => 'Add Your Personal Touch',
    'priority' => 30,
  ) );

  $wp_customize->add_section( 'brand_colors' , array(
    'title'      => 'Colors',
    'panel'      => 'brand_panel',
    'priority'   => 30,
  ) );

  $wp_customize->add_setting( 'background_color' , array(
    'default'     => '#d4d4d4',
    'transport'   => 'postMessage',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
  	'label'        => 'Background Color',
  	'section'      => 'brand_colors',
  	'settings'     => 'background_color',
  ) ) );

  $wp_customize->add_section( 'site_logo' , array(
    'title'      => 'Site Logo',
    'panel'      => 'brand_panel',
    'priority'   => 60,
  ) );

  $wp_customize->add_setting( 'site_logo' , array(
    'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'site_logo', array(
    'label'           => 'Default Image Control',
    'section'         => 'site_logo',
    'flex_width'      => true,
    'flex_height'     => true,
    'button_labels'   => array(
      'select'      => 'Select Image',
      'change'      => 'Change Image',
      'remove'      => 'Remove',
      'default'     => 'Default',
      'frame_title' => 'Select Image',
      'frame_button' => 'Choose Image',
    )

  )) );


/* Header
-------------------------------------------------------
*/

  $wp_customize->add_panel( 'header_area_panel', array(
    'title'       => 'Header Settings',
    'description' => 'Adjust Header Settings and Content',
    'priority'    => 40,
  ) );

  $wp_customize->add_section( 'header_images' , array(
    'title'      => 'Header Images',
    'panel'      => 'header_area_panel',
    'priority'   => 30,
  ) );
  $wp_customize->add_setting( 'profile_image' , array(
    'label'             => 'Change Image',
    'transport'         => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'profile_image', array(
    'label'          => 'Profile Picture',
    'section'        => 'header_images',
    'button_labels'  => array(
      'select'       => 'Select Image',
      'change'       => 'Change Image',
      'remove'       => 'Remove',
      'default'      => 'Default',
      'frame_title'  => 'Select Image',
      'frame_button' => 'Choose Image',
    )
  )) );

  $wp_customize->add_setting( 'background_image1' , array(
    'label'             => 'Change Image',
    'transport'         => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'background_image1', array(
    'label'          => 'Header Background Image',
    'section'        => 'header_images',
    'flex_width'     => true,
    'flex_height'    => true,
    'button_labels'  => array(
      'select'       => 'Select Image',
      'change'       => 'Change Image',
      'remove'       => 'Remove',
      'default'      => 'Default',
      'frame_title'  => 'Select Image',
      'frame_button' => 'Choose Image',
    )
  )) );

  $wp_customize->add_section( 'social' , array(
    'title'       => 'Contact Info and Social Media Links',
    'panel'       => 'header_area_panel',
    'priority'    => 40,
  ) );

  $wp_customize->add_setting( 'phone_display' , array(
    'default'     => true,
    'transport'   => 'refresh',
  ) );
  $wp_customize->add_control( 'phone_display', array(
  'label'          => 'Show the Phone Number',
  'description'    => 'Default is true',
  'section'        => 'social',
  'settings'       => 'phone_display',
  'type'           => 'radio',
  'choices'        => array(
    'show'            => 'Show',
    'hide'            => 'Hide',
  ),
  ) );
  $wp_customize->add_setting( 'phone_number' , array(
    'default'     => '1 (314) 765-9870',
    'transport'   => 'postMessage',
  ) );
  $wp_customize->add_control( 'phone_number', array(
    'label'       => 'Phone Number',
    'section'	    => 'social',
    'type'	      => 'text',
  ) );

  $wp_customize->add_setting( 'email_display' , array(
    'default'     => true,
    'transport'   => 'refresh',
  ) );
  $wp_customize->add_control( 'email_display', array(
  'label'         => 'Show Your Email',
  'description'   => 'Default is true',
  'section'       => 'social',
  'settings'      => 'email_display',
  'type'          => 'radio',
  'choices'       => array(
    'show'           => 'Show',
    'hide'           => 'Hide',
  ),
  ) );
  $wp_customize->add_setting( 'email' , array(
    'default'     => 'email@domain.com',
    'transport'   => 'postMessage',
  ) );
  $wp_customize->add_control( 'email', array(
    'label'       => 'Email Address',
    'section'	    => 'social',
    'type'	      => 'text',
  ) );



  $wp_customize->add_setting( 'facebook' , array(
    'default'     => '#',
    'transport'   => 'postMessage',
  ) );
  $wp_customize->add_control( 'facebook', array(
    'label'       => 'Facebook',
    'section'	    => 'social',
    'type'	      => 'text',
  ) );
  $wp_customize->add_setting( 'twitter' , array(
    'default'     => '#',
    'transport'   => 'postMessage',
  ) );
  $wp_customize->add_control( 'twitter', array(
    'label'       => 'Twitter',
    'section'	    => 'social',
    'type'	      => 'text',
  ) );
  $wp_customize->add_setting( 'instagram' , array(
    'default'     => '#',
    'transport'   => 'postMessage',
  ) );
  $wp_customize->add_control( 'instagram', array(
    'label'       => 'Instagram',
    'section'	    => 'social',
    'type'	      => 'text',
  ) );
  $wp_customize->add_setting( 'linkedin' , array(
    'default'     => '#',
    'transport'   => 'postMessage',
  ) );
  $wp_customize->add_control( 'linkedin', array(
    'label'       => 'LinkedIn',
    'section'	    => 'social',
    'type'	      => 'text',
  ) );



}

add_action( 'wp_head', 'cd_customizer_css');

function cd_customizer_css()
{
    ?>
         <style type="text/css">
             body { background: #<?php echo get_theme_mod('background_color', '#f4f4f4'); ?>; }
             #headerSection { background-image: url(" <?php echo wp_get_attachment_url( get_theme_mod( 'background_image1')); ?> "); }
         </style>
    <?php
}
function show_phone() {
  if( get_theme_mod( 'phone_display', 'show' ) == 'show' ) {
    $newval = get_theme_mod( 'phone_number' );
    preg_match_all("/\d/", $newval, $matches);
    $phoneValues = array_reverse($matches[0]);

    foreach ($phoneValues as $x) {
      $phoneLink = $phoneLink . $x;
    }
    $phoneLink = substr($phoneLink, 0, 4) . "-" . substr($phoneLink, 4, 3) . "-" . substr($phoneLink, 7, 3);
    $phoneLink = "tel:" . strrev($phoneLink);
    echo "<a href='$phoneLink'>" . get_theme_mod( 'phone_number' ) . "</a>";
  }
}


/*
function cd_show_main_button() {
    if( get_theme_mod( 'cd_button_display', 'show' ) == 'show' ) {
        echo "<a href='' class='button'>" . get_theme_mod( 'cd_button_text', 'Come On In' ) . "</a>";
    }
}*/
