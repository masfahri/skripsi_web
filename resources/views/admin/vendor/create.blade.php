@extends('layouts.app')
@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                INPUT VENDOR
            </h2>
            <ul class="header-dropdown m-r--5">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);">Action</a></li>
                        <li><a href="javascript:void(0);">Another action</a></li>
                        <li><a href="javascript:void(0);">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="body">
        <h2 class="card-inside-title">Input Vendor</h2>
            <div class="row clearfix">
                <div class="col-md-12">
                    <div id="konfirmasi_nama_vendor"></div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input id="nama_vendor" type="text" class="form-control date" placeholder="Nama Vendor">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="konfirmasi_email" style="color: red"></div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input id="email" type="text" class="form-control date" placeholder="email">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="konfirmasi_nomor_hp" style="color: red"></div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input id="nomor_hp" type="text" class="form-control date" placeholder="Nomor Handphone">
                        </div>
                    </div>
                </div>
                <button id="tambah_vendor" type="button" class="btn btn-success waves-effect">TAMBAH VENDOR</button>
            </div>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<script src="{{asset('template/adminbsb/js/pages/ui/notifications.js')}}"></script>
<script src="{{asset('template/js/login.js')}}"></script>
<script src="{{ asset('template/js/main.js')}}"></script>
<script src="{{ asset('template/js/vendor.js')}}"></script>

@endsection