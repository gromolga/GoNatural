<?php get_header(); ?>

<main class="main">
    <div class="main-banner">
        <div class="owl-carousel main-banner-carousel">
            <?php $items = gd_get_option('main_banner_slide', array()); ?>
            <?php foreach ($items as $item): ?>
                <div class="main-banner-slide" style="background-image: url('<?php gd_eh_array(gd_get_array($item, 'main_banner_img'), 'url') ?>')">
                    <div class="wrapper main-banner-slide-content">
                        <h2 class="h2 main-banner-slide-content-header"> <?php gd_eh_array($item, 'main_banner_slide_header') ?></h2>
                        <div class="main-btn">
                            <a class="main-btn-box" href="#"> <?php gd_eh_array($item, 'main_banner_slide_btn') ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <section class="our-products">
        <h2 class="h2"><?php echo gd_get_option("our_products_header") ?></h2>
        <ul class="our-products-container clearfix">
            <?php $items = gd_get_option('our_products_items', array()); ?>
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
                            <a href="#" class="main-btn-box">Для котiв</a>
                            <a href="#" class="main-btn-box">Для собак</a>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
        <div class="our-products-bottom-box">
            <div class="wrapper our-products-bottom-box-content">
                <div class="frame-3">
                    <div class="frame-content-bottom">
                        <ul class="frame-content-bottom-gallery">
                            <?php $items = gd_get_option('our_bottom_products_items', array()); ?>
                            <?php foreach ($items as $item): ?>
                            <li class="our-products-bottom-box-img">
                                <img src="<?php gd_eh_array(gd_get_array($item, 'img'), 'url') ?>" alt="">
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="our-products-bottom-content"><?php echo gd_get_option("our_bottom_products_header") ?></div>
                    </div>
                </div>
                <div class="frame-4">
                    <div class="frame-content">
                        <h3 class="h3"><?php echo gd_get_option("our_products_bottom_frame_header") ?></h3>
                        <p><?php echo gd_get_option("our_products_bottom_frame_txt") ?></p>
                        <div class="main-btn">
                            <a href="#" class="main-btn-box">Для собак</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-blog">
        <div class="wrapper our-blog-box">
            <div class="our-blog-left-col">
                <a href="#" class="h2 our-blog-left-col-header">Читайте наш блог</a>
                <a class="our-blog-left-col-label" href="#">
                    <img src="<?php echo gd_get_img('hot-off-the-press.png') ?>" alt="">
                </a>
                <article class="our-blog-article">
                    <div class="our-blog-article-img">
                        <img src="<?php echo gd_get_img('DogOrnament_V1.png') ?>" alt="">
                    </div>
                    <div class="our-blog-article-txt">
                        <a class="our-blog-article-link our-blog-article-link-top" href="/svyatkovij-etiket-dlya-tvarin">Святковий етикет для тварин</a>
                        <a class="our-blog-article-link our-blog-article-link-bottom our-blog-box-link" href="/svyatkovij-etiket-dlya-tvarin">Читати більше</a>
                    </div>
                </article>
                <article class="our-blog-article">
                    <div class="our-blog-article-img">
                        <img src="<?php echo gd_get_img('DogsLights_V1.png') ?>" alt="">
                    </div>
                    <div class="our-blog-article-txt">
                        <a class="our-blog-article-link our-blog-article-link-top" href="/svyatkovi-poradi-dlya-tvarin/">Поради з охорони здоров'я для домашніх тварин</a>
                        <a class="our-blog-article-link our-blog-article-link-bottom our-blog-box-link" href="/svyatkovi-poradi-dlya-tvarin/">Читати більше</a>
                    </div>
                </article>
            </div>
            <div class="our-blog-right-col">
                <div class="our-blog-box-link" href="#">
                    <a href="" class="h2 our-blog-right-col-header">Вибір правильної їжі для вашого вихованця може бути складним завданням</a>
                    <a href="" class="our-blog-article-link our-blog-article-link-bottom our-blog-box-link">Перейти до ознайомлення з рiзноманiттям кормiв Petcurean</a>
                </div>
            </div>
        </div>

    </section>

</main>



<?php get_footer(); ?>
