<?php
  session_start();
  $conn = mysqli_connect("localhost","root","","datalog");
  if(!isset($_SESSION["login"])){
    header("Location: ../Login/login-v2.php");
    exit;
  }
  if(isset($_GET["kategori"])){
    $index=$_GET["kategori"];
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
    <?php if(isset($index)):?>
      <?php include("materi/$index.php")?>
    <?php else:?>
    <section class="content">
    <div class="container">
      <h2 class="mb-4"><i class="fas fa-book"></i> Materi Pembelajaran</h2>

      <!-- Kategori Materi -->
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <i class="fas fa-code fa-3x"></i>
              <h5 class="mt-3">Pemrograman</h5>
              <a href="materi.php?kategori=detail" class="btn btn-primary btn-sm">
                <i class="fas fa-folder-open"></i> Lihat Materi
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <i class="fas fa-database fa-3x"></i>
              <h5 class="mt-3">Basis Data</h5>
              <a href="materi.php?kategori=basis" class="btn btn-primary btn-sm">
                <i class="fas fa-folder-open"></i> Lihat Materi
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <i class="fas fa-calculator fa-3x"></i>
              <h5 class="mt-3">Matematika Dasar II</h5>
              <a href="materi.php?kategori=mate" class="btn btn-primary btn-sm">
                <i class="fas fa-folder-open"></i> Lihat Materi
              </a>
            </div>
          </div>
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