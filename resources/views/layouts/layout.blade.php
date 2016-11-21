<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
		<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<!-- Foundation CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.css">
		@yield('libraries')		
	</head>
	<body>
		@yield('header')
		@yield('content')
		@yield('footer')
		
	</body>
</html>	