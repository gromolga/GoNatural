<?php get_header(); ?>

<main class="main">
    <div class="main-banner">
        <div class="owl-carousel main-banner-carousel">
            <?php $items = gd_get_option_t('main_banner_slide', array()); ?>
            <?php foreach ($items as $item): ?>
                <div class="main-banner-slide" style="background-image: url('<?php gd_eh_array(gd_get_array($item, 'main_banner_img'), 'url') ?>')">
                    <div class="wrapper main-banner-slide-content">
                        <h2 class="h2 main-banner-slide-content-header"> <?php gd_eh_array($item, 'main_banner_slide_header') ?></h2>
                        <div class="main-btn">
                            <a class="main-btn-box" href="<?php gd_eh_array($item, 'main_banner_link') ?>"> <?php gd_eh_array($item, 'main_banner_slide_btn') ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <section class="our-products">
        <h2 class="h2"><?php echo gd_get_option_t("our_products_header") ?></h2>
        <ul class="our-products-container clearfix">
            <?php $items = gd_get_option_t('our_products_items', array()); ?>
            <?php foreach ($items as $item): ?>
            <li class="our-products-item" style="background: <?php gd_eh_array($item, 'bg-color') ?>; background-image: url('<?php gd_eh_array(gd_get_array($item, 'bg'), 'url') ?>')">
                <div class="frame-1">
                    <div class="frame-content">
                        <img class="frame-content-img" src="<?php gd_eh_array(gd_get_array($item, 'img'), 'url') ?>" alt="">
                        <span class="product-line-tagline"><?php gd_eh_array($item, 'txt') ?></span>
                    </div>
                </div>
                <div class="frame-2">
                    <div class="frame-content">
                        <h3 class="h3"><?php gd_eh_array($item, 'hover_header') ?></h3>
                        <p><?php gd_eh_array($item, 'hover_txt') ?></p>
                        <div class="main-btn">
                            <a href="<?php gd_eh_array($item, 'dogs_link') ?>" class="main-btn-box">Для собак</a>
                            <a href="<?php gd_eh_array($item, 'cats_link') ?>" class="main-btn-box">Для котiв</a>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section class="our-blog" style="background: url(<?php echo gd_get_img('home-blog-posts-bg.jpg') ?>) center right no-repeat #fff; background-size: contain;">
        <div class="wrapper our-blog-box">
            <div class="our-blog-left-col">
                <a href="/category/vsi-rubriki" class="h2 our-blog-left-col-header"><?php echo gd_get_option_t("our_blog_header") ?></a>
                <a class="our-blog-left-col-label" href="/category/vsi-rubriki">
                    <img src="<?php echo gd_get_img('hot-off-the-press.png') ?>" alt="">
                </a>
                <?php
                $args = array('numberposts' => 2);
                $posts = get_posts( $args );
                foreach($posts as $post): setup_postdata($post);
                    get_template_part("parts/home/post_item");
                endforeach; wp_reset_postdata(); ?>
            </div>
            <div class="our-blog-right-col">
                <div class="our-blog-box-link" href="#">
                    <a href="" class="h2 our-blog-right-col-header"><?php echo gd_get_option_t("our_blog_right_header") ?></a>
                    <a href="" class="our-blog-article-link our-blog-article-link-bottom our-blog-box-link"><?php echo gd_get_option_t("our_blog_right_txt") ?></a>
                </div>
            </div>
        </div>

    </section>

</main>



<?php get_footer(); ?>
