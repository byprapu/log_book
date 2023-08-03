@extends('layout/main')
@section('container')

@foreach ($blog as $blog_post)
<article class="mb-5">
<h2>
    <a href="/blog/{{ $blog_post["slug"] }}">{{ $blog_post["title"] }}</a>
</h2>
<h5>By : {{ $blog_post["author"] }}</h5>
<p>{{ $blog_post["body"] }}</p>
</article>
    

@endforeach
@endsection