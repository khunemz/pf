@extends('layout.master')
@section('content')
    {{--<Todo : include flash.blade.php--}}
    <!-- Flash -->
    @include('elements.flash')
    <!-- Hero -->
    @include('elements.hero')
    <!-- Our works -->
    @include('elements.portfolio')
    <!-- Skills -->
    @include('elements.skills')

@endsection