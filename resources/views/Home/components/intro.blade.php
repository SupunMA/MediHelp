<section id="intro" class="clearfix">
    <div class="container">

        <div class="intro-img">
            <img src="homePage/img/3kingLogo.png" alt="" class="img-fluid">
        </div>

        <div class="intro-info">
              
            <h2>The<br> only place<br>that'll keep you cool.</h2>
            <div>
                @if (Route::has('login'))
                <div class="well">
                    @auth
                    <a href="{{ route('admin.home') }}" class="btn-get-started">My Account</a>
                    @else
                    <a href="{{ route('login') }}" class="btn-get-started">Login</a>

                    @if (Route::has('register2'))
                    <a href="{{ route('register2') }}" class="btn-services">Register</a>
                    @endif
                    @endif
                </div>
                @endif
            </div>





        </div>

    </div>
</section><!-- #intro -->