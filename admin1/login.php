<?php require_once '../include/navMenu.php';

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../include/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../include/bootstrap/js/bootstrap.min.js">
    <title>Login Page</title>
</head>

<body>
    <div class="d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow border-0">
                        <h4 class="card-header text-center">ยินดีต้อนรับเข้าสู่ระบบ</h4>
                        <div class="card-body px-4">
                            <form action="login_db.php" method="POST">
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
                                <div class="col-12 text-center">
                                    <span>
                                        <p>ยังไม่มีบัญชี? <a href="">สร้างบัญชี</a></p>
                                    </span>
                                </div>
                                <div class="col-12 text-center">
                                    <span>
                                        <p>โปรดระบุข้อมูลเพื่อเข้าสู่ระบบ</p>
                                    </span>
                                </div>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="email" class="col-form-label">E-mail</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="email">
                                    </div>
                                    <div class="col-12">
                                        <label for="password" class="col-form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="password">
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn btn-primary d-block w-75 mx-auto" id="btnLogin" name="btnLogin" type="submit">เข้าสู่ระบบ</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>