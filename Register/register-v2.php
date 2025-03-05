<?php 
$conn=mysqli_connect("localhost","root","","datalog");
$pic=["pic1 (1)","pic1 (2)", "pic1 (3)", "pic1 (4)", "pic1 (5)","pic1 (6)","pic1 (7)","pic1 (8)","pic1 (9)","pic1 (10)","pic1 (11)"];
function append(){
    global $conn;
    global $pic;
    $ind_rand=array_rand($pic);
    $pp=$pic[$ind_rand];
    $name= $_POST["name"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    $pw= $_POST["pw"];
    $cpw= $_POST["cpw"];
    $result=mysqli_fetch_assoc(mysqli_query($conn,"SELECT username FROM datalog WHERE username='$name'"));
    if(!$result){
        if($pw==$cpw){
            $pw=password_hash($pw,PASSWORD_DEFAULT);
            $sql= "INSERT INTO datalog (propic, username, email, telepon, password, AI, biotech, cyber, energy, eng, math, space, personal, total, test) VALUES ('$pp', '$name', '$email', '$phone', '$pw', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 'no')";
            mysqli_query($conn,$sql);
            header("Location: ../Payment/payment.php");
            exit;
        }else{
            return "Konfirmasi password tidak sesuai";
        }
    }else{
        return "Username telah terpakai";
    }
    
}

if(isset($_POST["submit"])){
    if(append()==true){
        header("Location: ../Payment/payment.php");
        exit;
    }else{
        $error = append();
    }
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
    <link rel="stylesheet" href="register.css">
</head>
<body>

<div class="login-container">
    <!-- Form Login -->
    <div class="login-form">
        <h2>Sign Up</h2>
        <p>Silahkan sign up untuk menjadi member Cendekia Academy</p>
        <form action="" method="post">
            <div class="mb-3">
                <input type="text" class="form-control" name="name" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" name="phone" placeholder="Phone Number (08..)" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="pw" placeholder="Password" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="cpw" placeholder="Confirm Password" required>
            </div>
            <?php if(isset($error)):?>
                <p style="color: red; font-style: italic;"><?=$error?></p>
            <?php endif ?>
            <button type="submit" name="submit" class="btn btn-login w-100 mt-3">Daftar Sekarang</button>
        </form>
        <p class="text-center mt-3">Sudah menjadi member? <a href="../Login/login-v2.php" class="text-primary">Log in sekarang</a></p>
    </div>

    <!-- Gambar -->
    <div class="login-image">
        <img src="../Homepage/img/Cendekia Primary Logo.png" alt="Cendekia Academy Logo">
    </div>
</div>

</body>
</html>
