<html>
    <head>
        <meta charset="UTF-8">
        <title>Holovanenko Sergei Portfolio</title>
        
        <link href="{{ asset('css/portfolio/mainStyle.css') }}" rel="stylesheet">
        <link href="{{ asset('css/portfolio/animate.css') }}" rel="stylesheet" media="all">
        @stack('project-style')
        
        <script src="{{ asset('js/portfolio/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('js/portfolio/jquery.spincrement.min.js') }}"></script>
        <script src="{{ asset('js/portfolio/skillsAnimations.js') }}"></script>
    </head>
    <body>        
        @yield('content')
    </body>
</html>
