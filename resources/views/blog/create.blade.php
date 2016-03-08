@extends('layout.master')
@include('elements.flash')
@section('content')
    <h4>Create</h4>
    <form class="form-group" action="{{ route('blog.storeblog') }}" method="post">
        <input name="title" class="form-control" type="text" placeholder="Title"/>
        <textarea class="form-control" name="body" id="body" cols="30" rows="10"
                placeholder="Type something"></textarea>
        <input name="tag" class="form-control" type="text" placeholder="Tag"/>
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <button class="btn btn-default">Submit</button>
    </form>

@endsection