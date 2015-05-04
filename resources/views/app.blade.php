<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.header')
	<title>@yield('title', 'E-commerce')</title>
</head>
<body>
	@include('partials.nav')
	@yield('content')

	@include('partials.scripts')
	@yield('footer')
</body>
</html>
