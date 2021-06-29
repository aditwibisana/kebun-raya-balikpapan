@extends('adm.layouts.app')
@section('content1')
<section>
    <div class="container">
        <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
            <div class="modal-header">
                <h3>Edit Data Pengguna</h3>
            </div>
            <div style="margin-top:10px;">
                <form class="form-horizontal" name="form1" method="post" action="/pengguna/{{$data_pengguna->id}}/update" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                        {{session('sukses')}}
                    </div>
                    @endif
                    <div class="control-group">
                        <label class="control-label" for="judul">Nama pengguna</label>
                        <div class="controls">
                            <input name="nama_pengguna" type="text" id="judul" class="input-xxlarge" value="{{$data_pengguna->nama_pengguna}}">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="isi">Tanggal Berkunjung</label>
                        <div class="controls">
                            <input name="tanggal_berkunjung" type="date" id="isi" class="input-xxlarge" value="{{$data_pengguna->tanggal_berkunjung}}">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="isi">Nomor Handphone</label>
                        <div class="controls">
                            <input name="no_hp" type="text" id="isi" class="input-xxlarge" value="{{$data_pengguna->no_hp}}">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="isi">Alamat</label>
                        <div class="controls">
                            <textarea name="alamat" class="form-control">{{$data_pengguna->alamat}}</textarea>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="simpan"></label>
                            <div class="controls">
                                <input name="simpan" type="submit" id="simpan" value="Simpan" class="btn btn-success">
                                <a href="/datapengguna"><input type="button" class="btn btn-default" value="Batal"></a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection