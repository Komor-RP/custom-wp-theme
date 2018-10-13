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
    'title'       => 'Header Section',
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
  'label'          => 'Show Your Phone Number?',
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
    'default'     => 'Ipsum quis incididunt or ullamco deserunt but excepteur nor mollit. Occaecat. Dolores natus so sunt so omnis yet ad velit so consequat. Error laboriosam, and accusantium, or consequuntur, qui esse but quaerat. Exercitation aperiam nor dolores for illum illum. Consectetur ex so anim or architecto quo.',

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
    'priority'    => 50,
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
    'default'     => 'Ipsum quis incididunt or ullamco deserunt but excepteur nor mollit. Occaecat. Dolores natus so sunt so omnis yet ad velit so consequat. Error laboriosam, and accusantium, or consequuntur, qui esse but quaerat. Exercitation aperiam nor dolores for illum illum. Consectetur ex so anim or architecto quo.',

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


/* PROJECTS
------------------------------------
*/
  $wp_customize->add_panel('projects', array(
    'title'       => 'Projects Section',
    'priority'    => 60,
    'description' => 'Adjust Content for Projects Section',

  ));

  $wp_customize->add_section( 'projects_general' , array(
    'title'       => 'Projects General',
    'panel'       => 'projects',
    'priority'    => 0,
  ) );

  $wp_customize->add_setting( 'display_projects' , array(
    'default'     => true,
    'transport'   => 'refresh',
  ) );
  $wp_customize->add_control( 'display_projects', array(
    'label'          => 'Show this section?',
    'section'        => 'projects_general',
    'settings'       => 'display_projects',
    'type'           => 'radio',
    'choices'        => array(
      'show'            => 'Yes',
      'hide'            => 'No',
    ),
  ) );

  $wp_customize->add_setting( 'projects_title' , array(
    'default'     => 'Projects',
    'transport'   => 'postMessage',
  ) );
  $wp_customize->add_control( 'projects_title', array(
    'label'       => 'Projects Title',
    'section'	    => 'projects_general',
    'type'	      => 'text',
  ) );

  $wp_customize->add_setting( 'projects_description' , array(
    'default'     => 'Anim aspernatur, occaecat for si. Nemo non, mollit or aliqua reprehenderit laudantium and excepteur. Sunt. Sint excepteur yet pariatur ad culpa. Natus deserunt. Ratione totam irure. Aliquam proident so doloremque so iste nor unde. Est autem or aliquip consequat sed proident.',

    'transport'          => 'postMessage',
    'sanitize_callback'  => 'wp_filter_nohtml_kses',
  ) );
  $wp_customize->add_control( 'projects_description', array(
    'label'          => 'Projects Text',
    'description'    => 'Talk about your recent work!',
    'section'        => 'projects_general',
    'type'           => 'textarea',
  ) );

  $wp_customize->add_section( 'projects_blocks' , array(
    'title'       => 'Edit Projects',
    'panel'       => 'projects',
    'priority'    => 0,
  ) );

  $wp_customize->add_setting( 'projects_title1' , array(
    'default'     => 'Project Title',
    'transport'   => 'postMessage',
  ) );

  $wp_customize->add_control( 'projects_title1', array(
    'label'       => 'Project 1 Title',
    'section'	    => 'projects_blocks',
    'type'	      => 'text',
  ) );

  $wp_customize->add_setting( 'projects_description1' , array(
    'default'     => 'Autem amet, yet illum, incididunt velitesse ea. Ut proident yet consequuntur or occaecat fugiat yet magnam or elit. Corporis sunt consequat eius for error. Aliquam tempora consequuntur or voluptate. Nequeporro. Anim irure quis. Laborum occaecat laboris but sequi, but voluptatem or labore nor nulla. Quaerat. Sint. Aspernatur aliquip, do and duis and quaerat vitae labore. Cupidatat sint nor aut quam cupidatat ullam. Aspernatur si and inventore reprehenderit.',

    'transport'          => 'postMessage',
    'sanitize_callback'  => 'wp_filter_nohtml_kses',
  ) );
  $wp_customize->add_control( 'projects_description1', array(
    'label'          => 'Project 1 Description',
    'section'        => 'projects_blocks',
    'type'           => 'textarea',
  ) );


  $wp_customize->add_setting( 'projects_image1' , array(
    'transport'         => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'projects_image1', array(
    'label'           => 'Project 1 Image',
    'section'         => 'projects_blocks',
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


  $wp_customize->add_setting( 'projects_title2' , array(
    'default'     => 'Project Title',
    'transport'   => 'postMessage',
  ) );
  $wp_customize->add_control( 'projects_title2', array(
    'label'       => 'Project 2 Title',
    'section'	    => 'projects_blocks',
    'type'	      => 'text',
  ) );

  $wp_customize->add_setting( 'projects_description2' , array(
    'default'     => 'Ullamco nesciunt nequeporro iure non and laboris or ea. Nihil ullam. Et duis quis. Elit. Ab architecto or est tempora or cillum and officia. Illum natus nor occaecat and irure so nequeporro or ut yet laborum. Commodo aut aut nor velit yet minim laudantium magni. Explicabo anim so nostrum. Numquam sed ipsum nesciunt or aliqua ad or voluptatem. Numquam anim deserunt amet iste for eu. Nostrud labore ad yet nostrum or error est officia. Esse ipsa, aliquid autem illo nor culpa.',

    'transport'          => 'postMessage',
    'sanitize_callback'  => 'wp_filter_nohtml_kses',
  ) );
  $wp_customize->add_control( 'projects_description2', array(
    'label'          => 'Project 2 Description',
    'section'        => 'projects_blocks',
    'type'           => 'textarea',
  ) );

  $wp_customize->add_setting( 'projects_image2' , array(
    'transport'         => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'projects_image2', array(
    'label'           => 'Project 2 Image',
    'section'         => 'projects_blocks',
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

  $wp_customize->add_setting( 'projects_title3' , array(
    'default'     => 'Project Title',
    'transport'   => 'postMessage',
  ) );
  $wp_customize->add_control( 'projects_title3', array(
    'label'       => 'Project 3 Title',
    'section'	    => 'projects_blocks',
    'type'	      => 'text',
  ) );

  $wp_customize->add_setting( 'projects_description3' , array(
    'default'     => 'Adipisci nisi incidunt enim rem but quae adipisci. Laudantium. Sed. Deserunt nostrud. Iste molestiae est rem or anim, nostrud aliqua. Quis doloremque commodi eu. Dolor autem quae. Consequatur quae consequuntur numquam nor cupidatat and beatae so magnam. Deserunt eiusmod, eius. Exercitation consequuntur quae, illum voluptas or aute.',

    'transport'          => 'postMessage',
    'sanitize_callback'  => 'wp_filter_nohtml_kses',
  ) );
  $wp_customize->add_control( 'projects_description3', array(
    'label'          => 'Project 3 Description',
    'section'        => 'projects_blocks',
    'type'           => 'textarea',
  ) );

  $wp_customize->add_setting( 'projects_image3' , array(
    'transport'         => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'projects_image3', array(
    'label'           => 'Project 3 Image',
    'section'         => 'projects_blocks',
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

/* FOOTER
--------------------------------
*/

  $wp_customize->add_section( 'footer' , array(
    'title'       => 'Footer Section',
    'priority'    => 80,
  ) );

  $wp_customize->add_setting( 'footer_copy' , array(
    'default'     => 'Theme Made by Activate Digital Marketing',
    'transport'   => 'postMessage',
  ) );

  $wp_customize->add_control( 'footer_copy', array(
    'label'       => 'Footer Text',
    'section'	    => 'footer',
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
             #projectSection .work:first-child .img-container { background-image: url(" <?php echo wp_get_attachment_url( get_theme_mod( 'projects_image1' )); ?> "); }
             #projectSection .work:nth-child(2) .img-container { background-image: url(" <?php echo wp_get_attachment_url( get_theme_mod( 'projects_image2' )); ?> "); }
             #projectSection .work:nth-child(3) .img-container { background-image: url(" <?php echo wp_get_attachment_url( get_theme_mod( 'projects_image3' )); ?> "); }

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
