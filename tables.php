<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css.php">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include "assets/sidebar.php"?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "assets/topbar.php" ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables {Title} </h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>

                        <!-- table pengunjung -->
                        <?php $file = $_GET['type'];
  
    if ($file === 'pengunjung') { ?>
                        <div class="container-fluid mt-2">
                            <form action="">
                                <div class="d-flex">
                                    <h5 class="my-3 p-2 flex-grow-1" style="color: rgb(54, 42, 42);">Data Pengunjung
                                    </h5>
                                    <a href="add.php?ubah=pengunjung" class="tombol mb-3 mx-4 ms-auto"> <i
                                            class="fa fa-plus"></i> Tambah Data</a>
                                    <a href="print.php?ubah=pengunjung" class="tombol cetak mb-3 ms-auto"> <i
                                            class="fa fa-print"></i> Cetak</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Nama</th>
                                                    <th>Foto</th>
                                                    <th>Nomor</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Tanggal</th>
                                                    <th class="text-center">Opsi</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Nama</th>
                                                    <th>Foto</th>
                                                    <th>Nomor</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Tanggal</th>
                                                    <th class="text-center">Opsi</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
          include 'assets/koneksi.php';
          $query = mysqli_query($conn, 'SELECT * FROM pengunjung');
          while ($data = mysqli_fetch_array($query)) {
          ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $data['id_pengunjung']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $data['nama']; ?>
                                                    </td>
                                                    <td>
                                                        <?php
    // Ambil data BLOB dari database
    $foto_blob = $data['foto'];

    // Cek apakah data BLOB ada
    if ($foto_blob) {
        // Konversi BLOB menjadi format base64
        $base64_image = base64_encode($foto_blob);

        // Tampilkan gambar dengan format base64
        echo '<img src="data:image/jpg;base64,' . $base64_image . '" alt="Foto" width="100">';
    } else {
        echo 'No Image';
    }
    ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $data['nomor']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $data['jenis_kelamin']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $data['tanggal']; ?>
                                                    </td>
                                                    <td class="text-center align-items-center">
                                                        <div class="row m-0">
                                                            <a class="btn btn-success btn-sm col-6"
                                                                href="assets/ubah.php?id=<?php echo $data['id_pengunjung']; ?>&ubah=pengunjung"><i
                                                                    class="fa fa-edit"></i>
                                                                Ubah</a>
                                                            <a class="btn btn-danger btn-sm col-6"
                                                                href="assets/hapus.php?id=<?php echo $data['id_pengunjung']; ?>&ubah=pengunjung"
                                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                                                                    class="fa fa-trash"></i>
                                                                Hapus</a>

                                                        </div>
                                                        <a class="btn btn-info btn-sm col-6 align-self-center"
                                                            href="assets/cetak.php?id=<?php echo $data['id_pengunjung']; ?>&ubah=pengunjung">
                                                            <i class="fa-solid fa-id-card-clip"></i>
                                                            Print</a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end pengunjung -->
                                <?php } else if ($file === 'narasumber') { ?>
                                <div class="container-fluid mt-2">
                                    <form action="">
                                        <div class="d-flex">
                                            <h5 class="my-3 p-2 flex-grow-1" style="color: rgb(54, 42, 42);">Data Dosen
                                            </h5>
                                            <a href="add.php?ubah=narasumber" class="tombol mb-3 mx-4 ms-auto"> <i
                                                    class="fa fa-plus"></i> Tambah Data</a>
                                            <a href="print.php?ubah=narasumber" class="tombol cetak mb-3 ms-auto"> <i
                                                    class="fa fa-print"></i> Cetak</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable" width="100%"
                                                    cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>NO</th>
                                                            <th>Nama</th>
                                                            <th>Foto</th>
                                                            <th>Nomor</th>
                                                            <th>Jenis Kelamin</th>
                                                            <th>Acara</th>
                                                            <th class="text-center">Opsi</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>NO</th>
                                                            <th>Nama</th>
                                                            <th>Foto</th>
                                                            <th>Nomor</th>
                                                            <th>Jenis Kelamin</th>
                                                            <th>Acara</th>
                                                            <th class="text-center">Opsi</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <?php
          include 'assets/koneksi.php';
          $query = mysqli_query($conn, 'SELECT * FROM narasumber');
          while ($data = mysqli_fetch_array($query)) {
          ?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $data['id_narasumber']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $data['nama']; ?>
                                                            </td>
                                                            <td>
                                                                <?php
    // Ambil data BLOB dari database
    $foto_blob = $data['foto'];

    // Cek apakah data BLOB ada
    if ($foto_blob) {
        // Konversi BLOB menjadi format base64
        $base64_image = base64_encode($foto_blob);

        // Tampilkan gambar dengan format base64
        echo '<img src="data:image/jpg;base64,' . $base64_image . '" alt="Foto" width="100">';
    } else {
        echo 'No Image';
    }
    ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $data['nomor']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $data['jenis_kelamin']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $data['acara']; ?>
                                                            </td>
                                                            <td class="text-center">
                                                                <a class="btn btn-success btn-sm uh"
                                                                    href="assets/ubah.php?id=<?php echo $data['id_narasumber']; ?>&ubah=narasumber"><i
                                                                        class="fa fa-edit"></i>
                                                                    Ubah</a>
                                                                <a class="btn btn-danger btn-sm uh"
                                                                    href="assets/hapus.php?id=<?php echo $data['id_narasumber']; ?>&ubah=narasumber"
                                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                                                                        class="fa fa-trash"></i>
                                                                    Hapus</a>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <?php } else if ($file === 'magang') { ?>
                                        <div class="container-fluid mt-2">
                                            <form action="">
                                                <div class="d-flex">
                                                    <h5 class="my-3 p-2 flex-grow-1" style="color: rgb(54, 42, 42);">
                                                        Data Magang</h5>
                                                    <a href="add.php?ubah=magang" class="tombol mb-3 mx-4 ms-auto"> <i
                                                            class="fa fa-plus"></i> Tambah Data</a>
                                                    <a href="print.php?ubah=magang" class="tombol cetak mb-3 ms-auto">
                                                        <i class="fa fa-print"></i> Cetak</a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="dataTable" width="100%"
                                                            cellspacing="0">
                                                            <thead>
                                                                <tr>
                                                                    <th>NO</th>
                                                                    <th>Nama</th>
                                                                    <th>Foto</th>
                                                                    <th>Jenis Kelamin</th>
                                                                    <th>Asal Sekolah</th>
                                                                    <th>Nomor</th>
                                                                    <th class="text-center">Opsi</th>
                                                                </tr>
                                                            </thead>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>NO</th>
                                                                    <th>Nama</th>
                                                                    <th>Foto</th>
                                                                    <th>Jenis Kelamin</th>
                                                                    <th>Asal Sekolah</th>
                                                                    <th>Nomor</th>
                                                                    <th class="text-center">Opsi</th>
                                                                </tr>
                                                            </tfoot>
                                                            <tbody>
                                                                <?php
          include 'assets/koneksi.php';
          $query = mysqli_query($conn, 'SELECT * FROM magang');
          while ($data = mysqli_fetch_array($query)) {
          ?>
                                                                <tr>
                                                                    <td>
                                                                        <?php echo $data['id_magang']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $data['nama']; ?>
                                                                    </td>
                                                                    <td>
    <?php
    // Ambil data BLOB dari database
    $foto_blob = $data['foto'];

    // Cek apakah data BLOB ada
    if ($foto_blob) {
        // Konversi BLOB menjadi format base64
        $base64_image = base64_encode($foto_blob);

        // Tampilkan gambar dengan format base64
        echo '<img src="data:image/jpeg;charset=utf-8;base64, ' . $base64_image . '" alt="Foto" width="100">';
    } else {
        echo 'No Image';
    }
    var_dump($foto_blob);
    ?>
</td> 

                                                                    <td>
                                                                        <?php echo $data['jenis_kelamin']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $data['asal']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $data['nomor']; ?>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a class="btn btn-success btn-sm uh"
                                                                            href="assets/ubah.php?id=<?php echo $data['id_magang']; ?>&ubah=magang"><i
                                                                                class="fa fa-edit"></i>
                                                                            Ubah</a>
                                                                        <a class="btn btn-danger btn-sm uh"
                                                                            href="assets/hapus.php?id=<?php echo $data['id_magang']; ?>&ubah=magang"
                                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                                                                                class="fa fa-trash"></i>
                                                                            Hapus</a>
                                                                    </td>
                                                                </tr>
                                                                <?php } ?>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <?php } ?>

                                        </div>
                                        <!-- /.container-fluid -->

                                </div>
                                <!-- End of Main Content -->

                                <!-- Footer -->
                                <footer class="sticky-footer bg-white">
                                    <div class="container my-auto">
                                        <div class="copyright text-center my-auto">
                                            <span>Copyright &copy; Your Website 2020</span>
                                        </div>
                                    </div>
                                </footer>
                                <!-- End of Footer -->

                        </div>
                        <!-- End of Content Wrapper -->

                    </div>
                    <!-- End of Page Wrapper -->

                    <!-- Scroll to Top Button-->
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>

                    <!-- Logout Modal-->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Select "Logout" below if you are ready to end your current
                                    session.</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-primary" href="login.html">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bootstrap core JavaScript-->
                    <script src="assets/vendor/jquery/jquery.min.js"></script>
                    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

                    <!-- Custom scripts for all pages-->
                    <script src="assets/js/sb-admin-2.min.js"></script>

                    <!-- Page level plugins -->
                    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
                    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

                    <!-- Page level custom scripts -->
                    <script src="assets/js/demo/datatables-demo.js"></script>
                    <script>
                        $(document).ready(function () {
                            $('#dataMahasiswa').DataTable();
                        });
                    </script>

</body>

</html>