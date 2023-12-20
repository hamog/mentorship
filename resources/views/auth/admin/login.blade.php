@extends('layouts.auth.master')

@section('content')
    <div class="page login-bg">
        <div class="page-single">
            <div class="container">
                <div class="row">
                    <div class="col mx-auto">
                        <div class="row justify-content-center">
                            <div class="col-md-7 col-lg-5">
                                <div class="card">
                                    <div class="p-4 pt-6 text-center">
                                        <h1 class="mb-2">Login</h1>
                                        <p class="text-muted">Sign In to your account</p>
                                    </div>

                                    @include('includes.errors')

                                    <form class="card-body pt-3" id="login" name="login"
                                          action="{{ route('admin.login') }}" method="post">
                                        @csrf

                                        <div class="form-group">
                                            <label class="form-label">Mobile</label>
                                            <input class="form-control" placeholder="Mobile" name="mobile" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <input class="form-control" placeholder="password" name="password"
                                                   type="password">
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                       name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">Remeber me</span>
                                            </label>
                                        </div>
                                        <div class="submit">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                        <div class="text-center mt-3">
                                            <p class="mb-2"><a href="#">Forgot Password</a></p>
                                            <p class="text-dark mb-0">Don't have account?<a class="text-primary ml-1"
                                                                                            href="#">Register</a></p>
                                        </div>
                                    </form>
                                    <div class="card-body border-top-0 pb-6 pt-2">
                                        <div class="text-center">
                                            <span class="avatar brround mr-3 bg-primary-transparent text-primary"><i
                                                        class="ri-facebook-line"></i></span>
                                            <span class="avatar brround mr-3 bg-primary-transparent text-primary"><i
                                                        class="ri-instagram-line"></i></span>
                                            <span class="avatar brround mr-3 bg-primary-transparent text-primary"><i
                                                        class="ri-twitter-line"></i></span>
                                        </div>
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
