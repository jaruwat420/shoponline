<?php
session_start();
require_once '../library/db.php';

if (!isset($_SESSION['admin_login'])) {
    $_SESSION['error'] = 'กรุณาเข้าสู่่ระบบก่อน';
    header("Location: singin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../include/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../include/bootstrap/js/bootstrap.min.js">
    <title>Admin page</title>

</head>

<body>
    <div class="container">
        <?php if (isset($_SESSION['admin_login'])) {
            $user_id = $_SESSION['admin_login'];
            $stmt = $conn->query("SELECT * FROM tbl_user WHERE id =$user_id");
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        } ?>
        <h4 class="mt-4">Welcome Admin , <?php echo $row['firstname'] . ' ' . $row['lastname']; ?> </h4>
        <a class="btn btn-danger" href="logout.php">loguot</a>
    </div>
</body>

</html>