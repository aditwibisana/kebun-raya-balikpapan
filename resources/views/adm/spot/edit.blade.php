@extends('adm.layouts.app')
@section('content1')
<section>
    <div class="container">
        <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
            <div class="modal-header">
                <h3>Edit Data spot</h3>
            </div>
            <div style="margin-top:10px;">
                <form class="form-horizontal" name="form1" method="post" action="/spot/{{$daftar_spot->id}}/update" enctype="multipart/form-data" required>
                    {{csrf_field()}}
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                        {{session('sukses')}}
                    </div>
                    @endif
                    <div class="control-group">
                        <label class="control-label" for="judul">Nama Spot</label>
                        <div class="controls">
                            <input name="nama_spot" type="text" id="judul" class="input-xxlarge" value="{{$daftar_spot->nama_spot}}" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="isi">Deskripsi</label>
                        <div class="controls">
                            <textarea name="deskripsi_tempat" class="form-control">{{$daftar_spot->deskripsi_tempat}}</textarea>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="simpan"></label>
                            <div class="controls">
                                <input name="simpan" type="submit" id="simpan" value="Simpan" class="btn btn-success">
                                <a href="/daftarspot"><input type="button" class="btn btn-default" value="Batal"></a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection