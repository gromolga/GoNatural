<?php
/**
 * Template Name: Про нас
 */
?>

<h2>Про нас</h2>


<ul>
    <?php
    $mypost = array( 'cat' => 33,'posts_per_page' => -1);
    $loop = new WP_Query( $mypost );
    ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
        <li>
            <?php the_post_thumbnail('full'); ?>
            <?php the_content(); ?>
        </li>
    <?php endwhile; ?>
</ul>

<?php wp_reset_query(); ?>