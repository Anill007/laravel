@php
    $names = array('shirt','pant','sweater', 'jacket');
    $prices = array(800,1000,1200, 500);
    $codes = array('a','b','c', 'd');
@endphp

<h1>Product Detail Page</h1>


@for($i = 0 ; $i<sizeof($names); $i=$i+1)

{{-- card here --}}
<div style="height: 300px; width: 300px; background-color: brown">
    <h4>Name: {{ $names[$i] }}</h4>
    <h4>Price: {{ $prices[$i] }}</h4>
    <h4>Code: {{ $codes[$i] }}</h4>
</div>

@endfor

