<?php
  session_start();
  $conn = mysqli_connect("localhost","root","","datalog");
  if(!isset($_SESSION["login"])){
    header("Location: ../Login/login-v2.php");
    exit;
  }

  if(isset($_GET["project"])){
    $user=$_GET["project"];
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


    <?php if(isset($user)):?>
        <?php include("project/userproject.php");?>
    <?php else: ?>
    <div class="content-wrapper">
    <!-- Header Halaman -->
    <section class="content-header">
        <div class="container-fluid">
            <h1></h1>
        </div>
    </section>

    <!-- Konten Halaman -->
    <section class="content">
        <div class="container mt-4">
            <div class="text-center mb-4">
                <h2 class="font-weight-bold"><i class="fas fa-project-diagram"></i> Showcase Projek Siswa</h2>
                <p class="text-muted">Temukan & pamerkan karya terbaikmu di sini!</p>
            </div>
            <!-- Search & Upload Button -->
            <div class="row align-items-center mb-4">
                <div class="col-md-8">
                    <div class="input-group">
                        <input type="text" id="searchProject" class="form-control" placeholder="Cari proyek...">
                        <div class="input-group-append">
                            <button class="btn btn-secondary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-md-right text-center mt-2 mt-md-0">
                    <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#uploadModal">
                        <i class="fas fa-plus"></i> Upload Project
                    </button>
                </div>
            </div>

            <!-- Gallery Project -->
            <div class="row" id="projectGallery">
                <!-- Dummy Project 1 -->
                <div class="col-md-4 project-card" data-title="Website Portfolio">
                    <div class="card">
                        <!-- <img src="https://via.placeholder.com/300" class="card-img-top" alt="Project 1"> -->
                        <div class="card-body">
                            <h5 class="card-title">Website Portfolio</h5>
                            <p class="card-text">Website portfolio pribadi yang menampilkan skill dan pengalaman.</p>
                            <a href="project.php?project=Website Portofolio" class="btn btn-sm btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Dummy Project 2 -->
                <div class="col-md-4 project-card" data-title="Aplikasi To-Do List">
                    <div class="card">
                        <!-- <img src="https://via.placeholder.com/300" class="card-img-top" alt="Project 2"> -->
                        <div class="card-body">
                            <h5 class="card-title">Aplikasi To-Do List</h5>
                            <p class="card-text">Aplikasi sederhana untuk mencatat dan mengelola tugas harian.</p>
                            <a href="#" class="btn btn-sm btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Dummy Project 3 -->
                <div class="col-md-4 project-card" data-title="Game Tebak Angka">
                    <div class="card">
                        <!-- <img src="https://via.placeholder.com/300" class="card-img-top" alt="Project 3"> -->
                        <div class="card-body">
                            <h5 class="card-title">Game Tebak Angka</h5>
                            <p class="card-text">Game sederhana yang menantang pemain untuk menebak angka yang benar.</p>
                            <a href="#" class="btn btn-sm btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Modal Upload Project -->
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Upload Proyek Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="uploadProjectForm">
                    <div class="form-group">
                        <label for="projectTitle">Judul Proyek</label>
                        <input type="text" class="form-control" id="projectTitle" required>
                    </div>
                    <div class="form-group">
                        <label for="projectDesc">Deskripsi</label>
                        <textarea class="form-control" id="projectDesc" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="projectImage">Upload Gambar</label>
                        <input type="file" class="form-control-file" id="projectImage">
                    </div>
                    <button type="submit" class="btn btn-success">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endif;?>

</div>
<!-- REQUIRED SCRIPTS -->
<?php include("build/script.php");?>
</body>
</html>