<header id="header" class="fixed-top">
    <div class="container">

        <div class="logo float-left">
           
            <a href="#intro" class="scrollto"><img src="homePage/img/3kingLogo.png" alt="" class="img-fluid"></a>
        </div>


        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="/#intro">Home</a></li>

                @if (Route::has('login'))

                @auth
                <li> <a href="{{ route('admin.home') }}">My Account</a></li>
                @else
                <li><a href="{{ route('login') }}">Login</a></li>
                @if (Route::has('register'))
                <li><a href="{{ route('register2') }}">Register</a></li>
                @endif
                @endauth

                @endif


            </ul>
        </nav><!-- .main-nav -->

    </div>
</header><!-- #header -->