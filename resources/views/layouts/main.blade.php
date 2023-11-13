<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Construction Company</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- Favicon -->
        <link href="{{ asset('img/favicon.ico') }}" rel="shortcut icon" />
        <!-- Font -->
        <link href='http://fonts.googleapis.com/css?family=Arimo:300,400,500,700,400italic,700italic' rel='stylesheet'/>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet'/>
        <!-- Font Awesome Icons -->
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"/>
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/hover-dropdown-menu.css') }}" rel="stylesheet"/>
        <!-- Icomoon Icons -->
        <link href="{{ asset('css/icons.css') }}" rel="stylesheet"/>
        <!-- Revolution Slider -->
        <link href="{{ asset('css/revolution-slider.css') }}" rel="stylesheet"/>
        <link href="{{ asset('rs-plugin/css/settings.css') }}" rel="stylesheet"/>
        <!-- Animations -->
        <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet"/>
        <!-- Owl Carousel Slider -->
        <link href="{{ asset('css/owl/owl.carousel.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/owl/owl.theme.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/owl/owl.transitions.css') }}" rel="stylesheet"/>
        <!-- PrettyPhoto Popup -->
        <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet"/>
        <!-- Custom Style -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet"/>
        <!-- Color Scheme -->
        <link href="{{ asset('css/color.css') }}" rel="stylesheet"/>
    </head>
    <body>
        <div id="app">
            @yield('content')
        <div>
        
        <!-- Sección de Js -->
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}" ></script> 
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script> 
        <!-- Menu jQuery plugin -->
        <script type="text/javascript" src="{{ asset('js/hover-dropdown-menu.js') }}"></script> 
        <!-- Menu jQuery Bootstrap Addon --> 
        <script type="text/javascript" src="{{ asset('js/jquery.hover-dropdown-menu-addon.js') }}"></script> 
        <!-- Scroll Top Menu -->
        <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script> 
        <!-- Sticky Menu --> 
        <script type="text/javascript" src="{{ asset('js/jquery.sticky.js') }}"></script> 
        <!-- Bootstrap Validation -->
        <script type="text/javascript" src="{{ asset('js/bootstrapValidator.min.js') }}"></script> 
        <!-- Revolution Slider -->
        <script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script> 
        <script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script> 
        <script type="text/javascript" src="{{ asset('js/revolution-custom.js') }}"></script> 
        <!-- Portfolio Filter -->
        <script type="text/javascript" src="{{ asset('js/jquery.mixitup.min.js') }}"></script> 
        <!-- Animations -->
        <script type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script> 
        <script type="text/javascript" src="{{ asset('js/effect.js') }}"></script> 
        <!-- Owl Carousel Slider -->
        <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script> 
        <!-- Pretty Photo Popup -->
        <script type="text/javascript" src="{{ asset('js/jquery.prettyPhoto.js') }}"></script> 
        <!-- Parallax BG -->
        <script type="text/javascript" src="{{ asset('js/jquery.parallax-1.1.3.js') }}"></script> 
        <!-- Fun Factor / Counter -->
        <script type="text/javascript" src="{{ asset('js/jquery.countTo.js') }}"></script> 
        <!-- Twitter Feed -->
        <script type="text/javascript" src="{{ asset('js/tweet/carousel.js') }}"></script> 
        <script type="text/javascript" src="{{ asset('js/tweet/scripts.js') }}"></script> 
        <script type="text/javascript" src="{{ asset('js/tweet/tweetie.min.js') }}"></script> 
        <!-- Background Video -->
		<script type="text/javascript" src="{{ asset('js/jquery.easypiechart.min.js') }}"></script> 
        <script type="text/javascript" src="{{ asset('js/jquery.mb.YTPlayer.js') }}"></script> 
        <!-- Custom Js Code -->
        <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>