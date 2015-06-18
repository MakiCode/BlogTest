<html>
<head>
    <title>Test blog - @yield('title')</title>
</head>
<body>
<div class="banner">
    @if (Auth::check())
        <li><a href="{{ url('auth/logout') }}">Logout!</a></li>

        @if(Auth::user()->hasRole('editor'))
            <li><a href="{{ url('/create') }}">Create</a></li>
        @endif
    @else
        <li><a href="{{ url('auth/login') }}">Login!</a></li>
        <li><a href="{{ url('auth/register') }}">Register!</a></li>
    @endif


</div>
<div class="container">

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @yield('content')
</div>
</body>
</html>