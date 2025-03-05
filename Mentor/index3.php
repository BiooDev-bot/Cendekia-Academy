<?php
  session_start();
  $conn = mysqli_connect("localhost","root","","datalog");
  if(!isset($_SESSION["login"])){
    header("Location: ../Login/login-v2.php");
    exit;
  }
  $i=1;
  $nama=$_SESSION["name"];
  $email=$_SESSION["email"];
  $pp=$_SESSION["pp"];
  $phone=$_SESSION["phone"];
  $tes=$_SESSION["tes"];
  $query = mysqli_query($conn,"SELECT * FROM datalog");
  $row = mysqli_fetch_array($query);
  $rows=[];
  while($row = mysqli_fetch_array($query)){
    $rows[]=$row;
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
    <div class="content-header">
            <div class="container-fluid">
                <p>Berikut data book untuk mentoring <b>bahasa inggris kelas 9 (SMP)</b></p>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <!-- Search Box -->
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="searchBox" placeholder="Search">
                    <div class="input-group-append">
                        <button class="btn btn-success"><i class="fas fa-search"></i></button>
                    </div>
                </div>

                <!-- Table -->
                <div class="card">
                    <div class="card-body">
                        <table id="studentTable" class="table table-bordered table-hover">
                            <thead class="bg-success text-white">
                                <tr>
                                    <th>No</th>
                                    <th>User ID</th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Program Kursus</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach($rows as $user):?>
                                <tr>
                                    <td><?=$i?></td>
                                    <td><?= $user["SID"]?></td>
                                    <td><img src="profile/<?=$user["propic"]?>.jpg" class="rounded-circle" style="width: 80px; height: 80px;"></td>
                                    <td><?=$user["username"]?></td>
                                    <td><?=$user["email"]?></td>
                                    <td>Biotechnology</td>
                                    <td><button class="btn btn-warning btn-sm" onclick="showStudentModal('<?= $user['propic'] ?>', '<?= $user['username'] ?>', '<?= $user['email'] ?>', 'Biotechnology')">Lihat</button></td>
                                </tr>
                                <?php $i ++;?>
                              <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    <!-- /.content -->
  </div>

<!-- Tambahkan di dalam <body>, sebelum </body> -->
<div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="studentModalLabel">Detail Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img id="modalFoto" src="" class="rounded-circle mb-3" style="width: 100px; height: 100px;">
        <p><strong>Nama:</strong> <span id="modalNama"></span></p>
        <p><strong>Email:</strong> <span id="modalEmail"></span></p>
        <p><strong>Program Kursus:</strong> <span id="modalProgram"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

  <!-- /.content-wrapper -->




  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->





  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script>
  function showStudentModal(foto, nama, email, program) {
    document.getElementById('modalFoto').src = 'profile/' + foto + '.jpg';
    document.getElementById('modalNama').textContent = nama;
    document.getElementById('modalEmail').textContent = email;
    document.getElementById('modalProgram').textContent = program;
    $('#studentModal').modal('show');
  }
</script>

<script>
  function showStudentModal(foto, nama, email, program) {
    document.getElementById('modalFoto').src = 'profile/' + foto + '.jpg';
    document.getElementById('modalNama').textContent = nama;
    document.getElementById('modalEmail').textContent = email;
    document.getElementById('modalProgram').textContent = program;
    $('#studentModal').modal('show');
  }

  document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("searchBox").addEventListener("keyup", function () {
      let filter = this.value.toLowerCase();
      let rows = document.querySelectorAll("#studentTable tbody tr");
      rows.forEach(row => {
        let nama = row.querySelector("td:nth-child(4)").textContent.toLowerCase();
        let email = row.querySelector("td:nth-child(5)").textContent.toLowerCase();
        if (nama.includes(filter) || email.includes(filter)) {
          row.style.display = "";
        } else {
          row.style.display = "none";
        }
      });
    });
  });
</script>

<?php include("build/script.php");?>
</body>
</html>
