<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>{{ $title }}</title>
</head>
{{ HTML::style('css/main.css'); }}
<body>
	@yield('header')
  
    @yield('content')
  
</body>
</html>