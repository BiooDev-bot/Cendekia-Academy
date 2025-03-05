<?php
  session_start();
  $conn = mysqli_connect("localhost","root","","datalog");
  if(!isset($_SESSION["login"])){
    header("Location: ../Login/login-v2.php");
    exit;
  }
// Dummy Data (Nanti ini bisa diganti dari database)
$nama=$_SESSION["name"];
$query = mysqli_query($conn,"SELECT * FROM datalog WHERE username = '$nama'");
$row = mysqli_fetch_assoc($query);
$tes=$row["test"];
$email=$row["email"];
$pp=$row["propic"];
$phone=$row["telepon"];
if($tes=="yes") {
$data=mysqli_query($conn,"SELECT * FROM datauser WHERE username = '$nama'");
$ai=mysqli_query($conn,"SELECT score FROM artificial WHERE username = '$nama'");
$bio=mysqli_query($conn,"SELECT score FROM lingkungan WHERE username = '$nama'");
$cyb=mysqli_query($conn,"SELECT score FROM cyber WHERE username = '$nama'");
$ene=mysqli_query($conn,"SELECT score FROM energy WHERE username = '$nama'");
$mat=mysqli_query($conn,"SELECT score FROM math WHERE username = '$nama'");
$ang=mysqli_query($conn,"SELECT score FROM angkasa WHERE username = '$nama'");
$ing=mysqli_query($conn,"SELECT score FROM ing WHERE username = '$nama'");
$dataai=mysqli_fetch_assoc($ai);
$databio=mysqli_fetch_assoc( $bio);
$datacyb=mysqli_fetch_assoc($cyb);
$dataene=mysqli_fetch_assoc($ene);
$datamat=mysqli_fetch_assoc( $mat);
$dataang=mysqli_fetch_assoc( $ang);
$dataing=mysqli_fetch_assoc( $ing);
$result=mysqli_fetch_assoc($data);
$user = [
  "profile_pic" => "$pp.jpg", // Gambar profil dummy
  "name" => "$nama",
  "email" => "$email",
  "phone" => "$phone",
  "learning_style" => [
      "Visual" => $result["visual"],
      "Auditory" => $result["auditori"],
      "Read/Write" => $result["readwrite"],
      "Kinesthetic" => $result["kinestetik"]
  ],
  "quote" => "Belajar adalah investasi terbaik untuk masa depan.",
  "skills" => [
      "AI and Big Data" => $dataai["score"],
      "Biotechnology" => $databio["score"],
      "Cyber Security" => $datacyb["score"],
      "Renewable Energy" => $dataene["score"],
      "English" => $dataing["score"],
      "Logical Mathematic" => $datamat["score"],
      "Space Exploration" => $dataang["score"]
  ]
];
// Konversi data ke JSON buat dipakai di JavaScript
$learningStyleJson = json_encode($user['learning_style']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Dashboard</title>
  <!-- Style & others -->
  <?php include("build/header.php");?>
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->


<body class="hold-transition sidebar-mini">



<div class="wrapper">
  <!-- Navbar -->
  <?php include("build/navbar.php");?>
  <!-- /.navbar -->



  <!-- Main Sidebar Container -->
   <?php include("build/sidebar.php");?>
  <!-- /.sidebar -->




  <!-- Content Wrapper. Contains page content -->



  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include("build/mainhead.php");?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php if($tes!="yes") : ?>
      <?php include("build/nomain.php");?>
    <?php else : ?>
      <?php include("build/main.php");?>
    <?php endif; ?>

    <!-- /.content -->
  </div>


  <!-- /.content-wrapper -->




  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->





  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2025-2030 <a href="../Homepage/index.php">Cendekia Academy</a>.</strong>
    All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<script>
document.addEventListener("DOMContentLoaded", function() {
    var ctx = document.getElementById('learningChart');
    if (ctx === null) {
        console.error("Element #learningChart tidak ditemukan!");
        return;
    }

    var learningData = <?= $learningStyleJson ?>;
    var labels = Object.keys(learningData);
    var data = Object.values(learningData);

    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                data: data,
                backgroundColor: ['#f39c12', '#00c0ef', '#d2d6de', '#00a65a']
            }]
        },
        options: {
            responsive: true
        }
    });
});
</script>

<script>
    // Ambil data VARK dari PHP
    var learningData = <?= $learningStyleJson ?>;

    // Konversi data ke array JavaScript
    var labels = Object.keys(learningData);
    var data = Object.values(learningData);

    // Cek apakah data terisi dengan benar
    console.log("Labels:", labels);
    console.log("Data:", data);

    // Render grafik
    var ctx = document.getElementById('learningChart').getContext('2d');
    var learningChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                data: data,
                backgroundColor: ['#f39c12', '#00c0ef', '#d2d6de', '#00a65a']
            }]
        },
        options: {
            responsive: true
        }
    });
</script>
<?php include("build/script.php");?>
</body>
</html>
