<footer class="footer">
    <div class="footer-top">
        <div class="footer-top-list">
            <?php $items = gd_get_option_t('footer-top-items', array()); ?>
            <?php foreach ($items as $item): ?>
                <div class="footer-top-item">
                    <div class="footer-top-social-icon">
                        <img src="<?php gd_eh_array(gd_get_array($item, 'img'), 'url') ?>" alt="">
                    </div>
                    <h5 class="h5 footer-top-item-header"><?php gd_eh_array($item, 'header') ?></h5>
                    <a href="<?php gd_eh_array($item, 'link-back') ?>"><?php gd_eh_array($item, 'link-front') ?></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="wrapper">
            <?php
            wp_nav_menu(array(
                'theme_location' => (gd_get_locale() == 'UA')?'footer-top-menu':'footer-top-menu_ru',
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
