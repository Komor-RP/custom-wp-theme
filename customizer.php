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
    'transport'   => 'refresh',
  ) );
  $wp_customize->add_control( 'email', array(
    'label'       => 'Email Address',
    'section'	    => 'social',
    'type'	      => 'text',
  ) );



  $wp_customize->add_setting( 'facebook' , array(
    'default'     => '#',
    'transport'   => 'refresh',
  ) );
  $wp_customize->add_control( 'facebook', array(
    'label'       => 'Facebook',
    'section'	    => 'social',
    'type'	      => 'text',
  ) );
  $wp_customize->add_setting( 'twitter' , array(
    'default'     => '#',
    'transport'   => 'refresh',
  ) );
  $wp_customize->add_control( 'twitter', array(
    'label'       => 'Twitter',
    'section'	    => 'social',
    'type'	      => 'text',
  ) );
  $wp_customize->add_setting( 'instagram' , array(
    'default'     => '#',
    'transport'   => 'refresh',
  ) );
  $wp_customize->add_control( 'instagram', array(
    'label'       => 'Instagram',
    'section'	    => 'social',
    'type'	      => 'text',
  ) );
  $wp_customize->add_setting( 'linkedin' , array(
    'default'     => '#',
    'transport'   => 'refresh',
  ) );
  $wp_customize->add_control( 'linkedin', array(
    'label'       => 'LinkedIn',
    'section'	    => 'social',
    'type'	      => 'text',
) );



/* ABOUT
-------------------------------------------------------
*/
  $wp_customize->add_section( 'about' , array(
    'title'       => 'About Section',
    'priority'    => 40,
  ) );

  $wp_customize->add_setting( 'about_description' , array(
    'default'     => 'Lorem ipsum dolor amet distillery copper mug put a bird
    on it four loko kombucha tilde cronut etsy thundercats quinoa 3 wolf moon
    dreamcatcher lumbersexual fixie ethical. Normcore kinfolk dreamcatcher snackwave.
    Pour-over hella pabst, squid man braid listicle hell of gastropub coloring
    book beard biodiesel post-ironic. Blog asymmetrical actually gentrify banh mi master cleanse.',

    'transport'          => 'postMessage',
    'sanitize_callback'  => 'wp_filter_nohtml_kses',
  ) );
  $wp_customize->add_control( 'about_description', array(
  'label'          => 'About Text',
  'description'    => 'Give an intro about yourself!',
  'section'        => 'about',
  'type'           => 'textarea',
  ) );

  $wp_customize->add_setting( 'about_display' , array(
    'default'     => true,
    'transport'   => 'refresh',
  ) );
  $wp_customize->add_control( 'about_display', array(
  'label'          => 'Show this section?',
  'section'        => 'about',
  'settings'       => 'about_display',
  'type'           => 'radio',
  'choices'        => array(
    'show'            => 'Yes',
    'hide'            => 'No',
  ),
  ) );




/* SKILLS
------------------------------------
*/
  $wp_customize->add_panel('skills', array(
    'title'       => 'Skills Section',
    'priority'    => 40,
    'description' => 'Adjust Content for Skills Section',

  ));

  $wp_customize->add_section( 'skills_general' , array(
    'title'       => 'Skills General',
    'panel'       => 'skills',
    'priority'    => 40,
  ) );


  $wp_customize->add_setting( 'display_skills' , array(
    'default'     => true,
    'transport'   => 'refresh',
  ) );
  $wp_customize->add_control( 'display_skills', array(
    'label'          => 'Show this section?',
    'section'        => 'skills_general',
    'settings'       => 'display_skills',
    'type'           => 'radio',
    'choices'        => array(
      'show'            => 'Yes',
      'hide'            => 'No',
    ),
  ) );

  $wp_customize->add_setting( 'skills_title' , array(
    'default'     => 'Skills',
    'transport'   => 'postMessage',
  ) );
  $wp_customize->add_control( 'skills_title', array(
    'label'       => 'Skills Title',
    'section'	    => 'skills_general',
    'type'	      => 'text',
  ) );

  $wp_customize->add_setting( 'skills_description' , array(
    'default'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.',

    'transport'          => 'postMessage',
    'sanitize_callback'  => 'wp_filter_nohtml_kses',
  ) );
  $wp_customize->add_control( 'skills_description', array(
  'label'          => 'Skills Text',
  'description'    => 'Talk about your talents!',
  'section'        => 'skills_general',
  'type'           => 'textarea',
  ) );

  $wp_customize->add_section( 'skills_graph' , array(
    'title'       => 'Edit Skills',
    'panel'       => 'skills',
    'priority'    => 50,
  ) );

  $wp_customize->add_setting( 'skill1_label' , array(
    'transport'   => 'postMessage',
  ) );
  $wp_customize->add_control( 'skill1_label', array(
    'label'       => 'Skill 1 Label',
    'section'	    => 'skills_graph',
    'type'	      => 'text',
  ) );

  $wp_customize->add_setting( 'skill1' , array(
    'transport'   => 'postMessage',
  ) );

  $wp_customize->add_control( new Customizer_Range_Value_Control( $wp_customize, 'skill1', array(
  	'type'     => 'range-value',
  	'section'  => 'skills_graph',
  	'settings' => 'skill1',
  	'label'    => __( 'Skill 1 Percentage' ),
  	'input_attrs' => array(
  		'min'    => 10,
  		'max'    => 100,
  		'step'   => 5,
    	),
  ) ) );

  $wp_customize->add_setting( 'skill2_label' , array(
    'transport'   => 'postMessage',
  ) );
  $wp_customize->add_control( 'skill2_label', array(
    'label'       => 'Skill 2 Label',
    'section'	    => 'skills_graph',
    'type'	      => 'text',
  ) );

  $wp_customize->add_setting( 'skill2' , array(
    'transport'   => 'postMessage',
  ) );

  $wp_customize->add_control( new Customizer_Range_Value_Control( $wp_customize, 'skill2', array(
  	'type'     => 'range-value',
  	'section'  => 'skills_graph',
  	'settings' => 'skill2',
  	'label'    => __( 'Skill 2 Percentage' ),
  	'input_attrs' => array(
  		'min'    => 10,
  		'max'    => 100,
  		'step'   => 5,
    	),
  ) ) );

  $wp_customize->add_setting( 'skill3_label' , array(
    'transport'   => 'postMessage',
  ) );
  $wp_customize->add_control( 'skill3_label', array(
    'label'       => 'Skill 3 Label',
    'section'	    => 'skills_graph',
    'type'	      => 'text',
  ) );

  $wp_customize->add_setting( 'skill3' , array(
    'transport'   => 'postMessage',
  ) );

  $wp_customize->add_control( new Customizer_Range_Value_Control( $wp_customize, 'skill3', array(
  	'type'     => 'range-value',
  	'section'  => 'skills_graph',
  	'settings' => 'skill3',
  	'label'    => __( 'Skill 3 Percentage' ),
  	'input_attrs' => array(
  		'min'    => 10,
  		'max'    => 100,
  		'step'   => 5,
    	),
  ) ) );

  $wp_customize->add_setting( 'skill4_label' , array(
    'transport'   => 'postMessage',
  ) );
  $wp_customize->add_control( 'skill4_label', array(
    'label'       => 'Skill 4 Label',
    'section'	    => 'skills_graph',
    'type'	      => 'text',
  ) );

  $wp_customize->add_setting( 'skill4' , array(
    'transport'   => 'postMessage',
  ) );

  $wp_customize->add_control( new Customizer_Range_Value_Control( $wp_customize, 'skill4', array(
  	'type'     => 'range-value',
  	'section'  => 'skills_graph',
  	'settings' => 'skill4',
  	'label'    => __( 'Skill 4 Percentage' ),
  	'input_attrs' => array(
  		'min'    => 10,
  		'max'    => 100,
  		'step'   => 5,
    	),
  ) ) );

  $wp_customize->add_setting( 'skill5_label' , array(
    'transport'   => 'postMessage',
  ) );
  $wp_customize->add_control( 'skill5_label', array(
    'label'       => 'Skill 5 Label',
    'section'	    => 'skills_graph',
    'type'	      => 'text',
  ) );

  $wp_customize->add_setting( 'skill5' , array(
    'transport'   => 'postMessage',
  ) );

  $wp_customize->add_control( new Customizer_Range_Value_Control( $wp_customize, 'skill5', array(
  	'type'     => 'range-value',
  	'section'  => 'skills_graph',
  	'settings' => 'skill5',
  	'label'    => __( 'Skill 5 Percentage' ),
  	'input_attrs' => array(
  		'min'    => 10,
  		'max'    => 100,
  		'step'   => 5,
    	),
  ) ) );



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

function show_skills_graph($skill) {
    echo
    "
    <div class='progress-bar progress-bar-striped' role='progressbar' aria-valuenow='" .  sanitize_text_field($skill) . "'
      aria-valuemin='0' aria-valuemax='100' style='width: " . sanitize_text_field($skill) . "%'>" . sanitize_text_field($skill) . "%
      <span class='sr-only'>" . sanitize_text_field($skill) . "%</span>
    </div> " ;
}


/*
function cd_show_main_button() {
    if( get_theme_mod( 'cd_button_display', 'show' ) == 'show' ) {
        echo "<a href='' class='button'>" . get_theme_mod( 'cd_button_text', 'Come On In' ) . "</a>";
    }
}*/
