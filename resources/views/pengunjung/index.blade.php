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
                <!-- Branding--><a href="/dashboard" class="brand"> <img alt="" src="{{asset('/images/kebun-raya-2.png')}}" class="dark-brand" width="200px" height="50px"" class=" dark-brand"><img alt="" src="{{asset('/images/kebun-raya-2.png')}}" width="200px" height="50px" class="light-brand"></a>
                <!-- Menu-->
                <div class="menu"></div>
            </div>
        </header>
        <section>
            <div class="container content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <br>
                        <h3>Pendaftaran Member Baru</h3>

                        <p>Daftar terlebih dahulu, kemudian sistem akan memberikan password</p>
                        <hr>
                        <form action="pengunjung/create" method="POST">
                            {{csrf_field()}}
                            @if(session('sukses'))
                            <div class="alert alert-success" role="alert">
                                {{session('sukses')}}
                            </div>
                            @endif
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off" style="width: 250px" required>
                            </div>
                            <div class="form-group">
                                <label>No. Hp</label>
                                <input type="text" class="form-control" pattern="[0-9]" name="no_hp" id="no_hp" placeholder="No. Hp" autocomplete="off" style="width: 250px" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="jenis_kelamin">Jenis Kelamin:</label><br>
                                <select name="jenis_kelamin" required>
                                    <option value="">Silahkan Dipilih...</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" autocomplete="off" style="width: 250px" required>
                            </div>
                            <div class="form-group">
                                <label>Asal</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Asal" autocomplete="off" style="width: 250px" required>
                            </div>


                            <input type="submit" name="submit" value="Simpan" class="btn btn-success">
                            <a href="index.php"><input type="button" class="btn btn-default" value="Batal"></a>
                        </form>
                    </div>
                </div>
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