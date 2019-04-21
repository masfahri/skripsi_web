@extends('layouts.app')
@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    EXPORTABLE TABLE
                </h2>
                <ul class="header-dropdown m-r--5">
                    <a href="/kategori/create" >
                        <i class="material-icons">add_box</i>Tambah Kateogri
                    </a>
                        
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <tbody></tbody>
                    </table>
                </div>
            </div>
            <div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body" style="background: white;">
                            <div id="konfirmasi_nama_kategori" style="color: red"></div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input id="edit_nama_kategori" type="text" class="form-control" placeholder="Nama Kategori" required>
                                </div>
                            </div>
                            <p id="edit_nama_kategori_hide"></p>
                            <p id="id_edit_kategori_hide"></p>
                        </div>
                        <div class="modal-footer">
                            <button id="update" type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<script src="{{ asset('template/adminbsb/js/pages/ui/notifications.js')}}"></script>
<script src="{{ asset('template/js/login.js')}}"></script>
<script src="{{ asset('template/js/main.js')}}"></script>
{{-- <script src="{{ asset('template/js/kateogri.js')}}"></script> --}}

@endsection