<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Administrator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="{{asset('admin/img/favicon.png')}}" />
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">

    <style>
        body {
            background-image: url asset('admin/img/body.jpg');
            background-repeat: repeat;
            background-attachment: fixed;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">

            <div class="navbar-inner" style="border:0px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:5px; margin-bottom:5px; margin-left:auto; margin-right:auto;">
                <div style="margin-top:2px; margin-bottom:2px; margin-left:auto; margin-right:auto;">
                    <a href="index.php">
                        <table border="0" cellpadding="5" cellspacing="0" align="left">
                            <tr>
                                <td width="15%" align="center">
                                    &nbsp;
                                </td>
                                <td width="85%" align="left">
                                    <font face="Comic Sans MS, cursive" color="#FF0000">
                                        <h3>Login Admin</h3>
                                    </font>
                                </td>
                            </tr>
                        </table>
                    </a>
                </div>
            </div>

            <body OnLoad="document.login.username.focus();">
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "gagal") {
                        echo "Login gagal! username dan password salah!";
                    } else if ($_GET['pesan'] == "logout") {
                        echo "Anda telah berhasil logout";
                    } else if ($_GET['pesan'] == "belum_login") {
                        echo "Anda harus login untuk mengakses halaman admin";
                    }
                }
                ?>

                <form class="form-horizontal" name="login" id="form-login" method="post" action="/postloginadmin" onSubmit="return validasi(this)">
                    {{csrf_field()}}
                    <div class="modal-body text-center">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" id="username" class="required input-large" name="name" placeholder="Username..">
                        </div>
                        <div class="row">
                            &nbsp;
                        </div>
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-lock"></i></span><input type="password" id="password" class="input-large" name="password" placeholder="Password..">
                        </div>
                        <div class="row">
                            &nbsp;
                        </div>
                        <div>
                            <button class="btn btn-small btn-info" type="submit" name="login" id="login">Login</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
    <br><br><br><br>
    <script src="{{asset('admin/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

</body>

</html>