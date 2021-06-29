@extends('adm.layouts.app')
@section('content1')
<section>
    <div class="container">
        <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
            <div>
                <div class="modal-header">
                    <h3>Daftar flora Menarik</h3>
                    <a href="/tambahdataflora"><button type="button" class="btn btn-small btn-info">Tambah Daftar flora</button></a>
                    <form class="d-flex" method="GET" action="/dataflora/cari">
                        <input name="cari" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{old('cari')}}">
                        <button class="btn btn-outline-success" type=" submit">Search</button>
                    </form>
                </div>
                <p>Total flora : {{$daftar_flora->count()}}</p>
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
                                    <h5>Nama flora</h5>
                                </font>
                            </td>
                            <td width="50%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Deskripsi</h5>
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
                            @foreach($daftar_flora as $flora)

                        <tbody>
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-left">
                                    <h5>{{$no++}}</h5>
                                </font>
                            </td>
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-left">
                                    <h5>{{$flora->nama_flora}}</h5>
                                </font>
                            </td>
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-left">
                                    <h5>{{$flora->deskripsi_flora}}</h5>
                                </font>
                            </td>
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-center">
                                    <h5>
                                        <center>
                                            <a class="btn btn-small btn-info" href="/flora/{{$flora->id}}/edit" data-toggle="tooltip" data-placement="bottom" title="Edit"> Edit</a>
                                            <a ace="Helvetica, cursive" class="text-info text-center">
                                                <h5>
                                                    <a class="btn btn-small btn-warning" href="/flora/{{$flora->id}}/delete" data-toggle="tooltip" data-placement="bottom" title="Hapus" onclick="return confirm ('Apakah anda yakin ingin menghapus flora bernama {{$flora->nama_flora}}')">Hapus</a>
                                                </h5>
                                        </center>
                                </font>
                            </td>

                            @endforeach

                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            {{ $daftar_flora->render() }}
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection