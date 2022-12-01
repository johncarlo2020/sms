@extends('layouts.app')

@section('content')
<div class="container align-items-center text-center">
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-8 col-xs-8" style="margin-top: 18%;">
            <h3 class="txt-white reg-title">{{ __('Survey Management System') }}</h3>
            <div class="card border-radius-0 border-none">
                <!-- <div class="card-header">{{ __('Register') }}</div> -->

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <p>{{ __('Register') }}</p>
                        <div class="row mb-3 align-items-center">                            
                            <div class="col-md-12">
                            <input id="name" type="text" placeholder="{{ __('Name') }}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="off" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>

                        <div class="row mb-3">                            
                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="{{ __('Email') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">                            
                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">                            
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" placeholder="{{ __('Confirm Password') }}" class="form-control" name="password_confirmation" required autocomplete="off">
                            </div>
                        </div>

                        <div class="row mb-3">                            
                            <div class="col-md-12 text-left">
                                <p class="text-left"><b>Affiliation*</b></p>

                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="affiliation" id="student" checked>
                                <label class="form-check-label" for="student">
                                    Student
                                </label>
                                </div>
                                
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="affiliation" id="local_university">
                                <label class="form-check-label" for="local_university">
                                    Local University
                                </label>
                                </div>

                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="affiliation" id="foreign_university">
                                <label class="form-check-label" for="foreign_university">
                                    Foreign University
                                </label>
                                </div>

                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="affiliation" id="industry_govermental">
                                <label class="form-check-label" for="industry_govermental">
                                    Industry/Governmental Partner
                                </label>
                                </div>

                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="border-radius-0 border-none btn btn-primary col-md-12 col-xs-12 col-sm-12">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
