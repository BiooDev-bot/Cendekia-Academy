<?php
  session_start();
  if(!isset($_SESSION["login"])){
    header("Location: ../Login/login-v2.php");
    exit;
  }
  $nama=$_SESSION["name"];
  $email=$_SESSION["email"];
  $pp=$_SESSION["pp"];
  $phone=$_SESSION["phone"];
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
            <h1>Ujian Kamu</h1>
        </div>
    </section>

    <!-- Konten Halaman -->
    <section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <table class="table custom-table">
                    <thead>
                        <tr>
                            <th><i class="fas fa-file-alt"></i></th>
                            <th>Nama Ujian</th>
                            <th>Durasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i class="fas fa-file-alt"></i></td>
                            <td>Study Habit - Test</td>
                            <td>60 Menit</td>
                            <td><a href="test/uitest.php" class="btn btn-primary">Mulai</a></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-file-alt"></i></td>
                            <td>Logic & Reasoning - Test</td>
                            <td>45 Menit</td>
                            <td><a href="mulai_ujian.php" class="btn btn-primary">Mulai</a></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-file-alt"></i></td>
                            <td>Mathematical Thinking - Test</td>
                            <td>90 Menit</td>
                            <td><a href="mulai_ujian.php" class="btn btn-primary">Mulai</a></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-file-alt"></i></td>
                            <td>Creative Problem Solving - Test</td>
                            <td>75 Menit</td>
                            <td><a href="mulai_ujian.php" class="btn btn-primary">Mulai</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

</div>
<!-- REQUIRED SCRIPTS -->
<?php include("build/script.php");?>
</body>
</html>