<!DOCTYPE html>
<html>

<head>
    <title>Buku Tamu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/core.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/base.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/css/custom.css')}}">
    <link rel="icon" type="image/png" href="{{asset('favicon.png?v=2')}}">
    <script src="{{asset('/js/assets/jquery.js')}}"></script>
</head>

<body>

    <div class="body-overlay"></div>
    <!-- Menu-->
    <div class="nav-container">
        <ul class="nav">
            </li>
            <li><a href="/dashboard">Beranda </a>
            </li>
            <li><a href="/profile">Edit Profil </a>
            </li>
            <li><a href="/pemesanan">Lihat Pemesanan </a>
            </li>
            <li><a href="spot_menarik">Booking </a>
            </li>
            <li><a href="/logout" onclick="return confirm ('Apakah anda yakin ingin logout')">Logout</a>
            </li>
        </ul>
        </ul>
        <div class="copyright">2021 &copy; Bayu Adhitya Wibisana.</div>
        <div class="exit"></div>
        <ul class="social">
            <li><a href="#" class="fa fa-twitter"></a></li>
            <li><a href="#" class="fa fa-dribbble"></a></li>
            <li><a href="#" class="fa fa-facebook"></a></li>
            <li><a href="#" class="fa fa-instagram"></a></li>
            <li><a href="#" class="fa fa-pinterest"></a></li>
        </ul>
    </div>
    <!-- Wrapper-->
    <div id="wrapper" class="container-fluid smooth-transition">
        <!-- Header-->
        <header>
            <div class="container">
                <!-- Branding--><a href="index.html" class="brand"> <img alt="" src="{{asset('/images/kebun-raya-2.png')}}" class="dark-brand" width="200px" height="50px"" class=" dark-brand"><img alt="" src="images/logo-white.svg" class="light-brand"></a>
                <!-- Menu-->
                <div class="menu"></div>
            </div>
        </header>
        <center>
            <section>
                <div class="container content">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <br>
                            <h3>Edit Profil</h3>
                            <marquee>
                            </marquee>
                            <hr>
                            <form action="/profile/{{$pengunjung->id}}/update" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="{{$pengunjung->name}}" autocomplete="off" style="width: 450px">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" id="email" value="{{$pengunjung->email}}" autocomplete="off" style="width: 450px">
                                </div>
                                <input type="submit" name="submit" value="submit" class="btn btn-success">
                                <a href="/dashboard"><input type="button" class="btn btn-default" value="Batal"></a>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </center>
        <section>
            <div class="container content">

            </div>
        </section>
        <section class="top-line">
            <div class="container content text-center">

            </div>
        </section>
        <!-- Footer-->

    </div>
    <script src="{{asset('/js/assets/bootstrap.js')}}"></script>
    <script src="{{asset('/js/assets/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('/js/assets/validation.js')}}"></script>
    <script src="{{asset('/js/assets/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('/modules/tera-slider/tera-slider.js')}}"></script>
    <script src="{{asset('/modules/tera-lightbox/tera-lightbox.js')}}"></script>
    <script src="{{asset('/js/assets/animsition.js')}}"></script>
    <script src="{{asset('/js/functions.js')}}"></script>
</body>

</html>