<?php 
if(session_id() === '')
session_start(); 
if(isset($_SESSION['loaitk']))
unset($_SESSION['loaitk']);
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <title>Đăng nhập</title>
    <link rel="icon" href="https://png.pngtree.com/png-clipart/20190610/original/pngtree-green-design-icon-vector-material-png-image_1931207.jpg">
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>
        <!--start-login-form-->
        <div class="login-form">
            <h1>Đăng nhập</h1>
            <form action="KiemtraDangNhap.php" method="post">
                <span>
                    <input type="text" name="Taikhoan" class="user" placeholder="Username" onfocus="" onblur="">
                </span>
                <span>
                    <input type="password" name="Matkhau" class="lock" placeholder="Password" onfocus="" onblur="">
                </span>
                <div class="submit">
                    <input type="submit" name="form_click" value="Đăng nhập" />
                </div>
            </form>
        </div>
        <!--//End-login-form-->
</body>
</html>
