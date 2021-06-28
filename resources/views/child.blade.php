@extends('parent')

@section('content')
    <h4>from child page</h4>
@stop

@section('fromparent')
    @parent
    <h4>from Child page</h4>
@stop