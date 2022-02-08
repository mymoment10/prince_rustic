<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?> - My Moment</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/icon.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://pattern.kivan-works.com/fonts/kredit.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body>
    <?php if ($this->session->flashdata('data')) {
        if ($this->session->flashdata('data') == "Login_Success") {
            echo '<script>Swal.fire("Login Berhasil", "Selamat, Login Berhasil!", "success");</script>';
            unset($_SESSION['data']);
        }
    }
    ?>
    <?php if ($this->session->flashdata('data')) {
        if ($this->session->flashdata('data') == "Add") {
            echo '<script>Swal.fire("Berhasil", "Data Berhasil Ditambahkan", "success");</script>';
            unset($_SESSION['data']);
        } else if ($this->session->flashdata('data') == "Update") {
            echo '<script>Swal.fire("Berhasil", "Data Berhasil Diperbarui", "info");</script>';
            unset($_SESSION['data']);
        } else if ($this->session->flashdata('data') == "Delete") {
            echo '<script>Swal.fire("Berhasil", "Data Berhasil Dihapus", "success");</script>';
            unset($_SESSION['data']);
        } else if ($this->session->flashdata('data') == "Gagal") {
            echo '<script>Swal.fire("Gagal", "Isilah Data Dengan Benar", "error");</script>';
            unset($_SESSION['data']);
        }
    }
    ?>

    <main id="main">

        <section id="contact" class="contact" style="background-image: url('assets/img/additional-images/bg-quotes.png'); background-size: cover;">
            <div class="container justify-content-center my-lg-auto my-auto" data-aos="fade-up">

                <div class="section-title">
                    <h2 class="text-warning">Dashboard Admin</h2>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <h5 class="text-warning">Hello, <?= $this->session->userdata('username') ?></h5>
                        </div>
                        <div class="col-lg-6 col-12">
                            <a href="<?= base_url() ?>Login/logout"><button class="btn-warning btn rounded-3 w-auto text-right text-dark mt-lg-3 mt-3">Logout</button></a>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-lg-5 mx-lg-auto mx-3 card text-white bg-dark mb-3">
                        <div class="card-header"><b class="text-warning"><?= $count_guest; ?></b> Undangan</div>
                        <div class="card-body">
                            <h5 class="card-title">Total Undangan Disebar</h5>
                        </div>
                    </div>
                    <div class="col-lg-5  mx-lg-auto mx-3 card text-white bg-dark mb-3">
                        <div class="card-header"><b class="text-warning"><?= $count_whises; ?></b> Whises</div>
                        <div class="card-body">
                            <h5 class="card-title">Total Whises</h5>
                        </div>
                    </div>

                </div>
                <div class="row ">
                    <div class="col-lg-3 mx-lg-auto mx-3 card text-white bg-dark mb-3">
                        <div class="card-header"><b class="text-warning"><?= $count_hadir; ?></b> Tamu Hadir</div>
                        <div class="card-body">
                            <h5 class="card-title">Total Tamu yang akan hadir diacara pernikahan anda.</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 mx-lg-auto mx-3 card text-white bg-dark mb-3">
                        <div class="card-header"><b class="text-warning"><?= $count_ragu; ?></b> Tamu yang ragu-ragu</div>
                        <div class="card-body">
                            <h5 class="card-title">Total Tamu yang masih ragu-ragu di acara pernikahan anda.</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 mx-lg-auto mx-3 card text-white bg-dark mb-3">
                        <div class="card-header"><b class="text-warning"><?= $count_tidak_hadir; ?></b> Tamu yang tidak hadir</div>
                        <div class="card-body">
                            <h5 class="card-title">Total Tamu yang tidak bisa hadir di acara pernikahan anda.</h5>
                        </div>
                    </div>
                </div>


            </div>

        </section>
        <section>
            <div class="container">
                <!-- Tabs navs -->
                <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="ex1-tab-1" data-toggle="tab" href="#ex1-tabs-1" role="tab" aria-controls="ex1-tabs-1" aria-selected="true">Daftar Nama Tamu</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex1-tab-2" data-toggle="tab" href="#ex1-tabs-2" role="tab" aria-controls="ex1-tabs-2" aria-selected="false">Kehadiran</a>
                    </li>

                </ul>
                <!-- Tabs navs -->

                <!-- Tabs content -->
                <div class="tab-content" id="ex1-content">
                    <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded-pill shadow-lg row p-lg-2 p-3 col-12 mx-lg-0 mx-auto">
                            <div class="col-lg-10 col-12 text-center ">
                                <h4 class="text-warning text-lg-left mx-lg-5 mx-3 mt-lg-0 mt-1">Daftar Nama Tamu</h4>
                            </div>
                            <div class="col-lg-2 col-12 text-center mt-lg-0 mt-2">
                                <button type="button" class="btn btn-warning text-dark rounded-pill mx-lg-0 mx-auto" data-toggle="modal" data-target="#form_nama_tamu"><i class="bi bi-plus"></i> Tambah Tamu</button>
                            </div>

                        </nav>
                        <div class="table-responsive">

                            <table id="table_id" class="table table-bordered table-sm table-striped rounded-lg shadow-lg mt-lg-3 mt-3">
                                <thead>
                                    <tr>
                                        <th>ID Tamu</th>
                                        <th>Nama Tamu</th>
                                        <th>No. Telpon</th>
                                         <th>Url Invitation</th> 
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($list_guest as $lg) : ?>
                                        <tr>
                                            <td><?= $lg['id_guest']; ?></td>
                                            <td><?= $lg['guest_name']; ?></td>
                                            <td>+62<?= $lg['guest_phone']; ?></td>
                                             <td><button class="btn btn-primary btn-sm" style="text-transform: auto;" data--toggle="tooltip" title="Klik untuk copy url!" id="cp_btn"><span id="url_invit"><?= base_url() ?>home/getGuest/<?= $lg['id_guest']; ?></span></button></td> 
                                            <td>
                                                <button type="button" data-toggle="modal" data-target="#form_nama_tamu<?= $lg['id_guest']; ?>" class="btn-dark btn-sm btn mb-lg-0 mb-2">Edit</button>
                                                <a href="<?= base_url() ?>Dashboard_admin/deleteGuestName/<?= $lg['id_guest']; ?>" class="btn-warning text-dark btn-sm btn mb-lg-0 mb-2">Delete</a>
                                                <a target="_blank" href="<?= base_url() ?>home/getGuest/<?= $lg['id_guest']; ?>" class="btn-primary text-white btn-sm btn">Preview</a>
                                                <a target="_blank" href="https://api.whatsapp.com/send?phone=62<?= $lg['guest_phone']; ?>&text=Assalamualaikum+Wr.+Wb%2C%0D%0AKepada+Yth.+Bapak%2FIbu%2FSaudara%2Fi+<?= $lg['guest_name']; ?>%0D%0A%0D%0ADengan+mengharap+ridho+Allah+SWT%2C+izinkan+kami+mengundang+Bapak%2FIbu%2FSaudara%2Fi+untuk+hadir+dan+memberikan+doa+restu+pada+acara+pernikahan+kami.%0D%0A%0D%0AMohon+maaf+atas+keterbatasan+kami+sehingga+undangan+kami+sampaikan+melalui+link+berikut%3A%0D%0A%0D%0A<?= base_url() ?>home/getGuest/<?= $lg['id_guest']; ?>%0D%0A%0D%0AAtas+perhatiannya+kami+sampaikan+terima+kasih%0D%0A%0D%0AWassalamualaikum+Wr.+Wb.%0D%0AMoch.+Imam+%26+Nadya+Safitri" class="btn-success text-white btn-sm btn">Share</a>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="form_nama_tamu<?= $lg['id_guest']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-dark text-white">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Nama Tamu</h5>
                                                        <button type="button" class="btn-Tutup" data-dismiss="modal" aria-label="Tutup"></button>
                                                    </div>
                                                    <form action="<?= base_url() ?>Dashboard_admin/editGuestName/<?= $lg['id_guest']; ?>" method="post">
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label for="recipient-name" class="col-form-label">Nama Lengkap</label>
                                                                <input type="text" class="form-control" name="nama" value="<?= $lg['guest_name']; ?>" />
                                                            </div>
                                                                <div class="mb-3">
                                                                <label class="col-form-label">No.Whatsapp</label>
                                                                <div class="input-group mb-2">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text text-dark" style="background: gray;">+62</div>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="notelp" placeholder="8974879215" value="<?= $lg['guest_phone']; ?>">
                                                                </div>
                                                                <small>*) Masukkan nomor whatsapp mulai dari 8. Cth: 628974879215</small>
                                                            </div>
                                                        <!--</div>-->
                                                        <!--    <div class="mb-3">-->
                                                        <!--        <label for="recipient-name" class="col-form-label">No. Telpon</label>-->
                                                        <!--        <input type="number" class="form-control" name="notelp" value="<?= $lg['guest_phone']; ?>" />-->
                                                        <!--    </div>-->
                                                     
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-dark" data-dismiss="modal">
                                                                Tutup
                                                            </button>
                                                            <button type="submit" class="btn btn-warning">Edit Url</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded-pill shadow-lg row mx-lg-0 mx-auto">
                            <div class=" col-12">
                                <h4 class="text-warning mx-lg-5 mx-3">Kehadiran</h4>
                            </div>

                        </nav>
                        <div class="table-responsive">

                            <table id="table_id" class="table table-bordered table-striped rounded-lg shadow-lg mt-lg-3 mt-3">
                                <thead>
                                    <tr>
                                        <th>ID RSVP</th>
                                        <th>Nama Lengkap</th>
                                        <th>Kehadiran</th>
                                        <th>Pesan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($list_rsvp as $lr) : ?>
                                        <tr>
                                            <td><?= $lr['id_rsvp']; ?></td>
                                            <td><?= $lr['fullname']; ?></td>
                                            <td><?= $lr['present']; ?></td>
                                            <td><?= $lr['message']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- Tabs content -->

            </div>
        </section>

    </main>

    <!-- Modal Tambah Tamu -->
    <div class="modal fade" id="form_nama_tamu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Daftar Nama Tamu</h5>
                    <button type="button" class="btn-Tutup" data-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <form action="<?= base_url() ?>Dashboard_admin/addGuestName" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" />
                        </div>
                        <div class="mb-3">
                                                                <label class="col-form-label">No.Whatsapp</label>
                                                                <div class="input-group mb-2">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text text-dark" style="background: gray;">+62</div>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="notelp" placeholder="8974879215">
                                                                </div>
                                                                <small>*) Masukkan nomor whatsapp mulai dari 8. Cth: 628974879215</small>
                                                            </div>
                        <!--<div class="mb-3">-->
                        <!--    <label for="recipient-name" class="col-form-label">No. Telpon</label>-->
                        <!--    <input type="number" class="form-control" name="notelp" />-->
                        <!--</div>-->
                        <!-- <div class="mb-3">
                            <label class="col-form-label">Url Invitation</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text text-dark" style="background: gray;"><?= base_url() ?></div>
                                </div>
                                <input type="text" class="form-control" name="url" placeholder="alfinsugestian">
                            </div>
                            <small>*) Karakter tidak boleh ada spasi</small>
                        </div> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">
                            Tutup
                        </button>
                        <button type="submit" class="btn btn-warning">Buat Url</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        document.getElementById('cp_btn').onclick = function() {
            navigator.clipboard.writeText(document.getElementById('url_invit').innerText).then(function() {
                Swal.fire(
                    "Berhasil",
                    "URL berhasil di copy!",
                    "info"
                )
            })
        }

        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>


    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>assets/vendor/purecounter/purecounter.js"></script>
    <script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/typed.js/typed.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>


</body>

</html>