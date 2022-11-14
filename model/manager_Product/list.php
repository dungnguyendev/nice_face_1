<?php
session_start();
require_once '../../model/connect.php';
$sql = "SELECT * FROM products INNER JOIN brands ON products.brand_id = brands.brand_id";
$listSP = $conn->query($sql);
$search = isset($_GET['name']) ? $_GET['name'] : "";
$total_row = tongSoHang();
$item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 10;
$current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
$listSP = phanTrangMyPham($search, $item_per_page, $current_page);
$total_pages = ceil($total_row / $item_per_page); // toàn bộ trang 
?>
<section class="home" style="padding: 2rem 15rem; ">
    <h1 class="heading">Danh sách sản phẩm</h1> <br>

    <div class="btn">

        <a href="./add.php" class="nut-admin-add">Thêm sản phẩm</a>
    </div>
    <form action="" method="post" style="padding:1rem 0px; display:block;">
        <input type="text" name="" style=" width:30%;border:1px solid #ccc;border-radius:5px;padding:13px;" placeholder="Nhập từ khóa cần tìm...">
        <select name="" id="" style=" width:30%; border:1px solid #ccc;border-radius:5px;padding:13px;">
            <option value="0" selected>Tất Cả</option>
            <option value="0" selected>Dưỡng da</option>
            <option value="0" selected>Mặt nạ</option>
            <option value="0" selected>Trang điểm</option>
        </select>
        <input type="submit" name="listok" value="Thực hiện" style="width:20%; background-color: #26e6c6; border:1px solid #ccc;border-radius:5px;padding:13px;">
    </form>
    <div class="table" style="border-radius:5px;">
        <table>
            <tr>
                <th>Mã loại</th>
                <th>Tên Sản Phẩm</th>
                <th>Hình Ảnh</th>
                <th>Giá</th>
                <th>Số lượng tồn</th>
                <th>Lượt Xem</th>
                <th>Mã danh mục</th>

                <th>Thao tác</th>
            </tr>
            <tbody>
                <?php foreach ($listSP as $row) { ?>
                    <tr>
                        <td><?= $row['product_id'] ?></td>
                        <td><?= $row['product_name'] ?></td>
                        <td><img width="60%" height="60%" style="border-radius:8px;" src="<?= $row['image'] ?>" alt="<?= $row['product_name'] ?>"></td>
                        <td>
                            <p><?= number_format($row['price'], 0, ",", ".") ?>
                        </td>
                        <td><?= $row['quantily'] ?></td>
                        <td>245</td>
                        <td><?= $row['brand_id'] ?></td>
                        <td>
                            <div class="div">
                                <a onclick="return Del('<?= $row['product_name'] ?>')" href="./delete.php?id=<?= $row['product_id'] ?>" class="btn"><input type="button" value="Xoá" style="background:#ff9a9a;"></a>
                                <a href="./edit.php?id=<?= $row['product_id'] ?>" class="btn"><input type="button" value="Sửa" style="background:#66CDAA;"></a>
                            </div>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <style>
            .div {
                display: flex;
                gap: 1rem;
            }

            .phan-trang-center {
                display: flex;
                margin-top: 40px;
                margin-bottom: 40px;
            }

            .can-giua-pt {
                max-width: 1200px;
                margin: 0 auto;
                display: flex;
            }

            .phanTrang {
                display: flex;
                align-items: center;
                align-content: center;
                margin-right: 4px;
                width: 100%;
                height: 15px;
                padding: 5px;
                text-decoration: none;
                border: 1px solid #4b4b4a;
                border-radius: 5px;
            }

            strong {
                margin-right: 4px;
                display: flex;
                width: 100%;
                align-items: center;
                align-content: center;
                color: #fff;
                background: #515154;

                height: 15px;
                padding: 5px;
                text-decoration: none;
                border: 1px solid #4b4b4a;
                border-radius: 5px;
            }
        </style>
        <?php
        $param = "";
        if ($search) {
            $param = "name=" . $search . "&";
        }
        ?>
        <div class="phan-trang-center">
            <div class="can-giua-pt">
                <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                    <?php if ($i != $current_page) { ?>
                        <a class="phanTrang" href="?<?= $param ?>per_page=<?= $item_per_page ?>&page=<?= $i ?>"><?= $i ?></a>
                    <?php } else { ?>
                        <strong><?= $i ?></strong>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
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
        padding: 1rem 1.5rem;
        background: #fff;
        border: 0.1rem solid #bbb;
        border-radius: 0.5rem;
        margin-top: 3rem;

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
<script>
    function Del(name) {
        return confirm("Bạn có chắc chắn muấn xoá sản phẩm: " + name + " ?");
    }
</script>