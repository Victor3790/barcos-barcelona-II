jQuery(document).ready(function($){

    $('#rate_slider').ship_slider({
        title:'PRECIO SEMANAL (€)', 
        min:2000, 
        max:800000,
        min_form_input: '#min_rate',
        max_form_input: '#max_rate'
    });

    $('#length_slider').ship_slider({
        title:'LARGO (METROS)', 
        min:13, 
        max:99,
        min_form_input: '#min_length',
        max_form_input: '#max_length'
    });

    $('#cabins_slider').ship_slider({
        title:'CAMAROTES', 
        min:1, 
        max:21,
        min_form_input: '#min_cabins',
        max_form_input: '#max_cabins'
    });

    $('.search__arrow').click(function(){
        if($(this).hasClass('search__arrow--shows'))
        {
            $(this).removeClass('search__arrow--shows');
            $(this).addClass('search__arrow--hides');
            $('.search__controls').toggle('slow');
        }
        else if($(this).hasClass('search__arrow--hides'))
        {
            $(this).removeClass('search__arrow--hides');
            $(this).addClass('search__arrow--shows');
            $('.search__controls').toggle('slow');
        }
    });

});