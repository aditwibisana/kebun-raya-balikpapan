<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="../img/favicon.png" />
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">

    <style>
        body {
            background-image: url(../img/body.jpg);
            background-repeat: repeat;
            background-attachment: fixed;
        }

        .d-flex {
            position: absolute;
            right: 0;
            top: 100px;
            width: 500px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <!-- Komponen navbar -->
                <ul class="nav pull-left">
                    <li><a href="/adm"><b class="text-error"> Home</b></a></li>

                    <li><a href="/datapengunjung"><b class="text-error"> Data Pengunjung </b></a></li>
                    <li><a href="/datapengguna"><b class="text-error"> Data Pengguna</b></a></li>
                    <li><a href="/datatempat"><b class="text-error"> Data Tempat</b></a></li>
                    <li><a href="/daftarpemesanan"><b class="text-error"> Data Pemesanan</b></a></li>
                    <li><a href="/daftarspot"><b class="text-error"> Daftar Spot</b></a></li>
                    <li><a href="/daftarflora"><b class="text-error"> Daftar Flora</b></a></li>
                    <li><a href="/logout" onclick="return confirm ('Apakah anda yakin ingin Logout?')"><b class="text-error"> Logout</b></a></li>

                </ul>

            </div>
        </div>
    </div>
    <div class="container">
        <section>
            @yield('content1')
        </section>
    </div>
    </div>
    <div class="navbar-fixed-bottom">
        <div class="navbar-inner">
            <div class="text-center text-error">
                <small>Copyright &copy; Bayu Adhitya Wibisana 2021</small>
            </div>
            <div class="text-center text-error">
                <b>Aplikasi Booking Kebun Raya Balikpapan. &reg;</b>
            </div>
        </div>
    </div>
</body>

</html>