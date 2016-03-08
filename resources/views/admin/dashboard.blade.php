@extends('layout.master')
@section('content')
    @if(!Auth::user())
    <h4>Admin Sign in</h4>
    <form name="form__signin" class="form-group"
          action="{{ route('admin.signin') }}" method="post">
        <input name="email" type="text" placeholder="Email" class="form-control">
        <input name="password" type="password" placeholder="Password" class="form-control">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <button type="submit" class="btn btn-success">Sign in</button>
    </form>
    @endif
    @if(Auth::user())
    <hr />
    <h4>Assign new Admin</h4>
    <form name="form__signup" class="form-group"
          action="{{ route('admin.signup') }}" method="post">
        <input name="email" type="text" placeholder="Email" class="form-control">
        <input name="password" type="password" placeholder="Password" class="form-control">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <button type="submit" class="btn btn-success">Sign up</button>
    </form>
    <hr />
    <form name="form__signout" class="form-group"
          action="{{ route('admin.signout') }}" method="get">
        <button class="btn btn-danger">Sign out</button>
    </form>
    @endif
@endsection