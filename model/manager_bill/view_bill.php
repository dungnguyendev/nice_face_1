<?php
require_once("./thu_vien.php");
$show = show_bill();
$tongtien = sum_bill();
?>
<section class="home" style="padding: 2rem 20rem; ">
    <h1 class="heading">Chi tiết đơn hàng</h1> <br>


    <div class="btn">
        <a href="../checkLogin.php">Back</a>
    </div>
    <div class="table" style="border-radius:5px;">

        <table>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Giá tiền</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
            <tbody>
                <?php foreach ($show as $row) { ?>
                    <tr>

                        <td><?= $row['tensp'] ?></td>
                        <td><?= $row['image_product'] ?></td>
                        <td><?= number_format($row['price'], 0, ",", ".") ?> đ</td>
                        <td><?= $row['soluong'] ?></td>
                        <td><?= number_format($row['thanhtien'], 0, ",", ".") ?> đ</td>
                    </tr>
                <?php } ?>
                <?php foreach ($tongtien as $sum) {  ?>
                    <tr>
                        <td colspan="4" style="text-align: right;">Tổng tiền đơn hàng: </td>
                        <th colspan="1"><?= number_format($sum['total'], 0, ",", ".") ?> đ</th>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>



</section>

<style>
    /* css table */
    .heading {
        text-align: center;
        font-size: 2rem;
        color: #7bdced;
        padding: 2rem 0;
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
    .nut-admin-add {
        font-family: 'Montserrat', sans-serif;

        border-radius: 8px;
        border: 1px solid #FF99CC;
        text-decoration: none;
        padding: 20px;
        color: rgb(214, 49, 170);
        transition: all 0.3s ease;
        position: relative;

    }

    .nut-admin-add::before {
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

    .nut-admin-add:hover {
        color: white
    }

    .nut-admin-add:hover::before {
        border-radius: 8px;

        transform: scaleX(1);
    }
</style>