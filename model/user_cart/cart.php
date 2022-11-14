<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Giỏ hàng - Nice face</title>
    <link rel="stylesheet" href="../../css/css_cart.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous" />
</head>

<body>
<?php
    session_start();
    require_once '../../model/connect.php';
    $sql = "SELECT * FROM products INNER JOIN brands ON products.brand_id = brands.brand_id";
    $listSP = $conn->query($sql);
    foreach ($listSP as $row);
    if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];

    // Xoá hết sản phẩm trong giỏ hàng
    if (isset($_GET['delete_click']) && ($_GET['delete_click'] == 1)) unset($_SESSION['giohang']);

    // Xoá sp trong giỏ hàng
    if (isset($_GET['delete_sp']) && ($_POST['delete_sp'] >= 0)) {
        array_splice($_SESSION['giohang'], $_GET['delete_sp'], 1);
    }

    if (isset($_POST['addcart']) && ($_POST['addcart'])) {
        $hinh = $_POST['image'];
        $tensp = $_POST['tensp'];
        $gia = $_POST['price'];
        $soluong = $_POST['quantily'];

   
        //Kiểm tra sp có trong giỏ hàng
        $fl = 0;
        for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
            if ($_SESSION['giohang'][$i][1] == $tensp) {
                $fl = 1;
                $soluongnew = $soluong + $_SESSION['giohang'][$i][3];
                $_SESSION['giohang'][$i][3] = $soluongnew;
                break;
            }
        }

        if ($fl == 0) {
            // thêm mới sản phẩm vào giỏ hàng
            $sp = [$hinh, $tensp, $gia, $soluong];
            $_SESSION['giohang'][] = $sp;
        }
    }
    
    if (!empty($_SESSION['current_user'])) {
      $currentUser = $_SESSION['current_user'];
    }   
    ?>
    <!-- Menu -->
    <div class="nav">
        <div class="box_menu">

            <div class="logo_shop">
                <img src="../../image/Screenshot_2022-11-04_132926-removebg-preview.png" alt="">
            </div>
            <div class="box_menu_01">
                <ul class="menu_cha">
                    <li><a href="../../control/index.php">Trang chủ</a></li>
                    <li><a href="../../control/products.php">Sản phẩm</a><i class="fa-solid fa-angle-left"></i>
                        <ul class="menu_con">
                            <li><a href="#">Dưỡng da</a></li>
                            <li><a href="#">Mặt nạ</a></li>
                            <li><a href="#">Trang điểm</a></li>
                            <li><a href="#">Chống nắng</a></li>
                            <li><a href="#">Chăm sóc tóc và cơ thể</a></li>
                        </ul>
                    </li>
                    <li><a href="../../control/about.php">Giới thiệu</a></li>
                    <li><a href="../../control/blog.php">Bài viết</a></li>
                    <li><a href="../../control/contac_us.php">Liên hệ</a></li>
                </ul>
            </div>
            <div class="box_icon">
                <div class="icon_1">
                    <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                </div>
                <div class="icon_1">
                    <a href="../user_cart/cart.php"> <i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="icon_1">
                    <a href="../Login.php"><i class="fa-solid fa-user"></i></a>
                </div>
            </div>

        </div>
    </div>
    <!-- Banner -->
    <div class="box_banner">
        <div class="banner_1">
            <img src="../../banner dự án1/banner32.jpg" alt="" />
        </div>
        <div class="banner"></div>
        <div class="banner_3">
            <p>Giỏ hàng</p>
        </div>
    </div>

    <div class="title_fist">
        <ul>
            <li>
                <a href="../../control/index.php">Trang chủ
                    <p>/</p>
                </a>
            </li>
            <li><a href="../../control/products.php">Của hàng
                    <p>/</p>
                </a>
            </li>
            <li><a href="./cart.php">Giỏ hàng</a></li>
        </ul>
    </div>
    <section class="giohang">
        <div class="container">
            <div class="banggiohang">
                <div class="thongtingiohang">
                    <table class="bang">
                        <tr class="tr1">
                            <th class="cot1">STT</th>
                            <th class="hinh"></th>
                            <th class="cot2">Sản phẩm</th>
                            <th class="cot3">Giá</th>
                            <th class="cot4">Số lượng</th>
                            <th class="cot5">Tổng</th>
                            <th class="cot6">Thao tác</th>
                        </tr>
                        <tr class="tr2">
                            <td style="width: 60px; height: 60px">1</td>
                            <td style="height: 60px" class="tdhinh">
                                <img src="../../image/236.png" alt="hinh" />
                            </td>
                            <td class="noidung">
                                Bộ dưỡng ẩm da <br />
                                Innisfree hương <br />
                                hoa anh đào
                            </td>
                            <td>345.000</td>
                            <td>1</td>
                            <td>345.000</td>
                            <td><button>Xoá</button></td>
                        </tr>
                        
                    </table>
                    <div class="magiamgia">
                        <input type="text" placeholder="Nhập mã giảm giá" />
                        <button>Thực hiện</button>
                    </div>
                </div>
                <div class="tonggiohang">
                    <h2>Tổng giỏ hàng</h2>
                    <div class="tongphu">
                        <p>Tổng phụ</p>
                        <span>1.035.000</span>
                    </div>
                    <div class="giaohang">
                        <p>Giao hàng</p>
                        <span>Quý khách sẽ lựa chọn những dịch vụ giao hàng nhanh hay chậm.
                            Có thể ship hỏa tốc.</span>
                    </div>
                    <div class="tongdonhang">
                        <p>Tổng đơn hàng</p>
                        <span>1.035.000</span>
                    </div>
                    <div class="btn-kiemtra">
                        <button><a href="#">Tiến hành kiểm tra</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sptuongtu">
        <div class="container">
            <h2>Sản phẩm tương tự</h2>
            <p>
                Những sản phẩm tương tự để cho khách hàng có thể tham khảo thêm <br />
                về các loại mỹ phẩm xịn xò.
            </p>
            <div class="sanpham">
                <div class="box">
                    <img src="../../image/38_attimg_origin.jpg" alt="hinh" />
                    <div class="danhgia">
                        <i class="fa-regular fa-star"></i>
                        <span>3 lượt xem</span>
                    </div>
                    <a href="#">Kem dưỡng ẩm innisfree Cherry 50ml</a>
                    <h5>90.000 đ</h5>
                </div>
                <div class="box">
                    <img src="../../image/sp5.jpg" alt="hinh" />
                    <div class="danhgia">
                        <i class="fa-regular fa-star"></i>
                        <span>3 lượt xem</span>
                    </div>
                    <a href="#">Kem dưỡng ẩm innisfree Cherry 50ml</a>
                    <h5>90.000 đ</h5>
                </div>
                <div class="box">
                    <img src="../../image/sp23.webp" alt="hinh" />
                    <div class="danhgia">
                        <i class="fa-regular fa-star"></i>
                        <span>3 lượt xem</span>
                    </div>
                    <a href="#">Kem dưỡng ẩm innisfree Cherry 50ml</a>
                    <h5>90.000 đ</h5>
                </div>
                <div class="box">
                    <img src="../../image/sp4.jpg" alt="hinh" />
                    <div class="danhgia">
                        <i class="fa-regular fa-star"></i>
                        <span>3 lượt xem</span>
                    </div>
                    <a href="#">Kem dưỡng ẩm innisfree Cherry 50ml</a>
                    <h5>90.000 đ</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <div class="box_footer">
        <div class="footer">
            <div class="box_footer_1">
                <div class="logo">
                    <img src="../../image/Screenshot_2022-11-04_132926-removebg-preview.png" alt="">
                </div>
                <div class="">
                    <span>Tuy không xinh <br> Nhưng tôi biết thế nào <br> cho chị em đẹp. </span>
                </div>
                <div class="icon-footer">
                    <ul class="sci">
                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="box_footer_2">
                <h3>Của hàng</h3>
                <div class="element_0123">
                    <ul>
                        <li><a href="#">Dưỡng da</a></li>
                        <li><a href="#">Mặt nạ</a></li>
                        <li><a href="#">Trang điểm</a></li>
                        <li><a href="#">Chống nắng</a></li>
                        <li><a href="#">Chăm sóc tóc và cơ thể</a></li>
                    </ul>
                </div>
            </div>
            <div class="box_footer_3">
                <h3>Liên kết nhanh</h3>
                <div class="element_0123">
                    <ul>
                        <li><a href="../blog.html">Bài viết</a></li>
                        <li><a href="../login_register/Login.html">Đăng nhập</a></li>
                        <li><a href="../cart.html">Giỏ hàng</a></li>
                    </ul>
                </div>
            </div>
            <div class="box_footer_4">
                <h3>Liên hệ</h3>
                <div class="element_0123">
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-location-dot"></i> 86/53 Tân Chánh Hiệp, Đông Bắc,
                                Quận 12, TP HCM</a></li>
                        <li><a href="#"><i class="fa-solid fa-phone"></i> 0366764838</a></li>
                        <li><a href="#"><i class="fa-regular fa-envelope"></i> nicaface@gmail.com</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</body>

</html>