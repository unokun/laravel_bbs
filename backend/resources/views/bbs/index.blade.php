@extends('layouts.default')
@section('title', $title)
 
@section('content')
    <h1>{{ $title }}</h1>

    <form acrion="simple_bbs" action="POST">
        @csrf
    </form>
@endsection