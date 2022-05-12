<?php require_once '../library/db.php';
session_start();

if (!isset($_SESSION['admin_login'])) {
    $_SESSION['error'] = 'กรุณาเข้าสู่ระบบก่อน';
    header('Location: login.php');
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN :::</title>
</head>

<body>
    <div class="container">
        <?php if (isset($_SESSION['admin_login'])) {
            $user_id = $_SESSION['admin_login'];
            $stmt = $conn->query("SELECT * FROM tbl_user WHERE id =$user_id");
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        } ?>
        <h1>Welcome,<?php echo $row['firstname'] . ' ' . $row['lastname']; ?> </h1>
        <a href="logout.php">Logout</a>
    </div>
</body>

</html>