@extends('layouts.app')

@section('content')

	<search-movie :id='{!! json_encode($id) !!}'></search-movie>

@endsection