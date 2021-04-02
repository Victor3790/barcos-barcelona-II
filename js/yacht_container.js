jQuery(document).ready(function($){

    let window_width    = $( window ).width();

    if( window_width >= 992 ) {
        
        let info_height = $( '.yacht-info-container' ).height();
        let contact_height = $( '.yacht-contact-container' ).height();
        //console.log(info_height + ' ' + contact_height);

        if( info_height > contact_height ) {
            $( '.yacht-contact-container' ).css( 'height', info_height - 45 );
            $( '#more_pics' ).css( 'margin-top', '25px' );
            $( '#more_pics_p' ).css('font-size', '18px');
        }
        else {
            $( '.yacht-info-container' ).css( 'height', contact_height - 40 );
            $( '#yacht_text_content' ).css( 'height', '99%' ); 
            $( '#info_row' ).css( 'height', '99%' );
            $( '.yacht-info' ).css( 'height', '99%' ).css( 'position', 'relative' );
            $( '#more_pics' ).css( 'position', 'absolute' ).css( 'bottom', '23px' );
            $( '#more_pics_p' ).css('font-size', '18px');
        }
    }

});