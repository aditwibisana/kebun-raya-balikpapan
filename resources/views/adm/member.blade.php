@extends('adm.layouts.app')
@section('content1')
<section>
    <div class="container">
        <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
            <div>
                <div class="modal-header">
                    <h3>Daftar Pengunjung</h3>
                    <a href="/tambahdatapengunjung"><button type="button" class="btn btn-small btn-info">Tambah Data Pengunjung</button></a>

                    <form class="d-flex" method="GET" action="/datapengunjung/cari">
                        <input name="cari" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{old('cari')}}">
                        <button class="btn btn-outline-success" type=" submit">Search</button>
                    </form>
                </div>

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
                                    <h5>Email</h5>
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
                                    <h5>Last Update</h5>
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
                            @foreach($data_pengunjung as $pengunjung)

                        <tbody>
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-left">
                                    <h5>{{$no++}}</h5>
                                </font>
                            </td>
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-left">
                                    <h5>{{$pengunjung->nama_lengkap}}</h5>
                                </font>
                            </td>
                            <td>
                                <font face="Helvetica, cursive" class="text-error text-left">
                                    <h5>{{$pengunjung->email}}</h5>
                                </font>
                            </td>
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-left">
                                    <h5>{{$pengunjung->no_hp}}</h5>
                                </font>
                            </td>
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-left">
                                    <h5>{{$pengunjung->alamat}}</h5>
                                </font>
                            </td>
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-left">
                                    <h5>{{$pengunjung->updated_at}}</h5>
                                </font>
                            </td>


                            <td>
                                <font face="Helvetica, cursive" class="text-info text-center">
                                    <h5>
                                        <center>
                                            <a class="btn btn-small btn-info" href="/pengunjung/{{$pengunjung->id}}/edit" data-toggle="tooltip" data-placement="bottom" title="Edit"> Edit</a>
                                            <a ace="Helvetica, cursive" class="text-info text-center">
                                                <h5>
                                                    <a class="btn btn-small btn-warning" href="/pengunjung/{{$pengunjung->id}}/delete" data-toggle="tooltip" data-placement="bottom" title="Hapus" onclick="return confirm ('Apakah anda yakin ingin menghapus pengunjung bernama {{$pengunjung->nama_lengkap}}')">Hapus</a>
                                                </h5>
                                        </center>
                                </font>
                            </td>

                            @endforeach

                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            {{ $data_pengunjung->render() }}
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection