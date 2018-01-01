<aside class="banner-aside">
    <h4 class="h4 banner-aside-header"><a href="<?php echo get_category_link(11) ?>">Статьи</a></h4>
    <ul>
        <?php $currentPageId = get_post() ? get_post()->ID : 0 ?>
        <?php $posts = get_posts(array('numberposts' => 4, 'category' => 11)) ?>
        <?php foreach ($posts as $post) : ?>

            <li class="<?php echo $currentPageId == $post->ID ? ' active ': '' ?>"
            ><a href="<?php echo get_permalink($post) ?>"><?php echo $post->post_title ?></a></li>

        <?php endforeach; wp_reset_postdata(); ?>
    </ul>
</aside>