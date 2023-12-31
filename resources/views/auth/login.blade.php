@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header fs-2 text-center">{{ isset($url) ? ucwords($url) : ""}} {{ __('Login') }}</div>

                <div class="card-body">

                    @isset($url)
                    <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                    @else
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @endisset
                    @csrf

                        <div class="row d-grid gap-2 col-8 mx-auto">
                            <div class="col-0">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                       
                            <div class="col-0">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 
                                    'checked' : '' }}>
                                    <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="d-grid gap-2 col-8 mx-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                @endif
                            </div>
                        </div>
                    </form>

                    <div class="col-7 mx-auto"><hr></div>

                    <div class="d-grid gap-2 col-8 mx-auto">
                        <button type="button" class="btn btn-block btn-lg btn-outline-secondary">
                            <i class="fa-brands fa-google"></i> Continue with Google
                        </button>
                        <button type="button" class="btn btn-block btn-lg btn-outline-secondary">
                            <i class="fa-brands fa-facebook"></i> Continue with Facebook
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
