@extends('layouts.master')
@section('content')
<section>
    <div class="container content">
        <div class="row">
            <div class="panel-body">
                <h2>Daftar Tempat</h2>
                <table width="100px" border='1' class="table table-striped table-hover">
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
                            <td>@currency($tempat->harga)</td>
                            <td><a class="MagicZoom" href="{{asset('images/fototempat/'.$tempat->foto_tempat1)}}" rel="zoom-id:zoom;opacity-reverse:true;"><img src="{{asset('images/fototempat/'.$tempat->foto_tempat1)}}" height='100' width='100'></a></td>
                            <td><a class="MagicZoom" href="{{asset('images/fototempat/'.$tempat->foto_tempat2)}}" rel="zoom-id:zoom;opacity-reverse:true;"><img src="{{asset('images/fototempat/'.$tempat->foto_tempat2)}}" height='100' width='100'></a></td>
                            <td><a class="MagicZoom" href="{{asset('images/fototempat/'.$tempat->foto_tempat3)}}" rel="zoom-id:zoom;opacity-reverse:true;"><img src="{{asset('images/fototempat/'.$tempat->foto_tempat3)}}" height='100' width='100'></a></td>
                            <td>
                                <a href='/tempat/{{$tempat->id}}/pesan' class='btn btn-info'>Pesan</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>


                </table>
            </div>


        </div>
    </div>
</section>
@endsection