@extends('layouts.app')
@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                INPUT KATEGORI
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
            <div class="row clearfix">
                <div class="col-md-12">
                    <div id="konfirmasi_nama_vendor" style="color:red;"></div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input id="nama_kategori" type="text" class="form-control date" placeholder="Nama Kategori">
                        </div>
                    </div>
                </div>
                <button id="tambah_kategori" type="button" class="btn btn-success waves-effect">TAMBAH KATEGORI</button>
            </div>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<script src="{{asset('template/adminbsb/js/pages/ui/notifications.js')}}"></script>
<script src="{{asset('template/js/login.js')}}"></script>
<script src="{{ asset('template/js/main.js')}}"></script>
<script src="{{ asset('template/js/kategori.js')}}"></script>

@endsection