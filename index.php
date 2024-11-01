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
      <div class="row">
        <div class="col-6 col-md-4 pilih-main">
          <a href="form.php?type=pengunjung" class="pilih-option">Pengunjung</a>
          <a href="form.php?type=narasumber" class="pilih-option">Narasumber</a>
          <a href="form.php?type=magang" class="pilih-option">Magang</a>
        </div>
        <div class="col-md-8">
          <!-- ukuran pas 880x494 -->
          <iframe id="videoFrame" width="880" height="494"
            src="https://drive.google.com/file/d/1nX9e1qnP3Ea6WHpyI5REQThjlJc_UkUV/preview" frameborder="0"
            allow="autoplay; fullscreen" allowfullscreen>
          </iframe>
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