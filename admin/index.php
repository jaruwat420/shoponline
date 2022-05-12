<?php require_once '../library/db.php';
require_once '../include/navMenu.php';

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=ege">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../include/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../include/bootstrap/js/bootstrap.min.js">
</head>

<body>
    <div class="container">
        <h1 class="mt-4">สมัครสมาชิก</h1>
        <hr>
        <form action="singup_db.php" method="POST">

            <?php if (isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <?php if (isset($_SESSION['warning'])) { ?>
                <div class="alert alert-warning" role="alert">
                    <?php echo $_SESSION['warning'];
                    unset($_SESSION['warning']);
                    ?>
                </div>
            <?php } ?>
            <?php if (isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>

            <div class="mb-3">
                <label for="firstname" class="form-label">firstname</label>
                <input type="text" class="form-control" name="firstname" aria-describedby="firstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">lastname</label>
                <input type="text" class="form-control" name="lastname" aria-describedby="lastname">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" name="email" aria-describedby="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">confirm password</label>
                <input type="password" class="form-control" name="c_password">
            </div>
            <button type="submit" class="btn btn-primary" name="singup">Singup</button>
        </form>
        <hr>
        <p>เป็นสมาชิกแล้วใช่ไหม คลิกที่นี้เพื่อ?<a href="singin.php">เข้าสู่ระบบ</a></p>
    </div>
</body>

</html>