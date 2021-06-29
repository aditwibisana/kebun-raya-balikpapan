@extends('adm.layouts.app')
@section('content1')
<section>
    <div class="container">
        <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
            <div class="hero-unit text-center">
                <font face="Comic Sans MS, cursive">Selamat Datang {{auth()->user()->name}}, silahkan pilih menu untuk mengelola halaman website.</font>
            </div>
        </div>
    </div>
</section>
@endsection