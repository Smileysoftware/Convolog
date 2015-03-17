<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{!! Config::get('convolog.site_title') !!}</title>

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<link href="/css/all.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

    @include( 'partials.header' )

    <body>



        <section class="container">
            @yield('content')
        </section>

        @include('partials.footer')




    @if ( Session::has('notice-okay') )

    <section class="notice-okay notices">
        {{ Session::get('notice-okay') }}
    </section>

    @endif

    @if ( Session::has('notice-bad') )

    <section class="notice-bad notices">
        {{ Session::get('notice-bad') }}
    </section>

    @endif

    <div class="black"></div>
    <div class="comment_modal">
        <a class="cancel-button" href="#">Cancel</a>
        @yield('comment_modal')
    </div>


    </body>


	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/js/script.js"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-4051779-19', 'auto');
        ga('send', 'pageview');

    </script>
</body>
</html>
