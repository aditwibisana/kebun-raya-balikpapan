@extends('adm.layouts.app')
@section('content1')
<section>
    <div class="container">
        <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
            <div class="modal-header">
                <h3>Edit Data flora</h3>
            </div>
            <div style="margin-top:10px;">
                <form class="form-horizontal" name="form1" method="post" action="/flora/{{$daftar_flora->id}}/update" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                        {{session('sukses')}}
                    </div>
                    @endif
                    <div class="control-group">
                        <label class="control-label" for="judul">Nama flora</label>
                        <div class="controls">
                            <input name="nama_flora" type="text" id="judul" class="input-xxlarge" value="{{$daftar_flora->nama_flora}}" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="isi">Deskripsi</label>
                        <div class="controls">
                            <textarea name="deskripsi_tempat" class="form-control" required>{{$daftar_flora->deskripsi_flora}}</textarea>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="simpan"></label>
                            <div class="controls">
                                <input name="simpan" type="submit" id="simpan" value="Simpan" class="btn btn-success">
                                <a href="/daftarflora"><input type="button" class="btn btn-default" value="Batal"></a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection