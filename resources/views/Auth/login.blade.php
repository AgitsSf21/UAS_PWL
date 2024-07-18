@extends('Auth.layout.main')
@section('container')

    <body style="background-color: #051922">
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            @if (session()->has('success'))
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            @if (session()->has('loginError'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('loginError') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                        </div>
                                        <form action="/login-store" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <input type="email" name="email" id="email"
                                                    class="form-control form-control-user @error('email') is-invalid @enderror"
                                                    placeholder="Email" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" id="password"
                                                    class="form-control form-control-user @error('password') is-invalid @enderror"
                                                    placeholder="Password" required>
                                            </div>
                                            <button type='submit' class="btn user btn-block" style="background-color:#0d2835fe ; color:white;">
                                                Login
                                            </button>
                                            <hr>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="/register">Create an Account!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
