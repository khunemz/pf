<!-- navigation -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-collapse">Menu</button>
            <a class="navbar-brand" href="{{ route('page.index') }}">Logo</a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Experiences</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="{{ route('blog.index') }}">Blog Post</a></li>
                <li><a href="#">Contact Us</a></li>
                @if(Auth::user())
                <li><a href="{{ route('page.getauth') }}">Go to dashboard</a></li>
                @endif
            </ul>
        </div><!-- End : navbar-collapse -->

    </div>
</div>
<!-- End : navigation -->