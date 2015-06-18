<div class="post well">
    <h2 class="title"><a href="{{ url("/" . $post->id) }}">{{ $post->title }}</a></h2>

    @if(Auth::user() && Auth::user()->hasRole('editor'))
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
        <span class="by-line">By <a href="{{url('user/' . $post->user->id)}}">{{ $post->user->name }}</a></span><span class="on-line"> on <span class="timestamp">{{ $post->created_at }}</span></span>
    </footer>
</div>