<?php get_header(); ?>

<main class="main">
    <?php if(function_exists('fw_ext_get_breadcrumbs')): ?>
        <section>
            <div class="breadcrumb">
                <div class="wrapper">
                    <?php echo fw_ext_get_breadcrumbs('>>'); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <section class="wrapper">
        <article class="main-content">
            <ul class="inline-block-list article-nav">
                <li class="inline-block-item">
                    <a href="#">Коти</a>
                </li>
                <li class="inline-block-item">
                    <a href="#">Собаки</a>
                </li>
                <li class="inline-block-item">
                    Грудень 21, 2017
                </li>
            </ul>
            <?php $currentPage = get_post() ?>
            <h1 class="article-header"><?php echo $currentPage->post_title ?></h1>

            <div class="article-authors-info">
                <div class="article-authors-photo">
                    <img src="<?php echo gd_get_img('Val-Blog.jpg')?: gd_get_img('fallback-avatar.jpg') ?>" alt="">
                </div>
                <div class="article-authors-name">
                    <span>Тамара Петрiвна</span>
                </div>
            </div>
            <?php $img = get_field('blog_main_image'); if($img): ?>
                <div class="article-main-image">
                    <img src="<?php echo $img["url"] ?>"
                         title="<?php echo $img["title"] ?>"
                         alt="<?php echo $img["alt"] ?>">
                </div>
            <?php endif; ?>
            <div class="article-wrap">
                <div class="typography">
                    <?php echo $currentPage->post_content ?>
                </div>
                <div class="article-nav-bottom">
                    <span>Опублiковано в:</span>
                    <ul class="inline-block-list article-nav article-nav-bottom-box">
                        <li class="inline-block-item">
                            <a href="#">Коти</a>
                        </li>
                        <li class="inline-block-item">
                            <a href="#">Собаки</a>
                        </li>
                    </ul>
                </div>
                <div class="article-nav-bottom">
                    <span>Позначено тегом:</span>
                    <ul class="inline-block-list article-nav article-nav-bottom-box">
                        <li class="inline-block-item">
                            <a href="#">Поради</a>
                        </li>
                        <li class="inline-block-item">
                            <a href="#">Коти</a>
                        </li>
                        <li class="inline-block-item">
                            <a href="#">Рiздво</a>
                        </li>
                        <li class="inline-block-item">
                            <a href="#">Собаки</a>
                        </li>
                    </ul>
                </div>
                <div class="share-buttons">
                    <div class="facebook-share-btn">
                        <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="small" data-mobile-iframe="true">
                            <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Поделиться</a>
                        </div>
                    </div>
                    <div class="twitter-share-btn">
                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <div class="recomends">
        <div class="recomends-left-col recomends-article">
            <div class="recomends-wrapper">
                <a class="recomends-img-box" href="#" style="background-image: url(<?php echo gd_get_img('DogsLights_V1.png') ?>);">
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
        <div class="recomends-center-col recomends-quote">
            <div class="recomends-img-box" href="#" style="background-image: url(<?php echo gd_get_img('S0wnWaZrlGZoe15AJqf_y4KnLTFGmKBk_IQt75YlEew.jpeg') ?>);">
                <blockquote>
                    "Я перевiв Моллi на <i>NOW FRESH™ Grain Free Senior</i> після отримання інформації по електронній пошті
                    від вашого представника... Тепер я впевнений, що вона отримує дiйсно хороше харчування. Це дуже важливо
                    адже у неї діабет, а зараз її стан нарештi стабільний, і я можу бути спокiйний за її пiдшлункову залозу...
                    <i>NOW FRESH ™ Grain Free Senior</i> чудово працює! Дякую!"
                    <br>
                    - Олександр
                </blockquote>
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
                Читайте більше вiдгукiв від задоволених клієнтів
            </a>
        </div>
        <div class="recomends-right-col recomends-article">
            <div class="recomends-wrapper">
                <a class="recomends-img-box" href="#" style="background-image: url(<?php echo gd_get_img('PileofDogs_V1.png') ?>);">
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

<?php get_footer(); ?>
