@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="container-fluid d-flex justify-content-center align-items-center" style="height:100vh; overflow:hidden;">
            <div class="card col-5 text-center d-flex align-items-center" style="overflow:hidden;">

                <div class="card-header col-12 fs-2 text-center"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Register') }}</div>

                <div class="card-body col-12">
                @isset($url)
                <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                @else
                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @endisset
                    
                    @csrf

                        <div class="row d-grid gap-2 col-8 mx-auto">
                            
                            <div class="col-0">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name & Surname" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <div class="col-0">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <div class="col-0">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <div class="col-0">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0 mt-3">
                            <div class="d-grid gap-2 col-8 mx-auto">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="d-grid gap-2 col-7 mx-auto my-3 fs-9 text-center">By creating an account, you agree to ImageryAfrica Terms of Use, Privacy Policy</div>
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
