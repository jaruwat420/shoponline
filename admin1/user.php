<?php
session_start();

if (!isset($_SESSION['user_login'])) {
    $_SESSION['error'] = "กรุณาเข้าสู่ระบบก่อนเด้อ";
    header('Location:index.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER PAGE</title>
</head>

<body>
    <h1>Welcome user</h1>
    <a href="logout.php">ออกจากระบบ</a>
</body>

</html>