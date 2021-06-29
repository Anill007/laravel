@extends('main')

{{-- yaha @endsection use gareko chu for example. --}}
@section('content-body')
    <h2>PRINTED FROM CHILD</h2>
@endsection


{{-- parent maa @show use garnu --}}
{{-- child maa @stop or @endsection junai vaye ne use garnu --}}
{{-- yaha @stop use gareko chu for example --}}
@section('replace')
    <h2>REPLACED FROM CHILD</h2>
@stop

