
@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-8 col-xs-12">
            <div class="card2">
                <div class="row download_content" >
                    <div class="col-md-6">
                        <div>
                            <h3 class="download_h3">Download App</h3>
                            <p class="download_h5">Download the App and start the journey with Sous App now!!</p>
                        </div>
                        <div style="margin-bottom:50px">
                            <a href="{{ route('register') }}"><button type="button" class="btn btn-primary">Get Early Access
                            </button></a>
                        </div>
                    </div>
               </div>
            </div>
        </div>
</div>
@endsection
