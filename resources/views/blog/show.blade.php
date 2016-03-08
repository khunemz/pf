@extends('layout.master')

@section('content')
    @include('elements.flash')
    <div #id="blogshow" class="box">
        <div class="box--heading">
            <h4>{{ $blog->title }}</h4>
        </div>
        <div class="box--body">
            <p>{{ $blog->body }}</p>
        </div>
        <div class="box--footer">
            <p>Created at {{ $blog->created_at }}</p>
            @if(Auth::user())
                <p>
                    <a href="{{ route('blog.edit', [$blog->id]) }}">Edit</a> |
                <form class="form-group" method="post" action="{{ route('blog.delete', [$blog->id]) }}">
                    <button class="btn btn-danger">Delete</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                </form>
                </p>
            @endif
        <p>
            <a href="{{ route('blog.index') }}">Go back to index</a>
        </p>
        </div>
    </div>
@endsection