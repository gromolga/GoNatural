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
                <?php foreach (wp_get_post_categories(get_the_ID(), array('fields' => 'all')) as $category) : ?>
                    <?php if($category->slug != 'all') : ?>
                        <li class="inline-block-item">
                            <a href="<?php echo get_category_link($category) ?>"><?php echo $category->name ?></a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
                <li class="inline-block-item">
                    <?php echo get_the_date('M d, Y'); ?>
                </li>
            </ul>
            <?php $currentPage = get_post(); ?>
            <h1 class="article-header"><?php echo $currentPage->post_title ?></h1>

            <div class="article-authors-info">
                <div class="article-authors-photo">
                    <img src="<?php echo gd_get_img('Val-Blog.jpg')?: gd_get_img('fallback-avatar.jpg') ?>" alt="">
                </div>
                <div class="article-authors-name">
                    <span><?php echo "Тамара Петровна" ?></span>
                </div>
            </div>
            <div class="article-main-image">
                <?php the_post_thumbnail('full'); ?>
            </div>
            <div class="article-wrap">
                <div class="typography">
                    <?php echo $currentPage->post_content ?>
                </div>
                <div class="article-nav-bottom">
                    <span>Опублiковано в:</span>
                    <ul class="inline-block-list article-nav article-nav-bottom-box">
                        <?php if($category->slug != 'all') : ?>
                            <li class="inline-block-item">
                                <a href="<?php echo get_category_link($category) ?>"><?php echo $category->name ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <?php /**
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
 */ ?>
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

    <?php get_template_part('parts/archive/post_list') ?>
</main>

<?php get_footer(); ?>
