@extends('layouts.master')
@section('content')
<section>
    <div class="container content">
        <div class="row">
            <div class="panel-body">
                <h2>Daftar Pemesanan</h2>
                <table width="100px" border='1' class="table table-striped table-hover">
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                        {{session('sukses')}}
                    </div>
                    @endif
                    <thead>
                        <tr>
                        <tr>
                            <th>No</th>
                            <th>ID Pemesanan</th>
                            <th>Tgl Pesan</th>
                            <th>Tgl Check In</th>
                            <th>Tanggal Check Out</th>
                            <th>Durasi Hari</th>
                            <th>Harga</th>
                            <th>Total Harga</th>
                            <th>Bukti</th>
                            <th>Status Konfirmasi</th>
                            <th>Aksi</th>
                        </tr>
                        </tr>

                    </thead>
                    @php
                    $no = 1;
                    @endphp
                    @foreach($pemesanan as $p)
                    <tbody>
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$p->id}}</td>
                            <td>{{$p->tanggal_pesan}}</td>
                            <td>{{$p->check_in}}</td>
                            <td>{{$p->check_out}}</td>
                            <td>{{$p->durasi}} Hari</td>
                            <td>
                                @currency($p->harga)
                            </td>
                            <td>
                                @currency($p->total_harga)
                            </td>
                            @if($p->bukti == 'Belum Ada')
                            <td>{{$p->bukti}}</td>
                            <td>{{$p->konfirmasi}}</td>
                            <td> <a href='/pemesanan/{{$p->id}}/bayar' class='btn btn-info'> Bayar </a>
                                <a href='/pemesanan/{{$p->id}}/cetak' target=' _blank' class='btn btn-success'>Cetak</a>
                                <a class="btn btn-small btn-warning" href="/pemesanan/{{$p->id}}/delete" data-toggle="tooltip" data-placement="bottom" title="Hapus" onclick="return confirm ('Apakah anda yakin ingin menghapus pesanan di tanggal  {{$p->check_in}} sampai dengan tanggal {{$p->check_out}}')">Hapus</a>

                            </td>

                            @else
                            <td><a class="MagicZoom" href="{{asset('images/bukti/'.$p->bukti)}}" rel="zoom-id:zoom;opacity-reverse:true;"><img src="{{asset('images/bukti/'.$p->bukti)}}" height='200' width='200'></a></td>
                            <td>{{$p->konfirmasi}}</td>
                            <td><a href='/pemesanan/{{$p->id}}/cetak' target='_blank' class='btn btn-success'>Cetak</a>
                                <a class="btn btn-small btn-warning" href="/pemesanan/{{$p->id}}/delete" data-toggle="tooltip" data-placement="bottom" title="Hapus" onclick="return confirm ('Apakah anda yakin ingin menghapus pesanan di tanggal  {{$p->check_in}} sampai dengan tanggal {{$p->check_out}}')">Hapus</a>
                            </td>
                            </td>

                            @endif
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection