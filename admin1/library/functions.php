<?php
function checkAdminUser()
{
    // ถ้าไม่มีการกำหนดค่า session id ก็จะ Redirect ไปยังหน้า Login อีกครั้ง
    if (!isset($_SESSION['admin_login'])) {
        header('Location: ' . WEB_ROOT . 'admin1/login.php');
        exit;
    }

    // ถ้าผู้ใช้ต้องการ logout
    // if (isset($_GET['logout'])) {
    //     doLogout();
    // }
}
