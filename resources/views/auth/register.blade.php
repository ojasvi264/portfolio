@extends('backend.login_layout.app')

@section('content')
    <div style="background-color: #fb4c35">
        <div class="container" style="min-height: 100vh;">
            <div class="row align-content-center justify-content-center" style="height: 100vh;">
                <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                    <div class="card border-0 shadow-lg" style="border-radius: 20px;">
                        <div class="card-body">
                            <h1 class="card-title">Register</h1>
                            <hr>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
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
                                    <div class="col-12 mb-3">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3 btn-block">
                                    {{ __('Register') }}
                                </button>
                            </form>
                        </div>
                        <div class="card-body text-center pt-0">
                            <hr>
                            Already have an account? <a href="{{route('login')}}">Log In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
