<?php get_header(); ?>
<div class="wrapper">
    <div class="product-navigation">
        <div class="product-navigation-left-col">
            <div class="product-navigation-left-col-txt">
                <?php echo gd_get_post_option("left_txt") ?>
            </div>
            <div class="product-navigation-left-col-img">
                <?php $img_items = gd_get_post_option('img_items'); ?>
                <?php if($img_items) : ?>
                <ul class="product-navigation-left-col-img-list">
                    <?php foreach ($img_items as $item): ?>
                    <li class="product-navigation-left-col-img-box">
                        <a href="#">
                            <img src="<?php gd_eh_array(gd_get_array($item, 'img'), 'url') ?>" alt="">
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
        <div class="product-navigation-right-col">
            <div class="product-navigation-right-col-txt">
                <?php echo gd_get_post_option("right_txt") ?>
            </div>
            <div class="product-navigation-right-col-btn">
                <a href="#"><?php echo gd_get_post_option("button_txt") ?></a>
            </div>
        </div>
    </div>
</div>
<div class="product-description" style="background-image: url(<?php echo gd_get_img('Burlap-Cat-Kitten.jpg') ?>); background-size: cover;">
    <div class="wrapper product-description-flexbox">
        <div class="product-description-content">
            <h4 class="h4"><?php echo gd_get_post_option("small_header") ?></h4>
            <h1 class="h1"><?php echo gd_get_post_option("large_header") ?></h1>
            <p><?php echo gd_get_post_option("content") ?></p>
            <a class="main-btn" href="#">
                <a class="main-btn-box">Where to buy</a>
            </a>
            <div class="share-buttons">
                <div class="facebook-share-btn">
                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/"
                         data-layout="button" data-size="small" data-mobile-iframe="true">
                        <a class="fb-xfbml-parse-ignore" target="_blank"
                           href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Поделиться</a>
                    </div>
                </div>
                <div class="twitter-share-btn">
                    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button"
                       data-show-count="false">Tweet</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>
        <div class="product-description-img">
            <img src="<?php echo gd_get_img('Now-Cat-Kitten.png') ?>" alt="">
        </div>
    </div>
</div>
<div class="accordeon">
    <ul class="accordeon-list">
        <li class="accordeon-item">
            <div class="wrapper">
                <div class="accordeon-item-txt">Інгрідієнти</div>
            </div>
            <div class="accordeon-item-dropdown">
                <div class="wrapper">
                    We select the highest quality, healthiest, least processed, and of course the most flavourful
                    ingredients available. Here is a full list of the ingredients used in this recipe:
                    Duck, duck broth, potatoes, dried egg product, flaxseed, apples, tricalcium phosphate, potassium
                    chloride, salt, minerals (zinc amino acid chelate, iron amino acid chelate, selenium yeast, copper
                    amino acid chelate, manganese
                    amino acid chelate, cobalt amino acid chelate, potassium iodide), canola oil (preserved with mixed
                    tocopherols), xanthan gum, cassia gum, chicory root, vitamins (vitamin E supplement, thiamine
                    mononitrate, vitamin A supplement, riboflavin supplement, biotin, vitamin B12 supplement, vitamin D3
                    supplement), choline chloride, dried kelp, yucca schidigera extract.
                    If you’d like to learn more about all the good stuff in each and every Petcurean recipe, please
                    explore our comprehensive glossary of ingredients.
                </div>
            </div>
        </li>
        <li class="accordeon-item">
            <div class="wrapper">
                <div class="accordeon-item-txt">Рекомендації щодо щоденного харчування</div>
            </div>
            <div class="accordeon-item-dropdown">
                <div class="wrapper">
                    We select the highest quality, healthiest, least processed, and of course the most
                    flavourful
                    ingredients available. Here is a full list of the ingredients used in this recipe:
                    Duck, duck broth, potatoes, dried egg product, flaxseed, apples, tricalcium phosphate, potassium
                    chloride, salt, minerals (zinc amino acid chelate, iron amino acid chelate, selenium yeast, copper
                    amino acid chelate, manganese
                    amino acid chelate, cobalt amino acid chelate, potassium iodide), canola oil (preserved with mixed
                    tocopherols), xanthan gum, cassia gum, chicory root, vitamins (vitamin E supplement, thiamine
                    mononitrate, vitamin A supplement, riboflavin supplement, biotin, vitamin B12 supplement, vitamin D3
                    supplement), choline chloride, dried kelp, yucca schidigera extract.
                    If you’d like to learn more about all the good stuff in each and every Petcurean recipe, please
                    explore our comprehensive glossary of ingredients.
                </div>
            </div>
        </li>
        <li class="accordeon-item">
            <div class="wrapper">
                <div class="accordeon-item-txt">Гарантований аналіз</div>
            </div>
            <div class="accordeon-item-dropdown">
                <div class="wrapper">
                    We select the highest quality, healthiest, least processed, and of course the most
                    flavourful
                    ingredients available. Here is a full list of the ingredients used in this recipe:
                    Duck, duck broth, potatoes, dried egg product, flaxseed, apples, tricalcium phosphate, potassium
                    chloride, salt, minerals (zinc amino acid chelate, iron amino acid chelate, selenium yeast, copper
                    amino acid chelate, manganese
                    amino acid chelate, cobalt amino acid chelate, potassium iodide), canola oil (preserved with mixed
                    tocopherols), xanthan gum, cassia gum, chicory root, vitamins (vitamin E supplement, thiamine
                    mononitrate, vitamin A supplement, riboflavin supplement, biotin, vitamin B12 supplement, vitamin D3
                    supplement), choline chloride, dried kelp, yucca schidigera extract.
                    If you’d like to learn more about all the good stuff in each and every Petcurean recipe, please
                    explore our comprehensive glossary of ingredients.
                </div>
            </div>
        </li>
    </ul>
</div>
<div class="wrapper">
    <?php get_template_part('parts/archive/post_list') ?>
</div>


<?php get_footer(); ?>
