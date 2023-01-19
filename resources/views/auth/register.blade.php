@extends('layouts.app')

@section('content')
<div class="row register_content" >
         <div class="col-md-4 col-xs-12">
            <div class="card1">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}"  class="px-2" style="background-color:#f2f5f7;padding: inherit;">
                        <div style="text-align: center">
                            <h3>Sign up</h3>
                        </div>
                        @csrf
                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-9">
                                 <p style="margin-bottom:0px !important;">Please input your information</p>
                            </div>
                         </div>
                        <div class="row mb-3 justify-content-center" style="margin-bottom:30px !important;">

                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center" style="margin-bottom:30px !important;">

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center" style="margin-bottom:30px !important;">

                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center" style="margin-bottom:30px !important;">
                            <div class="col-md-9">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Re Password">
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                           <div class="col-md-9">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class='col-md-8 col-xs-12'>
            <div class="card1_1" >
                <div class="max-w-12xl mx-auto sm:px-3 lg:px-6 " style="border-radius: 5px;">
                          
                    <h3 style="font-weight:700;text-align:center">It’s easier to plan what to cook when you know what you have.</h3>
                    <h4 style="font-weight:700">At a glance</h4>
                    <h5>Sous is a smart cross-media cooking platform available as a mobile app. The app stores all recent food purchases and shows the user food they can make with what they have. Users can also upload their own culinary creations to the platform and share them with the global community.</h5>
                    <h4 style="font-weight:700">Our Mission</h4>
                    <h5>We all like to take a gaze in our refrigerator. Sous answers the common question “what should I eat?” by providing a virtual glance at your fridge while presenting a catalog of what you can make with each ingredient.
                    We are aiming to reduce wasted food by providing recipes that are relevant to the user’s unique food inventory.<h5>
                        
                </div>
            </div>
        </div>
</div>
@endsection
