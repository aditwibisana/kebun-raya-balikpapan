<!DOCTYPE html>
<html>

<head>
    <title>Login Pengguna</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/core.css">
    <link rel="stylesheet" type="text/css" href="../css/base.css">
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
    <link rel="icon" type="../image/png" href="favicon.png?v=2">
    <script src="../js/assets/jquery.js"></script>
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
        <div class="copyright">2016 &copy; Bone Template. All rights reserved.</div>
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
                <!-- Branding--><a href="index.html" class="brand"> <img alt="" src="../images/kebun-raya-2.png" class="dark-brand" width="200px" height="50px"" class=" dark-brand"><img alt="" src="images/logo-white.svg" class="light-brand"></a>
                <!-- Menu-->
                <div class="menu"></div>
            </div>
        </header>
        <!-- Hero & Tera Slider-->

        <center>
            <section>
                <div class="container content">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <br>
                            <h3>Login Member</h3>
                            <marquee>
                            </marquee>
                            <hr>
                            <form action="/postlogin" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off" style="width: 250px">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" id="pin" style="width: 250px">
                                </div>
                                <input type="submit" name="submit" value="submit" class="btn btn-success">
                                <a href="index.php"><input type="button" class="btn btn-default" value="Batal"></a>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </center>
        <section class="top-line">
            <div class="container content text-center">

            </div>
        </section>
        <!-- Footer-->

    </div>
    <script src="../js/assets/bootstrap.js"></script>
    <script src="../js/assets/imagesloaded.pkgd.min.js"></script>
    <script src="../js/assets/validation.js"></script>
    <script src="../js/assets/masonry.pkgd.min.js"></script>
    <script src="../modules/tera-slider/tera-slider.js"></script>
    <script src="../modules/tera-lightbox/tera-lightbox.js"></script>
    <script src="../js/assets/animsition.js"></script>
    <script src="../js/functions.js"></script>
</body>

</html>