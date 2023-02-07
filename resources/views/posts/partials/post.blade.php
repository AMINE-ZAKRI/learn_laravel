@if ($loop->even)
<div>{{ $key }}.{{ $post[('title')] }}</div>
@else 
<div style="background-color: red">{{ $key }}.{{ $post[('title')] }}</div>
<div style="background-color: rgb(0, 255, 115)">{{ $key }}.{{ $post[('content')] }}</div>

@endif