<?php require_once '../library/db.php';

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
        <h1 class="mt-4">LOGIN:::</h1>
        <hr>
        <form action="singin_db.php" method="POST">
            <?php if (isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['error'];
                    unset($_SESSION['error']);
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
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" name="email" aria-describedby="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="singin">Singin</button>
        </form>
        <hr>
        <p>เป็นสมาชิกแล้วใช่ไหม คลิกที่นี้เพื่อ?<a href="index.php">สมัครสมาชิก</a></p>
    </div>
</body>

</html>