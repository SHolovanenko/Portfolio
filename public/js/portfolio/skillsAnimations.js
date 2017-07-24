{
    
    $( document ).ready( function () {
        
        var showSkillValueCounting = true;
        
        var windowHeight = $( window ).height();
        
        var showAnimationSkills = true;
        
        var showAnimationHistory = true;

        $('#parallax').scroll( function () {
            
            if ( showAnimationSkills ){
                
               $('#listOfSkills').each( function () {
                
                    var imagePos = $( this ).offset().top;

                    if ( imagePos < windowHeight ) {

                            showSkillValueCounting = false;
                            
                            showAnimationSkills = false;

                            $('#listOfSkills .skillLine .scale .cutedSize').removeClass('cutedSize');

                            $('.number').spincrement({

                                duration: 4500
                            });
                    }
                }); 
            }



            if ( !showAnimationSkills && showAnimationHistory ) {
                
                $('#bgMountain').each( function () {

                    var imagePos = $( this ).offset().top;
                    if ( imagePos < 300) {

                        $('#bgMountain .cover .title').removeClass('hidden');

                        $('#bgMountain .cover .title').addClass('animated fadeInUp');
                    }
                });

                $('.storyContent').each( function () {

                    var imagePos = $( this ).offset().top;

                    if ( imagePos < ( windowHeight - 350 ) ) {

                        $( this ).removeClass('hidden');

                        $( this ).addClass('animated fadeInUp');
                    }
                });

                $('.connectorLine').each( function () {

                    var imagePos = $( this ).offset().top;

                    if ( imagePos < ( windowHeight - 250 ) ) {

                        $('.connectorLine').removeClass('connectorLineHidden');

                        $('.connectorLine').addClass('animated fadeInUpBig');
                    }
                });   
            }
        });
    });
}