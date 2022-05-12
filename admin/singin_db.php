<?php
session_start();
require '../library/db.php';

if (isset($_POST['singin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        $_SESSION['error'] = 'กรุณากรอกอีเมล';
        header('location:singin.php');
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = 'รูปแบบอีเมลไม่ถูกต้อง';
        header('location:singin.php');
    } elseif (empty($password)) {
        $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
        header('location:singin.php');
    } elseif (strlen($_POST['password']) > 20 || (strlen($_POST['password'])) < 5) {
        $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวระหว่าง 5-20 ตัวอักษร';
        header('location:singin.php');
    } else {
        try {
            $checkdata = $conn->prepare("SELECT * FROM tbl_user WHERE email = :email");
            $checkdata->bindParam(":email", $email);
            $checkdata->execute();
            $row = $checkdata->fetch(PDO::FETCH_ASSOC);

            if ($checkdata->rowCount() > 0) {
                if ($email == $row['email']) {
                    if (password_verify($password, $row['password'])) {
                        if ($row['urole'] == 'admin') {
                            $_SESSION['admin_login'] = $row['id'];
                            header("location: admin.php");
                        } else {
                            $_SESSION['user_login'] = $row['id'];
                            header("Location: user.php");
                        }
                    } else {
                        $_SESSION['error'] = 'รหัสผ่านผิด';
                        header("Location: singin.php");
                    }
                } else {
                    $_SESSION['error'] = 'อีเมลไม่ถูกต้อง';
                    header("Location: singin.php");
                }
            } else {
                $_SESSION['error'] = 'ไม่มีข้อมูลในระบบนะจ๊ะ';
                header("Location: singin.php");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
