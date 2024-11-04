<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PILIH</title>
  <?php include "assets/css.php" ?>

</head>

<body>
  <section class="container">
    <div class="row">
      <!-- section header -->

      <div class="header-top">
        <?php include "assets/header.php";
    include "assets/Login.php"?>
      </div>
      <!-- end header -->

      <!-- section menu -->
      <div class="pilih-main d-flex flex-column">
        <!-- <video autoplay muted loop class="video-background">
          <source src="assets/videos/profil.mp4" type="mp4">
          Your browser does not support the video tag.
        </video> -->
        <div class="media-sosial">
          <a href="https://youtube.com" target="_blank" class="social-logo">
            <i class="fa-brands fa-youtube"></i>
          </a>
          <a href="https://facebook.com" target="_blank" class="social-logo">
            <i class="fa-brands fa-facebook"></i>
          </a>
          <a href="https://tiktok.com" target="_blank" class="social-logo">
            <i class="fa-brands fa-tiktok"></i>
          </a>
          <a href="https://instagram.com" target="_blank" class="social-logo">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </div>

        <div class="kalimat">
          <h1 class="GothamPro header-judul">SELAMAT DATANG <br> DI TVRI KALIMANTAN SELATAN</h1>
          <br>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, atque vero magnam laboriosam, ad necessitatibus magni saepe nihil voluptatem quas consequatur blanditiis odio obcaecati ea eum reprehenderit est esse illum!</p>
          <button>BIODATA</button>
        </div>

        <div id="carouselExampleIndicators" class="slide carousel-fade slide-gambar" data-bs-ride="carousel">
      <div class="carousel-indicators slide-tombol">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
          aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
          aria-label="Slide 6"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="assets/images/atap.png" class="d-block w-100" alt="jaringan lelet">
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <img src="assets/images/halaman.png" class="d-block w-100" alt="jaringan lelet">
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <img src="assets/images/pal6.png" class="d-block w-100" alt="jaringan lelet">
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <img src="assets/images/studio2.png" class="d-block w-100" alt="jaringan lelet">
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <img src="assets/images/studio3.png" class="d-block w-100" alt="jaringan lelet">
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <img src="assets/images/tvri.png" class="d-block w-100" alt="jaringan lelet">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="visually-hidden">Next</span>
      </button>
    </div>

        <div class="menu-option">
          <a href="form.php?type=pengunjung" class="pilih-option">Pengunjung</a>
          <a href="form.php?type=magang" class="pilih-option">Magang</a>
          <a href="form.php?type=narasumber" class="pilih-option">Narasumber</a>
        </div>
      </div>

      <!-- end menu -->

      <!-- section footer -->
      <?php include "assets/footer.php"?>
      <!-- end footer -->
    </div>

  </section>

  <?php include "assets/js.php"?>
</body>

</html>