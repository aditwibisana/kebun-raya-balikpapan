@extends('layouts.master')
@section('content')
<section>
    <div class="container content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <br>
                <h2>Form Upload Bukti Bayar</h2>
                <hr>
                <form method=POST action='/pemesanan/{{$pemesanan->id}}/bukti' enctype='multipart/form-data'>
                    {{csrf_field()}}
                    <table class='table table-bordered table-striped'>
                        <p>Cara Pembayaran dapat ditransfer melalui rekening 1560008763084 Bank Mandiri A/N Kebun Raya Balikpapan atau dapat membayar ditempat</p>

                        <tr>
                            <td> ID Pemesanan</td>
                            <td> <input type=text name='pesan_id' value='{{$pemesanan->id}}' class='form-control' readonly=readonly></td>
                        </tr>


                        <tr>
                            <td> Bukti Transfer </td>
                            <td><input type=file name='bukti' class='form-control'></td>
                        </tr>

                        <tr>
                            <td colspan=2><input type=submit value=Kirim class='btn btn-primary'>
                                <input type=button value=Batal onclick=self.history.back() class='btn btn-warning'>
                            </td>
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