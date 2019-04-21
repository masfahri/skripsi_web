@extends('layouts.app')

@section('content')
<div class="row clearfix">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="body">
                  <div class="" id="myWizard">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#step1" data-toggle="tab">Step 1</a></li>
                            <li><a href="#step2" data-toggle="tab" class="disable" disabled="">Step 2</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="step1">
                            <p>Login</p>
                                <div id="errorNomor"></div> 
                                <input type="text" class="form-control" id="password" required="required" name="password" value="">
                                <button class="btn btn-default btn-ok" id="regis" type="submit" name="nim">Login</button>
                            </div>
                            <div class="tab-pane" id="step2">
                            <p>Silahkan masukan OTP</p>
                            <div id="konfirmasiOtp"></div>
                            <input class="form-control" id="otp" required="" value="" name="otp">
                            <div>OTP akan hilang dalam <span id="time">2:00</span> Menit!</div>
                            <button class="btn btn-default btn-otp" type="button">Verifikasi</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="{{asset('template/js/login.js')}}"></script>

@endsection
