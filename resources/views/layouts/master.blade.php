<html>
<head>
    <title>Test blog - @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="banner">
    <ul class="nav nav-tabs">
        <li><a href="{{ url('/') }}">Front page</a></li>
        @if (Auth::check())
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('auth/logout') }}">Logout!</a></li>

        @if(Auth::user()->hasRole('editor'))
        <li><a href="{{ url('/create') }}">Create</a></li>
        @endif
        @else
        <li><a href="{{ url('auth/login') }}">Login!</a></li>
        <li><a href="{{ url('auth/register') }}">Register!</a></li>
        @endif
    </ul>

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