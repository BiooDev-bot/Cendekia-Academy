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
        <div class="content-header">
            <div class="container-fluid">
                <h4 class="mt-3"><b>Data Gajian</b></h4>
                <p>Hai <b>Rachel Sarasvati</b>, berikut data gajian yang kamu dapat sebagai mentor</p>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <!-- Invoice Card -->
                <div class="card p-4">
                    <div class="row">
                        <!-- Logo & Info -->
                        <div class="col-md-6 d-flex align-items-center">
                            <img src="../Homepage/img/Cendekia Primary Logo.png" class="rounded-circle mr-3" width="100px" alt="Logo">
                            <div>
                                <h5 class="mb-0"><b>Cendekia Academy</b></h5>
                                <p class="text-muted mb-0">cendekiaacademy@gmail.com</p>
                            </div>
                        </div>
                        <!-- Address -->
                        <div class="col-md-6 text-right">
                            <p class="text-muted small mb-0">Jl. Pemuda No 5 RT 10 RW 9</p>
                            <p class="text-muted small mb-0">Kec. Ayam Kampung, Kel. Saripati</p>
                            <p class="text-muted small mb-0">Kota Jakarta Pusat</p>
                        </div>
                    </div>

                    <hr>

                    <!-- Invoice Details -->
                    <h5><b>Invoice</b></h5>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Nomor Invoice</p>
                            <p>Tanggal</p>
                            <p>Total Kursus (Harga x Total Murid)</p>
                            <p>Pajak</p>
                            <p>Gaji Pokok</p>
                            <h5><b>Total Pendapatan Bersih</b></h5>
                        </div>
                        <div class="col-md-6 text-right">
                            <p>INV 003-2025</p>
                            <p>2 Maret 2025</p>
                            <p>Rp295.000 x 12</p>
                            <p><b>Rp3.540.000</b></p>
                            <p>Rp354.000</p>
                            <p>Rp1.200.000</p>
                            <h5 class="text-success"><b>Rp4.386.000</b></h5>
                        </div>
                    </div>

                    <!-- Withdraw Button -->
                    <div class="text-center mt-4">
                        <button class="btn btn-success btn-lg"><i class="fas fa-wallet"></i> Withdraw</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
<!-- REQUIRED SCRIPTS -->
<?php include("build/script.php");?>
</body>
</html>