<?php
  session_start();
  $conn = mysqli_connect("localhost","root","","datalog");
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
    <style>
        /* Chatbox Styling */
    .content-wrapper {
    background-color: #f4f6f9;
    padding: 20px;
    }
    </style>
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

    <!-- Header Halaman -->
    <div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h1></h1>
        </div>
    </section>
    
    <!-- Konten Halaman -->
    <section class="content">
        <div class="container">
            <div class="chat-box" id="chatBody">
                <!-- Pesan awal dari bot -->
                <div class="chat-message bot">
                    <div class="chat-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <div class="chat-bubble">
                        <p>Halo, aku EduBot. Chatbot yang akan membantu kamu jika ada kesulitan, beritahu aku ya!</p>
                    </div>
                </div>
            </div>

            <!-- Form input chat -->
            <form action="bot/mybot.php" id="chat-form" class="chat-input" method="post">
                <input type="text" name="textbot" id="chatInput" class="form-control" placeholder="Ketikkan Sesuatu Disini..." autocomplete="off">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </section>
    </div>

<!-- REQUIRED SCRIPTS -->
<script>
document.getElementById("chat-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Mencegah reload

    let userMessage = document.getElementById("chatInput").value.trim();
    let chatBody = document.getElementById("chatBody");

    if (userMessage === "") return; // Cegah kirim pesan kosong

    // Tampilkan pesan user di chat-box
    let userChat = `
        <div class="chat-message user">
            <div class="chat-bubble">
                <p>${userMessage}</p>
            </div>
            <div class="chat-icon">
                <img src="profile/<?=$pp?>.jpg" alt="User Avatar">
            </div>
        </div>
    `;
    chatBody.innerHTML += userChat;

    // Tampilkan animasi "Bot sedang mengetik..."
    let typingIndicator = document.createElement("div");
    typingIndicator.classList.add("chat-message", "bot");
    typingIndicator.innerHTML = `
        <div class="chat-icon">
            <i class="fas fa-robot"></i>
        </div>
        <div class="chat-bubble">
            <p><i>Sedang mengetik...</i></p>
        </div>
    `;
    chatBody.appendChild(typingIndicator);
    chatBody.scrollTop = chatBody.scrollHeight; // Auto-scroll

    // Kirim pesan ke PHP tanpa reload (AJAX)
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "bot/mybot.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onload = function() {
        if (xhr.status === 200) {
            setTimeout(function() { // Delay biar lebih natural
                typingIndicator.remove(); // Hapus teks "Bot sedang mengetik..."
                let botChat = `
                    <div class="chat-message bot">
                        <div class="chat-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <div class="chat-bubble">
                            <p>${xhr.responseText}</p>
                        </div>
                    </div>
                `;
                chatBody.innerHTML += botChat;
                chatBody.scrollTop = chatBody.scrollHeight; // Auto-scroll
            }, 2000); // Delay 2 detik
        }
    };

    xhr.send("textbot=" + encodeURIComponent(userMessage));

    // Kosongkan input setelah kirim
    document.getElementById("chatInput").value = "";
});
</script>
<?php include("build/script.php");?>
</body>
</html>