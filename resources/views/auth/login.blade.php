@extends('layouts.app')

@section('content')
<div class="row register_content" >
        <div class="col-md-4 col-xs-12"></div>
        <div class="col-md-4 col-xs-12">
            <div class="card1">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="px-2" style="background-color:f2f5f7;padding: inherit;">
                        <div style="text-align: center">
                            <h3>Log in</h3>
                        </div>
                        @csrf
                        <div class="row mb-3 justify-content-center">
                           <div class="col-md-9">
                                <p style="margin-bottom:0px !important;">Please login to your account</p>
                           </div>
                        </div>
                        <div class="row mb-3 justify-content-center" style="margin-bottom:30px !important;">
                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                           

                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                           <div class="col-md-9">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-12"></div>
</div>
@endsection
