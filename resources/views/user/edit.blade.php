@extends('layouts.master')

@section('title', 'Edit ' . htmlentities($user->name))

@section('content')
<a href="{{ url('home/') }}">Back</a>
<form method="POST" action="/home">
    {!! csrf_field() !!}
    <input type="hidden" name="_method" value="PUT">

    <div class="col-md-6">
        Name
        <input type="text" name="name" value="{{ $user->name }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div class="col-md-6">
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <input type="checkbox" name="editor" {{ $user->role == 'editor' ? 'checked' : '' }}> Editor?
    </div>

    <div>
        <button type="submit">Update</button>
    </div>
</form>

@endsection