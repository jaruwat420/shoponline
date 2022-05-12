<?php
require '../library/db.php';
session_start();

if (isset($_POST['btnLogin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        $_SESSION['error'] = 'กรุณากรอก email';
        header('location:login.php');
    } elseif (empty($password)) {
        $_SESSION['error'] = 'กรุณากรอกหรัสผ่าน';
        header('location:login.php');
    } elseif (strlen($_POST['password']) > 20 || (strlen($_POST['password'])) < 5) {
        $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน 5-20 ตัวอักษร';
        header('location: index.php');
    } else {
        try {
            $checkdata = $conn->prepare("SELECT * FROM tbl_user WHERE email =:email");
            $checkdata->bindParam(":email", $email);
            $checkdata->execute();
            $row = $checkdata->fetch(PDO::FETCH_ASSOC);


            if ($checkdata->rowCount() > 0) {
                if ($email == $row['email']) {
                    if (password_verify($password, $row['password'])) {
                        if ($row['urole'] == 'admin') {
                            $_SESSION['admin_login'] = $row['id'];
                            header("location: dashboard");
                        } else {
                            $_SESSION['user_login'] = $row['id'];
                            header("Location: user.php");
                        }
                    } else {
                        $_SESSION['error'] = 'รหัสผ่านผิด';
                        header("Location: login.php");
                    }
                } else {
                    $_SESSION['error'] = 'อีเมลไม่ถูกต้อง';
                    header("Location: login.php");
                }
            } else {
                $_SESSION['error'] = 'ไม่มีข้อมูลในระบบนะจ๊ะ';
                header("Location: login.php");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
