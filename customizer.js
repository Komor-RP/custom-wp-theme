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

  wp.customize( 'phone_number', function( value ) {
    value.bind( function( newval ) {
      $( '#phone.cardInfo a' ).text( newval );
      newval = newval.split("");
      var phoneLink = [];
      for (var i = 0; i < newval.length; i++) {
        if (newval[i].match(/\d/)) {
          phoneLink.push(newval[i]);
        }
      }
      if (phoneLink.length = 11) {
        phoneLink.reverse();
        phoneLink = `${phoneLink.slice(0,4)}-${phoneLink.slice(4,7)}-${phoneLink.slice(7,10)}-${phoneLink.slice(10)}`;
        phoneLink = phoneLink.split("").reverse();
        
        console.log(phoneLink);
      }


    } );
  } );




} )( jQuery );
