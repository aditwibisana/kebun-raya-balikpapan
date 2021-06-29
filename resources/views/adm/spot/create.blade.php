@extends('adm.layouts.app')
@section('content1')
<section>
    <div class="container">
        <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
            <div class="modal-header">
                <h3>Tambah Daftar Spot</h3>
            </div>
            <div style="margin-top:10px;">
                <form action="spot/tambah" method="POST">
                    {{csrf_field()}}
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                        {{session('sukses')}}
                    </div>
                    @endif
                    <div class="control-group">
                        <label class="control-label" for="judul">Nama Spot</label>
                        <div class="controls">
                            <input name="nama_spot" type="text" id="judul" class="input-xxlarge" placeholder="Nama Spot" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="isi">Deskripsi</label>
                        <div class="controls">
                            <textarea name="deskripsi_tempat" class="form-control" required></textarea>
                        </div>


                        <input type="submit" name="submit" value="Simpan" class="btn btn-success">
                        <a href="/daftarflora"><input type="button" class="btn btn-default" value="Batal"></a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection