<?php
  session_start();
  $conn = mysqli_connect("localhost","root","","datalog");
  $i=0;
  $conn=mysqli_connect("localhost","root","","datalog");
  if(!isset($_SESSION["login"])){
      header("Location: ../Login/login-v2.php");
      exit;
  }
  $nama=$_SESSION["name"];
  $result=mysqli_query($conn,"SELECT * FROM datalog WHERE username = '$nama'");
  $data=mysqli_fetch_assoc($result);
  $tes=$data["test"];
  $email=$data["email"];
  $pp=$data["propic"];
  $phone=$data["telepon"];
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
                        <?php if($data["personal"]!="yes") : ?>
                            <tr>
                                <td><i class="fas fa-file-alt"></i></td>
                                <td>Study Habit - Test</td>
                                <td>60 Menit</td>
                                <td><a href="test/uitest.php?q=0" class="btn btn-primary">Mulai</a></td>
                            </tr>
                            <?php $i++;?>
                        <?php endif?>
                        <?php if($data["cyber"]!="yes") : ?>
                            <tr>
                                <td><i class="fas fa-file-alt"></i></td>
                                <td>Cyber Security - Test</td>
                                <td>45 Menit</td>
                                <td><a href="test/cyber.php?q=0" class="btn btn-primary">Mulai</a></td>
                            </tr>
                            <?php $i++;?>
                        <?php endif?>
                        <?php if($data["AI"]!="yes") : ?>
                            <tr>
                                <td><i class="fas fa-file-alt"></i></td>
                                <td>Artificial Intelegent & Big Data - Test</td>
                                <td>90 Menit</td>
                                <td><a href="test/AI.php?q=0" class="btn btn-primary">Mulai</a></td>
                            </tr>
                            <?php $i++;?>
                        <?php endif?>
                        <?php if($data["space"]!="yes") : ?>
                            <tr>
                                <td><i class="fas fa-file-alt"></i></td>
                                <td>Space Exploration - Test</td>
                                <td>75 Menit</td>
                                <td><a href="test/space.php?q=0" class="btn btn-primary">Mulai</a></td>
                            </tr>
                            <?php $i++;?>
                        <?php endif?>
                        <?php if($data["biotech"]!="yes") : ?>
                            <tr>
                                <td><i class="fas fa-file-alt"></i></td>
                                <td>Biotechnology and Health - Test</td>
                                <td>75 Menit</td>
                                <td><a href="test/biotech.php?q=0" class="btn btn-primary">Mulai</a></td>
                            </tr>
                            <?php $i++;?>
                        <?php endif?>
                        <?php if($data["energy"]!="yes") : ?>
                            <tr>
                                <td><i class="fas fa-file-alt"></i></td>
                                <td>Renewable Energy and clean Technology - Test</td>
                                <td>75 Menit</td>
                                <td><a href="test/energy.php?q=0" class="btn btn-primary">Mulai</a></td>
                            </tr>
                            <?php $i++;?>
                        <?php endif?>
                        <?php if($data["math"]!="yes") : ?>
                            <tr>
                                <td><i class="fas fa-file-alt"></i></td>
                                <td>Mathematical Thinking - Test</td>
                                <td>75 Menit</td>
                                <td><a href="test/math.php?q=0" class="btn btn-primary">Mulai</a></td>
                            </tr>
                            <?php $i++;?>
                        <?php endif?>
                        <?php if($data["eng"]!="yes") : ?>
                            <tr>
                                <td><i class="fas fa-file-alt"></i></td>
                                <td>Hard Level English - Test</td>
                                <td>75 Menit</td>
                                <td><a href="test/eng.php?q=0" class="btn btn-primary">Mulai</a></td>
                            </tr>
                            <?php $i++;?>
                        <?php endif?>
                        <?php if ($i==0) : ?>
                            <tr>
                                <td><i class="fas fa"></i></td>
                                <td>TIDAK ADA TEST</td>
                            </tr>
                        <?php endif?>
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