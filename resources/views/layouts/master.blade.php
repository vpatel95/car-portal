<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	@include('includes.stylesheets')

</head>
<body>
	<header>
		@yield('header')
	</header>
	<main>
		@yield('content')
	</main>

	

	@include('includes.scripts')

</body>
</html>