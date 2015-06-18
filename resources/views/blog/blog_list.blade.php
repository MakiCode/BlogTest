@foreach ($posts as $post)
@include('blog.post')
@endforeach

{!! $posts->render() !!}