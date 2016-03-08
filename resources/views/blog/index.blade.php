@extends('layout.master')
@section('content')
@foreach($blogs as $blog)
    <div class="box">
        <div class="box--heading" style="display: inline-block;">
            <a href="{{ route('blog.show', [$blog->id]) }}">
            <h4 class="text-muted">{{ $blog->title }}</h4>
            </a>
        </div>
        <div class="box--body">
            <p>{{ $blog->body }} </p>
        </div>
        <div class="box--footer">
            <p>
                <a href="{{ route('blog.show', [$blog->id]) }}">Read full article..</a>
            </p>
            <p>Created at {{ $blog->created_at }}</p>
            @if(Auth::user())
            <p>
                <a href="{{ route('blog.edit', [$blog->id]) }}">Edit</a>
                | <form class="form-group"
                        method="post"  action="{{ route('blog.delete', [$blog->id]) }}">
                    <button class="btn btn-danger">Delete</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                </form>
            </p>
            @endif
        </div>
    </div>
    <hr />
@endforeach
@endsection


