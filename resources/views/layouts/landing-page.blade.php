<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>ABC Baking Centre Karawang</title>
    <meta content="" name="description" />
    <meta content="Baking Centre" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Jun 19 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
      <div
        class="container-fluid container-xl d-flex align-items-center justify-content-between"
      >
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- <img src="assets/img/logo.png" alt="" /> -->
          <span>ABC Baking Centre Karawang</span>
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">Tentang kami</a></li>
            <li>
              <a class="nav-link scrollto" href="#gallery">Gallery</a>
            </li>
            <li><a class="nav-link scrollto" href="#kelas">Kelas</a></li>
            <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
            <li>
              <a class="getstarted scrollto btn btn-primary" href="#daftar" style="cursor: pointer;">Daftar</a>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">
              Selamat Datang di ABC Baking Centre Karawang
            </h1>
            <h2 data-aos="fade-up" data-aos-delay="400">
              Baking Class pertama di Karawang Sejak 2015
            </h2>
            <div data-aos="fade-up" data-aos-delay="600">
              <div class="text-center text-lg-start">
                <a
                  href="#about"
                  class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"
                >
                  <span>Mulai</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div
            class="col-lg-6 hero-img"
            data-aos="zoom-out"
            data-aos-delay="200"
          >
            <img src="assets/img/hero-img.png" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      @yield('content')
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

      <div class="footer-top">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
              <a href="index.html" class="logo d-flex align-items-center">
                <span>ABC Baking Centre Karawang</span>
              </a>
              <p>Baking Centre Pertama dan terbesar di Kota Karawang.</p>
              <div class="social-links mt-3">
                <a href="https://web.facebook.com/abcbakingcentre/?locale=id_ID&_rdc=1&_rdr" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/abc_baking_centre_karawang/" class="instagram"
                  ><i class="bi bi-instagram"></i
                ></a>
                <a href="https://www.tiktok.com/@dapur_momie_barani" class="linkedin"><i class="bi bi-tiktok"></i></a>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-12 footer-contact text-center text-md-start"
            >
              <h4>Kontak Kami</h4>
              <p>
                Jl. Bharata Raya No.59, Sukaharja, Telukjambe Timur
                <br />
                Karawang<br />
                Jawa Barat 41361 <br /><br />
                <strong>Whatsapp:</strong> +6282122745168<br />
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>FlexStart</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits"> -->
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div> -->
    </footer>
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <script>
      function sendToWhatsApp(training) {
        var phoneNumber = "6282122745168"; // Ganti dengan nomor WhatsApp tujuan

        // Format pesan yang akan dikirim ke WhatsApp
        var message =
          "Halo, saya tertarik dengan pelatihan kue " +
          training +
          ". Mohon informasi lebih lanjut.";

        // Membuka link WhatsApp dengan pesan yang telah dibentuk
        var whatsappLink =
          "https://api.whatsapp.com/send?phone=" +
          phoneNumber +
          "&text=" +
          encodeURIComponent(message);
        window.open(whatsappLink);
      }
    </script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
