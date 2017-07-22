{
    
    var showCounting = true;
    
    $( window ).scroll( function () {

        $('#skillContent').each( function () {

            var imagePos = $( this ).offset().top;

            var topOfWindow = $( window ).scrollTop();

            if ( imagePos < topOfWindow + ( $( window ).height()/3 ) && imagePos > topOfWindow ) {

                if ( showCounting ) {
                    
                    $('div .scaleLine').removeClass('cutedSize');

                    $('.number').spincrement({

                        duration: 4200
                    });
                    
                    showCounting = false;
                } 
                
            } 
            /*else {

                $('div .scaleLine').addClass('cutedSize');
            }
            */
        })
    })
}