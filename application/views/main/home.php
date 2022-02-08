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

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap');
	</style>

	<!-- Vendor CSS Files -->
	<link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
	<!-- <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
	<link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<!-- Template Main CSS File -->
	<link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	<script>
		AOS.init();
	</script>

</head>

<body style="font-family: 'Playfair Display', serif;">
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
	<header id="header" class="d-flex flex-column justify-content-center">

		<nav class="navbar navbar-expand fixed-bottom ">
			<div class="row shadow-lg p-lg-3 p-3 col-lg-10 col-10 mx-auto mx-lg-auto mb-lg-3 mb-3 bg-dark" style="border-radius:  50px;">
				<a href="#abouts scrollto" class="col-lg-2 col-2 mx-auto mx-lg-auto text-center mx-auto text-warning text-decoration-none"><i class="ri-user-heart-fill"></i> <span class="d-none d-lg-block">Bride & Groom</span></a>
				<a href="#resume" class="col-lg-2 col-2 mx-auto mx-lg-auto text-center mx-auto text-warning text-decoration-none"><i class="ri-calendar-check-fill"></i><span class="d-none d-lg-block">Wedding Event</span></a>
				<button id="pause" class="btn btn-warning text-dark  col-lg-2 col-2 mx-auto mx-lg-auto text-center" style="display: block; border-radius:  50px;"><i class="ri-play-circle-line"></i><span class="d-none d-lg-block">Music Play</button>
				<button id="playAgain" class="btn btn-warning text-dark rounded-lg col-lg-2 col-2 mx-auto mx-lg-auto text-center" style="display: none; border-radius:  50px;"><i class="ri-pause-circle-line"></i> <span class="d-none d-lg-block">Music Pause</button>
				<a href="#facts" class="col-lg-2 col-2 mx-auto mx-lg-auto text-center mx-auto text-warning text-decoration-none"><i class="ri-file-list-3-line"></i> <span class="d-none d-lg-block">RSVP</span></a>
				<a href="#services1" class="col-lg-2 col-2 mx-auto mx-lg-auto text-center mx-auto text-warning text-decoration-none"><i class="ri-gift-line"></i><span class="d-none d-lg-block">Wedding Gift</span></a>
			</div>
		</nav>

	</header>

	<section id="hero" class="d-flex flex-column justify-content-center text-center">
		<div class="container" data-aos="zoom-in" data-aos-delay="100">
			<p class="mb-lg-5 mb-5">THE WEDDING OF</p>
			<h1>Imam & Nadya</h1>
			<p class="mt-lg-4 mt-4">Jum'at, <span class="typed" data-typed-items="4 Februari 2022"></span></p>
			<div class="social-links">
				<a target="_blank" href="https://calendar.google.com/calendar/u/1/r/week/2022/2/4?tab=wc&pli=1"><button class="btn btn-dark rounded-lg shadow-lg"><i class="bi bi-calendar-check mr-2"></i> Save the Date</button></a>
			</div>
		</div>
	</section>

	<main id="main">


		<section id="about" class="about text-white" style="background-image: url('<?= base_url() ?>assets/img/additional-images/bg-quotes.png');">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2 class="text-warning">وَمِنْ كُلِّ شَيْءٍ خَلَقْنَا زَوْجَيْنِ لَعَلَّكُمْ تَذَكَّرُوْنَ</h2>
					<p><i class="bx bxs-quote-alt-left quote-icon-left"></i> Dan segala sesuatu Kami ciptakan berpasang-pasangan agar kamu mengingat (kebesaran Allah). <i class="bx bxs-quote-alt-right quote-icon-right"></i></p>
					<small><i>Q.S Adz- Dzariat ayat 49</i></small>
				</div>
			</div>
		</section>

		<section id="testimonials" class="testimonials section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Love Story</h2>
				</div>

				<div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
					<div class="swiper-wrapper">

						<div class="swiper-slide w-100">
							<div class="testimonial-item text-warning p-lg-5 p-5 mx-auto" style="background-image: url('<?= base_url() ?>assets/img/additional-images/bg-love-story.png');  background-size: cover;">
								<i class="bi bi-heart mt-lg-5"></i>
								<h3 class="text-warning">Pertemuan</h3>
								<!-- <h4 class="text-white">12 Januari 2021</h4> -->
								<p>
									<i class="bx bxs-quote-alt-left quote-icon-left"></i>
									Dipertemukan oleh Allah SWT
									<i class="bx bxs-quote-alt-right quote-icon-right"></i>
								</p>
							</div>
						</div><!-- End testimonial item -->

					</div>
					<div class="swiper-pagination"></div>
				</div>

			</div>
		</section>
		<section id="abouts" class="about" style="background-image: url('<?= base_url() ?>assets/img/additional-images/bg-bride-groom.png'); background-size: cover;">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2 class="text-warning">Bride & Groom</h2>
				</div>

				<div class="col-lg-10 col-12 row mx-lg-auto mx-auto">
					<div class="col-lg-5 col-12 pt-4 pt-lg-0 content mx-lg-auto mx-auto text-center ">
						<img src="<?= base_url() ?>assets/img/man.svg" width="300" height="300" class="rounded-circle shadow-lg mb-lg-5 mb-4" alt="">
						<h3 class="text-warning"><b>Moch. Imam</b></h3>
						<p class="text-muted">
							Putra Kedua dari
						</p>
						<h5 class="text-white">Bpk H. Abdul Usman & Ibu Hj. Hosiyah</h5>
						<a href="https://www.instagram.com/imamndya/" target="_blank">
							<p class="text-muted">
								<i class="bi bi-instagram mr-2"></i> imamndya
							</p>
						</a>
					</div>
					<div class="col-lg-5 col-12 pt-4 pt-lg-0 content mx-lg-auto mx-auto text-center">
						<img src="<?= base_url() ?>assets/img/woman.svg" width="300" height="300" class="rounded-circle shadow-lg mb-lg-5 mb-4" alt="">
						<h3 class="text-warning"><b>Nadya Safitri</b></h3>
						<p class="text-muted">
							Putra Kedua dari
						</p>
						<h5 class="text-white">Alm. Bpk Achmad Chafid & Ibu Tri Retno</h5>
						<a href="https://www.instagram.com/nadysftri/" target="_blank">
							<p class="text-muted">
								<i class="bi bi-instagram"></i> nadysftri
							</p>
						</a>
					</div>
				</div>

			</div>
		</section>

		<section id="resume" class="resume">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Intimate Wedding</h2>
				</div>

				<div class="row">

					<div class="col-lg-8 col-12 mt-lg-0 mt-2 mx-lg-auto mx-auto">
						<!-- <h3 class="resume-title text-center text-lg-left ">Wedding Reception</h3> -->
						<div class="text-center">
							<h4><strong>Jum'at, 4 Februari 2022</strong> </h4>
							<h5><i class="bi bi-alarm"></i> 16.30 - 19.30</h5>
							<h6><b class="mt-lg-2 mt-2">Midtown Residence Marvell City Surabaya</b></h6>
							<small><em><i class="bi bi-geo"></i> Jl. Ngagel No.123, Ngagel, Kec. Wonokromo, Kota SBY, Jawa Timur 60246</em></small>
							<div class="row p-lg-2 p-2 mx-lg-auto mx-auto">
								<a target="_blank" href="https://goo.gl/maps/jnZedVoGiQ7YjiCj9" class="btn btn-dark col-lg-5 mx-lg-auto mx-auto col-12"><i class="bi bi-geo-alt"></i> Lihat Lokasi</a>
								<a target="_blank" href="https://calendar.google.com/calendar/u/1/r/week/2022/2/4?tab=wc&pli=1" class="btn btn-dark col-lg-5 mt-2 mt-lg-0 mx-lg-auto mx-auto col-12" style="margin-left: 5px;"><i class="bi bi-calendar-check"></i> Save the Date</a>
							</div>
						</div>

					</div>
				</div>

			</div>
		</section>

		<section id="facts" class="facts" style="background-image: url('<?= base_url() ?>assets/img/additional-images/bg-quotes.png');">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2 class="text-warning">RSVP</h2>
					<p class="lead text-white"><b><?= $count_hadir + 65; ?> </b>Tamu Undangan memilih untuk menghadiri acara pernikahan Imam & Nadya</p>
					<lottie-player class="mx-lg-auto mx-auto" src="https://assets9.lottiefiles.com/packages/lf20_bajpxbhe.json" background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay></lottie-player>
					<button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-warning text-dark"><b>Konfirmasi Sekarang!</b></button>
				</div>

				<div class="row col-lg-8 mx-lg-auto mx-auto mt-lg-3 mt-4" id="timer">

					<div class="col-lg-3 col-md-6 col-3">
						<div class="count-box shadow-lg " style="border-radius: 10px;">
							<i class="bi bi-calendar2-day"></i>
							<span class="purecounter" id="days"></span>
							<p class="font-weight-bold">Days</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-3">
						<div class="count-box shadow-lg " style="border-radius: 10px;">
							<i class="bi bi-clock"></i>
							<span class="purecounter" id="hours"></span>
							<p class="font-weight-bold">Hours</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-3">
						<div class="count-box shadow-lg " style="border-radius: 10px;">
							<i class="bi bi-alarm"></i>
							<span class="purecounter" id="minutes"></span>
							<p class="font-weight-bold">Minutes</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-3">
						<div class="count-box shadow-lg " style="border-radius: 10px;">
							<i class="bi bi-stopwatch"></i>
							<span class="purecounter" id="seconds"></span>
							<p class="font-weight-bold">Seconds</p>
						</div>
					</div>

				</div>

			</div>
		</section>


		<section id="services" class="services">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Health Protocol</h2>
					<p>Dikarenakan pandemi COVID-19 sehingga acara pernikahan ini akan dilaksanakan dengan mengikuti protokol kesehatan, harap mengikuti aturan berikut.</p>
				</div>

				<div class="row">

					<div class="col-lg-3 col-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box iconbox-blue">
							<div class="icon">

								<i class="iconify" data-icon="uim:social-distancing" data-width="100" data-height="100"></i>
							</div>
							<h4>Social Distancing</h4>
							<p>Jaga jarak aman anda minimal 1 meter dari orang lain</p>
						</div>
					</div>

					<div class="col-lg-3 col-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
						<div class="icon-box iconbox-orange ">
							<div class="icon">
								<span class="iconify" data-icon="ph:face-mask-fill" data-width="100" data-height="100"></span>
							</div>
							<h4>Use a Mask</h4>
							<p>Selalu gunakan masker Anda, saat memasuki area resepsi pernikahan</p>
						</div>
					</div>

					<div class="col-lg-3 col-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box iconbox-pink">
							<div class="icon">

								<span class="iconify" data-icon="fa-solid:hands-wash" data-width="100" data-height="100"></span>
							</div>
							<h4>Wash Your Hand</h4>
							<p>Selalu cuci tangan anda sebelum dan sesudah. Gunakan sabun dan air atau handsinitize</p>
						</div>
					</div>

					<div class="col-lg-3 col-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box iconbox-yellow">
							<div class="icon">

								<span class="iconify" data-icon="wpf:facial-recognition-scan" data-width="100" data-height="100"></span>
							</div>
							<h4>Temperature Check</h4>
							<p>Selalu check temperatur anda dan tetap di rumah jika anda sakit atau mengalami gejala</p>
						</div>
					</div>


				</div>

			</div>
		</section>

		<section id="contact" class="contact" style="background-image: url('<?= base_url() ?>assets/img/additional-images/bg-quotes.png'); background-size: cover;">
			<div class="container mb-lg-3 mb-3" data-aos="fade-up">

				<div class="section-title">
					<h2 class="text-warning">Whises</h2>
				</div>

				<div class="row">

					<div class="col-lg-8 ">

						<form action="<?= base_url() ?>Home/Whises" method="post">

							<div class="form-group">
								<input type="text" class="form-control" name="whis_name" placeholder="Nama Lengkap" required>
							</div>
							<div class="form-group mt-3">
								<textarea class="form-control" name="whis_msg" rows="5" placeholder="Ucapan untuk mereka.." required></textarea>
							</div>

							<div class="text-center">
								<button class="btn btn-dark" id="btn-whises" type="submit"><i class="ri-send-plane-fill mr-2"></i> Kirim Ucapan</button>

							</div>
						</form>

					</div>

					<div class="col-lg-4 mt-4 mt-lg-0">
						<div class="info p-lg-3 p-3 shadow-lg h-100" style="overflow-y: auto; border-radius: 10px">
							<div class="address mt-3">
								<?php foreach ($list_whises as $lw) : ?>
									<div class="address mt-3"><i class="bi bi-person-badge"></i>
										<h4><?= $lw['whis_name']; ?></h4>
										<p class="lead"> <b><?= date('H:i', strtotime($lw['post_time'])) ?> WIB </b> &mdash; <span><?= $lw['whis_msg']; ?></span></p>
									</div>
								<?php endforeach; ?>
							</div>


						</div>

					</div>



				</div>

			</div>

		</section>

		<section id="services1" class="services">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Wedding Gift</h2>
					<p>Kami memahami bahwa beberapa dari Anda mungkin ingin mengirimkan ucapan atau hadiah kepada kami, jadi silakan ketuk tombol berikut untuk mengirimkannya kepada kami:</p>
				</div>
				<div class="text-center">
					<button class="btn btn-dark " type="button" data-toggle="modal" data-target="#wedd-gift"><i class="ri-gift-line mr-2"></i>Kirim Hadiah</button>

				</div>

			</div>
		</section>

	</main>

	<!-- <div id="preloader"></div> -->
	<!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

	<!-- Modal -->
	<div class="modal fade" id="first_modal" tabindex="-1" aria-hidden="true" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog modal-lg">
			<div class="modal-content bg-transparent">
				<div class="modal-body text-center p-0 justify-content-center" id="staticBackdropLabel">
					<section id="heros" class="d-flex flex-column p-2  justify-content-center text-center ">
						<div class="container p-5 bg-dark shadow-lg" style="border-radius: 20px;" data-aos="zoom-in" data-aos-delay="100">
							<img src="<?= base_url() ?>assets/img/additional-images/logo.png" width="200" height="50" alt="">
							<p class="mb-lg-3 mb-4 w-100 mt-lg-5 mt-5 text-white">Kepada Yth.</p>
							<h1 class="text-warning w-100"><?= $guestname; ?></h1>
							<p class="mt-lg-4 mt-4 text-white w-100">Ditempat</p>
							<div class="social-links">
								<button class="btn btn-warning text-dark font-weight-bold rounded-lg shadow-lg" id="play" type="button" data-dismiss="modal"><i class="ri-mail-open-line mr-2"></i> Buka Undangan</button>
							</div>
						</div>
					</section>
				</div>

			</div>
		</div>
	</div>



	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header bg-dark text-white">
					<h5 class="modal-title" id="exampleModalLabel">Konfirmasi Kehadiran</h5>
					<button type="button" class="btn-Tutup" data-dismiss="modal" aria-label="Tutup"></button>
				</div>
				<form action="<?= base_url() ?>Home/RSVP" method="post">
					<div class="modal-body">
						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Nama Lengkap</label>
							<input type="text" class="form-control" name="fullname" placeholder="Cth: Jhon Doe" />
						</div>
						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Kehadiran</label>
							<select class="form-control" name="present">
								<option value="0" disabled>-- Pilih Kehadiran --</option>
								<option value="Hadir">Hadir</option>
								<option value="Maaf, saya ragu-ragu">Maaf saya ragu-ragu</option>
								<option value="Maaf, saya tidak bisa hadir">Maaf, Saya tidak bisa hadir</option>
							</select>
						</div>
						<div class="mb-3">
							<label for="message-text" class="col-form-label">Pesan Untuk Pengantin</label>
							<textarea class="form-control" name="message" placeholder="Cth: Selamat yaa kalian!"></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-dark" data-dismiss="modal">
							Tutup
						</button>
						<button type="submit" class="btn btn-warning">Konfirmasi</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal example - top right -->
	<div class="modal fade right" id="wedd-gift" tabindex="-1" aria-labelledby="exampleSideModal1" aria-hidden="true">
		<div class="modal-dialog modal-side modal-top-right">
			<div class="modal-content">
				<div class="modal-header bg-dark text-white">
					<h5 class="modal-title" id="exampleSideModal1">Wedding Gift</h5>
					<button type="button" class="btn-Tutup btn-Tutup-white" data-dismiss="modal" aria-label="Tutup"></button>
				</div>
				<div class="modal-body active">
					<p class="text-center"> Silahkan transfer ke rekening tersebut untuk memberikan hadiah kepada <strong class="font-weight-bold">Imam & Nadya</strong></p>
					<div class="card mx-lg-auto mx-auto mb-lg-3 mb-4">
						<div class="card__front card__part">
							<img class="card__front-square card__square" src="https://futurapast.com/wp-content/uploads/2020/03/logo-bank-bca-png-4.png">
							<img class="card__front-logo card__logo" src="<?= base_url() ?>assets/img/icon.png">
							<p class="card_numer"><span id="norek">*********</span> </p>
							<div class="card__space-75">
								<span class="card__label">Card holder</span>
								<p class="card__info">Nadya Safitri</p>
							</div>
							<div class="card__space-25">
								<span class="card__label">Expires</span>
								<p class="card__info">10/25</p>
							</div>
						</div>

						<div class="card__back card__part">
							<div class="card__black-line"></div>
							<div class="card__back-content">
								<div class="card__secret">
									<p class="card__secret--last">420</p>
								</div>
								<div class="text-center">
									<button id="cp_btn" class="btn btn-sm btn-dark text-center mx-auto mx-lg-auto mt-lg-3 mt-4" type="button"><i class="ri-file-copy-line mr-2"></i> Copy Number</button>
								</div>

							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>



	<!-- Vendor JS Files -->
	<script src="<?= base_url() ?>assets/vendor/purecounter/purecounter.js"></script>
	<script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
	<!-- <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
	<script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/typed.js/typed.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
	<script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- Template Main JS File -->
	<script src="<?= base_url() ?>assets/js/main.js"></script>
	<script src="<?= base_url() ?>assets/js/master-card.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<!--<script type="text/javascript">-->
	<!--	$(document).ready(function() {-->
	<!--		$('#first_modal').modal('show');-->
	<!--	});-->
	<!--</script>-->
	<script>
		var audio = new Audio("<?= base_url() ?>assets/music/Maher Zain - Baraka Allahu Lakuma Official Lyric Video (mp3cut.net).mp3");
		$('#play').click(function() {
			audio.play();
		});
		$('#playAgain').click(function() {
			audio.play();
			$('#playAgain').css("display", "none");
			$('#pause').css("display", "block");
		});

		$('#pause').click(function(e) {
			audio.pause();
			$('#pause').css("display", "none");
			$('#playAgain').css("display", "block");
		});
	</script>

	<script type="text/javascript">
		document.getElementById('cp_btn').onclick = function() {
			navigator.clipboard.writeText(document.getElementById('norek').innerText).then(function() {
				Swal.fire({
					title: 'Maaf',
					text: 'Tidak ada Nomor Rekening, Silahkan Datang ke tempat.',
					imageUrl: 'https://www.freeiconspng.com/uploads/credit-card-bank-icon-png-26.png',
					imageWidth: 300,
					imageHeight: 300,
					imageAlt: 'Custom image',
				})
			})
		}
		// Set the date we're counting down to
		var countDownDate = new Date("Feb 4, 2022 16:30:00").getTime();

		// Update the count down every 1 second
		var x = setInterval(function() {

			// Get today's date and time
			var now = new Date().getTime();

			// Find the distance between now and the count down date
			var distance = countDownDate - now;

			// Time calculations for days, hours, minutes and seconds
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			// Output the result in an element with id="demo"
			document.getElementById("days").innerHTML = days;
			document.getElementById("hours").innerHTML = hours;
			document.getElementById("minutes").innerHTML = minutes;
			document.getElementById("seconds").innerHTML = seconds;

			// If the count down is over, write some text 
			// if (distance < 0) {
			// 	clearInterval(x);
			// 	document.getElementById("timer").innerHTML = "EXPIRED";
			// }
		}, 1000);
	</script>

</body>

</html>