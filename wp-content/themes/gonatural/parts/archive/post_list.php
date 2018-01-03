<?php $relatedPosts = get_field('posts') ?>
<?php if($relatedPosts) : ?>
    <div class="recomends">
        <?php foreach ($relatedPosts as $index => $post) : if($index > 2) break;  ?>

            <?php get_template_part('parts/archive/post_item') ?>

        <?php endforeach; ?>
    </div>
<?php endif; ?>