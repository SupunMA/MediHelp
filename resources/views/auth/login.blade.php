@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11">
            <div class="">
                <!-- /.login-logo -->
                <div class="card card-outline card-danger">
                    <div class="card-header text-center">
                        <a href="{{ route('login') }}" class="h4"><b>3 Kings Swimming Pool Complex <br></b>(Pvt) Ltd</a>
                    </div>
                    <div class="card-body">
                        <p class="login-box-msg">Sign in to your Account</p>

                        <form action="{{ route('login') }}" method="post">
                            @csrf

                            {{-- Message --}}
                            @if (\Session::has('message')) 
                                <ul class="alert alert-danger" role="alert">
                                    <li>{!! \Session::get('message') !!}</li>
                                </ul>
                            @endif

                          
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="email" required placeholder="Email Address">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="far fa-address-card"></span>
                                    </div>
                                    
                                </div>
                            </div>
                                    

                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Password" name="password"
                                    required autocomplete="current-password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-key"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="social-auth-links text-center mt-2 mb-3">
                                <button type="submit" class="btn btn-block btn-danger">
                                    <i class="fas fa-sign-in-alt"></i> Sign in
                                </button>

                            </div>
                            <!-- /.social-auth-links -->
                        </form>

                       
                        <p class="mb-2">
                            <a href="{{ route('register2') }}" class="text-center">Register a new member</a>
                        </p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.login-box -->

        </div>

    </div>

</div>











@endsection
