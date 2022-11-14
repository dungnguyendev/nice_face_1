<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra đăng nhập - Nice face</title>
</head>

<body>
    <?php
    require_once("connect.php");
    $error = false;
    $username = $_POST['u'];
    $password = $_POST['p'];

    if (isset($username) && !empty($username) && isset($password) && !empty($password)) {
        $sql = "SELECT * FROM users WHERE userName = '$username' AND password = '$password'";
        $kq = $conn->query($sql);
        if (!$kq) {
            $error = true;
        } else {
            session_start();
            $user = $kq->fetch();
            $_SESSION['current_user'] = $user;
        }
        if ($error != false) {
            unset($_SESSION['current_user']);
            exit;
        }
    }
    ?>
    
    <?php
    if (empty($_SESSION['current_user'])) {
        header("Location: ../model/Login.php");
    } else {        
    ?>
        <a href="./manager_Brands.php/list.php">Quản lý loại hàng</a>
        <a href="./manager_Product/list.php">Quản lý sản phẩm</a>
        <a href="./manager_Brands.php/index.php"></a>
        <a href="./manager_Brands.php/index.php"></a>
    <?php } ?>
</body>

</html>