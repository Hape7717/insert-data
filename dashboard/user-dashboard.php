<?php
    session_start();
    include 'server.php';

    $sql_session = "SELECT fname, lnanme FROM member WHERE username=$_SESSION['username']";
    echo $sql_session;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashcy</title>
</head>
<body>
    <div class="allin">
        <div class="container">
            <div class="grid-item">
                <p class="txt-name"><?php $_SESSION['username']; ?></p>
            </div>
            <div class="menu-btn">
                <a href="#" class="btn-primary">ข้อมูลส่วนตัว</a>
                <a href="#" class="btn-sec">แบบสำรวจ (ตอบแล้ว)</a>
                <a href="#" class="btn-sec">แบบสำรวจ (ยังไม่ตอบ)</a>
            </div>
        </div>
        <div class="menu-btn">
            <button class="capsule-btn">Logout</button>
        </div>
    </div>
</body>
</html>