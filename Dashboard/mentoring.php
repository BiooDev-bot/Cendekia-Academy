<?php
  session_start();
  $conn = mysqli_connect("localhost","root","","datalog");
  if(isset($_GET["id"])){
    $id = $_GET["id"];
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

    <!-- main content -->
    <?php if(isset($id)) :?>
        <?php include("mentor/chatmentor.php");?>
        <?php else :?>
            <section class="content-header">
                <div class="container-fluid">
                    <h1></h1>
                </div>
            </section>
    <div class="content-wrapper">
  <section class="content">
    <div class="container">
      <h2 class="mb-4"><i class="fas fa-chalkboard-teacher"></i> Mentoring</h2>

      <div class="row">
        <!-- Daftar Mentor -->
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <h4>Daftar Mentor</h4>
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <span><i class="fas fa-user"></i> Budi Santoso</span>
                  <a href="mentoring.php?id=budisantoso" class="btn btn-primary btn-sm"><i class="fas fa-comments"></i> Chat</a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <span><i class="fas fa-user"></i> Sari Rahma</span>
                  <a href="mentoring.php?id=Sari Rahma" class="btn btn-primary btn-sm"><i class="fas fa-comments"></i> Chat</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Form Booking Jadwal -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h4>Atur Jadwal Mentoring</h4>
              <form action="submit_booking.php" method="POST">
                <div class="mb-3">
                  <label for="mentor" class="form-label">Pilih Mentor</label>
                  <select class="form-control" id="mentor" name="mentor">
                    <option>Budi Santoso</option>
                    <option>Sari Rahma</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="tanggal" class="form-label">Pilih Tanggal</label>
                  <input type="date" class="form-control" id="tanggal" name="tanggal">
                </div>
                <div class="mb-3">
                  <label for="waktu" class="form-label">Pilih Waktu</label>
                  <input type="time" class="form-control" id="waktu" name="waktu">
                </div>
                <button type="submit" class="btn btn-success"><i class="fas fa-calendar-check"></i> Booking</button>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
</div>
<?php endif;?>

<!-- REQUIRED SCRIPTS -->
<?php include("build/script.php");?>
</body>
</html>