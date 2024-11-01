<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <?php include "assets/css.php" ?>
</head>

<body>
  <!-- section header -->
  <div class="header-top">
    <?php include "assets/header.php" ?>
    <a class="kembali-btn" href="index.php">Kembali</a>
  </div>
  </nav>
  </div>
  <!-- end header -->

  <?php include 'assets/koneksi.php'; ?>
  <?php $type = $_GET['type'];

  if ($type === 'pengunjung') {
    if (isset($_POST['submit'])) {
      $nama           = $_POST['nama'];
      $nomor        = $_POST['nomor'];
      $jenis_kelamin  = $_POST['jenis_kelamin'];
      $tanggal         = $_POST['tanggal'];

      $result = mysqli_query($conn, "INSERT INTO pengunjung (nama, nomor, jenis_kelamin, tanggal) VALUES ('$nama', '$nomor', '$jenis_kelamin', '$tanggal')");

      header('Location:index.php');
    }
  } elseif ($type === 'narasumber') {
    if (isset($_POST['submit'])) {
      $nama           = $_POST['nama'];
      $nomor          = $_POST['nomor'];
      $jenis_kelamin  = $_POST['jenis_kelamin'];
      $acara          = $_POST['acara'];

      $result = mysqli_query($conn, "INSERT INTO narasumber (nama, nomor, jenis_kelamin, acara) VALUES ('$nama', '$nomor', '$jenis_kelamin', '$acara')");

      header('Location:index.php');
    }
  } elseif ($type === 'magang') {
    if (isset($_POST['submit'])) {
      $nama           = $_POST['nama'];
      $foto           = $_POST['foto'];
      $asal           = $_POST['asal'];
      $nomor          = $_POST['nomor'];

      $result = mysqli_query($conn, "INSERT INTO magang (nama, foto, asal, nomor) VALUES ('$nama', '$foto', '$asal', '$nomor')");

      header('Location:index.php');
    }
  }
  ?>

  <div class="container form-input">
    <!-- section pengunjung -->
    <?php if ($type === 'pengunjung') { ?>
    <h1 class="mt-4">Tambah Data Pengunjung</h1>
    <form action="form.php?type=pengunjung" method="post">
      <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="nomor" class="col-sm-2 col-form-label">Telepon</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nomor" name="nomor">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
          <select class="form-select" name="jenis_kelamin">
            <option selected>- pilih -</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
          </select>
        </div>
      </div>

      <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="tahun-bulan-hari">
        </div>
      </div>



      <div class="col-sm-10 offset-2">
        <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
        <input type="reset" value="Reset" name="reset" class="btn btn-warning">
      </div>
    </form>
    <!-- end pengunjung -->

    <!-- section narasumber -->
    <?php } elseif ($type === 'narasumber') { ?>
    <h1 class="mt-4">Tambah Data Narasumber</h1>

    <form action="form.php?type=narasumber" method="post">
      <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="telepon" name="telepon">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
          <select class="form-select option-list" name="jenis_kelamin">
            <option selected>- pilih -</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
          </select>
        </div>
      </div>

      <div class="mb-3 row">
        <label for="acara" class="col-sm-2 col-form-label">Jenis Acara</label>
        <div class="col-sm-10">
          <select class="form-select option-list" name="jenis_acara">
            <option selected>- pilih -</option>
            <option value="">HARI YANG BERKAH</option>
            <option value="">JEJAK ISLAM KALSEL</option>
            <option value="">SELAMAT PAGI BORENO</option>
            <option value="">INFO TERKINI</option>
            <option value="">LENSA OLAHRAGA</option>
            <option value="">POTENSI BANUA</option>
            <option value="">SAPA PEMIRSA</option>
            <option value="">BANUA BICARA</option>
            <option value="">HIDUP SEHAT</option>
            <option value="">AYO MENCUCUK</option>
            <option value="">CAHAYA QOLBU</option>
            <option value="">YUK MENGAJI</option>
            <option value="">NGOPI</option>
            <option value="">MUSIK ON STUDIO</option>
            <option value="">KAJIAN TAUHID</option>
            <option value="">FIQIH WANITA</option>
            <option value="">MUTIARA HADIST</option>
            <option value="">INSPIRASI INDONESIA KALSEL</option>
            <option value="">PESONA INDONESIA KALSEL</option>
            <option value="">JEJAK ISLAM KALSEL</option>
            <option value="">ANAK INDO KALSEL</option>
            <option value="">DANGDUT KELILING</option>
          </select>
        </div>
      </div>

      <div class="col-sm-10 offset-2">
        <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
        <input type="reset" value="Reset" name="reset" class="btn btn-warning">
      </div>
    </form>
    <!-- end narasumber -->

    <!-- section magang -->
    <?php } elseif ($type === 'magang') { ?>
    <h1 class="mt-4">Tambah Data Magang</h1>
    <div class="row">
      <div class="col-md-8">
        <form action="form.php?type=magang" method="post">
          <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
              <!-- capture image here -->

              <button type="button" class="btn btn-primary" id="capture">Ambil Gambar</button>
              <img id="capturedImage" src="" alt="Captured Image" style="display:none; margin-top: 10px;" />
              <input type="hidden" name="foto" id="foto">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="asal" class="col-sm-2 col-form-label">Asal Sekolah</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="asal" name="asal">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="nomor" class="col-sm-2 col-form-label">Telepon</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nomor" name="nomor">
            </div>
          </div>

          <div class="col-sm-10 offset-2">
            <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
            <input type="reset" value="Reset" name="reset" class="btn btn-warning">
          </div>
        </form>
      </div>
      <div class="col-6 col-md-4"><video id="videoElement" width="400" height="300" autoplay></video>
        <canvas id="canvas" width="400" height="300" style="display:none;"></canvas>
      </div>
    </div>

    <!-- end magang -->
    <?php } ?>
  </div>
  <?php include 'assets/js.php' ?>
  <script src="assets/js/camera.js"></script>

</body>

</html>