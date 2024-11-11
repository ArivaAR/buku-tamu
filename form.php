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

  <?php
  // Ambil parameter type dari URL
  $type = $_GET['type'];

  // Cek jenis data yang akan disimpan (pengunjung, narasumber, atau magang)
  if ($type === 'pengunjung') {
    if (isset($_POST['submit'])) {
      // Ambil data yang dikirimkan dari form
      $nama           = $_POST['nama'];
      $foto           = $_POST['foto'];  // Foto adalah base64 encoded image
      $nomor          = $_POST['nomor'];
      $jenis_kelamin  = $_POST['jenis_kelamin'];
      $tanggal        = $_POST['tanggal'];

      // Menangani foto dalam format base64
      if (isset($_POST['foto']) && !empty($_POST['foto'])) {
        // Ambil data base64
        $foto_base64 = $_POST['foto'];

        // Menghapus prefix data URL
        $foto_base64 = preg_replace('#^data:image/\w+;base64,#i', '', $foto_base64);

        // Decode base64
        $foto_decoded = base64_decode($foto_base64);

        // Buat nama file unik
        $foto_name = uniqid() . '.png'; // atau .jpg
        $upload_dir = 'uploads/';
        $upload_file = $upload_dir . $foto_name;

        // Simpan file
        if (file_put_contents($upload_file, $foto_decoded)) {
          // Simpan path file di database
          $foto = $upload_file;  // Simpan path file yang berhasil di-upload

          // Gunakan prepared statements untuk mencegah SQL injection
          $stmt = $conn->prepare("INSERT INTO pengunjung (nama, nomor, jenis_kelamin, tanggal, foto) VALUES (?, ?, ?, ?, ?)");
          $stmt->bind_param("sssss", $nama, $nomor, $jenis_kelamin, $tanggal, $foto);
          
          // Cek apakah penyimpanan berhasil
          if ($stmt->execute()) {
              // Hapus file dari server setelah berhasil disimpan ke database
              unlink($upload_file); // Menghapus file
          } else {
              echo "Gagal menyimpan data ke database.";
          }
          
          // Tutup statement
          $stmt->close();
      } else {
          echo "Gagal menyimpan file.";
          exit;
      }
      } else {
        echo "Tidak ada file yang diunggah.";
        exit;
      }

      // Validasi input (contoh validasi sederhana)
      if (empty($nama) || empty($nomor) || empty($jenis_kelamin) || empty($tanggal)) {
        die("Semua kolom harus diisi.");
      }

      // Gunakan prepared statements untuk mencegah SQL injection
      $stmt = $conn->prepare("INSERT INTO pengunjung (nama, nomor, jenis_kelamin, tanggal, foto) VALUES (?, ?, ?, ?, ?)");
      $stmt->bind_param("sssss", $nama, $nomor, $jenis_kelamin, $tanggal, $foto);
      $stmt->execute();
      $stmt->close();

      // Redirect ke halaman index setelah data berhasil disimpan
      header('Location:index.php');
    }
  } elseif ($type === 'narasumber') {
    if (isset($_POST['submit'])) {
      // Ambil data dari form
      $nama           = $_POST['nama'];
      $foto           = $_POST['foto'];  // Foto adalah base64 encoded image
      $nomor          = $_POST['nomor'];
      $jenis_kelamin  = $_POST['jenis_kelamin'];
      $acara          = $_POST['acara'];

      // Menangani foto dalam format base64
      if (isset($_POST['foto']) && !empty($_POST['foto'])) {
        // Ambil data base64
        $foto_base64 = $_POST['foto'];

        // Menghapus prefix data URL
        $foto_base64 = preg_replace('#^data:image/\w+;base64,#i', '', $foto_base64);

        // Decode base64
        $foto_decoded = base64_decode($foto_base64);

        // Buat nama file unik
        $foto_name = uniqid() . '.png'; // atau .jpg
        $upload_dir = 'uploads/';
        $upload_file = $upload_dir . $foto_name;

        // Simpan file
        if (file_put_contents($upload_file, $foto_decoded)) {
          // Simpan path file di database
          $foto = $upload_file;  // Simpan path file yang berhasil di-upload

          // Gunakan prepared statements untuk mencegah SQL injection
          $stmt = $conn->prepare("INSERT INTO narasumber (nama, nomor, jenis_kelamin, acara, foto)) VALUES (?, ?, ?, ?, ?)");
          $stmt->bind_param("sssss", $nama, $nomor, $jenis_kelamin, $tanggal, $foto);
          
          // Cek apakah penyimpanan berhasil
          if ($stmt->execute()) {
              // Hapus file dari server setelah berhasil disimpan ke database
              unlink($upload_file); // Menghapus file
          } else {
              echo "Gagal menyimpan data ke database.";
          }
          
          // Tutup statement
          $stmt->close();
      } else {
          echo "Gagal menyimpan file.";
          exit;
      }
      } else {
        echo "Tidak ada file yang diunggah.";
        exit;
      }

      // Validasi input
      if (empty($nama) || empty($nomor) || empty($jenis_kelamin) || empty($acara)) {
        die("Semua kolom harus diisi.");
      }

      // Prepared statement untuk mencegah SQL injection
      $stmt = $conn->prepare("INSERT INTO narasumber (nama, nomor, jenis_kelamin, acara, foto) VALUES (?, ?, ?, ?, ?)");
      $stmt->bind_param("sssss", $nama, $nomor, $jenis_kelamin, $acara, $foto);
      $stmt->execute();
      $stmt->close();

      // Redirect ke halaman index
      header('Location:index.php');
    }
  } elseif ($type === 'magang') {
    if (isset($_POST['submit'])) {
      // Ambil data dari form
      $nama           = $_POST['nama'];
      $jenis_kelamin  = $_POST['jenis_kelamin'];
      $asal           = $_POST['asal'];
      $nomor          = $_POST['nomor'];

      // Menangani foto dalam format base64
      if (isset($_POST['foto']) && !empty($_POST['foto'])) {
        // Ambil data base64
        $foto_base64 = $_POST['foto'];

        // Menghapus prefix data URL
        $foto_base64 = preg_replace('#^data:image/\w+;base64,#i', '', $foto_base64);

        // Decode base64
        $foto_decoded = base64_decode($foto_base64);

        // Buat nama file unik
        $foto_name = uniqid() . '.png'; // atau .jpg
        $upload_dir = 'uploads/';
        $upload_file = $upload_dir . $foto_name;

        // Simpan file
        if (file_put_contents($upload_file, $foto_decoded)) {
          // Simpan path file di database
          $foto = $upload_file;  // Simpan path file yang berhasil di-upload

          // Gunakan prepared statements untuk mencegah SQL injection
          $stmt = $conn->prepare("INSERT INTO magang (nama, foto, asal, nomor, jenis_kelamin) VALUES (?, ?, ?, ?, ?)");
          $stmt->bind_param("sssss", $nama, $nomor, $jenis_kelamin, $tanggal, $foto);
          
          // Cek apakah penyimpanan berhasil
          if ($stmt->execute()) {
              // Hapus file dari server setelah berhasil disimpan ke database
              unlink($upload_file); // Menghapus file
          } else {
              echo "Gagal menyimpan data ke database.";
          }
          
          // Tutup statement
          $stmt->close();
      } else {
          echo "Gagal menyimpan file.";
          exit;
      }
      } else {
        echo "Tidak ada file yang diunggah.";
        exit;
      }

      // Validasi input
      if (empty($nama) || empty($asal) || empty($nomor) || empty($jenis_kelamin) || empty($foto)) {
        die("Semua kolom harus diisi.");
      }

      // Prepared statement untuk mencegah SQL injection
      $stmt = $conn->prepare("INSERT INTO magang (nama, foto, asal, nomor, jenis_kelamin) VALUES (?, ?, ?, ?, ?)");
      $stmt->bind_param("sssss", $nama, $foto, $asal, $nomor, $jenis_kelamin);
      $stmt->execute();
      $stmt->close();

      // Redirect ke halaman index
      header('Location:index.php');
    }
  }
  ?>

  <div class="container form-input">
    <!-- Form untuk Pengunjung -->
    <?php if ($type === 'pengunjung') { ?>
      <h1 class="mt-4">Tambah Data Pengunjung</h1>
      <div class="row">
        <div class="col-md-8">
          <form action="form.php?type=pengunjung" method="post">
            <div class="mb-3 row">
              <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="foto" class="col-sm-2 col-form-label">Foto</label>
              <div class="col-sm-10">
                <button type="button" class="btn btn-primary" id="capture">Ambil Gambar</button>
                <img id="capturedImage" src="" alt="Captured Image" style="display:none; margin-top: 10px;" />
                <input type="hidden" name="foto" id="foto">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="nomor" class="col-sm-2 col-form-label">Telepon</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nomor" name="nomor">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-10">
                <select class="form-select" name="jenis_kelamin">
                  <option selected>- pilih -</option>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
            </div>

            <div class="mb-3 row">
              <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" id="tanggal" name="tanggal">
              </div>
            </div>

            <div class="col-sm-10 offset-2">
              <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
              <input type="reset" value="Reset" name="reset" class="btn btn-warning">
            </div>
          </form>
        </div>
        <div class="col-6 col-md-4">
          <video id="videoElement" width="400" height="300" autoplay></video>
          <canvas id="canvas" width="400" height="300" style="display:none;"></canvas>
        </div>
      </div>
    <?php } ?>

    <!-- Form untuk Narasumber -->
    <?php if ($type === 'narasumber') { ?>
      <h1 class="mt-4">Tambah Data Narasumber</h1>
      <div class="row">
        <div class="col-md-8">
          <form action="form.php?type=narasumber" method="post">
            <div class="mb-3 row">
              <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="foto" class="col-sm-2 col-form-label">Foto</label>
              <div class="col-sm-10">
                <button type="button" class="btn btn-primary" id="capture">Ambil Gambar</button>
                <img id="capturedImage" src="" alt="Captured Image" style="display:none; margin-top: 10px;" />
                <input type="hidden" name="foto" id="foto">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="nomor" class="col-sm-2 col-form-label">Telepon</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nomor" name="nomor">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-10">
                <select class="form-select" name="jenis_kelamin">
                  <option selected>- pilih -</option>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
            </div>

            <div class="mb-3 row">
              <label for="acara" class="col-sm-2 col-form-label">Acara</label>
              <div class="col-sm-10">
                <select class="form-select" name="acara">
                  <option selected>- pilih -</option>
                  <option value="hari_berkah">HARI YANG BERKAH</option>
                  <option value="jejak_islam_kalsel">JEJAK ISLAM KALSEL</option>
                  <option value="kajian_islami">KAJIAN ISLAMI</option>
                  <option value="alquran">AL QUR'AN</option>
                  <option value="fiqh">FIQH</option>
                </select>
              </div>
            </div>

            <div class="col-sm-10 offset-2">
              <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
              <input type="reset" value="Reset" name="reset" class="btn btn-warning">
            </div>
          </form>
        </div>
        <div class="col-6 col-md-4">
          <video id="videoElement" width="400" height="300" autoplay></video>
          <canvas id="canvas" width="400" height="300" style="display:none;"></canvas>
        </div>
      </div>

      <!-- Form untuk Magang -->
    <?php } elseif ($type === 'magang') { ?>
      <h1 class="mt-4">Tambah Data Magang</h1>
      <div class="row">
        <div class="col-md-8">
          <form action="form.php?type=magang" method="post" enctype="multipart/form-data">
            <!-- Nama Lengkap -->
            <div class="mb-3 row">
              <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama">
              </div>
            </div>

            <!-- Foto -->
            <div class="mb-3 row">
              <label for="foto" class="col-sm-2 col-form-label">Foto</label>
              <div class="col-sm-10">
                <!-- Capture image here -->
                <button type="button" class="btn btn-primary" id="capture">Ambil Gambar</button>
                <img id="capturedImage" src="" alt="Captured Image" style="display:none; margin-top: 10px;" />
                <input type="hidden" name="foto" id="foto">
              </div>
            </div>

            <!-- Jenis Kelamin -->
            <div class="mb-3 row">
              <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-10">
                <select class="form-select" name="jenis_kelamin">
                  <option selected>- pilih -</option>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
            </div>

            <!-- Asal Sekolah -->
            <div class="mb-3 row">
              <label for="asal" class="col-sm-2 col-form-label">Asal Sekolah</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="asal" name="asal">
              </div>
            </div>

            <!-- Telepon -->
            <div class="mb-3 row">
              <label for="nomor" class="col-sm-2 col-form-label">Telepon</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nomor" name="nomor">
              </div>
            </div>

            <!-- Tombol Simpan dan Reset -->
            <div class="col-sm-10 offset-2">
              <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
              <input type="reset" value="Reset" name="reset" class="btn btn-warning">
            </div>
          </form>
        </div>

        <!-- Video Stream untuk Capture Gambar -->
        <div class="col-6 col-md-4">
          <video id="videoElement" width="400" height="300" autoplay></video>
          <canvas id="canvas" width="400" height="300" style="display:none;"></canvas>
        </div>
      </div>
    <?php } ?>
  </div>

  <?php include "assets/js.php" ?>

  <script>
    // JavaScript untuk mengaktifkan kamera dan capture gambar
    document.getElementById("capture").onclick = function() {
      var canvas = document.getElementById('canvas');
      var video = document.getElementById('videoElement');
      var ctx = canvas.getContext('2d');
      ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
      var dataUrl = canvas.toDataURL('image/png'); // ambil gambar dalam format base64

      // Tampilkan gambar di layar dan simpan base64 dalam hidden input
      document.getElementById('capturedImage').src = dataUrl;
      document.getElementById('capturedImage').style.display = 'block';
      document.getElementById('foto').value = dataUrl;
    };

    // Akses kamera dan tampilkan video stream
    navigator.mediaDevices.getUserMedia({
        video: true
      })
      .then(function(stream) {
        var video = document.getElementById('videoElement');
        video.srcObject = stream;
      })
      .catch(function(err) {
        console.log("Error accessing camera: ", err);
      });
  </script>

</body>

</html>