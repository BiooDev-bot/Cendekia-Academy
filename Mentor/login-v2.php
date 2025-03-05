<?php
    session_start();
    $conn=mysqli_connect("localhost","root","","datalog");

    if(isset($_COOKIE['mid'])){
        $mid = $_COOKIE['mid'];
        $email=$_COOKIE['email'];
        $pw=$_COOKIE['pw'];
        $result=mysqli_query($conn,"SELECT * FROM menlog WHERE mid='$mid'");
        $test=mysqli_fetch_assoc($result); 
        if($email==$test['email']||password_verify($pw,$test['password'])){
            $_SESSION["name"]=$test["username"];
            $_SESSION["email"]=$test["email"];
            $_SESSION["phone"]=$test["telepon"];
            $_SESSION["pp"]=$test["propic"];
            $_SESSION["tes"]=$test["test"];
            $_SESSION["login"]=true;
            header('Location: index3.php');
            exit;
        }
    }
    function login(){
        global $conn;
        $mid=$_POST["mid"];
        $pw=$_POST["pw"];
        $email=$_POST["email"];
        $sql= "SELECT * FROM menlog WHERE MID = '$mid'";
        $result=mysqli_fetch_assoc(mysqli_query($conn,$sql));
        if($result){
            if($result["email"]== $email){
                if($pw==$result["password"]){
                    $_SESSION["login"]=true;
                    $_SESSION["name"]=$result["username"];
                    $_SESSION["email"]=$result["email"];
                    $_SESSION["pp"]=$result["propic"];
                    $_SESSION["phone"]=$result["telepon"];
                    $_SESSION["tes"]=$result["test"];
                    if(isset($_POST['remember'])){
                        setcookie('mid',$mid,time()+ 120);
                        setcookie('email',$email,time()+ 120);
                        setcookie('pw',$pw,time()+ 120);
                    }
                    header("Location: index3.php");
                    exit;
                }else{
                    return "Password salah.. Silahkan cek lagi";
                };
            }else{
                return "Email tidak terdaftar.. Silahkan cek lagi";
            }
        }else{
            return "mid tidak terdaftar";
        }
    }
    if(isset($_POST["logsub"])){
        $error = login();
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Cendekia Academy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="login-container">
    <!-- Form Login -->
    <div class="login-form">
        <h2>Log In</h2>
        <p>Silahkan login untuk menjadi member Cendekia Academy</p>
        <form action="#" method="post">
            <div class="mb-3">
                <input type="password" name="mid" class="form-control" placeholder="Masukkan MID" autocomplete="off" required>
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Masukkan Email" autocomplete="off" required>
            </div>
            <div class="mb-3">
                <input type="password" name="pw" class="form-control" placeholder="Masukkan Password" autocomplete="off" required>
            </div>
            <?php if (isset($error)) : ?>
                <p style="color: red; font-style: italic;"><?=$error?></p>
            <?php endif ?>
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-2">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember" class="mb-0">Remember me</label>
                </div>
                <a href="#" class="text-danger">Anything wrong?</a>
            </div>
            <button type="submit" name="logsub" class="btn btn-login w-100 mt-3">Login</button>
        </form>
        <p class="text-center mt-3">Belum punya akun? <a href="../Register/register-v2.php" class="text-primary">Daftar Yuk</a></p>
    </div>

    <!-- Gambar -->
    <div class="login-image">
        <img src="../Homepage/img/Cendekia Primary Logo.png" alt="Cendekia Academy Logo">
    </div>
</div>

</body>
</html>
