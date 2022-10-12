@extends('auth.master')

@section('title')
    Login
@endsection

@section('content')
<div class="wrapper-page">
    <div class="container-fluid p-0">
        <div class="card">
            <div class="card-body">

                <div class="text-center mt-4">
                    <div class="mb-1">
                        <a href="index.html" class="auth-logo">
                            <img src="{{ asset('backend/assets/images/glasstea.png') }}" height="70" class="logo-dark mx-auto" alt="">
                        </a>
                    </div>
                </div>

                <h4 class="text-muted text-center font-size-18"><b>Login ZeroPorto</b></h4>

                <div class="p-3">
                    <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />

                    <form class="form-horizontal mt-3" action="{{ route('login') }}" method="post">
                        @csrf

                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <input class="form-control" type="text" required="" name="username" placeholder="Username" value="{{ old('username') }}">
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <input class="form-control" type="password" name="password" required="" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="form-label ms-1" for="customCheck1">Remember me</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3 text-center row mt-3 pt-1">
                            <div class="col-12">
                                <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Masuk</button>
                            </div>
                        </div>

                        <div class="form-group mb-0 row mt-2">
                            <div class="col-sm-7 mt-3">
                                <a href="{{ route('admin.forget') }}" class="text-muted"><i class="mdi mdi-lock"></i> Lupa Password?</a>
                            </div>
                            <div class="col-sm-5 mt-3">
                                <a href="{{ route('register') }}" class="text-muted"><i class="mdi mdi-account-circle"></i> Buat Akun</a>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end -->
            </div>
            <!-- end cardbody -->
        </div>
        <!-- end card -->
    </div>
    <!-- end container -->
</div>
@endsection