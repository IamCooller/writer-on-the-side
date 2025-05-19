<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WRITER_ON_THE_SIDE
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="border-t-[7px] sm:border-t-[11px] border-red bg-white">
        <div class="container py-[23px] flex justify-between items-center">
            <!-- custom logo -->
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo '<a href="' . esc_url(home_url('/')) . '" aria-label="' . esc_attr(get_bloginfo('name')) . '">' . get_bloginfo('name') . '</a>';
            }
            ?>
            <!-- desktop menu (hidden on mobile) -->
            <div class="hidden md:block">
                <?php
                wp_nav_menu([
                    'theme_location' => 'header-menu',
                    'container' => false,
                    'menu_class' => 'header-menu',
                    'menu_id' => 'header-menu',
                    'echo' => true,
                    'fallback_cb' => false,
                    'items_wrap' => '<nav id="%1$s" class="%2$s" role="navigation" aria-label="' . esc_attr__('Main menu', 'writer-on-the-side') . '">%3$s</nav>',
                ]);
                ?>
            </div>

            <!-- mobile menu button (visible only on mobile) -->
            <button class="header-mobile__menu-open md:hidden flex flex-col space-y-1.5 focus:outline-none z-10"
                aria-label="Open menu">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.74792 7.48387L27.2624 7.69378L4.74792 7.48387Z" fill="#D11217" />
                    <path d="M4.74792 7.48387L27.2624 7.69378" stroke="#1D1D1B" stroke-width="2.58065"
                        stroke-linecap="round" />
                    <path d="M1.29614 15.9518L30.7142 16.2261L1.29614 15.9518Z" fill="#D11217" />
                    <path d="M1.29614 15.9518L30.7142 16.2261" stroke="#1D1D1B" stroke-width="2.58065"
                        stroke-linecap="round" />
                    <path d="M4.74792 24.4842L27.2624 24.6941L4.74792 24.4842Z" fill="#D11217" />
                    <path d="M4.74792 24.4842L27.2624 24.6941" stroke="#1D1D1B" stroke-width="2.58065"
                        stroke-linecap="round" />
                </svg>

            </button>
        </div>
    </header>

    <!-- Mobile menu overlay (hidden by default) -->
    <div class="mobile-menu fixed inset-0 bg-white opacity-0 pointer-events-none z-50 invisible">
        <div
            class="container h-full flex flex-col justify-between py-8 <?php echo is_admin_bar_showing() ? 'mt-[46px]' : ''; ?>">
            <div>
                <div class="flex justify-between items-center mb-10">
                    <!-- Logo in mobile menu -->
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        echo '<a href="' . esc_url(home_url('/')) . '" aria-label="' . esc_attr(get_bloginfo('name')) . '">' . get_bloginfo('name') . '</a>';
                    }
                    ?>

                    <!-- Close button -->
                    <button class="mobile-menu__close focus:outline-none" aria-label="Close menu">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6L6 18" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M6 6L18 18" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <!-- Mobile menu navigation -->
                <div class="mobile-menu__nav">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'header-menu',
                        'container' => false,
                        'menu_class' => 'flex flex-col space-y-6 text-2xl font-medium',
                        'echo' => true,
                        'fallback_cb' => false,
                        'items_wrap' => '<nav class="%2$s" role="navigation">%3$s</nav>',
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>