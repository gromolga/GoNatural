<?php
/**
 * Template Name: NOW FRESH for cats
 */
?>

<?php get_header(); ?>

<div class="wrapper">
    <div class="product-navigation">
        <div class="product-navigation-left-col">
            <div class="product-navigation-left-col-txt">
                Види продуктiв:
            </div>
            <div class="product-navigation-left-col-img">
                <ul class="product-navigation-left-col-img-list">
                    <li class="product-navigation-left-col-img-box">
                        <a href="/now-fresh-dlya-kotiv/">
                            <img src="<?php echo gd_get_img('NowFresh-Cat.png') ?>" alt="">
                        </a>
                    </li>
                    <li class="product-navigation-left-col-img-box">
                        <a href="/go-dlya-kotiv/">
                            <img src="<?php echo gd_get_img('GO-Cat.png') ?>" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="product-navigation-right-col">
            <div class="product-navigation-right-col-txt">
                Потрiбна порада у виборi правильного харчування?
            </div>
            <div class="product-navigation-right-col-btn">
                <a href="#">Скористайтеся нашим помiчником</a>
            </div>
        </div>
    </div>
</div>
<div class="product-banner" style="background-image: url(<?php echo gd_get_img('Now-Cat-Header.01.jpg') ?>); background-size: cover;">
    <div class="fw-container">
        <div class="fw-row">
            <div class="fw-col-xs-12">
                <div class="product-banner-txt">
                    <h1 class="h1 product-banner-txt-header">
                        It could only be fresher if you made it from scratch
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-presentation-box" style="background-image: url(<?php echo gd_get_img('now-fresh-paper.jpg') ?>);">
    <div class="wrapper product-presentation">
        <div class="product-presentation-img">
            <img src="<?php echo gd_get_img('NowFresh-Cat.png') ?>" alt="">
        </div>
        <div class="product-presentation-txt">
            <h3 class="h3 product-presentation-header">
                "Fresh." It sounds good when you say it, and tastes good when you eat it.
            </h3>
            <p>
                <span class="product-presentation-txt-accent">It’s no surprise that cats love the freshness of NOW FRESH™ dry cat food.</span>
                <p>It’s so fresh, it’s like
                    eating off the kitchen counter (down, girl). We pack NOW FRESH™ grain free cat food full of nutritious
                    ingredients like 100% market-fresh turkey, salmon and duck. 100% fresh Omega 3 and 6 oils from coconuts
                    and canola. Wholesome berries, fruits and veggies such as peas, spinach, cranberries, pumpkin,
                    blackberries, alfalfa sprouts, kelp, lentils and carrots. Yum!</p>
                <img src="<?php echo gd_get_img('Now-Fresh-Kitten-Adult-Senior.png') ?>" alt="">
                <p>Zero grains, zero rendered meats, zero by-product meals, or artificial preservatives.</p>
            </p>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="product-grid">
        <a href="/product/now-fresh-grain-free-kitten-food" class="product-item">
            <div class="product-item-content">
                <img src="<?php echo gd_get_img('Now-Cat-Kitten.png') ?>" alt="">
                <div class="product-item-header">Grain Free Kitten Food</div>
<!--                <span class="product-item-more">More info</span>-->
            </div>
        </a>
        <a href="" class="product-item">
            <div class="product-item-content">
                <img src="<?php echo gd_get_img('NowFresh-Cat.png') ?>" alt="">
                <div class="product-item-header">Grain Free Adult Food</div>
<!--                <span class="product-item-more">More info</span>-->
            </div>
        </a>
        <a href="" class="product-item">
            <div class="product-item-content">
                <img src="<?php echo gd_get_img('Now-Cat-Adult-Fish.png') ?>" alt="">
                <div class="product-item-header">Grain Free Fish Recipe for Adult Cats</div>
<!--                <span class="product-item-more">More info</span>-->
            </div>
        </a>
        <a href="" class="product-item">
            <div class="product-item-content">
                <img src="<?php echo gd_get_img('Now-Cat-Senior.png') ?>" alt="">
                <div class="product-item-header">Grain Free Senior Cat Food Recipe</div>
<!--                <span class="product-item-more">More info</span>-->
            </div>
        </a>
    </div>
</div>
<?php get_footer(); ?>
