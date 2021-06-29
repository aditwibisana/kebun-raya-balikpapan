<!DOCTYPE html>
<html>

<head>
    <title>Kebun Raya Balikpapan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/core.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/base.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/css/custom.css')}}">
    <link rel="icon" type="image/png" href="{{asset('favicon.png?v=2')}}">
    <script src="{{asset('/js/assets/jquery.js')}}"></script>
    <script type="text/javascript">
        $(document).on("click", ".open-AddBookDialog", function() {
            var myBookId = $(this).data('id');
            var myBookId1 = $(this).data('id1');
            var myBookId2 = $(this).data('id2');
            var myBookId3 = $(this).data('id3');
            var myBookId4 = $(this).data('id4');
            var myBookId5 = $(this).data('id5');
            var myBookId6 = $(this).data('id6');
            $(".modal-body #bookId").val(myBookId);
            $(".modal-body #bookId1").val(myBookId1);
            $(".modal-body #bookId2").val(myBookId2);
            $(".modal-body #bookId3").val(myBookId3);
            $(".modal-body #bookId4").val(myBookId4);
            $(".modal-body #bookId5").val(myBookId5);
            $(".modal-body #bookId6").val(myBookId6);
        });
    </script>
</head>

<body>

    <div class="body-overlay"></div>
    <!-- Menu-->
    <div class="nav-container">
        <ul class="nav">
            <li><a href="/pengunjung">Daftar </a>
            </li>
            <li><a href="/login">Login </a>
            </li>
            <li><a href="/pengguna">Buku Tamu </a>
            </li>
            <li><a href="/spot">Spot Menarik </a>
            </li>
            <li><a href="/flora">Daftar Flora </a>
            </li>
        </ul>
        </ul>
        <div class="copyright">2021 &copy; Bayu Adhitya Wibisana</div>
        <div class="exit"></div>
        <ul class="social">
            <li><a href="#" class="fa fa-facebook"></a></li>
            <li><a href="#" class="fa fa-instagram"></a></li>
        </ul>
    </div>
    <!-- Wrapper-->
    <div id="wrapper" class="container-fluid smooth-transition">
        <!-- Header-->
        <header>
            <div class="container">
                <!-- Branding--><a href="/dashboard" class="brand"> <img alt="" src="{{asset('/images/kebun-raya-2.png')}}" class="dark-brand" width="200px" height="50px"" class=" dark-brand"><img alt="" src="{{asset('/images/kebun-raya-2.png')}}" width="200px" height="50px" class="light-brand"></a>
                <!-- Menu-->
                <div class="menu"></div>
            </div>
        </header>
        <!-- Hero & Tera Slider-->
        <section class="slider">
            <ul class="slides">
                <!-- Slide-->
                <li class="slide dark">
                    <!-- Background-->
                    <div class="hero fs vcenter">
                        <div style="background-image: url(images/office/halaman_depan.jpg);" class="bg faded parallax"></div>
                        <div class="container text-center">
                            <!-- Content-->
                            <div class="content">
                                <h1 class="lg">Kebun Raya Balikpapan</h1>
                                <h3>Kami menyediakan tempat untuk perkemahan</h3>
                                <a href="/tempat" class="btn btn-default">Daftar Sekrang</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="slide">
                    <!-- Background-->
                    <div class="hero fs">
                        <div style="background-image: url(images/office/03.jpg);" class="bg parallax"></div>
                        <div class="container text-center offset-top">
                            <!-- Content-->
                            <div class="content">
                                <h3 class="lg">Kebun Raya Balikpapan</h3>
                                <a href="/pengguna" class="btn btn-default">Buku Tamu</a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </section>
        <section>
            <div class="container content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="title-block">
                            <h3>Kebun Raya Balikpapan</h3>
                            <h5>Wisata Alam yang berada di Kota Balikpapan</h5>
                        </div>
                        <p>Kebun Raya Balikpapan merupakan salah satu objek wisata di kota Balikpapan. Pemerintah Kota Balikpapan bekerjasama dengan Pusat Konservasi Tumbuhan Kebun Raya Bogor dan Balai Besar Penelitian Dipterocarpaceae Dephut untuk kegiatan pembangunan Kebun Raya Balikpapan.</p>
                    </div>
                </div>
            </div>
        </section>
        <section></section>
        <!-- Footer-->
        <footer>
            <div class="container content">
                <div class="row">
                    <!-- Contact info-->
                    <div class="col-md-2">
                        <p>0852-4596-67668<br>kebunrayabalikpapan@dlh.co.id</p>
                    </div>
                    <div class="col-md-8 text-right">
                        <!-- Social links-->
                        <ul class="social">
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-dribbble"></a></li>
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-pinterest"></a></li>
                        </ul>
                        <!-- Copyright message-->
                        <div class="copyright">2021 &copy; Adit Wibisana. All rights reserved. <a href="http://themeforest.net/item/bone-responsive-agency-portfolio-html-template/15299321">Kunjungi Profil</a></div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src={{('js/assets/bootstrap.js')}}></script>
    <script src={{('js/assets/imagesloaded.pkgd.min.js')}}></script>
    <script src={{('js/assets/validation.js')}}></script>
    <script src={{('js/assets/masonry.pkgd.min.js')}}></script>
    <script src="modules/tera-slider/tera-slider.js"></script>
    <script src="modules/tera-lightbox/tera-lightbox.js"></script>
    <script src="js/assets/animsition.js"></script>
    <script src="js/functions.js"></script>
</body>

</html>