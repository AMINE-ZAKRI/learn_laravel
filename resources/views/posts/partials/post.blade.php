@if ($loop->even)
<div>{{ $key }}.{{ $post[('title')] }}</div>
@else 
<div style="background-color: red">{{ $key }}.{{ $post[('title')] }}</div>
<div style="background-color: rgb(223, 203, 23)">{{ $key }}.{{ $post[('content')] }}</div>

@endif