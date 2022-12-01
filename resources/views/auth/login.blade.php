@extends('layouts.app')

@section('content')

<div class="container align-items-center text-center">
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-8 col-xs-8" style="margin-top: 18%;">
            <h3 class="txt-white login-title">{{ __('Survey Management System') }}</h3>
            <div class="card border-radius-0 border-none">
                            
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <p>{{ __('Login') }}</p>
                        <div class="row mb-3 align-items-center">                            
                            <div class="col-md-12 margin-0-auto">
                                <input id="email" type="email" placeholder="{{ __('Email') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">                            
                            <div class="col-md-12 margin-0-auto">
                                <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="login-btn btn btn-primary float-right">
                                    {{ __('Login') }}
                                </button> 
                                <br><br>
                                <button type="submit" class="login-btn btn btn-primary float-right">
                                    {{ __('Login with IMU e-mail') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12">
                                @if (Route::has('password.request'))
                                    <div class="col-md-12 text-left">
                                        <a class="btn btn-link padding-0" href="{{ route('password.request') }}">
                                            <button type="button" class="btn btn-primary btn">{{ __('Forgot Your Password?') }}</button>
                                        </a> 
                                    </div>
                                 
                                    <div class="col-md-12 text-left" style="margin-top:3px;">
                                        <a class="btn btn-link padding-0" href="{{ route('register') }}">
                                            <button type="button" class="btn btn-primary btn">{{ __('Register') }}</button>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>                         
                    </form>
                </div>
                <div class="card-footer card-login-footer">
                    <div class="login-footer-logo">                        
                        <img class="float-right" src="{{ ('image/educores-logo.svg') }}" alt="educores logo">
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>

@endsection
