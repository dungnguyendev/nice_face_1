<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css"
            integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5"
            crossorigin="anonymous" />
        <title>Sản phẩm - Nice face</title>
        <link rel="stylesheet" href="../owlcarousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="../owlcarousel/assets/owl.theme.default.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="../owlcarousel/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="../css/css_detail.css">
    </head>

    <body>
        <!-- Menu -->
        <div class="box_shop">
            <?php require_once("../view/menu.php")?>
            <!-- Banner -->
            <div class="box_banner">
                <div class="banner_1">
                    <img src="../banner dự án1/nas.jpeg" alt="">
                </div>
                <div class="banner">

                </div>
                <div class="banner_3">
                    <p>Chi tiết sản phẩm</p>
                </div>
            </div>
            <!-- Main -->
            <div class="box_main">
                <div class="main">
                    <div class="title_fist">
                        <ul>
                            <li><a href="#">Trang chủ<p>/</p></a></li>
                            <li><a href="#">Loại hàng<p>/</p></a></li>
                            <li><a href="#">Sản phẩm</a></li>
                        </ul>
                    </div>
                    <div class="box_details">
                        <div class="box_details_1">
                            <div class="product-slider">
                                <div class="img-main">
                                    <div class="main">
                                        <div class="slider slider-for">
                                            <div>
                                                <a href="#">
                                                    <img class="nav-slider"
                                                        src="../banner dự án1/sp2.jpg"
                                                        alt="image"></a>
                                            </div>
                                        </div>
                                        <div class="slider slider-nav">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box_details_2">
                            <h3>Tên sản phẩm</h3>
                            <div class="price">
                                <del>
                                    <span class="price-amount">4.500.700</span><span class="price-currency">₫</span>

                                </del>
                                <ins>
                                    <span class="price-amount">3.590.000</span><span class="price-currency">₫</span>
                                </ins>
                            </div>
                            <div class="conten">
                                <span>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet culpa vitae ex, omnis
                                    dolorum aliquid voluptas, id architecto facere sit commodi cum laudantium, quia
                                    exercitationem voluptatibus! Tempore eaque qui consectetur!
                                </span>
                            </div>
                            <div class="add_cart">
                                <div class="quatily">
                                    <input type="number" min="1" max="100" name="" id="" value="1">
                                </div>
                                <div class="buying_cart_button">
                                    <input type="submit" name="add_cart" value="Mua ngay">
                                </div>
                                <div class="add_cart_button">
                                    <button class="box_add"><i class="fa-solid fa-cart-shopping"></i>Thêm vào
                                        giỏ</button>
                                </div>
                            </div>
                            <div class="list_love">
                                <span><i class="fa-regular fa-heart"></i><a href="#">Thêm vào danh sách yêu
                                        thích</a></span>
                            </div>
                            <div class="tags">
                                <span>Tags: Loại 1, Loại 2</span>
                            </div>
                        </div>
                    </div>
                    <div id="wapper">
                        <div class="tabs">
                            <ul class="nav-tabs">
                                <li class="nav-tabs-li"><a class="nav-tabs-1" href="#menu_1">Đánh giá(<span></span>)</a>
                                </li>
                                <li class="nav-tabs-li"><a class="nav-tabs-1" href="#menu_2">Thảo luận</a></li>
                                <li class="nav-tabs-li"><a class="nav-tabs-1" href="#menu_3">Mô tả</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="menu_1" class="tab-content-item">
                                    <div class="bl_menu_2">
                                        <!-- Chạy theo id san phẩm  -->
                                        <div class="box_bl_sp">

                                            <div class="box_bl_sp_001">
                                                <div class="box_bl_sp_01">
                                                    <a href="#" style="text-decoration: none; color: blue;"></a>
                                                </div>
                                                <div class="box_answer_cm">
                                                    <a href="#" style="text-decoration: none; color:red;">:</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu_2" class="tab-content-item">
                                    <div id="fb-root"></div>
                                    <script async defer crossorigin="anonymous"
                                        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0&appId=499327621765895&autoLogAppEvents=1"
                                        nonce="2fNQYZcv"></script>
                                    <div class="fb-comments" data-href="http://shopucha.store" data-width="1200"
                                        data-numposts="100"></div>
                                </div>
                                <div id="menu_3" class="tab-content-item">
                                    <h2>Menu 3</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem,
                                        consectetur eaque saepe debitis magnam et, corrupti eius enim expedita quod qui
                                        impedit! Architecto dicta aperiam corporis quos nobis ducimus.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem,
                                        consectetur eaque saepe debitis magnam et, corrupti eius enim expedita quod qui
                                        impedit! Architecto dicta aperiam corporis quos nobis ducimus.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem,
                                        consectetur eaque saepe debitis magnam et, corrupti eius enim expedita quod qui
                                        impedit! Architecto dicta aperiam corporis quos nobis ducimus.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem,
                                        consectetur eaque saepe debitis magnam et, corrupti eius enim expedita quod qui
                                        impedit! Architecto dicta aperiam corporis quos nobis ducimus.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem,
                                        consectetur eaque saepe debitis magnam et, corrupti eius enim expedita quod qui
                                        impedit! Architecto dicta aperiam corporis quos nobis ducimus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box_comment">
            <div class="comment">
                <h3>Để lại bình luận</h3>
                <div class="title_01">
                    <p>Hãy để lại những lời góp ý cũng như những điều muốn <br> Nice Face còn thiều xót</p>
                </div>
                <form action="">
                    <div class="form_ground">
                        <input type="text" placeholder="Email:">
                        <p></p>
                        <input type="text" placeholder="Họ tên:">
                    </div>
                    <div class="form_ground">
                        <textarea name="text" id="" cols="105" rows="10" placeholder="Lời nhắn nhủ"></textarea>
                    </div>
                    <div class="form_ground_1">
                        <input type="submit" name="submit" value="Gửi đi">
                    </div>
                </form>
            </div>
        </div>
        <div class="box_sp_similar">
            <div class="sp_similar">
                <h3>Sản phẩm tương tự</h3>
                <div class="title_01">
                    <p>Những sản phẩm tương tự để cho khách hàng có thể tham khảo <br> thêm về các loại mỹ phẩm xịn xò
                    </p>
                </div>
                <div class="list_product">
                    <div class="box-element-sanpham">
                        <div class="pictures"><a href="#">
                                <img src="../banner dự án1/sp2.jpg" alt="">
                            </a>
                        </div>
                        <div class="title-sanpham">
                            <p class="view_user"><i class="fa-regular fa-star"></i>Lượt xem</p>
                            <p class="title_sp_similar">Skin Care</p>
                        </div>
                        <div class="price-sanpham">
                            <span class="price-amount">300.000</span> <span class="price-currency">₫</span>
                        </div>
                    </div>
                    <div class="box-element-sanpham">
                        <div class="pictures"><a href="#"><img src="../banner dự án1/sp23.webp" alt=""></a>
                        </div>
                        <div class="title-sanpham">
                            <p class="view_user"><i class="fa-regular fa-star"></i>Lượt xem</p>
                            <p class="title_sp_similar">Skin Care</p>
                        </div>
                        <div class="price-sanpham">
                            <span class="price-amount">300.000</span> <span class="price-currency">₫</span>
                        </div>
                    </div>
                    <div class="box-element-sanpham">
                        <div class="pictures"><a href="#"><img src="../banner dự án1/sp3.jpg" alt=""></a>
                        </div>
                        <div class="title-sanpham">
                            <p class="view_user"><i class="fa-regular fa-star"></i>Lượt xem</p>
                            <p class="title_sp_similar">Skin Care</p>
                        </div>
                        <div class="price-sanpham">
                            <span class="price-amount">300.000</span> <span class="price-currency">₫</span>
                        </div>
                    </div>
                    <div class="box-element-sanpham">
                        <div class="pictures"><a href="#">
                                <img src="../banner dự án1/sp4.jpg" alt="">
                            </a>
                        </div>
                        <div class="title-sanpham">
                            <p class="view_user"><i class="fa-regular fa-star"></i>Lượt xem</p>
                            <p class="title_sp_similar">Skin Care</p>
                        </div>
                        <div class="price-sanpham">
                            <span class="price-amount">300.000</span> <span class="price-currency">₫</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="box_footer">
            <div class="footer">
                <div class="box_footer_1">
                    <div class="logo">
                        <img src="../image/Screenshot_2022-11-04_132926-removebg-preview.png" alt="">
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
        </div>
    </body>
    <script>
        $(document).ready(function () {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items: 1,
                loop: false,
                margin: 1,
                autoplay: NodeFilter,
                autoplayTimeout: 4000,
                autoplayHoverPause: NodeFilter
            });
            $('.play').on('click', function () {
                owl.trigger('play.owl.autoplay', [1000])
            })
            $('.stop').on('click', function () {
                owl.trigger('stop.owl.autoplay')
            })
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function () {
            $('.tab-content-item').hide()
            $('.tab-content-item:first-child').fadeIn()
            $('.nav-tabs li').click(function () {
                // active nab-tab
                $('.nav-tabs li').removeClass('active')
                $(this).addClass('active');

                // show tab-content item
                let id_tab_content = $(this).children('a').attr('href')
                $('.tab-content-item').hide();
                $(id_tab_content).fadeIn();
                return false;
            });
        });
    </script>

    </html>
