<?php
require_once("./thu_vien.php");
$listBrands = quan_ly_user();
?>
<section class="home" style="padding: 2rem 20rem; ">
    <h1 class="heading">Quản lý người dùng</h1> <br>


    <div class="btn">
        <a href="../checkLogin.php">Back</a>
    </div>
    <div class="table" style="border-radius:5px;">

        <table>
            <tr>
                <th>Mã khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Mật khẩu</th>
                <th>Email</th>
                <th>Ngày tạo</th>
                <th>Ngày cập nhật</th>
                <th>Thao Tác</th>
            </tr>

            <tbody>
                <?php foreach ($listBrands as $row) { ?>
                    <tr>
                        <td><?= $row['id']?></td>
                        <td><?= $row['userName'] ?></td>
                        <td><?= $row['password'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['created_date'] ?></td>
                        <td><?= $row['created_up_date'] ?></td>
                        <td>
                            <a href="./delete.php?id=<?= $row['id'] ?>" class="btn"><input type="button" value="Xóa" style="background:#66CDAA;"></a>
                            <a href="./edit.php?id=<?= $row['id'] ?>" class="btn"><input type="button" value="Sửa" style="background:#ff9a9a;"></a>
                        </td>
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