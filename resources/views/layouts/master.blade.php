<!doctype html>
<html>
<head>
	<title>
		@yield('title', 'Wobbly Queoray Tracker')
	</title>
	<meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="/css/main.css" type='text/css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    @yield('head')
</head>

<body>

    <section>
        @yield('content')
    </section>

</body>
</html>