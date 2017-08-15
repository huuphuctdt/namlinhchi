<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
<script type='text/javascript' src='{{ url('/js/jquery.js') }}'></script>
<script type='text/javascript' src='{{ url('/js/jquery-migrate.min.js') }}'></script>
<script type='text/javascript' src='{{ url('/js/jquery.nivo.slider.js') }}'></script>
<script type='text/javascript' src='{{ url('/js/custom.js') }}'></script>
<script type='text/javascript' src='{{ url('/js/jquery.quovolver.min') }}'></script>
<script type='text/javascript' src='{{ url('/js/bootstrap.js') }}'></script>
<script type='text/javascript' src='{{ url('/js/owl.carousel.js') }}'></script>
<script type='text/javascript' src='{{ url('/js/jquery_013.js') }}'></script>
<script type='text/javascript' src='{{ url('/js/jquery_003.js') }}'></script>
<script type='text/javascript' src='{{ url('/js/screen.js') }}'></script>
<script type='text/javascript' src='{{ url('/js/jquery.prettyPhoto5152.js') }}'></script>
<script type='text/javascript' src='{{ url('/js/jquery.flexisel.js') }}'></script>
<script type='text/javascript' src='{{ url('/js/custom-animation.js') }}'></script>

<link rel='stylesheet' id='zylo-pro-basic-style-css' href='{{ url('/css/style.css') }}' type='text/css' media='all'/>
<link rel='stylesheet' id='zylo-pro-editor-style-css' href='{{ url('/css/editor-style.css') }}' type='text/css' media='all'/>
<link rel='stylesheet' id='zylo-pro-base-style-css' href='{{ url('/css/default.css') }}' type='text/css' media='all'/>
<link rel='stylesheet' id='zylo-pro-nivo-style-css' href='{{ url('/css/nivo-slider.css') }}' type='text/css' media='all'/>
<link rel='stylesheet' id='zylo-pro-font-awesome-style-css' href='{{ url('/css/font-awesome.css') }}' type='text/css' media='all'/>
<link rel='stylesheet' id='zylo-pro-animation-css' href='{{ url('/css/animation.css') }}' type='text/css' media='all'/>
<link rel='stylesheet' id='zylo-pro-hover-css' href='{{ url('/css/hover.css') }}' type='text/css' media='all'/>
<link rel='stylesheet' id='zylo-pro-hover-min-css' href='{{ url('/css/hover-min.css') }}' type='text/css' media='all'/>
<link rel='stylesheet' id='zylo-pro-testimonialslider-style-css' href='{{ url('/css/tm-rotator.css') }}' type='text/css' media='all'/>
<link rel='stylesheet' id='zylo-pro-responsive-style-css' href='{{ url('/css/responsive.css') }}' type='text/css' media='all'/>
<link rel='stylesheet' id='zylo-pro-owl-style-css' href='{{ url('/css/owl.carousel.css') }}' type='text/css' media='all'/>
<link rel='stylesheet' id='zylo-pro-mixitup-style-css' href='{{ url('/css/style-mixitup.css') }}' type='text/css' media='all'/>
<link rel='stylesheet' id='zylo-pro-prettyphoto-style-css' href='{{ url('/css/prettyPhotoe735.css') }}' type='text/css' media='all'/>
<link rel='stylesheet' id='zylo-pro-flexiselcss-css' href='{{ url('/css/flexiselcss.css') }}' type='text/css' media='all'/>
<link rel='stylesheet' id='zylo-pro-animation-style-css' href='{{ url('/css/animation-style.css') }}' type='text/css' media='all'/>




<script type='text/javascript' src='{{ url('/js/jquery.form.min.js') }}'></script>
<script type='text/javascript' src='{{ url('/js/scripts.js') }}'></script>