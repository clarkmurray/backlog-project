@extends('layouts.app')

@section('content')


	<api-search :prop_api='{!! Auth::user()->toJson() !!}'></api-search>


@endsection