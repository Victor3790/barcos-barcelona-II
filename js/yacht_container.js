jQuery(document).ready(function($){

    let window_width    = $( window ).width();

    if( window_width >= 992 ) {
        
        let info_height = $( '.yacht-info-container' ).height();
        let contact_height = $( '.yacht-contact-container' ).height();
        console.log(info_height + ' ' + contact_height);

        if( info_height > contact_height )
            $( '.yacht-contact-container' ).css( 'height', info_height );
        else
            $( '.yacht-info-container' ).css( 'height', contact_height );
    }

});