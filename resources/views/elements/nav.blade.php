<!-- navigation -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-collapse">Menu</button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Experiences</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            {{--{!! Form::model('user', [--}}
                    {{--'method' => 'post',--}}
                    {{--'route' => ['admin.signin'],--}}
                    {{--'class' => 'navbar-form navbar-right'--}}
                {{--]) !!}--}}
            {{--{!! Form::text('email',[--}}
                    {{--'placeholder' => 'Email',--}}
                    {{--'class' => 'form-control'--}}
            {{--]) !!}--}}
            {{--{!! Form::password('password', [--}}
                    {{--'placeholder' => 'Password',--}}
                    {{--'class' => 'form-control'--}}
            {{--]) !!}--}}
            {{--{!! Form::submit('Sign in' ,[ 'class' => 'btn btn-success']) !!}--}}
            {{--{!! Form::token() !!}--}}
            {{--{!! Form::close() }--}}


            <form class="navbar-form navbar-right" role="form">
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Sign in</button>
            </form>

        </div><!-- End : navbar-collapse -->

    </div>
</div>
<!-- End : navigation -->