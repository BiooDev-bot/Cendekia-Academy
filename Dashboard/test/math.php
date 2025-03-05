<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: ../../Login/login-v2.php");
    exit;
}
$benar=0;
$nama=$_SESSION["name"];
$conn = mysqli_connect("localhost", "root", "", "datalog");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if(!isset($_GET["q"])){
    $id = 0;
}else{
    $id = $_GET["q"];
}
$sql = "SELECT * FROM mtk";
function query($query) {
    global $conn;
    $result=mysqli_query($conn, $query);
    $rows =[];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
$question = query($sql);
$total_questions=count($question);

// Debugging: Lihat semua jawaban yang tersimpan
if(isset($_POST["submit"])){
    if($id < 20){
        $_SESSION["math"][$id]= $_POST["answer"];
        if($id<19){
            $id++;
            header("Location: math.php?q=$id");
            exit;
        }else{
            $jawaban=[];
            for($i= 0;$i<$total_questions;$i++){
                $jawaban[]=$question[$i]["kj"];
            };
            for($j=0;$j<$total_questions;$j++){
                if($jawaban[$j]==$_SESSION["math"][$j]){
                    $benar++;
                };
            }
            $nilai=$benar*5;
            $sum = "SELECT total FROM datalog WHERE username='$nama'";
            $append="INSERT INTO math (username, score) VALUES ('$nama', $nilai)";
            $total = mysqli_fetch_assoc(mysqli_query($conn,$sum));
            if($total && $total["total"] < 7){
                $hasil=1+$total["total"];
                mysqli_query( $conn, "UPDATE datalog SET total = $hasil WHERE username = '$nama'");
            }else{
                mysqli_query( $conn, "UPDATE datalog SET test = 'yes' WHERE username = '$nama'");
            }
            mysqli_query( $conn, "UPDATE datalog SET math = 'yes' WHERE username = '$nama'");
            mysqli_query( $conn, $append);
            header("Location: outtest.php");
            exit;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mulai Ujian</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <style>
        body { background-color: #f4f6f9; }
        .question-container { max-width: 800px; margin: auto; background: white; padding: 20px; border-radius: 10px; }
        .question-number { display: flex; justify-content: center; margin-bottom: 15px; }
        .question-number div { width: 35px; height: 35px; text-align: center; line-height: 35px; border-radius: 5px; margin: 5px; font-weight: bold; }
        .question-number .active { background-color: black; color: white; }
        .question-number .completed { background-color: #08bc64; color: white; }
        .btn-exit { background-color: red; color: white; }
        .question-number {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 5px;
        }

    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <a href="outtest.php" class="btn btn-exit">Keluar</a>
            <h4>Ujian VARK</h4>
            <div class="btn btn-primary" id="timer">28:00</div>
        </div>
        
        <div class="question-number">
        <?php for ($i = 0; $i < $total_questions; $i++): ?>
            <?php if($id==$i) :?>
                <div class="" style="background-color: aqua;">
                    <a href="math.php?q=<?=$i?>"><?php echo $i+1; ?></a>
                </div>
            <?php else : ?>
                    <div class="">
                        <a href="math.php?q=<?=$i?>"><?php echo $i+1; ?></a>
                    </div>
            <?php endif?>
        <?php endfor; ?>
        </div>
        <div class="question-container">
            <h5>Silakan baca dengan cermat</h5>
            <p><?php echo $question[$id]['soal']; ?></p>
            
            <form method="POST">
                <div>
                    <input type="radio" name="answer" value="A" required 
                        <?php 
                            if (isset($_SESSION["math"][$id]) && $_SESSION["math"][$id] == "A") { 
                                echo "checked"; 
                            } 
                        ?>
                    > <?php echo $question[$id]['a']; ?><br>
                    <input type="radio" name="answer" value="B" required 
                        <?php 
                            if (isset($_SESSION["math"][$id]) && $_SESSION["math"][$id] == "B") { 
                                echo "checked"; 
                            } 
                        ?>
                    > <?php echo $question[$id]['b']; ?><br>
                    <input type="radio" name="answer" value="C" required 
                        <?php 
                            if (isset($_SESSION["math"][$id]) && $_SESSION["math"][$id] == "C") { 
                                echo "checked"; 
                            } 
                        ?>
                    > <?php echo $question[$id]['c']; ?><br>
                    <input type="radio" name="answer" value="D" required 
                        <?php 
                            if (isset($_SESSION["math"][$id]) && $_SESSION["math"][$id] == "D") { 
                                echo "checked"; 
                            } 
                        ?>
                    > <?php echo $question[$id]['d']; ?><br>
                </div>
                
                <div class="mt-3 d-flex justify-content-between">
                    <?php if ($id > 0): ?>
                        <a href="math.php?q=<?=$id - 1; ?>" class="btn btn-secondary">Kembali</a>
                    <?php endif; ?>
                    <?php if ($id < 19): ?>
                        <button type="submit" name="submit" class="btn btn-primary">Selanjutnya</button>
                    <?php else: ?>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <?php endif; ?>
                </div>
            </form>
        </div>
    </div>
    <script>
        let time = 28 * 60;
        function updateTimer() {
            let minutes = Math.floor(time / 60);
            let seconds = time % 60;
            document.getElementById("timer").innerText = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
            time--;
            if (time < 0) clearInterval(timer);
        }
        let timer = setInterval(updateTimer, 1000);
    </script>
</body>
</html>
