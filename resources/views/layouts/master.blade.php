<html>
<head>
    <title>Test blog - @yield('title')</title>
</head>
<body>
<div class="banner">
    @if (Auth::check())
        <a href="{{ url('auth/logout') }}">Logout!</a>
    @else
        <a href="{{ url('auth/login') }}">Login!</a> <a href="{{ url('auth/register') }}">Register!</a>
    @endif
</div>
<div class="container">
    @yield('content')
</div>
</body>
</html>