<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Holovanenko Sergei Portfolio</title>
        
        <link href="/css/portfolio/mainStyle.css" rel="stylesheet">
        <link href="css/portfolio/animate.css" rel="stylesheet" media="all">
        
        <script src="js/portfolio/jquery-3.2.1.min.js"></script>
        <script src="js/portfolio/jquery.spincrement.min.js"></script>
        <script src="js/portfolio/skillsAnimations.js"></script>
        
        <script>  
        
        /*$( window ).scroll( function (){
            
            $('#skillContent').each( function () {
                
                var showCounting = true; 
                
                var imagePos = $( this ).offset().top;
                
                var topOfWindow = $( window ).scrollTop();
                
                if ( imagePos < topOfWindow + ( $( window ).height()/3 ) && imagePos > topOfWindow ) {
                    
                    $('div .scaleLine').removeClass('cutedSize');
                    
                    if ( showCounting ) {
                        
                        $('.number').spincrement({
                            
                            duration: 3000
                        });
                    } 
                    
                } else {
                    
                    $('div .scaleLine').addClass('cutedSize');
                }
            })
        })
    */
        
        /*$( window ).scroll( function (){
            
            $('#skillContent').each( function () {
                
                var imagePos = $( this ).offset().top;
                
                var topOfWindow = $( window ).scrollTop();
                
                if ( imagePos < topOfWindow + ( $( window ).height()/3 ) && imagePos > topOfWindow ) {
                    
                    $('div .scaleLine').removeClass('cutedSize');
                    $('#scale_php').width().change( function () { $('#scaleValue_php').text( $('#scale_php').width() ) } );
                    
                } else {
                    
                    $('div .scaleLine').addClass('cutedSize');
                    
                }
            })
        })*/
        </script>
    </head>
    <body>
        
        <div class="menu">
            <ul>
                <a href="#"><li>Главная</li></a>
                <a href="#"><li>Навыки</li></a>
                <a href="#"><li>Опыт</li></a>
                <a href="#"><li>Портфолио</li></a>
                <a href="#"><li>Контакты</li></a>
            </ul>
        </div>
        
        @yield('content')
        
    </body>
</html>
