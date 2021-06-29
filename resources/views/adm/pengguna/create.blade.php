@extends('adm.layouts.app')
@section('content1')
<section>
    <div class="container">
        <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
            <div class="modal-header">
                <h3>Tambah Data Pengguna</h3>
            </div>
            <div style="margin-top:10px;">
                <form action="pengguna/tambah" method="POST">
                    {{csrf_field()}}
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                        {{session('sukses')}}
                    </div>
                    @endif
                    <div class="control-group">
                        <label class="control-label" for="judul">Nama Lengkap</label>
                        <div class="controls">
                            <input name="nama_pengguna" type="text" id="judul" class="input-xxlarge" placeholder="Nama Lengkap" autocomplete="off">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="isi">Tanggal Berkunjung</label>
                        <div class="controls">
                            <input name="tanggal_berkunjung" type="date" id="tanggal_berkunjung" class="input-xxlarge" placeholder="tanggal_berkunjung" autocomplete="off">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="isi">Nomor Handphone</label>
                        <div class="controls">
                            <input name="no_hp" type="text" id="isi" class="input-xxlarge" placeholder="No. HP" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Asal</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Asal" autocomplete="off" style="width: 250px">
                    </div>


                    <input type="submit" name="submit" value="Simpan" class="btn btn-success">
                    <a href="/datapengunjung"><input type="button" class="btn btn-default" value="Batal"></a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection