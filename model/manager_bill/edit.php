<?php
session_start();
require_once("./thu_vien.php");
$id = $_GET['id'];
$brand = "SELECT * FROM bill_user WHERE id = $id";
$kq = $conn->query($brand);
foreach ($kq as $row_up) {
    if (isset($_POST['sbm'])) {
        $nameU = $_POST['nameU'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $status_bill = $_POST['status_bill'];

        $sql = "UPDATE bill_user  SET name_bill = '$nameU' , address = '$address' , tel = '$phone' , status_bill = '$status_bill' WHERE id = $id";
        $kq = $conn->query($sql);
        header('Location: ./list.php');
    }
}

?>
<section class="home">
    <h1 class="heading">Cập nhật danh mục</h1>
    <form method="post" enctype="multipart/form-data" style="padding: 1rem 10rem;">
        <span>Tên khách hàng</span>
        <input type="text" name="nameU" value="<?= $row_up['name_bill']?>">
        <span>Địa chỉ</span>
        <input type="text" name="address"  value="<?= $row_up['address']?>">
        <span>Số điện thoại</span>
        <input type="text" name="phone"  value="<?= $row_up['tel']?>">
        <span>Tình trạng đơn hàng</span>
        <select name="status_bill" id="">
            <option value="Lựa chọn">Lựa chọn</option>
            <option value="Đang gói hàng">Đang gói hàng</option>
            <option value="Chờ thanh toán">Chờ thanh toán</option>
            <option value="Đã giao hàng">Đã giao hàng</option>
            <option value="Đã bị huỷ">Đã bị huỷ</option>
        </select>
        <div class="btn">
            <input type="submit" name="sbm" class="nut-admin" value="Chỉnh sửa">
            <a href=""><input type="button" value="Danh sách"></a>
        </div>

    </form>
</section>

<style>
    * {
        font-family: 'Montserrat', sans-serif;

    }

    /* css table */
    .home form select,
    .home form input:not([type="file"]),
    .home form .box input {
        padding: 20px;
        font-size: 1.1rem;
        border-radius: 0.5rem;
        border: 0.1rem solid #ccc;
    }

    .home form {
        display: flex;
        flex-direction: column;
    }

    .home form span {
        padding: 1.3rem 0.5rem;
        font-size: 1.2rem;
        font-weight: bold;
    }

    .home .btn {
        padding-top: 2rem;
    }

    .heading {
        text-align: center;
        font-size: 2rem;

        font-family: 'Montserrat', sans-serif;
    }

    .heading {
        font-family: 'Montserrat', sans-serif;

        background-image: linear-gradient(to right, #7A7FBA, #11C37C);
        ;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .table table {
        width: 100%;
        border-collapse: collapse;
        text-transform: none;
    }

    .table table th {
        font-family: 'Montserrat', sans-serif;

        text-align: left;
        padding: 1.5rem;
        background: #7bdced;
        color: #fff;
    }

    .table table td {
        font-family: 'Montserrat', sans-serif;

        padding: 1rem 1.5rem;
        border-bottom: 0.1rem solid #bbb;
    }

    .home .btn input {
        margin-right: 1.5rem;
        padding: 1rem 1.5rem;
        background: #fff;
        border: 0.1rem solid #bbb;
        border-radius: 0.5rem;
    }

    .home .btn input:hover {
        background: #ff9a9a;
        color: #fff;
        transition: 0.4s linear;
    }

    .btn {
        padding-bottom: 3rem;
    }

    /* //nút */
    .nut-admin {
        font-family: 'Montserrat', sans-serif;
        margin-right: 30px;
        border-radius: 8px;
        border: 1px solid #FF99CC;
        text-decoration: none;
        padding: 20px;
        color: rgb(214, 49, 170);
        transition: all 0.3s ease;
        position: relative;

    }

    .nut-admin::before {
        content: "";
        width: 100%;
        height: 100%;
        background: #FF99CC;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        transition: all 0.5s ease;
        transform: scaleX(0);
        transform-origin: left;
    }

    .nut-admin:hover {
        color: white
    }

    .nut-admin:hover::before {
        border-radius: 8px;

        transform: scaleX(1);
    }
</style>