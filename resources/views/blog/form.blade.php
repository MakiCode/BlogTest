<form method="POST" action="/">
    {!! csrf_field() !!}

    <div>
        Title
        <input type="input" name="title" value="{{ $post->title  or ""}}">
    </div>

    <div>
        Content
        <textarea name="body">{{ $post->body or ""}}</textarea>
    </div>

    <div>
        <button type="submit">Submit</button>
    </div>
</form>