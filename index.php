<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>도매꾹 인기100</title>
    <!-- jQuery -->
    <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="/asset/ajax.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="/asset/default.css">
    <link rel="stylesheet" href="/asset/item.css">
    <link rel="stylesheet" href="/asset/nav.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
</head>
<?php
require_once('category.php');
?>
<body>
    <nav>
        <div id="nav" class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php
                    foreach($categoryies as $key=>$value){
                        $html = <<<HTML
                        <div id='nav_list' class='swiper-slide'>
                            <p onclick="get_itemlist('$key')">$value</p>
                        </div>  
                        HTML;
                    echo $html;
                    }
                    flush();
                ?>
            </div>
        </div>
        <div id="nav_sub">
            <div id="nav_list">
                <p onclick="get_itemlist(`01_${category_num}`)">원산지전체</p>
            </div>
            <div id="nav_list">
                <p onclick="get_itemlist(`02_${category_num}`)">국산/국내산</p>
            </div>
            <div id="nav_list">
                <p onclick="get_itemlist(`03_${category_num}`)">국외산</p>
            </div>
        </div>
    </nav>
    <main>
        <div id="item_list"></div>
    </main>
</body>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript">
    // Click active
    function click() {
        nav_list.removeClass();
        this.className = 'active';
    }
    var nav_list = $("#nav_list p");
    nav_list.on('click', click);
    // Swiper JS
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 'auto',
        freeMode: true,
      });
</script>
</html>