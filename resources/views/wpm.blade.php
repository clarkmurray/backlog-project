@extends('layouts.app')

@section('content')

<reading-test wpm="{{ $user->wpm }}"></reading-test>


@endsection