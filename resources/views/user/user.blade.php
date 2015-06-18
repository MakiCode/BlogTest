@extends('layouts.master')

@section('title', htmlentities($user->name))

@section('content')
<h2>Information:</h2>
@if(Auth::user())
<a href="{{ url('home/edit') }}">Update</a>
<form method="post" action="{{ url('/home') }}">
    <input type="hidden" name="_method" value="DELETE">
    {!! csrf_field() !!}

    <button type="submit">Delete</button>
</form>
@endif
<div>Name: {{$user->name}}</div>
<div>Role: {{$user->role}}</div>

@if(count($posts) > 0)
<h2>Posts:</h2>

@include('blog.blog_list')
@endif

@endsection
