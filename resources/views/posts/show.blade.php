@extends('layouts.app')
@section('title',$post['title'])

@section('content')
@if ($post['is_true'])
    <div>A new blog post</div>
    @else (!$post['is_true'])
    <div>Blog post is old of usin else if</div>
    @endif
<h1>{{ $post['title'] }}</h1>
<h1>{{ $post['content'] }}</h1>

<b:extends></b:extends>
@endsection