@extends('adm.layouts.app')
@section('content1')
<section>
    <div class="container">
        <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
            <div class="modal-header">
                <h3>Edit Data Pengunjung</h3>
            </div>
            <div style="margin-top:10px;">
                <form class="form-horizontal" name="form1" method="post" action="/pengunjung/{{$pengunjung->id}}/update" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                        {{session('sukses')}}
                    </div>
                    @endif
                    <div class="control-group">
                        <label class="control-label" for="judul">Nama Lengkap</label>
                        <div class="controls">
                            <input name="nama_lengkap" type="text" id="judul" class="input-xxlarge" value="{{$pengunjung->nama_lengkap}}" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="isi">Email</label>
                        <div class="controls">
                            <input name="email" type="email" id="isi" class="input-xxlarge" value="{{$pengunjung->email}}" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="isi">Nomor Handphone</label>
                        <div class="controls">
                            <input name="no_hp" type="text" id="isi" class="input-xxlarge" value="{{$pengunjung->no_hp}}" onkeypress="return event.charCode >= 48 && event.charCode <=57" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="isi">Alamat</label>
                        <div class="controls">
                            <textarea name="alamat" class="form-control" required>{{$pengunjung->alamat}}</textarea>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="simpan"></label>
                            <div class="controls">
                                <input name="simpan" type="submit" id="simpan" value="Simpan" class="btn btn-success">
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection