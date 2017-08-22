<footer class="wrapper">
        <div class="container">
            <div class="flex-bottom">
                <div class="footer-left">
                   <div class="bolt leftBold">
                         <img src="<?php bloginfo('template_url')?>/img/boltOne.png" alt="" class="boltTop">
                         <img src="<?php bloginfo('template_url')?>/img/boltOne.png" alt="" class="boltBottom">
                     </div>
                    <div class="bolt rightBolt">
                         <img src="<?php bloginfo('template_url')?>/img/boltOne.png" alt="" class="boltTop">
                         <img src="<?php bloginfo('template_url')?>/img/boltOne.png" alt="" class="boltBottom">
                     </div>
                     <a href="#"><img class="pay" src="<?php bloginfo('template_url')?>/img/footer-left.png" alt=""></a>
                </div>
                <div class="footer-center">
                    <div class="bolt leftBold">
                         <img src="<?php bloginfo('template_url')?>/img/boltOne.png" alt="" class="boltTop">
                         <img src="<?php bloginfo('template_url')?>/img/boltOne.png" alt="" class="boltBottom">
                     </div>
                    <div class="bolt rightBolt">
                         <img src="<?php bloginfo('template_url')?>/img/boltOne.png" alt="" class="boltTop">
                         <img src="<?php bloginfo('template_url')?>/img/boltOne.png" alt="" class="boltBottom">
                     </div>
                     <div class="footer-menu">
                     <?php wp_nav_menu(array('theme_location'=>'menu_footer', 'container'=>'false', 'items_wrap' => '<ul id="%1$s">%3$s</ul>')); ?>
<!--
                         <ul>
                             <li><a href="#">Сервис</a></li>
                             <li><a href="#">Вакансии</a></li>
                             <li><a href="#">Мобильная версия</a></li>
                             <li><a href="#">Лаборатория подарка</a></li>
                         </ul>       
-->
                    <?php wp_nav_menu(array('theme_location'=>'menu2_footer', 'container'=>'false', 'items_wrap' => '<ul id="%1$s">%3$s</ul>')); ?>
<!--
                         <ul>
                             <li><a href="#">Советы по выбору</a></li>
                             <li><a href="#">Полезные расчеты</a></li>
                             <li><a href="#">Отзывы</a></li>
                             <li><a href="#">Дополнительная гарантия</a></li>
                         </ul>
-->
                    <?php wp_nav_menu(array('theme_location'=>'menu3_footer', 'container'=>'false', 'items_wrap' => '<ul id="%1$s">%3$s</ul>')); ?>
<!--
                         <ul>
                             <li><a href="#">Правила торговли</a></li>
                             <li><a href="#">Наш рекорд Гиннесса</a></li>
                             <li><a href="#">Статьи</a></li>
                             <li><a href="#">Политика Конфиденциальности</a></li>
                         </ul>
-->
                         <?php if ( ! dynamic_sidebar('footer') ) : ?>
                            <?php endif; ?>
                     </div>
                     <center>
                         <img src="<?php bloginfo('template_url')?>/img/footer-center.png" alt="">
                     </center>
                     <center>
                         <p>Информация на сайте www.220-volt.ru не является публичной офертой. Указанные цены действуют только при оформлении заказа через интернет-магазин www.220-volt.ru.
                         <br>Обнаружив ошибку или неточность в тексте или описании товара , выделите ее и нажмите Shift+Enter.</p>
                     </center>
                </div>
                <div class="footer-right">
                    <div class="bolt leftBold">
                         <img src="<?php bloginfo('template_url')?>/img/boltOne.png" alt="" class="boltTop">
                         <img src="<?php bloginfo('template_url')?>/img/boltOne.png" alt="" class="boltBottom">
                     </div>
                    <div class="bolt rightBolt">
                         <img src="<?php bloginfo('template_url')?>/img/boltOne.png" alt="" class="boltTop">
                         <img src="<?php bloginfo('template_url')?>/img/boltOne.png" alt="" class="boltBottom">
                     </div>
                     <div class="follow">
                         <a class="vk" href=""></a>
                         <a class="fb" href=""></a>
                         <a class="tw" href=""></a>
                         <a class="yt" href=""></a>
                         <a class="g" href=""></a>
                         <a class="inst" href=""></a>
                     </div>
                     <form action="" method="post">
                      <label for="emailAddress">Подпишитесь на новости</label>
                      <input id="emailAddress" type="email" placeholder="E-mail">
                      <button type="submit">ПОДПИСАТЬСЯ</button>
                    </form>
                    <div class="copyright">
                        <p>&copy; 2002-2014 &laquo;220 Вольт&raquo;.
                        Сеть магазинов электроинструмента</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?> 
</body>
</html>