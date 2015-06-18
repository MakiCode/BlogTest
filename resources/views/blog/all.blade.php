@extends('layouts.master')

@section('title', '')

@section('content')

@foreach ($posts as $post)
<div class="post">
    <h2 class="title">{{ $post->title }}</h2>

    @if(Auth::user()->hasRole('editor'))
        <a href="{{ url($post->id . '/edit') }}">Edit</a>
        <form method="post" action="{{ url('/' . $post->id) }}">
            <input type="hidden" name="_method" value="DELETE">
            {!! csrf_field() !!}

           <button type="submit">Delete</button>
        </form>
    @endif

    <div class="body">
        {{ $post->body }}
    </div>
    <footer>
        <span class="by-line">By {{ $post->user->name }}</span><span class="on-line"> on <span class="timestamp">{{ $post->created_at }}</span></span>
    </footer>
</div>
@endforeach

{!! $posts->render() !!}
@endsection