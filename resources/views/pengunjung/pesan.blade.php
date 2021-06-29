@extends('layouts.master')
@section('content')
<section>
    <div class="container content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <br>
                <h2>Pemesanan</h2>
                <form action="/tempat/{{$daftar_tempat->id}}/booking" method='post'>
                    {{csrf_field()}}
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                        {{session('sukses')}}
                    </div>
                    @endif

                    <table class='table table-bordered table-striped'>
                        <tr>
                            <div class="form-group">
                                <td><label>ID Tempat</label></td>
                                <td><input type="password" class="form-control" name="id" id="tanggal_pesan" value="{{$daftar_tempat->id}}" aria-label="Disabled input example" autocomplete="off" style="width: 450px" disabled readonly></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label>ID User</label></td>
                                <td><input type="password" class="form-control" name="user_id" id="tanggal_pesan" value="{{auth()->user()->id}}" aria-label="Disabled input example" autocomplete="off" style="width: 450px" disabled readonly></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label>Tanggal Pesan</label></td>
                                <td><input type="text" class="form-control" name="tanggal_pesan" id="tanggal_pesan" value="<?php echo date('d-m-Y'); ?>" aria-label="Disabled input example" autocomplete="off" style="width: 450px" disabled readonly></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label>Nama Lengkap</label></td>
                                <td><input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="{{auth()->user()->name}}" aria-label="Disabled input example" autocomplete="off" style="width: 450px" disabled readonly></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label>Email</label></td>
                                <td><input type="text" class="form-control" name="email" id="email" value="{{auth()->user()->email}}" aria-label="Disabled input example" autocomplete="off" style="width: 450px" disabled readonly></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label>Nomor Handphone</label></td>
                                <td><input type="text" class="form-control" name="no_hp" id="no_hp" value="{{auth()->user()->no_hp}}" aria-label="Disabled input example" autocomplete="off" style="width: 450px" disabled readonly></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label>Nama Tempat</label></td>
                                <td><input type="Text" class="form-control" name="nama_tempat" id="pin" value="{{$daftar_tempat->nama_tempat}}" aria-label="Disabled input example" autocomplete="off" style="width: 450px" disabled readonly></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label>Harga</label></td>
                                <td><input type="text" class="form-control" name="harga" id="alamat" value="{{$daftar_tempat->harga}}" aria-label="Disabled input example" autocomplete="off" style="width: 450px" disabled readonly>
                                <td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label>Tanggal Check-in</label></td>
                                <td><input type="date" class="form-control" name="check_in" id="check_in" placeholder="yyyy-mm-dd" autocomplete="off" style="width: 450px">
                                <td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label>Tanggal Check-out</label></td>
                                <td><input type="date" class="form-control" name="check_out" id="check_out" placeholder="yyyy-mm-dd" autocomplete="off" style="width: 450px">
                                <td>
                            </div>
                        </tr>

                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="Pesan" class="btn btn-primary"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <section class="top-line">
        <div class="container content text-center">

        </div>
    </section>
    @endsection