<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Default')</title>
{{-- 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
 --}}</head>
<body>

	<ul>
		<li><a href="/">Home</a></li>
		<li><a href="/cliente/">Clientes</a></li>
	</ul>

	@yield('content')

</body>
</html>