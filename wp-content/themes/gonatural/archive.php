<?php get_header(); ?>

<main class="main">
    <div class="main-banner blog-main-banner">
        <div class="owl-carousel main-banner-carousel blog-carousel">
            <?php $items = gd_get_option('blog_slide', array()); ?>
            <?php foreach ($items as $item): ?>
                <div class="blog-slide" style="background-image: url('<?php gd_eh_array(gd_get_array($item, 'blog_slide_img'), 'url') ?>')">
                    <div class="wrapper main-banner-slide-content blog-slide-content">
                        <h2 class="h2 main-banner-slide-content-header blog-slide-header"> <?php gd_eh_array($item, 'blog_slide_header') ?></h2>
                        <div class="main-btn">
                            <a class="main-btn-box" href="#"> <?php gd_eh_array($item, 'blog_slide_btn') ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="recomends">
        <div class="recomends-left-col recomends-article">
            <div class="recomends-wrapper scale-img">
                <img src="<?php echo gd_get_img('DogsLights_V1.png') ?>" alt="">
                <a class="recomends-img-box" href="#">
                    <div class="recomends-txt">
                        <p>[Читати статтю]</p>
                    </div>
                </a>
            </div>
            <a class="recomends-article-links" href="#">
                <ul class="inline-block-list article-nav recomends-links">
                    <li class="inline-block-item">
                        <a href="#">Коти</a>
                    </li>
                    <li class="inline-block-item">
                        <a href="#">Собаки</a>
                    </li>
                    <li class="inline-block-item">
                        <a href="#">Здоров'я та харчування</a>
                    </li>
                </ul>
            </a>
            <a class="recomends-article-header" href="#">
                Поради з охорони здоров'я для домашніх тварин
            </a>
        </div>
        <div class="recomends-right-col recomends-article">
            <div class="recomends-wrapper scale-img">
                <img src="<?php echo gd_get_img('PileofDogs_V1.png') ?>" alt="">
                <a class="recomends-img-box" href="#">
                    <div class="recomends-txt">
                        <p>[Читати статтю]</p>
                    </div>
                </a>
            </div>
            <a class="recomends-article-links" href="#">
                <ul class="inline-block-list article-nav recomends-links">
                    <li class="inline-block-item">
                        <a href="#">Коти</a>
                    </li>
                    <li class="inline-block-item">
                        <a href="#">Собаки</a>
                    </li>
                    <li class="inline-block-item">
                        <a href="#">Ваша iсторiя успiху</a>
                    </li>
                </ul>
            </a>
            <a class="recomends-article-header" href="#">
                Вибiр виду благодiйностi для безпритульних тварин
            </a>
        </div>
        <div class="recomends-right-col recomends-article">
            <div class="recomends-wrapper scale-img">
                <img src="<?php echo gd_get_img('PileofDogs_V1.png') ?>" alt="">
                <a class="recomends-img-box" href="#">
                    <div class="recomends-txt">
                        <p>[Читати статтю]</p>
                    </div>
                </a>
            </div>
            <a class="recomends-article-links" href="#">
                <ul class="inline-block-list article-nav recomends-links">
                    <li class="inline-block-item">
                        <a href="#">Коти</a>
                    </li>
                    <li class="inline-block-item">
                        <a href="#">Собаки</a>
                    </li>
                    <li class="inline-block-item">
                        <a href="#">Ваша iсторiя успiху</a>
                    </li>
                </ul>
            </a>
            <a class="recomends-article-header" href="#">
                Вибiр виду благодiйностi для безпритульних тварин
            </a>
        </div>
    </div>
</main>


<ul>
    <?php
    $mypost = array( 'cat' => 33,'posts_per_page' => -1);
    $loop = new WP_Query( $mypost );
    ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
        <li>
            <?php the_post_thumbnail('full'); ?>
            <?php the_content(); ?>

            <?php the_author(); ?>
        </li>
    <?php endwhile; ?>
</ul>
<?php wp_reset_query(); ?>


<?php get_footer(); ?>
