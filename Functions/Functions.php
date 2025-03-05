<?php 
    $conn = mysqli_connect("localhost","root","","datalog");

    function login($admin){
        global $conn;
        $id=$admin['sid'];
        $email=$admin['email'];
        $password=$admin['password'];
        $result = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM datalog WHERE email = '$email'"));
        if($result){
            if($id==$result['SID']){
                if($password==$result['password']){
                    header('Location: ../app/index3.html');
                }
            }
        }
        return false;
    }
?>