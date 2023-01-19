@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Card deck -->
    <div class="card-deck row">
      <div class="col-xs-12 col-sm-6 col-md-3">
            <!-- Card -->
            <div class="card">
            
                <!--Card image-->
                <div class="view overlay site_1">
                    <img class="card-img-top hover-rotate " src="{{ asset('image/site_logo/11.png') }}" alt="Card image cap">
                    <input class='url_1' style="display:none;" value='https://www.pccmarkets.com/'  />
                </div>
                <div class='site_form site_1_form px-2'>
                    <div class="row mb-3 justify-content-center" style="margin-bottom:10px !important;">
                        <div class="col-md-9">
                            <input id="email_1" type="text" class="form-control form_style" required  autofocus placeholder="Email or Phone">
                        </div>
                    </div>

                    <div class="row mb-3 justify-content-center">
                       

                        <div class="col-md-9">
                            <input id="password_1" type="password" class="form-control form_style" required  placeholder="Password">
                        </div>
                    </div>

                    <div class="row mb-3 justify-content-center">
                    <div class="col-md-9 d-flex justify-content-between px-4">
                        <div>
                                <button type="button" class="btn btn-primary w-100 save_1">save</button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary w-100 cancel_1">cancel</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="card_link">
                <button type='button' class="btn btn-light w-100 link_1">LINK ACCOUNT</button>
            </div>
      <!-- Card -->
      </div>

      <div class="col-xs-12 col-sm-6 col-md-3">
        <!-- Card -->
        <div class="card">
        
            <!--Card image-->
            <div class="view overlay site_2">
            <img class="card-img-top hover-rotate" src="{{ asset('image/site_logo/22.png') }}" alt="Card image cap">
            <input class='url_2' style="display:none;" value='https://metropolitan-market.com/'  />
            </div>
            <div class='site_form site_2_form px-2'>
                <div class="row mb-3 justify-content-center" style="margin-bottom:10px !important;">
                    <div class="col-md-9">
                        <input id="email_2" type="text" class="form-control form_style" required  autofocus placeholder="Email or Phone">
                    </div>
                </div>

                <div class="row mb-3 justify-content-center">
                   

                    <div class="col-md-9">
                        <input id="password_2" type="password" class="form-control form_style" required  placeholder="Password">
                    </div>
                </div>

                <div class="row mb-3 justify-content-center">
                    <div class="col-md-9 d-flex justify-content-between px-4">
                        <div class=''>
                                <button type="button" class="btn btn-primary w-100 save_2">save</button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary w-100 cancel_2">cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card_link">
            <button type='button' class="btn btn-success w-100 link_2">LINK ACCOUNT</button>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3">
        <!-- Card -->
        <div class="card">
        
            <!--Card image-->
            <div class="view overlay site_3">
            <img class="card-img-top hover-rotate" src="{{ asset('image/site_logo/33.png') }}" alt="Card image cap">
            <input class='url_3' style="display:none;" value='https://www.costco.com/'  />
            </div>
            <div class='site_form site_3_form px-2'>
                <div class="row mb-3 justify-content-center" style="margin-bottom:10px !important;">
                    <div class="col-md-9">
                        <input id="email_3" type="text" class="form-control form_style" required  autofocus placeholder="Email or Phone">
                    </div>
                </div>

                <div class="row mb-3 justify-content-center">
                   

                    <div class="col-md-9">
                        <input id="password_3" type="password" class="form-control form_style" required  placeholder="Password">
                    </div>
                </div>

                <div class="row mb-3 justify-content-center">
                    <div class="col-md-9 d-flex justify-content-between px-4">
                        <div class=''>
                                <button type="button" class="btn btn-primary w-100 save_3">save</button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary w-100 cancel_3">cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card_link">
            <button type='button' class="btn btn-info w-100 link_3">LINK ACCOUNT</button>
        </div>
        <!-- Card -->
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
            <!-- Card -->
            <div class="card">
            
                <!--Card image-->
                <div class="view overlay site_4">
                <img class="card-img-top hover-rotate" src="{{ asset('image/site_logo/44.png') }}" alt="Card image cap"> 
                <input class='url_4' style="display:none;" value='https://www.Walmart.com/'  />
                </div>
                <div class='site_form site_4_form px-2'>
                    <div class="row mb-3 justify-content-center" style="margin-bottom:10px !important;">
                        <div class="col-md-9">
                            <input id="email_4" type="text" class="form-control form_style" required  autofocus placeholder="Email or Phone">
                        </div>
                    </div>

                    <div class="row mb-3 justify-content-center">
                       

                        <div class="col-md-9">
                            <input id="password_4" type="password" class="form-control form_style" required  placeholder="Password">
                        </div>
                    </div>

                    <div class="row mb-3 justify-content-center">
                        <div class="col-md-9 d-flex justify-content-between px-4">
                            <div class=''>
                                 <button type="button" class="btn btn-primary w-100 save_4">save</button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary w-100 cancel_4">cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card_link">
                <button type='button' class="btn btn-dark w-100 link_4">LINK ACCOUNT</button>
            </div>
      <!-- Card -->
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3">
        <!-- Card -->
        <div class="card">
        
            <!--Card image-->
            <div class="view overlay site_5">
            <img class="card-img-top hover-rotate" src="{{ asset('image/site_logo/55.png') }}" alt="Card image cap">
            <input class='url_5' style="display:none;" value='https://www.Safeway.com/'  />
            </div>
            <div class='site_form site_5_form px-2'>
                <div class="row mb-3 justify-content-center" style="margin-bottom:10px !important;">
                    <div class="col-md-9">
                        <input id="email_5" type="text" class="form-control form_style" required  autofocus placeholder="Email or Phone">
                    </div>
                </div>

                <div class="row mb-3 justify-content-center">
                   

                    <div class="col-md-9">
                        <input id="password_5" type="password" class="form-control form_style" required  placeholder="Password">
                    </div>
                </div>

                <div class="row mb-3 justify-content-center">
                    <div class="col-md-9 d-flex justify-content-between px-4">
                        <div class=''>
                                <button type="button" class="btn btn-primary w-100 save_5">save</button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary w-100 cancel_5">cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card_link">
            <button type='button' class="btn btn-primary w-100 link_5">LINK ACCOUNT</button>
        </div>
        <!-- Card -->
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <!-- Card -->
            <div class="card">
            
                <!--Card image-->
                <div class="view overlay site_6">
                <img class="card-img-top hover-rotate" src="{{ asset('image/site_logo/66.png') }}" alt="Card image cap">
                <input class='url_6' style="display:none;" value='https://www.Qfc.com/'  />
                </div>
                <div class='site_form site_6_form px-2'>
                    <div class="row mb-3 justify-content-center" style="margin-bottom:10px !important;">
                        <div class="col-md-9">
                            <input id="email_6" type="text" class="form-control form_style" required  autofocus placeholder="Email or Phone">
                        </div>
                    </div>

                    <div class="row mb-3 justify-content-center">
                       

                        <div class="col-md-9">
                            <input id="password_6" type="password" class="form-control form_style" required  placeholder="Password">
                        </div>
                    </div>

                    <div class="row mb-3 justify-content-center">
                        <div class="col-md-9 d-flex justify-content-between px-4">
                            <div class=''>
                                 <button type="button" class="btn btn-primary w-100 save_6">save</button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary w-100 cancel_6">cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card_link">
                <button type='button' class="btn btn-warning w-100 link_6">LINK ACCOUNT</button>
            </div>
            <!-- Card -->
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <!-- Card -->
            <div class="card">
            
                <!--Card image-->
                <div class="view overlay site_7">
                <img class="card-img-top hover-rotate" src="{{ asset('image/site_logo/77.png') }}" alt="Card image cap">
                <input class='url_7' style="display:none;" value='https://www.Target.com/'  />
                </div>
                <div class='site_form site_7_form px-2'>
                    <div class="row mb-3 justify-content-center" style="margin-bottom:10px !important;">
                        <div class="col-md-9">
                            <input id="email_7" type="text" class="form-control form_style" required  autofocus placeholder="Email or Phone">
                        </div>
                    </div>

                    <div class="row mb-3 justify-content-center">
                       

                        <div class="col-md-9">
                            <input id="password_7" type="password" class="form-control form_style" required  placeholder="Password">
                        </div>
                    </div>

                    <div class="row mb-3 justify-content-center">
                        <div class="col-md-9 d-flex justify-content-between px-4">
                            <div class=''>
                                 <button type="button" class="btn btn-primary w-100 save_7">save</button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary w-100 cancel_7">cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card_link">
                <button type='button' class="btn btn-danger w-100 link_7">LINK ACCOUNT</button>
            </div>
            <!-- Card -->
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <!-- Card -->
            <div class="card">
            
                <!--Card image-->
                <div class="view overlay site_8">
                <img class="card-img-top hover-rotate" src="{{ asset('image/site_logo/88.png') }}" alt="Card image cap">
                <input class='url_8' style="display:none;" value='https://www.Hmart.com/'  />
                </div>
                <div class='site_form site_8_form px-2'>
                    <div class="row mb-3 justify-content-center" style="margin-bottom:10px !important;">
                        <div class="col-md-9">
                            <input id="email_8" type="text" class="form-control form_style" required  autofocus placeholder="Email or Phone">
                        </div>
                    </div>

                    <div class="row mb-3 justify-content-center">
                       

                        <div class="col-md-9">
                            <input id="password_8" type="password" class="form-control form_style" required  placeholder="Password">
                        </div>
                    </div>

                    <div class="row mb-3 justify-content-center">
                        <div class="col-md-9 d-flex justify-content-between px-4">
                            <div class=''>
                                 <button type="button" class="btn btn-primary w-100 save_8">save</button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary w-100 cancel_8">cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card_link">
                <button type='button' class="btn btn-secondary w-100 link_8">LINK ACCOUNT</button>
            </div>
            <!-- Card -->
        </div>

      
    </div>   
 </div>
 <script></script>
@endsection
