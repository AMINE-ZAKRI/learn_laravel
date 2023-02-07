{{-- @extends('layouts.app')
@section('title','Blogpost')

@section('content')
@if (count($posts))
   <h1>{{ count($posts) }}</h1> 
@foreach ($posts as$key=>$post )
@break($key=2)
    <div>{{ $key }}.{{ $post[('title')] }}</div>
@endforeach
@else
NO  POST FOUND!
@endif

@section('content') --}}




@extends('layouts.app')
@section('title','Blogpost')

@section('content')
{{-- @each('posts.partials.post',$posts , 'post') --}}

@forelse ( $posts as $key=>$post )
{{-- @break($key===3)  --}}
{{-- @continue($key===2) --}}
@include('posts.partials.post')

@empty
NO  POST FOUND!
@endforelse ()

@endsection