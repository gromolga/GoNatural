<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
    <title>Go Natural</title>
    <meta name="description" content="Сбалансированное питание для кошек и собак">
	<?php wp_head(); ?>
</head>
<header class="header">
    <div class="header-top-line">
        <?php if ( function_exists( 'mltlngg_display_switcher' ) ) mltlngg_display_switcher(); ?>
        <div class="wrapper">
            <div class="header-top-line-img">
                <img src="<?php gd_eh_array(gd_get_option('header_top_img', array()), 'url', gd_get_img('header-top-img.jpg')) ?>" alt="Petcurean">
            </div>
            <nav class="header-nav clearfix">
                <div class="header-burger" id="header-burger">
                    <span class="header-burger-item"></span>
                </div>
                <div class="header-mobile-menu" style="display: none;">
                    <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'header-nav-mobile',
                        'menu'            => '',
                        'container'       => 'div',
                        'container_class' => '',
                        'menu_class'      => 'header-nav-list-mobile',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'depth'           => 1,
                    ) );
                    ?>
                </div>
                <a class="header-logo" href="/" title="Petcurean Pet Nutrition">
                    <img src="<?php gd_eh_array(gd_get_option('header_logo', array()), 'url', gd_get_img('header-logo.jpg')) ?>" alt="Petcurean">
                    <strong>Petcurean</strong>
                </a>
                <div class="header-nav-container">
                    <div id="lang" class="lang">
                        <ul>
                            <li <?php echo (gp_get_locale() != 'UA') ? 'onclick="setLocale(\'UA\')" class="current"' : ''; ?>><span>Українська</span></li>
                            <li <?php echo (gp_get_locale() != 'RU') ? 'onclick="setLocale(\'RU\')"' : ''; ?>><span>Росйська</span></li>
                        </ul>
                    </div>
                    <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'header-nav',
                        'menu'            => '',
                        'container'       => 'div',
                        'container_class' => '',
                        'menu_class'      => 'header-nav-list',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'depth'           => 1,
                    ) );
                    ?>
                    <div class="header-nav-search" id="header-nav-search">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                </div>
            </nav>
        </div>
    </div>



    <script>

        function setLocale(locale) {
            setCookie('lang', locale);
            location.reload();
        }

        function setCookie(name, value, options) {
            options = options || {};

            var expires = options.expires;

            if (typeof expires == "number" && expires) {
                var d = new Date();
                d.setTime(d.getTime() + expires * 1000);
                expires = options.expires = d;
            }
            if (expires && expires.toUTCString) {
                options.expires = expires.toUTCString();
            }

            value = encodeURIComponent(value);

            var updatedCookie = name + "=" + value;

            for (var propName in options) {
                updatedCookie += "; " + propName;
                var propValue = options[propName];
                if (propValue !== true) {
                    updatedCookie += "=" + propValue;
                }
            }

            document.cookie = updatedCookie;
        }
    </script>

    <div id="header-search" class="header-search-wrapper" style="display: none;">
        <div class="wrapper">
            <div class="search-form-wrap">
                <form role="search" method="get" class="search-form form-inline" action="#">
                    <div class="header-input-group">
                        <input type="search" class="header-search-field" placeholder="type to search...">
                        <span class="header-search-btn" style="display: none">
                          <button type="submit" class="header-search-btn-submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
