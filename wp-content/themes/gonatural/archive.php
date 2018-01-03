<?php get_header(); ?>

<main class="main">
    <div class="wrapper">
        <div class="main-banner blog-main-banner">
            <div class="owl-carousel main-banner-carousel blog-carousel">
                <?php $items = gd_get_option('blog_slide', array()); ?>
                <?php foreach ($items as $item): ?>
                    <div class="blog-slide"
                         style="background-image: url('<?php gd_eh_array(gd_get_array($item, 'blog_slide_img'), 'url') ?>')">
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

        <?php $categories = get_categories(array('orderby' => 'ID', 'order' => 'ASC',)) ?>
        <div>
            <ul>
                <?php foreach ($categories as $category): ?>
                    <?php if($category->term_id == $cat): ?>
                        <li><span><?php echo $category->name ?></span></li>
                    <?php else: ?>
                        <li><a href="<?php echo get_category_link($category) ?>"><?php echo $category->name ?></a></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="recomends">
            <?php
            $mypost = array( 'cat' => $cat,'posts_per_page' => -1);
            $loop = new WP_Query( $mypost );
            ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post();?>

                <?php get_template_part('parts/archive/post_item') ?>

            <?php endwhile; ?>
        </div>
    </div>
</main>


<ul>

</ul>
<?php wp_reset_query(); ?>


<?php get_footer(); ?>
