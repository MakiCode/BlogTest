@extends('layouts.master')

@section('title', htmlspecialchars($post->title, ENT_QUOTES, 'UTF-8'))

@section('content')

<div class="post">
    <h2 class="title">{{ $post->title }}</h2>
    @if(Auth::user()->hasRole('editor'))
        <a href="{{ url($post->id . '/edit') }}">Edit</a>
        <a href="{{ url($post->id . '/edit') }}">Edit</a>
    @endif

    <div class="body">
        {{ $post->body }}
    </div>
    <footer>
        <span class="by-line">By {{ $post->user->name }}</span><span class="on-line"> on <span class="timestamp">{{ $post->created_at }}</span></span>
    </footer>
</div>

@endsection