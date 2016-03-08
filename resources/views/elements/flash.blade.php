@if(Session::has('flash'))
    <center>
        <div class="alert-danger">
            <p>{{ Session::get('flash') }}</p>
        </div>
    </center>
@endif