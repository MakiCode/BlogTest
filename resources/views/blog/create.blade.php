@extends('layouts.master')

@section('title', 'Create new content!')

@section('content')

<form method="POST" action="/">
    {!! csrf_field() !!}

    <div>
        Title
        <input type="input" name="title" value="">
    </div>

    <div>
        Content
        <textarea name="body"></textarea>
    </div>

    <div>
        <button type="submit">Submit</button>
    </div>
</form>
@endsection