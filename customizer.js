( function( $ ) {

  wp.customize( 'background_color', function( value ) {
		value.bind( function( newval ) {
			$( 'body' ).css( 'background-color', newval );
		} );
  } );

  wp.customize( 'blogname', function( value ) {
    value.bind( function( newval ) {
      $( '#site_logo h1 a' ).text( newval );
    } );
  } );

  wp.customize( 'blogdescription', function( value ) {
    value.bind( function( newval ) {
      $( '#site_logo h2' ).html( newval );
    } );
  } );

  wp.customize( 'phone_number', function( value ) {
    value.bind( function( newval ) {
      $( '#phone a' ).html( newval );
    } );
  } );

  wp.customize( 'email', function( value ) {
    value.bind( function( newval ) {
      $( '#email a' ).html( newval );
    } );
  } );

  wp.customize( 'about_description', function( value ) {
    value.bind( function( newval ) {
      $( '#aboutSection p' ).text( newval );
    } );
  } );

  wp.customize( 'skills_title', function( value ) {
    value.bind( function( newval ) {
      $( '#skillsSection h2' ).text( newval );
    } );
  } );

  wp.customize( 'skills_description', function( value ) {
    value.bind( function( newval ) {
      $( '#skillsSection p' ).text( newval );
    } );
  } );

  wp.customize( 'skill1_label', function( value ) {
    value.bind( function( newval ) {
      $( '#skillsSection label:first-child' ).text( newval );
      if (newval = "") {
        $( '#skillsSection .progress:nth-child(2)' ).css( 'display', 'none' );
      }
    } );
  } );

  wp.customize( 'skill1', function( value ) {
    value.bind( function( newval ) {
      newval = newval + "%";
      $( '#skillsSection .progress:nth-child(2) .progress-bar' ).text( newval );
      $( '#skillsSection .progress:nth-child(2) .progress-bar' ).css( 'width', newval );
    } );
  } );

  wp.customize( 'skill2_label', function( value ) {
    value.bind( function( newval ) {
      $( '#skillsSection label:nth-child(3)' ).text( newval );
      if (newval = "") {
        $( '#skillsSection label:nth-child(3)' ).css( 'display', 'none' );
      }
    } );
  } );

  wp.customize( 'skill2', function( value ) {
    value.bind( function( newval ) {
      newval = newval + "%";
      $( '#skillsSection .progress:nth-child(4) .progress-bar' ).text( newval );
      $( '#skillsSection .progress:nth-child(4) .progress-bar' ).css( 'width', newval );
    } );
  } );

  wp.customize( 'skill3_label', function( value ) {
    value.bind( function( newval ) {
      $( '#skillsSection label:nth-child(5)' ).text( newval );
    } );
  } );

  wp.customize( 'skill3', function( value ) {
    value.bind( function( newval ) {
      newval = newval + "%";
      $( '#skillsSection .progress:nth-child(6) .progress-bar' ).text( newval );
      $( '#skillsSection .progress:nth-child(6) .progress-bar' ).css( 'width', newval );
    } );
  } );

  wp.customize( 'skill4_label', function( value ) {
    value.bind( function( newval ) {
      $( '#skillsSection label:nth-child(7)' ).text( newval );
    } );
  } );

  wp.customize( 'skill4', function( value ) {
    value.bind( function( newval ) {
      newval = newval + "%";
      $( '#skillsSection .progress:nth-child(8) .progress-bar' ).text( newval );
      $( '#skillsSection .progress:nth-child(8) .progress-bar' ).css( 'width', newval );
    } );
  } );

  wp.customize( 'skill5_label', function( value ) {
    value.bind( function( newval ) {
      $( '#skillsSection label:nth-child(9)' ).text( newval );
    } );
  } );

  wp.customize( 'skill5', function( value ) {
    value.bind( function( newval ) {
      newval = newval + "%";
      $( '#skillsSection .progress:nth-child(10) .progress-bar' ).text( newval );
      $( '#skillsSection .progress:nth-child(10) .progress-bar' ).css( 'width', newval );
    } );
  } );


  wp.customize( 'projects_title', function( value ) {
    value.bind( function( newval ) {
      $( '#projectSection h2' ).text( newval );
    } );
  } );

  wp.customize( 'projects_description', function( value ) {
    value.bind( function( newval ) {
      $( '#projectSection .title_section p' ).text( newval );
    } );
  } );

  wp.customize( 'projects_title1', function( value ) {
    value.bind( function( newval ) {
      $( '#projectSection .work:first-child h3' ).text( newval );
    } );
  } );

  wp.customize( 'projects_description1', function( value ) {
    value.bind( function( newval ) {
      $( '#projectSection .work:first-child p' ).text( newval );
    } );
  } );

  wp.customize( 'projects_title2', function( value ) {
    value.bind( function( newval ) {
      $( '#projectSection .work:nth-child(2) h3' ).text( newval );
    } );
  } );

  wp.customize( 'projects_description2', function( value ) {
    value.bind( function( newval ) {
      $( '#projectSection .work:nth-child(2) p' ).text( newval );
    } );
  } );

  wp.customize( 'projects_title3', function( value ) {
    value.bind( function( newval ) {
      $( '#projectSection .work:nth-child(3) h3' ).text( newval );
    } );
  } );

  wp.customize( 'projects_description3', function( value ) {
    value.bind( function( newval ) {
      $( '#projectSection .work:nth-child(3) p' ).text( newval );
    } );
  } );

  wp.customize( 'footer_copy', function( value ) {
    value.bind( function( newval ) {
      $( 'footer p span' ).text( newval );
    } );
  } );







} )( jQuery );
