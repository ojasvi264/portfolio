@extends('backend.login_layout.app')

@section('content')
    <div style="background-color: #fb4c35">
        <div class="container" style="min-height: 100vh;">
            <div class="row align-content-center justify-content-center" style="height: 100vh;">
                <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                    <div class="card border-0 shadow-lg" style="border-radius: 20px;">
                        <div class="card-body">
                            <h1 class="card-title">Login</h1>
                            <hr>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3 btn-block">
                                    {{ __('Login') }}
                                </button>
                            </form>
                        </div>
                        <div class="card-body text-center pt-0">
                            <hr>
                            {{--                        Not Registered yet? <a href="{{route('register')}}">Register Now</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
