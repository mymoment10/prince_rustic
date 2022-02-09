<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?> - My Moment</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/icon.png" rel="icon">
    <link href="assets/img/icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://pattern.kivan-works.com/fonts/kredit.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">


    <style>
        @font-face {
            font-family: Dandeleon;
            src: url('assets/css/DandeleonVintageDemo.otf');
        }

        @import url('https://fonts.googleapis.com/css2?family=Cairo&display=swap');
    </style>
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php if ($this->session->flashdata('data')) {
        if ($this->session->flashdata('data') == "Login_Password") {
            echo '<script>Swal.fire("Login Gagal", "Masukkan Password dan Username Dengan Benar", "error");</script>';
            unset($_SESSION['data']);
        } else if ($this->session->flashdata('data') == "Login_Failed") {
            echo '<script>Swal.fire("Login Gagal", "Akun Tidak tersedia", "error");</script>';
            unset($_SESSION['data']);
        } else if ($this->session->flashdata('data') == "Logout") {
            echo '<script>Swal.fire("Berhasil", "Anda Berhasil Logout", "info");</script>';
            unset($_SESSION['data']);
        }
    }
    ?>

    <main id="main">

        <section id="contact" class="contact" style="background-image: url('assets/img/additional-images/bg-protocol.svg'); background-size: cover; height: 73vh">
            <div class="container justify-content-center my-lg-auto my-auto" data-aos="fade-up">

                <div class="section-title">
                    <h2 class="text-white" style="font-family: Dandeleon;">Login Admin</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6 mx-lg-auto mx-auto">
                        <form class="" action="<?= base_url() ?>Login" style="font-family: 'Cairo', sans-serif;" method="post">
                            <div class="form-group">
                                <label for="" class="text-white">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username" required autocomplete="off">
                                <!-- <?= form_error('username', '<small>Username salah!</small>') ?> -->
                            </div>
                            <div class="form-group mt-3">
                                <label for="" class="text-white">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" required autocomplete="off">
                                <!-- <?= form_error('password', '<small>Password salah!</small>') ?> -->
                            </div>
                            <div class="text-center">
                                <button class="btn btn-dark mt-lg-3 mt-3 rounded-pill px-3" type="submit"><span class="iconify mr-2" data-icon="carbon:send-alt-filled" data-width="24" data-height="24"></span> Login Sekarang!</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>

        </section>

    </main>



    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


</body>

</html>