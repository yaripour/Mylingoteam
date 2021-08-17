<?php
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo(); ?> ">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <?php wp_head(); ?>

</head>
<body>
<div class="top-menu">
    <div class="container">
        <div class="topbar-right">
            <ul>
                <li><i class="fas fa-phone"></i>مشاوره و پشتیبانی واتس اپ: 09383194723</li>
                <li><i class="fas fa-envelope"></i>ایمیل: info@siteskin.ir</li>

            </ul>


        </div>
        <div class="topbar-left">
            <ul>
                <li><i class="fas fa-search"></i></li>
                <li><i class="fas fa-shopping-basket"></i></li>

            </ul>

        </div>

    </div>


</div>
<header class="header">
    <div class="container">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(). '/img/logo.jpg'?>">
        </div>
        <nav class="main-menu">
            <ul>
                <li><a href="#">آموزش انگلیسی<i class="fas fa-angle-down"> </i></a>
                    <ul>
                        <li><a href="#">کودکان</a></li>
                        <li><a href="#">نوجوانان</a></li>
                        <li><a href="#">بزرگسالان</a></li>
                        <li><a href="#">داستان</a></li>

                    </ul>
                </li>
                <li><a href="#">آموزش آلمانی</a></li>
                <li><a href="#">آموزش فرانسه<i class="fas fa-angle-down"> </i></a>
                    <ul>
                        <li><a href="#">مبتدی</a></li>
                        <li><a href="#">متوسطه</a></li>
                        <li><a href="#">پیشرفته</a></li>
                        <li><a href="#">داستان</a></li>

                    </ul>

                </li>
            </ul>
        </nav>
        <div class="sign">
            <a href="#"><i class="fas fa-user-lock"></i>ورود/ثبت نام </a>

        </div>

    </div>


</header>
