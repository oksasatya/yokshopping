@extends('layouts.app')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image: url('img/bg-1.jpg');"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-3">Sign up</h3>
                                </div>
                            </div>
                            <form action="{{ route('register') }}" method="POST" class="signin-form">
                                @csrf
                                <div class="form-group mt-3 mb-3">

                                    <input type="text" class="form-control  @error('name') is-invalid @enderror" required
                                        name="name" id="name" value="{{ old('name') }}">
                                    <label class="form-control-placeholder" for="name">Name</label>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3 mb-3">
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" required
                                        name="username" id="username" value="{{ old('username') }}">
                                    <label class="form-control-placeholder" for="username">Username</label>
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('seller') is-invalid @enderror" type="radio"
                                        name="roles" id="roles" value="seller" required>
                                    <label class="form-check-label" for="roles">Seller</label>
                                    @error('roles')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('seller') is-invalid @enderror" type="radio"
                                        name="roles" id="roles" value="users" required>
                                    <label class="form-check-label" for="roles">User</label>
                                    @error('roles')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-3 mb-3">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" required
                                        name="email" id="email" value="{{ old('email') }}">
                                    <label class="form-control-placeholder" for="email">Email</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" required
                                        name="password">
                                    <label class="form-control-placeholder" for="password">Password</label>
                                    <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password-confirm" type="password"
                                        class="form-control @error('password_confirmation') is-invalid @enderror" required
                                        name="password_confirmation">
                                    <label class="form-control-placeholder" for="password-confirm">Password
                                        Confirmation</label>
                                    <span toggle="#password-confirm"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>

                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                        Up</button>
                                </div>
                            </form>
                            <p class="text-center">already have account? <a data-toggle="tab"
                                    href="{{ route('login') }}">Sign In</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
