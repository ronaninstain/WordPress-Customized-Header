<?php
//Header File
if (!defined('ABSPATH')) exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
    <div id="global" class="global">
        <?php
        get_template_part('mobile', 'sidebar');
        ?>
        <div class="pusher">
            <?php
            $fix = vibe_get_option('header_fix');
            ?>


            <header class="sleek transparent <?php if (isset($fix) && $fix) {
                                                    echo 'fix';
                                                } ?>">
                <style>
                    header.sleek.transparent.fix .janets-top-area {
                        background: #fff;
                        border-bottom: 1px solid #D8DED5;
                        margin-top: 5px;
                        padding-bottom: 0;
                        height: 64px;
                    }

                    header.sleek.transparent.fix .janets-top-socials ul {
                        display: flex;
                        flex-direction: row;
                        align-items: center;
                        align-content: center;
                    }

                    header.sleek.transparent.fix .janets-top-socials ul li {
                        padding: 0 15px;
                    }

                    header.sleek.transparent.fix li.for-right-Margin-janets-top {
                        border-right: 1px solid #D9D8E3;
                    }

                    header.sleek.transparent.fix .janets-top-socials {
                        padding-top: 22px;
                    }

                    header.sleek.transparent.fix .janets-top-socials ul li a {
                        font-family: 'Poppins';
                        font-weight: 600;
                        font-size: 12px;
                        line-height: 16.9px;
                        color: #151424;
                    }

                    header.sleek.transparent.fix .janets-top-socials ul li img {
                        color: #7BA631;
                        margin-right: 10px;
                        width: 17px;
                    }

                    header.sleek.transparent.fix .janets-top-socials-img img {
                        max-width: 100%;
                        width: 252px;
                    }

                    header.sleek.transparent.fix .janets-top-socials-img {
                        margin-top: 20px;
                    }

                    header.sleek.transparent.fix .for-hide-ondesktop-tab-janets-top {
                        display: none;
                    }

                    header.sleek.transparent.fix .janets-top-area .topmenu>li:first-child a>span {
                        max-width: 130px;
                    }

                    header.sleek.transparent.fix nav {
                        float: none;
                    }

                    header.sleek.transparent.fix .for-janets-course-search-form-janets-top-nav form#search {
                        display: flex;
                        flex-direction: row;
                        justify-content: center;
                        align-items: baseline;
                        align-content: center;
                        background: #F6F7F9;
                        border: 1px solid #7BA631;
                        border-radius: 6px;
                        margin: 15px 30px;
                        padding: 5px 10px;
                    }

                    header.sleek.transparent.fix .for-janets-course-search-form-janets-top-nav #s {
                        border: 0 !important;
                        background: transparent;
                        padding: 0px 20px;
                        padding-bottom: 5px;
                    }

                    header.sleek.transparent.fix .for-janets-course-search-form-janets-top-nav button {
                        background-color: transparent;
                        border: 0;
                        color: #8FA631;
                    }

                    header.sleek.transparent.fix .topmenu .vbpcart img {
                        width: 17px;
                    }

                    header.sleek.transparent.fix .topmenu .vbplogin img {
                        width: 14px;
                        margin-right: 5px;
                    }

                    header.sleek.transparent.fix .topmenu>li>a {
                        padding-bottom: 14px;
                    }

                    @media (min-width: 1440px) {
                        header.sleek.transparent.fix .container {
                            width: 1140px !important;
                        }
                    }

                    @media only screen and (min-width: 767px) and (max-width: 1023px) {
                        header.sleek.transparent.fix .janets-top-socials ul li img {
                            width: 12px;
                        }

                        header.sleek.transparent.fix .janets-top-socials ul li img {
                            margin-right: 3px;
                        }

                        header.sleek.transparent.fix .janets-top-socials-img {
                            margin-top: 15px;
                        }

                        header.sleek .janets-top-area .topmenu li:first-child>a>span {
                            max-width: 40px;
                        }

                        header.sleek.transparent.fix .janets-top-area {
                            padding-top: 0;
                        }

                        header.sleek.transparent.fix .janets-top-socials-img {
                            margin-top: 27px;
                        }

                        header.sleek.transparent.fix .janets-top-socials ul li {
                            padding: 0 8px;
                        }

                        header.sleek.transparent.fix .janets-top-area {

                            margin-top: 0;

                        }

                        header.sleek.transparent.fix .janets-top-socials {
                            padding-top: 28px;
                        }

                        header.sleek.transparent.fix .janets-top-socials ul li a {
                            font-size: 11px;
                        }

                    }

                    @media only screen and (min-width: 320px) and (max-width: 767px) {
                        header.sleek.transparent.fix .for-hide-ondesktop-tab-janets-top {
                            display: block;
                        }

                        header.sleek.transparent.fix .janets-top-area .col-md-4.col-sm-4 {
                            display: none;
                        }

                        header.sleek.transparent.fix .janets-top-socials {
                            padding-top: 5px;
                        }

                        header.sleek.transparent.fix .janets-top-socials-img img {
                            width: 240px;
                        }

                        header.sleek.transparent.fix .janets-top-socials-img {
                            margin: 10px 50px;
                        }

                        header.sleek.transparent.fix .janets-top-socials ul li {
                            font-size: 12px;
                        }

                        header.sleek.transparent.fix .for-janets-course-search-form-janets-top-nav {
                            display: none;
                        }
                    }
                </style>
                <div class="janets-top-area">
                    <div class="container">
                        <div class="janets-if-flex-need">
                            <div class="row">
                                <div class="col-md-4 col-sm-5">
                                    <div class="janets-top-socials">
                                        <ul>
                                            <li class="for-right-Margin-janets-top"><img src="<?php echo get_theme_file_uri(); ?>/assets/img/phone.png" alt="phone_icon"><a href="tel: 123-456-7890">+44 20 3970 9786</a></li>
                                            <li><img src="<?php echo get_theme_file_uri(); ?>/assets/img/email.png" alt="email_icon"><a href="mailto:info@janets.org.uk">info@janets.org.uk</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-3">
                                    <div class="janets-top-socials-img">
                                        <img src="https://www.janets.org.uk/wp-content/uploads/2022/11/Frame-1157-1.png" alt="Review.io">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <?php
                                    $show_cart = apply_filters('wplms_header_show_cart', 1);
                                    if (function_exists('bp_loggedin_user_link') && is_user_logged_in()) :
                                    ?>
                                        <ul class="topmenu">

                                            <?php

                                            if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))  || (function_exists('vibe_check_plugin_installed') && vibe_check_plugin_installed('woocommerce/woocommerce.php')) && $show_cart) {
                                                global $woocommerce;
                                            ?>
                                                <li><a class="smallimg vbpcart"><span><img src="<?php echo get_theme_file_uri(); ?>/assets/img/cart.png" alt="cart_icon"><?php echo (($woocommerce->cart->cart_contents_count) ? '<em>' . $woocommerce->cart->cart_contents_count . '</em>' : ''); ?></span></a>
                                                    <div class="woocart">
                                                        <div class="widget_shopping_cart_content"><?php woocommerce_mini_cart(); ?></div>
                                                    </div>
                                                </li>
                                            <?php
                                            }
                                            ?>

                                            <li><a href="<?php bp_loggedin_user_link(); ?>" class="smallimg vbplogin"><?php $n = vbp_current_user_notification_count();
                                                                                                                        echo ((isset($n) && $n) ? '<em></em>' : '');
                                                                                                                        bp_loggedin_user_avatar('type=full'); ?><span><?php bp_loggedin_user_fullname(); ?></span></a></li>
                                        </ul>
                                    <?php
                                    else :
                                    ?>
                                        <ul class="topmenu">

                                            <?php
                                            if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))  || (function_exists('vibe_check_plugin_installed') && vibe_check_plugin_installed('woocommerce/woocommerce.php')) && $show_cart) {
                                                global $woocommerce;
                                            ?>
                                                <li><a class=" vbpcart"><span><img src="<?php echo get_theme_file_uri(); ?>/assets/img/cart.png" alt="cart_icon"><?php echo (($woocommerce->cart->cart_contents_count) ? '<em>' . $woocommerce->cart->cart_contents_count . '</em>' : ''); ?></span></a>
                                                    <div class="woocart"><?php woocommerce_mini_cart(); ?></div>
                                                </li>
                                            <?php
                                            }
                                            ?>
                                            <li><a href="#login" rel="nofollow" class=" vbplogin"><span><img src="<?php echo get_theme_file_uri(); ?>/assets/img/user.png" alt="user_icon"><?php _e('LOGIN/Sign up', 'vibe'); ?></span></a></li>
                                        </ul>
                                    <?php
                                    endif;
                                    ?>
                                    <?php
                                    $style = vibe_get_login_style();
                                    if (empty($style)) {
                                        $style = 'default_login';
                                    }
                                    ?>
                                    <div id="vibe_bp_login" class="<?php echo vibe_sanitizer($style, 'text'); ?>">
                                        <?php
                                        vibe_include_template("login/$style.php");
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="<?php echo vibe_get_container(); ?>">
                    <div class="row">
                        <div class="col-md-2 col-sm-3 col-xs-4">
                            <?php

                            if (is_home()) {
                                echo '<h1 id="logo">';
                            } else {
                                echo '<h2 id="logo">';
                            }

                            $url = apply_filters('wplms_logo_url', VIBE_URL . '/assets/images/logo.png', 'header');
                            if (!empty($url)) {
                            ?>

                                <a href="<?php echo vibe_site_url('', 'logo'); ?>"><img src="<?php echo vibe_sanitizer($url, 'url'); ?>" alt="<?php echo get_bloginfo('name'); ?>" /></a>
                            <?php

                            }
                            if (is_home()) {
                                echo '</h1>';
                            } else {
                                echo '</h2>';
                            }


                            ?>
                        </div>
                        <div class="col-md-7 col-sm-3">
                            <?php
                            $args = apply_filters('wplms-main-menu', array(
                                'theme_location'  => 'main-menu',
                                'container'       => 'nav',
                                'menu_class'      => 'menu',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'walker'          => new vibe_walker,
                                'fallback_cb'     => 'vibe_set_menu'
                            ));
                            wp_nav_menu($args);
                            ?>
                        </div>
                        <div class="col-md-3 col-sm-8 col-xs-8">

                            <div class="for-janets-course-search-form-janets-top-nav">
                                <form id="search" action="">
                                    <input type="hidden" name="post_type" value="course">
                                    <input type="text" class="s" id="s" name="s" placeholder="Search.." value="">
                                    <button type="submit" class="sbtn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="for-hide-ondesktop-tab-janets-top">
                                <?php
                                $show_cart = apply_filters('wplms_header_show_cart', 1);
                                if (function_exists('bp_loggedin_user_link') && is_user_logged_in()) :
                                ?>
                                    <ul class="topmenu">
                                        <li><a href="<?php bp_loggedin_user_link(); ?>" class="smallimg vbplogin"><?php $n = vbp_current_user_notification_count();
                                                                                                                    echo ((isset($n) && $n) ? '<em></em>' : '');
                                                                                                                    bp_loggedin_user_avatar('type=full'); ?><span><?php bp_loggedin_user_fullname(); ?></span></a></li>
                                        <?php

                                        if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))  || (function_exists('vibe_check_plugin_installed') && vibe_check_plugin_installed('woocommerce/woocommerce.php')) && $show_cart) {
                                            global $woocommerce;
                                        ?>
                                            <li><a class="smallimg vbpcart"><span class="fa fa-shopping-basket"><?php echo (($woocommerce->cart->cart_contents_count) ? '<em>' . $woocommerce->cart->cart_contents_count . '</em>' : ''); ?></span></a>
                                                <div class="woocart">
                                                    <div class="widget_shopping_cart_content"><?php woocommerce_mini_cart(); ?></div>
                                                </div>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                <?php
                                else :
                                ?>
                                    <ul class="topmenu">
                                        <li><a href="#login" rel="nofollow" class=" vbplogin"><span><img src="<?php echo get_theme_file_uri(); ?>/assets/img/user.png" alt="user_icon"><?php _e('LOGIN', 'vibe'); ?></span></a></li>
                                        <?php
                                        if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))  || (function_exists('vibe_check_plugin_installed') && vibe_check_plugin_installed('woocommerce/woocommerce.php')) && $show_cart) {
                                            global $woocommerce;
                                        ?>
                                            <li><span><a class=" vbpcart"><img src="<?php echo get_theme_file_uri(); ?>/assets/img/cart.png" alt="cart_icon"><?php echo (($woocommerce->cart->cart_contents_count) ? '<em>' . $woocommerce->cart->cart_contents_count . '</em>' : ''); ?></span></a>
                                                <div class="woocart"><?php woocommerce_mini_cart(); ?></div>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                <?php
                                endif;
                                ?>
                                <?php
                                $style = vibe_get_login_style();
                                if (empty($style)) {
                                    $style = 'default_login';
                                }
                                ?>
                                <div id="vibe_bp_login" class="<?php echo vibe_sanitizer($style, 'text'); ?>">
                                    <?php
                                    vibe_include_template("login/$style.php");
                                    ?>
                                </div>
                            </div>

                        </div>
                        <a id="trigger">
                            <span class="lines"></span>
                        </a>
                    </div>
                </div>
            </header>