@extends('layout.master')
@include('elements.flash')
@section('content')
    <h4>Edit</h4>
    <form class="form-group" action="{{ route('blog.update', [$blog->id]) }}"
            method="put">
        <input name="title" class="form-control" type="text" placeholder="Title"/>
        <input name="body" class="form-control" type="text" placeholder="Body"/>
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <button class="btn btn-default">Submit</button>
    </form>
@endsection