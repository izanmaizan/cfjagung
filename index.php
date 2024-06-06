<?php
error_reporting(0);
ob_start();
session_start();
include "config/koneksi.php";
include "config/fungsi_alert.php";

// Memeriksa apakah pengguna sudah login atau belum
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <base href="http://localhost/cftongkol/">
    <link rel="icon" href="favicon.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="css/owl-carousel/owl.carousel.css" rel="stylesheet" media="all">
    <link href="css/owl-carousel/owl.theme.css" rel="stylesheet" media="all">
    <link href="css/magnific-popup.css" type="text/css" rel="stylesheet" media="all" />
    <link href="css/font.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/fontello.css" rel="stylesheet" type="text/css" media="all">
    <!-- <link href="css/main.css" rel="stylesheet" type="text/css" media="all" /> -->
    <link rel=stylesheet href="css/paging.css" type="text/css" media=screen>
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="aset/bootstrap.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="aset/AdminLTE.css">
    <link rel="stylesheet" href="aset/cinta.css">
    <link rel="stylesheet" href="aset/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="aset/skins/_all-skins.min.css">
    <link rel="stylesheet" href="aset/custom.css">
    <link rel="stylesheet" href="aset/icheck/green.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <!-- Popper.js 1.12.8  -->
    <!-- <script src="aset/Popper.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <!-- jQuery 3-7-1 -->
    <!-- <script src="aset/jQuery-3-7-1.js"></script> -->
    <script src="aset/jQuery-2.js"></script>
    <!-- Bootstrap 4.1.3 -->
    <!-- <script src="aset/bootstrap.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="aset/icheck/icheck.js"></script>
    <script src="aset/ckeditor/ckeditor.js"></script>
    <script src="aset/Flot/jquery.flot.js"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="aset/Flot/jquery.flot.resize.js"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="aset/Flot/jquery.flot.pie.js"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <script src="aset/Flot/jquery.flot.categories.js"></script>
    <!-- AdminLTE App -->
    <script src="aset/app.js"></script>
    <style>
    /* CSS untuk tampilan modal */
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.6);
        /* Tambahkan transition untuk efek animasi */
        transition: opacity 0.3s ease;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        border-radius: 10px;
        width: 80%;
        max-width: 500px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        /* Tambahkan transition untuk efek animasi */
        transition: transform 0.3s ease, opacity 0.3s ease;
        transform: translateY(-50px);
        opacity: 0;
    }

    .modal-content.show {
        /* Atur transform kembali ke nilai semula */
        transform: translateY(0);
        opacity: 1;
    }


    .close {
        color: black;
        float: right;
        font-size: 28px;
        font-weight: bold;
        /* Tambahkan transition untuk efek animasi */
        transition: color 0.3s ease;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .errorpage {
        margin: 0;
    }

    .errorpage .danger {
        color: red;
        font-size: 48px;
    }

    /* Style untuk form */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 5px;
    }

    .btn-login {
        /* background-color: #4CAF50; */
        background-color: #00A65A;
        color: white;
        padding: 7px 10px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    .submit {
        background-color: #00A65A;
        color: white;
        padding: 7px 10px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        border-radius: 5px;
    }

    .submit:hover {
        background-color: #008D4C;
    }

    /* CSS untuk tombol login */
    .btn-login {
        opacity: 0.8;
        position: relative;
        /* Mengatur posisi relatif untuk konten di dalam tombol */
        /* background-color: #4CAF50; */
        /* Warna latar belakang tombol */
        color: white;
        /* Warna teks tombol */
        /* padding: 10px 20px; */
        /* Padding tombol */
        border: none;
        /* Tanpa border */
        /* border-radius: 5px; */
        /* Border radius */
        cursor: pointer;
        /* Kursor pointer saat diarahkan ke tombol */
        font-size: 14px;
        /* Ukuran font */
        overflow: hidden;
        /* Overflow tersembunyi untuk konten dalam tombol */
    }

    /* Efek hover pada tombol */
    .btn-login::after {
        content: '';
        /* Konten kosong */
        position: absolute;
        /* Mengatur posisi absolut untuk elemen tambahan */
        width: 80%;
        /* Lebar 100% */
        height: 3px;
        /* Tinggi garis */
        background-color: white;
        border-radius: 50px;
        /* Warna garis */
        bottom: 5px;
        /* Membuat garis berada di bagian bawah tombol */
        left: 10px;
        /* Membuat garis dimulai dari kiri */
        transform: scaleX(0);
        /* Skala X nol untuk menyembunyikan garis saat tidak dihover */
        transition: transform 0.3s ease;
        /* Transisi untuk transformasi */
    }

    .btn-login:hover::after {
        opacity: 1;
        transform: scaleX(1);
        /* Skala X 1 saat tombol dihover untuk menampilkan garis */
    }

    .input-login {
        display: flex;
        flex-direction: row;
    }

    .input-login i {
        /* border: 1px solid #ccc; */
        background: #EEC037;
        width: 40px;
        height: 45px;
        border-radius: 3px;
        position: relative;
        top: 8px;
        left: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .floating {
        border-top: 0;
        border-left: 0;
        border-right: 0;
        text-decoration: none;
        font-family: sans-serif;
        font-size: 14pt;
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        /* background-color: #605ca8; */
        background-color: #00A65A;
        color: #fff;
        border-radius: 50px;
        text-align: center;
        box-shadow: 2px 2px 3px #999;
        margin-top: 32px;
    }

    .hamburger {
        position: fixed;
        top: 10px;
        z-index: 999;
        display: block;
        width: 30px;
        height: 30px;
        margin-left: 15px;
        background: transparent;
        border: none;
    }

    .hamburger:hover,
    .hamburger:focus,
    .hamburger:active {
        outline: none;
    }

    .hamburger.is-closed:before,
    .hamburger.is-open:before {
        content: '';
        display: block;
        width: 100px;
        font-size: 14px;
        color: #fff;
        line-height: 32px;
        text-align: center;
        opacity: 0;
        transform: translate3d(0, 0, 0);
        transition: all .35s ease-in-out;
        -webkit-transform: translate3d(0, 0, 0);
        -webkit-transition: all .35s ease-in-out;
        -moz-transform: translate3d(0, 0, 0);
        -moz-transition: all .35s ease-in-out;
        -ms-transform: translate3d(0, 0, 0);
        -ms-transition: all .35s ease-in-out;
        -o-transform: translate3d(0, 0, 0);
        -o-transition: all .35s ease-in-out;
    }

    .hamburger.is-closed:hover:before,
    .hamburger.is-open:hover:before {
        opacity: 1;
        display: block;
        transform: translate3d(-100px, 0, 0);
        transition: all .35s ease-in-out;
        -webkit-transform: translate3d(-100px, 0, 0);
        -webkit-transition: all .35s ease-in-out;
        -moz-transform: translate3d(-100px, 0, 0);
        -moz-transition: all .35s ease-in-out;
        -ms-transform: translate3d(-100px, 0, 0);
        -ms-transition: all .35s ease-in-out;
        -o-transform: translate3d(-100px, 0, 0);
        -o-transition: all .35s ease-in-out;
    }

    .hamburger.is-closed .hamb-top,
    .hamburger.is-closed .hamb-middle,
    .hamburger.is-closed .hamb-bottom,
    .hamburger.is-open .hamb-top,
    .hamburger.is-open .hamb-middle,
    .hamburger.is-open .hamb-bottom {
        position: absolute;
        left: 0;
        height: 4px;
        width: 100%;
    }

    .hamburger.is-closed .hamb-top,
    .hamburger.is-closed .hamb-middle,
    .hamburger.is-closed .hamb-bottom,
    .hamburger.is-open .hamb-top,
    .hamburger.is-open .hamb-middle,
    .hamburger.is-open .hamb-bottom {
        background-color: #fff;
    }

    .hamburger.is-closed .hamb-top {
        top: 5px;
        transition: all .35s ease-in-out;
        -webkit-transition: all .35s ease-in-out;
        -moz-transition: all .35s ease-in-out;
        -ms-transition: all .35s ease-in-out;
        -o-transition: all .35s ease-in-out;
    }

    .hamburger.is-closed .hamb-middle {
        top: 50%;
        margin-top: -2px;
    }

    .hamburger.is-closed .hamb-bottom {
        bottom: 5px;
        transition: all .35s ease-in-out;
        -webkit-transition: all .35s ease-in-out;
        -moz-transition: all .35s ease-in-out;
        -ms-transition: all .35s ease-in-out;
        -o-transition: all .35s ease-in-out;
    }

    .hamburger.is-closed:hover .hamb-top {
        top: 0;
        transition: all .35s ease-in-out;
        -webkit-transition: all .35s ease-in-out;
        -moz-transition: all .35s ease-in-out;
        -ms-transition: all .35s ease-in-out;
        -o-transition: all .35s ease-in-out;
    }

    .hamburger.is-closed:hover .hamb-bottom {
        bottom: 0;
        transition: all .35s ease-in-out;
        -webkit-transition: all .35s ease-in-out;
        -moz-transition: all .35s ease-in-out;
        -ms-transition: all .35s ease-in-out;
        -o-transition: all .35s ease-in-out;
    }

    .hamburger.is-open .hamb-top,
    .hamburger.is-open .hamb-bottom {
        top: 50%;
        margin-top: -2px;
    }

    .hamburger.is-open .hamb-top {
        transform: rotate(45deg);
        transition: transform .2s cubic-bezier(.73, 1, .28, .08);
        -webkit-transform: rotate(45deg);
        -webkit-transition: -webkit-transform .2s cubic-bezier(.73, 1, .28, .08);
        -moz-transform: rotate(45deg);
        -moz-transition: -moz-transform .2s cubic-bezier(.73, 1, .28, .08);
        -ms-transform: rotate(45deg);
        -ms-transition: -ms-transform .2s cubic-bezier(.73, 1, .28, .08);
        -o-transform: rotate(45deg);
        -o-transition: -o-transform .2s cubic-bezier(.73, 1, .28, .08);
    }

    .hamburger.is-open .hamb-middle {
        display: none;
    }

    .hamburger.is-open .hamb-bottom {
        transform: rotate(-45deg);
        transition: transform .2s cubic-bezier(.73, 1, .28, .08);
        -webkit-transform: rotate(-45deg);
        -webkit-transition: -webkit-transform .2s cubic-bezier(.73, 1, .28, .08);
        -moz-transform: rotate(-45deg);
        -moz-transition: -moz-transform .2s cubic-bezier(.73, 1, .28, .08);
        -ms-transform: rotate(-45deg);
        -ms-transition: -ms-transform .2s cubic-bezier(.73, 1, .28, .08);
        -o-transform: rotate(-45deg);
        -o-transition: -o-transform .2s cubic-bezier(.73, 1, .28, .08);
    }

    .overlay {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(250, 250, 250, .8);
        z-index: 1;
    }
    </style>
</head>

<body id="cftongkol" class="hold-transition sidebar-mini skin-green">

    <!-- Modal Login -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Login Pakar🌱✨</h2>
            <form action="login.php" method="post">
                <label for="username">Username</label>
                <div class="input-login">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" id="username" name="username" placeholder="Isi username anda.." required>
                </div>
                <label for="password">Password</label>
                <div class="input-login">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Isi password anda.." required>
                </div>
                <button type="submit" class="submit">Login</button>
                <p class="message">Ingin mendaftar? <a href="https://forms.gle/96dJXRyH1Y2P9ww49" target="_blank"
                        style="font-weight: bold;">Ajukan Permohonan</a></p>
            </form>
        </div>
    </div>



    <!-- Modal Error -->
    <div id="errorModal" class="modal">
        <div class="modal-content">
            <center>
                <span class="close" onclick="closeErrorModal()">&times;</span>
                <div class="errorpage">
                    <div class='danger'>
                        <i class='fa fa-exclamation-triangle'></i>
                    </div>
                    <br>
                    <h1 id="errorMessage">ERROR!</h1>
                    <p id="errorDescription">An error occurred.</p>
                    <br>
                    <input type="button" style="padding: 6px 12px;" value="ULANGI LAGI" onclick="closeErrorModal()">
                    <br>
                </div>
            </center>
        </div>
    </div>


    <!-- Modal Login 
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="loginModalLabel">Login</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->


    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">
            <!-- Logo -->
            <a href="./" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b><i class="fa-solid fa-disease"></i>Tc</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b><i class="fa-solid fa-disease"></i>T-corn</b></span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                </button>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <?php
                        if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
                            ?>
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="gambar/admin/admin.png" class="user-image" alt="User Image">
                                <?php echo ucfirst($_SESSION['username']); ?>
                                <span class="hidden-xs">
                                    <?php echo $user; ?>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="gambar/admin/admin.png" class="img-circle" alt="User Image">

                                    <p>
                                        Login sebagai
                                        <b><?php echo ucfirst($_SESSION['username']); ?></b><br>
                                        <small><b><?php echo ucfirst($_SESSION['nama_lengkap']); ?></b></small>
                                        <small>Pakar dari T-corn</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a class="btn btn-default btn-flat" <?php if ($module == "tentang")
                                                echo 'class="class="btn btn-default btn-flat active"'; ?>
                                            href="?module=tentang"><i class="fa-solid fa-file-invoice"></i>
                                            <span>Tentang</span></a>
                                    </div>
                                    <div class="pull-right">
                                        <a class="btn btn-default btn-flat"
                                            href="JavaScript: confirmIt('Anda yakin akan logout dari aplikasi ?','logout.php','','','','u','n','Self','Self')"
                                            onMouseOver="self.status = ''; return true"
                                            onMouseOut="self.status = ''; return true"><i class="fa fa-sign-out"></i>
                                            <span>Keluar</span></a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <?php } else { ?>
                        <?php
                            // Tampilan tombol masuk di navbar sesuai status login
                            if (!$isLoggedIn) {
                                echo '<li class="dropdown messages-menu">
        <button onclick="openModal()" class="btn-login"><i class="fa-solid fa-right-to-bracket"></i> Masuk</button>
    </li>';
                            }
                            ?>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <!-- <li class="header bg-yellow-active">Menu</li> -->
                    <!-- Optionally, you can add icons to the links -->
                    <?php include "menu.php"; ?>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 310px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-body">
                        <?php include "content.php"; ?>
                    </div>
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- Default to the left -->
            <strong>
                <div class="cinta" style="text-align: center;">Copyright © 2024 ~ by <a
                        href="https://www.linkedin.com/in/izanmaizan/" target="_blank">Maizan Insani Akbar</a> - <a
                        href="https://www.linkedin.com/in/haurafarikhap/" target="_blank">Haura Farikha Prameshwari</a>
                </div>
            </strong>
        </footer>
        <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
        <div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>
    </div><!-- ./wrapper -->

    <script>
    // Fungsi untuk membuka modal login
    function openModal() {
        var modal = document.getElementById("myModal");
        var modalContent = modal.querySelector('.modal-content');
        modal.style.display = "block";
        setTimeout(function() {
            modalContent.classList.add('show');
        }, 10);
    }

    // Fungsi untuk menutup modal login
    function closeModal() {
        var modal = document.getElementById("myModal");
        var modalContent = modal.querySelector('.modal-content');
        modalContent.classList.remove('show');
        setTimeout(function() {
            modal.style.display = "none";
        }, 300); // Sesuaikan dengan durasi transisi CSS
    }

    // Menutup modal saat user mengklik di luar modal
    window.onclick = function(event) {
        var modal = document.getElementById('myModal');
        if (event.target == modal) {
            closeModal();
        }
    }

    // Fungsi untuk membuka modal error
    function openErrorModal(message, description) {
        var modal = document.getElementById("errorModal");
        var modalContent = modal.querySelector('.modal-content');
        document.getElementById('errorMessage').innerText = message;
        document.getElementById('errorDescription').innerText = description;
        modal.style.display = "block";
        setTimeout(function() {
            modalContent.classList.add('show');
        }, 10);
    }

    // Fungsi untuk menutup modal error
    function closeErrorModal() {
        var modal = document.getElementById("errorModal");
        var modalContent = modal.querySelector('.modal-content');
        modalContent.classList.remove('show');
        setTimeout(function() {
            modal.style.display = "none";
        }, 300); // Sesuaikan dengan durasi transisi CSS
        openModal();
    }

    // Menutup modal saat user mengklik di luar modal
    window.onclick = function(event) {
        var modal = document.getElementById('errorModal');
        if (event.target == modal) {
            closeErrorModal();
        }
    }

    // Buka modal error jika ada error
    <?php if (isset($_SESSION['error_message'])): ?>
    openErrorModal("<?php echo $_SESSION['error_message']; ?>", "<?php echo $_SESSION['error_description']; ?>");
    <?php unset($_SESSION['error_message']); ?>
    <?php unset($_SESSION['error_description']); ?>
    <?php endif; ?>

    $(document).ready(function() {
        var trigger = $('.hamburger'),
            overlay = $('.overlay'),
            isClosed = false;

        trigger.click(function() {
            hamburger_cross();
        });

        function hamburger_cross() {

            if (isClosed == true) {
                overlay.hide();
                trigger.removeClass('is-open');
                trigger.addClass('is-closed');
                isClosed = false;
            } else {
                overlay.show();
                trigger.removeClass('is-closed');
                trigger.addClass('is-open');
                isClosed = true;
            }
        }

        $('[data-toggle="offcanvas"]').click(function() {
            $('#wrapper').toggleClass('toggled');
        });
    });
    </script>
</body>

</html>
<?php ob_end_flush();
?>