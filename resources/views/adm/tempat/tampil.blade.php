@extends('adm.layouts.app')
@section('content1')
<section>
    <div class="container">
        <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
            <div>
                <div class="modal-header">
                    <h3>Daftar Tempat</h3>
                    <a href="/tambahdatatempat"><button type="button" class="btn btn-small btn-info">Tambah Data Tempat</button></a>
                    <form class="d-flex" method="GET" action="/datatempat/cari">
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
                            <tr>
                                <th rowspan=2>Nama Paket</th>
                                <th rowspan=2>Deskripsi</th>
                                <th rowspan=2>Harga</th>
                                <th colspan=3>Foto</th>
                                <th rowspan=2>Aksi</th>

                            </tr>
                            <tr>
                                <th>Foto 1</th>
                                <th> Foto 2</th>
                                <th>Foto 3</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($daftar_tempat as $tempat)
                            <tr>
                                <td>{{$tempat->nama_tempat}}</td>
                                <td width='500px'>{{$tempat->deskripsi_tempat}}</td>
                                <td>{{$tempat->harga}}</td>
                                <td><a target='blank'><img src="{{asset('images/fototempat/'.$tempat->foto_tempat1)}}" height='100' width='100'></a></td>
                                <td><a target='blank'><img src="{{asset('images/fototempat/'.$tempat->foto_tempat2)}}" height='100' width='100'></a></td>
                                <td><a target='blank'><img src="{{asset('images/fototempat/'.$tempat->foto_tempat3)}}" height='100' width='100'></a></td>
                                <td>
                                    <a href='/tempat/{{$tempat->id}}/edit' class='btn btn-small btn-info'>Edit</a>
                                    <a href='/tempat/{{$tempat->id}}/delete' class='btn btn-small btn-warning'>Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>


                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">

                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection