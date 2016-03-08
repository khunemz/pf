@if(Session::has('message'))
    <center>
        <div>
            <p>{{ Session::get('message') }}</p>
        </div>
    </center>
@endif

@if(count($errors)>0)
    <ul class="list-unstyled" style="text-align: center; color: red;">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif