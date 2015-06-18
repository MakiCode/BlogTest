<div class="post">
    <h2 class="title">{{ $post->title }}</h2>

    <div class="body">
        {{ $post->body }}
    </div>
    <footer>
        <span class="by-line">By {{ $post->user->name }}</span><span class="on-line"> on <span class="timestamp">{{ $post->created_at }}</span></span>
    </footer>
</div>