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


  wp.customize( 'cd_button_text', function( value ) {
    value.bind( function( newval ) {
      $( 'a.button' ).html( newval );
    } );
  } );

  wp.customize( 'about_description', function( value ) {
    value.bind( function( newval ) {
      $( '#aboutSection p' ).text( newval );
    } );
  } );

  wp.customize( 'skills_description', function( value ) {
    value.bind( function( newval ) {
      $( '#skillsSection p' ).text( newval );
    } );
  } );

  wp.customize( 'skills_title', function( value ) {
    value.bind( function( newval ) {
      $( '#skillsSection h2' ).text( newval );
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








} )( jQuery );
