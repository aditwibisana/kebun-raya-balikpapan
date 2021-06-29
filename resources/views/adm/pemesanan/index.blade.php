@extends('adm.layouts.app')
@section('content1')
<section>
    <div class="container">
        <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
            <div>
                <div class="modal-header">
                    <h3>Daftar Pemesanan</h3>
                    <p>Kumpulan Pemesanan member</p>

                    <form class="d-flex" method="GET" action="/datapemesanan/cari">
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
                                    <h5>Id Pesan</h5>
                                </font>
                            </td>
                            <td width="20%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Tanggal Pesan</h5>
                                </font>
                            </td>
                            <td width="5%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Check In</h5>
                                </font>
                            </td>
                            <td width="10%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Check Out</h5>
                                </font>
                            </td>
                            <td width="10%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Durasi</h5>
                                </font>
                            </td>
                            <td width="10%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Harga</h5>
                                </font>
                            </td>
                            <td width="10%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Total Harga</h5>
                                </font>
                            </td>
                            <td width="10%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Bukti</h5>
                                </font>
                            </td>
                            <td width="10%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Konfirmasi</h5>
                                </font>
                            </td>
                            <td width="10%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Aksi</h5>
                                </font>
                            </td>
                            @foreach($pemesanan as $p)

                        <tbody>
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-left">
                                    <h5>{{$p->id}}</h5>
                                </font>
                            </td>
                            <td>
                                <font face="Helvetica, cursive" class="text-error text-left">
                                    <h5>{{$p->tanggal_pesan}}</h5>
                                </font>
                            </td>
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-left">
                                    <h5>{{$p->check_in}}</h5>
                                </font>
                            </td>
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-left">
                                    <h5>{{$p->check_out}}</h5>
                                </font>
                            </td>
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-left">
                                    <h5>{{$p->durasi}} Hari</h5>
                                </font>
                            </td>
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-left">
                                    <h5>@currency($p->harga)</h5>
                                </font>
                            </td>
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-left">
                                    <h5>@currency($p->total_harga)</h5>
                                </font>
                            </td>
                            @if($p->bukti == 'Belum Ada')
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-left">
                                    <h5>{{$p->bukti}}</h5>
                                </font>
                            </td>
                            @else
                            <td><a class="MagicZoom" href="{{asset('images/bukti/'.$p->bukti)}}" rel="zoom-id:zoom;opacity-reverse:true;"><img src="{{asset('images/bukti/'.$p->bukti)}}" height='200' width='200'></a></td>
                            @endif
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-left">
                                    <h5>{{$p->konfirmasi}}</h5>
                                </font>
                            </td>
                            <td>
                                <font face="Helvetica, cursive" class="text-info text-center">
                                    <h5>
                                        <center>
                                            @if($p->konfirmasi == 'Konfirmasi')
                                            <a class="btn btn-small btn-danger" href="/pemesanan/{{$p->id}}/btlkonfirmasi" data-toggle="tooltip" data-placement="bottom" title="Edit">Batal Konfirmasi</a>
                                            <a ace="Helvetica, cursive" class="text-info text-center">
                                                <h5>
                                                    <a class="btn btn-small btn-warning" href="/pemesanan/{{$p->id}}/delete" data-toggle="tooltip" data-placement="bottom" title="Hapus" onclick="return confirm ('Apakah anda yakin ingin menghapus pengunjung bernama {{$p->check_in}}')">Hapus</a>
                                                </h5>
                                                @else
                                                <a class="btn btn-small btn-info" href="/pemesanan/{{$p->id}}/konfirmasi" data-toggle="tooltip" data-placement="bottom" title="Edit">Konfirmasi</a>
                                                <a ace="Helvetica, cursive" class="text-info text-center">
                                                    <h5>
                                                        <a class="btn btn-small btn-warning" href="/pemesanan/{{$p->id}}/delete" data-toggle="tooltip" data-placement="bottom" title="Hapus" onclick="return confirm ('Apakah anda yakin ingin menghapus pengunjung bernama {{$p->check_in}}')">Hapus</a>
                                                        @endif
                                        </center>
                                </font>
                            </td>

                            @endforeach

                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            {{ $pemesanan->render() }}
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection