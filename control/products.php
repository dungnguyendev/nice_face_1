<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm - Nice face</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous" />
    <link rel="stylesheet" href="../owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../owlcarousel/assets/owl.theme.default.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../owlcarousel/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="../css/css_dung.css">
</head>

<body>
    <nav>
        <?php require_once("../view/menu.php") ?>
    </nav>
    <header>
        <!-- Banner -->
        <div id="intro-owl">
            <div class="owl-carousel owl-theme">
                <a href="#"><img src="../banner dự án1/baners.jpg" alt="" class="imamge-mua-he"></a>
                <a href="#"><img src="../banner dự án1/baners.jpg" alt="" class="imamge-mua-he"></a>
            </div>
            <div class="opacity">

            </div>
            <div class="title_shop">
                <p>Của hàng</p>
            </div>
        </div>
    </header>
    <main>
        <?php require_once("../view/product_niceface/main.php") ?>
    </main>
    <aside>
        <?php require_once("../view/aside.php") ?>
    </aside>
    <footer>
        <?php require_once("../view/footer.php") ?>
    </footer>
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
</html>