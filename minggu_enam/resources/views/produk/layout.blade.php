<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="anpanman.css">
</head>
<body>
	<div class="wrap">
	<div class="header">
	<h1>Harry Potter</h1>
	</div>
	<div class="menu">
	<ul>
		<li>HTML</li>
		<li>CSS</li>
		<li>JS</li>
	</ul>
	</div>
	
	<div class="container">
		@yield('content')
	</div>
</body>
</html>