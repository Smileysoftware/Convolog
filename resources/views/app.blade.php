<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{!! Config::get('noted.site_title') !!}</title>

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

    <header>

        <strong>
            <a href="/">{!! Config::get('noted.site_title') !!}</strong></a>

        <nav>
            <ul>
                @if (Auth::guest())
                    <li><a href="/auth/login">Login</a></li>
                    <li><a href="/auth/register">Register</a></li>
                @else
                    <li><a href="/auth/logout">Logout</a></li>
                @endif
            </ul>
        </nav>

    </header>

    <body>

        <section class="container">
            @yield('content')
        </section>

    </body>





	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>
</html>
