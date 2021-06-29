@extends('adm.layouts.app')
@section('content1')
<section>
    <div class="container">
        <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
            <div class="modal-header">
                <h3>Tambah Data Tempat</h3>
            </div>
            <div style="margin-top:10px;">
                <form class="form-horizontal" name="form1" method="post" action="/tempat/create" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="control-group">
                        <label class="control-label" for="judul">Nama Paket/Tempat</label>
                        <div class="controls">
                            <input name="nama_tempat" type="text" id="judul" class="input-xxlarge" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="isi">Deskripsi Tempat</label>
                        <div class="controls">
                            <textarea name="deskripsi_tempat" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="isi">Harga</label>
                        <div class="controls">
                            <input name="harga" type="text" id="isi" class="input-xxlarge" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="isi">Foto 1</label>
                        <div class="controls">
                            <input type="file" name="foto_tempat1" id="foto" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="isi">Foto 2</label>
                        <div class="controls">
                            <input type="file" name="foto_tempat2" id="foto" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="isi">Foto 3</label>
                        <div class="controls">
                            <input type="file" name="foto_tempat3" id="foto" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="simpan"></label>
                        <div class="controls">
                            <input name="simpan" type="submit" id="simpan" value="Simpan" class="btn btn-success">
                            <a href="/datatempat"><input name="/datatempat" type="submit" id="batal" value="Batal" class="btn btn-warning"></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection