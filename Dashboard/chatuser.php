<?php
  session_start();
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
        <section class="content-header">
            <div class="container-fluid">
                <h1></h1>
            </div>
        </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar List User -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>👥 List User</h4>
                        </div>
                        <div class="card-body p-0">
                            <!-- Grup Chat -->
                            <h6 class="text-muted px-3 mt-2">Grup Chat</h6>
                            <ul class="list-group" id="groupList">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-users"></i> Kelas Pemrograman</span>
                                    <button class="btn btn-sm btn-success" onclick="openGroupChat('Kelas Pemrograman')">Masuk</button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-users"></i> Ngobrol Santai</span>
                                    <button class="btn btn-sm btn-success" onclick="openGroupChat('Ngobrol Santai')">Masuk</button>
                                </li>
                            </ul>

                            <!-- Chat Private -->
                            <h6 class="text-muted px-3 mt-3">Chat Private</h6>
                            <ul class="list-group" id="userList">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-circle text-success"></i> John Doe</span>
                                    <button class="btn btn-sm btn-primary" onclick="openChat('John Doe')">Chat</button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-circle text-danger"></i> Jane Smith</span>
                                    <button class="btn btn-sm btn-primary" onclick="openChat('Jane Smith')">Chat</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Chat Box -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 id="chatUserName">💬 Chat</h4>
                        </div>
                        <div class="card-body chat-box" id="chatBox" style="height: 400px; overflow-y: auto; background: #f8f9fa; padding: 10px;">
                            <p class="text-muted text-center">Pilih user untuk mulai chat...</p>
                        </div>
                        <div class="card-footer">
                            <div class="input-group">
                                <input type="text" id="chatInput" class="form-control" placeholder="Ketik pesan..." disabled>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" id="sendMessage" disabled>🚀 Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

<!-- REQUIRED SCRIPTS -->
<?php include("build/script.php");?>
</body>
</html>