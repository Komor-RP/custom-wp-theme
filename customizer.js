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


  wp.customize( 'facebook' , function( value ) {
    value.bind( function( newval ) {
      $( '#socialBar .fa-facebook-square a' ).attr("href", newval);
    } );
  } );

  wp.customize( 'twitter' , function( value ) {
    value.bind( function( newval ) {
      $( '#socialBar .fa-twitter-square a' ).attr("href", newval);
    } );
  } );

  wp.customize( 'instagram' , function( value ) {
    value.bind( function( newval ) {
      $( '#socialBar .fa-instagram-square a' ).attr("href", newval);
    } );
  } );








} )( jQuery );
