<?php
    include 'server.php';

    $username = $_POST["username"];
    $password_1 = $_POST["password_1"];
    $password_2 = $_POST["password_2"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];

    $sql_u = "SELECT username FROM member WHERE username='$username'";
    $result_u = mysqli_query($conn, $sql_u);

    if (empty($username) && empty($password_1) && empty($fname) && empty($lname) && empty($email)){
        echo '<script> alert("กรอกข้อมูลไม่ครบ"); </script>';
        header("refresh:0.2; url=register.html");
    }else{
        if (empty($result_u) != 0){
            echo '<script>  alert("มีข้อมูลผู้ใช้นี้แล้ว");   </script>';
            header("refresh:0.2; url=register.html");
        }elseif($password_1 == $password_2){
            $sql = "INSERT INTO member (username, password, fname, lname, email)
            VALUE ('$username', '$password_1', '$fname', '$lname', '$email');";
            if ($conn->multi_query($sql) === true){
                    echo '<script>  alert("กรอกข้อมูลสำเร็จ");   </script>';
                    header("refresh:0.2; url=login.html");
                    }
        }else{
            echo '<script>  alert("กรอกข้อมูลล้มเหลว");   </script>';
            header("refresh:0.2; url=register.html");
        }
    }
    $conn -> close();
?>