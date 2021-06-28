@php
$name = "Anil";
$type = "Khatra";
$show = true;
$arr = array("a","d","c","f","e");
@endphp

<?php 
$address = "Phidim";
?>


@if ($type == "Khatra")
<h1>Namaskar {{$name}} from {{$address}}</h1>
    
@else
    <h1>Hello {{$name}}</h1>
@endif

@foreach($arr as $item)
{{$item}}
@endforeach

