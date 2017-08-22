<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/normalize.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/flexslider.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/slick.css">
    <title><?php bloginfo('name')?></title>
    <?php wp_head(); ?> 
</head>
<body>
    <header class="top">
        <div class="wrapper">
            <ul class="nav-top">
                <?php wp_nav_menu(array('theme_location'=>'menu_top', 'container'=>'false')); ?>
<!--
                <li class="left-border"><a href="#" class="button">главная</a></li>
                <li><a href="#" class="button">акции</a></li>
                <li><a href="#" class="button">воздуходувки</a></li>
                <li><a href="#" class="button">бензогенераторы</a></li>
                <li class="basket"><a href="#">
                        <ul class="nav-top">
                            <li class="button">в корзине</li>
                            <li class="button">0 товаров</li>
                            <li class="button"> на сумму 0 руб</li>
                        </ul></a>
                </li>
                <li class="left-border"><a href="#" class="button">вход</a></li>
                <li><a href="#" class="button">регистрация</a></li>
-->
            </ul>
        </div>
    </header>
    <div class="bg"></div>
    <header class="top-second">
            <div class="wrapper">
                    <div class="top-info">
                        <a class="logo" href="<?php echo home_url()?>"><img src="<?php bloginfo('template_url') ?>/img/logo.png" alt=""></a>
                        <img src="<?php bloginfo('template_url')?>/img/logo-back.png" alt="">
                        <a class="katalog" href="#">КАТАЛОГ ТОВАРОВ</a>
                    </div>
                    <div class="t-menu">
                    <?php wp_nav_menu(array('theme_location'=>'menu', 'container'=>'false')); ?>
                    
<!--
                        <ul class="menu">
                            <li><a href="#">оптовикам</a></li>
                            <li><a href="#">оплата и доставка</a></li>
                            <li><a href="#">производители</a></li>
                            <li><a href="#">контакты</a></li>
                        </ul>
-->
                    </div>
                    <ul class="infa">
                        <li>Skype: <a href="#">320volt</a></li>
                        <li>E-mail: <a href="#">320volt@mail.ru</a></li>
                        <li>рассказать друзьям
                            <div class="btn-group">
                                <button id="vk"></button>
                                <button id="ok"></button>
                                <button id="fb"></button>
                            </div>
                        </li>
                    </ul>
                    <div class="contact">
                        <a class="tel" href="tel:8(800)333-9-220">8 (800) 333-9-220</a>
                        <span>бесплатный звонок по россии</span>
                        <div class="callback"><a href="#" class="eModal-1">заказать обратный звонок</a></div>
                    </div>
            </div>
    </header>