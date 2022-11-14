<?php
session_start();
require_once '../connect.php';
$sql_brand = "SELECT * FROM brands";
$query_brand = $conn->query($sql_brand);

if (isset($_POST['sbm'])) {
    $prd_name = $_POST['product_name'];

    $image = $_FILES['image']['name'];
    $target_dir = "../../banner dự án1/";
    $target_file = $target_dir . basename($image);

    $price = $_POST['price'];
    $quantily = $_POST['quantily'];
    $description = $_POST['description'];
    $brand_id = $_POST['brand_id'];

    $sql = "INSERT INTO products (product_name , image , price , quantily , description , brand_id , created_time ) VALUES ('$prd_name' , '$target_file' , $price , $quantily , '$description' , $brand_id , Now())";
    $kq = $conn->query($sql);
    move_uploaded_file($image, $target_file);
    header('location: ./list.php');
}
?>
<section class="home" style="padding: 2rem 13rem;">
    <h1 class="heading">Thêm mới sản phẩm</h1>
    <form method="post" enctype="multipart/form-data">

        <span>Danh mục</span>
        <select name="brand_id">
            <?php
            foreach ($query_brand as $row_brand) { ?>
                <option value="<?= $row_brand['brand_id']; ?>"><?= $row_brand['brand_name']; ?> </option>
            <?php } ?>
        </select>
        <span>Tên sản phẩm</span>
        <input type="text" name="product_name" required>

        <span>Giá</span>
        <input type="text" name="price" required>

        <span>Hình</span>
        <input type="file" name="image" required>

        <span>Số lượng</span>
        <input type="number" name="quantily" required>

        <span>Mô tả</span>
        <textarea name="description" cols="30" rows="10"></textarea>
        <div class="btn">
            <input name="sbm" class="nut-admin" type="submit">
            <input type="reset" value="Nhập lại" style="background: #ff9a9a;">
            <a href=""><input type="button" value="Danh sách" style="background: #66CDAA;"></a>
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