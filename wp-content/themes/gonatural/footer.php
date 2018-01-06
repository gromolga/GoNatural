<footer class="footer">
    <div class="footer-top">
        <div class="footer-top-list">
            <div class="footer-top-item">
                <div class="footer-top-social-icon">
                    <img src="<?php echo gd_get_img('./mono-color-icons/cat.png') ?>" alt="">
                </div>
                <h5 class="h5 footer-top-item-header">Зворотнiй зв'язок:</h5>
                <a href="#">Call 1.866.864.6112</a>
                <a href="#">Mail.example@gmail.com</a>
            </div>
            <div class="footer-top-item">
                <div class="footer-top-social-icon">
                    <img src="<?php echo gd_get_img('./mono-color-icons/cat.png') ?>" alt="">
                </div>
                <h5 class="h5 footer-top-item-header">Нашi магазини</h5>
                <a href="#">Натиснiть для переходу на карту</a>
            </div>
            <div class="footer-top-item">
                <div class="footer-top-social-icon">
                    <img src="<?php echo gd_get_img('./mono-color-icons/cat.png') ?>" alt="">
                </div>
                <h5 class="h5 footer-top-item-header">Здоров'я та харчування</h5>
                <a href="#">Натиснiть щоб переглянути вiдео</a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="wrapper">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-top-menu',
                'menu' => '',
                'container' => 'div',
                'container_class' => '',
                'menu_class' => 'footer-top-menu',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'depth' => 1,
            ));
            ?>

            <?php $items = gd_get_option('footer-social', array()); ?>
            <ul class="footer-social-list">
                <?php foreach ($items as $item): ?>
                    <li class="footer-social-item footer-social-item-facebook">
                        <?php
                        $image = gd_get_array($item, 'img');
                        $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                        ?>
                        <a class="footer-social-icon fa <?php gd_eh_array($item, 'img') ?>"
                           href="<?php gd_eh_array($item, 'link') ?>"></a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-bottom-menu',
                'menu' => '',
                'container' => 'div',
                'container_class' => '',
                'menu_class' => 'footer-bottom-menu',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'depth' => 1,
            ));
            ?>
        </div>
    </div>
</footer>





<?php wp_footer(); ?>

</body>
</html>
