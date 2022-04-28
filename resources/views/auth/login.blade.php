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
                                    <h3 class="mb-3">Sign In</h3>
                                </div>
                            </div>
                            <form action="{{ route('login') }}" class="signin-form" id="signin-form" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input id="email-field" type="text"
                                        class="form-control @error('email') is-invalid @enderror" required name="email"
                                        id="email">
                                    <label class="form-control-placeholder" for="email">Email</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password"
                                        class="form-control @error('password') is-invalid @enderror" required
                                        name="password">
                                    <label class="form-control-placeholder" for="password">Password</label>
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                        Up</button>
                                </div>
                            </form>
                            <p class="text-center">Not a member? <a data-toggle="tab"
                                    href="{{ route('register') }}">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
