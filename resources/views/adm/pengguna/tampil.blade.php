@extends('adm.layouts.app')
@section('content1')
<section>
    <div class="container">
        <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
            <div>
                <div class="modal-header">
                    <h3>Daftar Pengguna</h3>
                    <a href="/tambahdatapengguna"><button type="button" class="btn btn-small btn-info">Tambah Data pengguna</button></a>
                    <form class="d-flex" method="GET" action="/datapengguna/cari">
                        <input name="cari" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{old('cari')}}">
                        <button class="btn btn-outline-success" type=" submit">Search</button>
                    </form>
                </div>
                <p>Total Pengguna : {{$data_pengguna->count()}}</p>
                <div style="margin-top:10px">
                    <table class="table table-condensed table-bordered table-hover">
                        @if(session('sukses'))
                        <div class="alert alert-success" role="alert">
                            {{session('sukses')}}
                        </div>
                        @endif
                        <thead>
                            <td width="5%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>No</h5>
                                </font>
                            </td>
                            <td width="20%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Nama Lengkap</h5>
                                </font>
                            </td>
                            <td width="5%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Tanggal Berkunjung</h5>
                                </font>
                            </td>
                            <td width="10%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>No Hp</h5>
                                </font>
                            </td>
                            <td width="10%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Alamat</h5>
                                </font>
                            </td>
                            <td width="10%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Aksi</h5>
                                </font>
                            </td>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($data_pengguna as $pengguna)

                        <tbody>
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-left">
                                    <h5>{{$no++}}</h5>
                                </font>
                            </td>
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-left">
                                    <h5>{{$pengguna->nama_pengguna}}</h5>
                                </font>
                            </td>
                            <td>
                                <font face="Helvetica, cursive" class="text-error text-left">
                                    <h5>{{$pengguna->tanggal_berkunjung}}</h5>
                                </font>
                            </td>
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-left">
                                    <h5>{{$pengguna->no_hp}}</h5>
                                </font>
                            </td>
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-left">
                                    <h5>{{$pengguna->alamat}}</h5>
                                </font>
                            </td>
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-center">
                                    <h5>
                                        <center>
                                            <a class="btn btn-small btn-info" href="/pengguna/{{$pengguna->id}}/edit" data-toggle="tooltip" data-placement="bottom" title="Edit"> Edit</a>
                                            <a ace="Helvetica, cursive" class="text-info text-center">
                                                <h5>
                                                    <a class="btn btn-small btn-warning" href="/pengguna/{{$pengguna->id}}/delete" data-toggle="tooltip" data-placement="bottom" title="Hapus" onclick="return confirm ('Apakah anda yakin ingin menghapus pengguna bernama {{$pengguna->nama_pengguna}}')">Hapus</a>
                                                </h5>
                                        </center>
                                </font>
                            </td>

                            @endforeach

                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            {{ $data_pengguna->render() }}
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection