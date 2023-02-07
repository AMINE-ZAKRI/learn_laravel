@extends('layouts.app')

@section('title')
@section('content')
<h1>home.blade</h1>
<div>
@for ($i=0;$i<10;$i++)
    <div>the current value is {{ $i }}</div>
@endfor
</div>
@endsection