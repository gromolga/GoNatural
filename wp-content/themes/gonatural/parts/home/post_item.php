<article class="our-blog-article">
    <div class="our-blog-article-img">
        <?php the_post_thumbnail('full'); ?>
    </div>
    <div class="our-blog-article-txt">
        <a class="our-blog-article-link our-blog-article-link-top" href="<?php the_permalink() ?>"><?php the_title() ?></a>
        <a class="our-blog-article-link our-blog-article-link-bottom our-blog-box-link" href="<?php the_permalink() ?>">Читати більше</a>
    </div>
</article>