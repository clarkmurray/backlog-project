@extends('layouts.app')

@section('content')

	<search-book :isbn='{!! json_encode($isbn) !!}'></search-book>

@endsection