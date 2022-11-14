<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập - Nice face</title>
    <link rel="stylesheet" href="../css/css_login.css">
</head>

<body>
    <div class="container">
        <div class="box_login">
            <div class="box_login_left">
                <div class="img">
                    <a href="../index.php"><img src="../image/Screenshot_2022-11-04_132926-removebg-preview.png" alt="" /></a>
                </div>
                <p class="title_login">Chào mừng bạn đến với Nice face</p>
                <h2>Đăng nhập</h2>
                <form action="./checkLogin.php" method="POST">
                    <div class="form_ground">
                        <label for="">Tài khoản: </label><br />
                        <input type="text" name="u" id="" required />
                    </div>
                    <div class="form_ground">
                        <label for="">Password: </label><br />
                        <input type="password" name="p" id="" required />
                    </div>
                    <p class="changePass"><a href="./quenMk.php">Quên mật khẩu ?</a></p>
                    <div class="form_ground_1">
                        <input class="submit" name="submit" type="submit" value="ĐĂNG NHẬP" />
                    </div>
                </form>
                <p class="register">
                    Chưa có tài khoản ? <a href="./Register.php">Đăng ký</a>
                </p>
            </div>
            <div class="box_login_right">
                <img src="../image/Screenshot 2022-11-04 202907.png" alt="" />
            </div>
        </div>
    </div>
</body>

</html>