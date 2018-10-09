<?php
add_action( 'customize_register', 'cd_customizer_settings' );
function cd_customizer_settings( $wp_customize ) {
/* Tutorial Code
-------------------------------------------------------
*/

$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';


$wp_customize->add_section( 'cd_button' , array(
      'title'      => 'The Button',
      'priority'   => 20,
  ) );

  $wp_customize->add_setting( 'cd_button_display' , array(
      'default'     => true,
      'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( 'cd_button_display', array(
  'label' => 'Button Display',
  'section' => 'cd_button',
  'settings' => 'cd_button_display',
  'type' => 'radio',
  'choices' => array(
    'show' => 'Show Button',
    'hide' => 'Hide Button',
  ),
) );

  $wp_customize->add_setting( 'cd_button_text' , array(
    'default'     => 'Come On In',
    'transport'   => 'postMessage',
  ) );

  $wp_customize->add_control( 'cd_button_text', array(
    'label' => 'Button Text',
    'section'	=> 'cd_button',
    'type'	 => 'text',
  ) );





/* Theme Code
-------------------------------------------------------
*/

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
    'label'           => 'Profile Picture',
    'section'         => 'header_images',
    'button_labels'   => array(
      'select'      => 'Select Image',
      'change'      => 'Change Image',
      'remove'      => 'Remove',
      'default'     => 'Default',
      'frame_title' => 'Select Image',
      'frame_button' => 'Choose Image',
    )
  )) );

  $wp_customize->add_setting( 'background_image1' , array(
    'label'             => 'Change Image',
    'transport'         => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'background_image1', array(
    'label'           => 'Header Background Image',
    'section'         => 'header_images',
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

  $wp_customize->add_section( 'social' , array(
    'title'      => 'Contact Info and Social Media Links',
    'panel'      => 'header_area_panel',
    'priority'   => 40,
  ) );

  $wp_customize->add_setting( 'phone_number' , array(
    'default'     => 'Come On In',
    'transport'   => 'postMessage',
  ) );
  $wp_customize->add_control( 'phone_number', array(
    'label' => 'Phone Number',
    'section'	=> 'social',
    'type'	 => 'text',
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

function cd_show_main_button() {
    if( get_theme_mod( 'cd_button_display', 'show' ) == 'show' ) {
        echo "<a href='' class='button'>" . get_theme_mod( 'cd_button_text', 'Come On In' ) . "</a>";
    }
}
