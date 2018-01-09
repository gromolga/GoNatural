<div class="recomends-left-col recomends-article">
    <div class="recomends-wrapper scale-img">
        <?php the_post_thumbnail('full'); ?>
        <a class="recomends-img-box" href="<?php the_permalink() ?>">
            <div class="recomends-txt">
                <p>[Читати статтю]</p>
            </div>
        </a>
    </div>
    <div class="recomends-article-links">
        <ul class="inline-block-list article-nav recomends-links">
            <?php foreach (get_the_category() as $category) : ?>
                <?php if($category->slug != 'all') : ?>
                    <li class="inline-block-item">
                        <a href="<?php echo get_category_link($category) ?>"><?php echo $category->name ?></a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
    <a class="recomends-article-header" href="<?php the_permalink() ?>">
        <?php the_title() ?>
    </a>
</div>
