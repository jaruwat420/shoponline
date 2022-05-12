<?php
require_once '../library/connect.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // } elseif (isset($_POST)) {
    //     $username = $_POST['username'];
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];
    // } elseif (empty($username)) {
    //     $_SESSION['error'] = 'กรุณากรอกชื่อ';
    //     header('Location: index.php');
    // } elseif (empty($email)) {
    //     $_SESSION['error'] = 'กรรุณากรอกอีเมล';
    //     header('Location: index.php');
    // } elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     $_SESSION['error'] = 'กรุณากรอกรูปแบบอีเมลให้ถูกต้อง';
    //     header('Location: index.php');
    // } else {
    $stmt = $conn->prepare("SELECT * FROM tbl_user ");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($row);
}
