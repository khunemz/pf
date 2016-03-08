@extends('layout.master')
@section('content')
    {{--<Todo : include flash.blade.php--}}
    @include('elements.hero')
    <!-- Our works -->
    @include('elements.portfolio')
    <!-- Skills -->
    @include('elements.skills')

@endsection