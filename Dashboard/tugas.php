<?php 
session_start();
$conn = mysqli_connect("localhost","root","","datalog");
    if(isset($_GET["key"])){
        $index=$_GET["key"];
    }
  if(!isset($_SESSION["login"])){
    header("Location: ../Login/login-v2.php");
    exit;
  }
  $nama=$_SESSION["name"];
  $query = mysqli_query($conn,"SELECT * FROM datalog WHERE username = '$nama'");
$row = mysqli_fetch_assoc($query);
$tes=$row["test"];
$email=$row["email"];
$pp=$row["propic"];
$phone=$row["telepon"];
  // $conn = mysqli_connect("localhost","root","","datalog");
  // $query = mysqli_query($conn,"SELECT * FROM datalog WHERE ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="css/test.css">
    <?php include("build/header.php");?>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include("build/navbar.php");?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include("build/sidebar.php");?>
        <!-- /.sidebar -->
    </div>

    <div class="content-wrapper">
    <!-- Header Halaman -->
    <section class="content-header">
        <div class="container-fluid">
            <h1></h1>
        </div>
    </section>

    <!-- Konten Halaman -->
    <?php if(isset($index)) :?>
        <?php include("tugas/kettugas.php");?>
    <?php else :?>
        <section class="content">
    <div class="container">
      <h2 class="mb-4"><i class="fas fa-tasks"></i> Daftar Tugas</h2>

      <div class="card">
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr class="text-center">
                <th>#</th>
                <th>Nama Tugas</th>
                <th>Deadline</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Tugas Algoritma Dasar</td>
                <td>10 Maret 2024</td>
                <td><span class="badge bg-warning">Belum Dikerjakan</span></td>
                <td class="text-center">
                  <a href="detail_tugas.html" class="btn btn-primary btn-sm">
                    <i class="fas fa-edit"></i> Kerjakan
                  </a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Essay Sistem Basis Data</td>
                <td>12 Maret 2024</td>
                <td><span class="badge bg-success">Sudah Dinilai</span></td>
                <td class="text-center">
                  <a href="tugas.php?key=kunci" class="btn btn-info btn-sm">
                    <i class="fas fa-eye"></i> Lihat Hasil
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </section>
    <?php endif;?>

</div>
<!-- REQUIRED SCRIPTS -->
<?php include("build/script.php");?>
</body>
</html>