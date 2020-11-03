@extends('app')
@section('content')
<h1>Hello From Roma </h1>
<p>It's Currently {{date('h:i: A')}}</p>
@endsection
@section('footer')
<p>Copyright All right reserved {{date('Y')}}&middot; <a href="">About</a></p>
@endsection