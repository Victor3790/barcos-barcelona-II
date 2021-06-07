jQuery(document).ready(function($){
    $("html"). on("contextmenu",function(e){ return false; });
    
    let menu            = $('#menu');
    let search          = $('#search');
    let window_width    = $( window ).width();
    let menu_width      = 0;

    if( window_width < 576 )
    {
        menu_width = '75%';
    }
    else if( window_width <  768 )
    {
        menu_width = '65%';
    }
    else if( window_width < 992 )
    {
        menu_width = '55%';
    }
    else
    {
        menu_width = '40%';
    }

    $( '#menu_icon' ).click( function(e){
        open( menu, search );
        e.stopPropagation();
    });

    $('#menu_close').click( function(e){
        close( menu );
        e.stopPropagation();
    });

    $('#search_icon').click(function(e) {
        open( search, menu );
        e.stopPropagation();
    })

    $('#search_close').click(function(e){
        close( search );
        e.stopPropagation();
    });

    /*$('body').click(function(e){
        if( !menu.is( e.target ) && menu.has(e.target).length === 0 )
            close(menu);

        if( !search.is( e.target ) && search.has(e.target).length === 0 )
            close(search);

    });*/

    function open( window, to_close )
    {
        if(to_close.css('width')!=='0px')
            close(to_close);

        if(window.css('width')==='0px')
        {
            window.animate(
                {
                    width: menu_width
                }, 
                {
                    duration: 190,
                    start: function(){window.css('display','block')}
                }
            );
        }
    }

    function close( window )
    {
        if(window.css('width')!=='0px')
        {
            window.animate({
                    width: '0'
                }, 
                {
                    duration: 190,
                    complete: function(){window.css('display','none')}
                }
            );
        }
    }
});
