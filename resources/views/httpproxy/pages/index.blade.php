@extends('httpproxy.layout')

@section('content')
	@include('httpproxy.components.hero')
	@include('httpproxy.components.explanation')
	@include('httpproxy.components.demo')
	@include('httpproxy.components.pricing')
	@include('httpproxy.components.cta')
@endsection
