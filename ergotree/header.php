<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <style type="text/css">
        <?php include('templates/header/config.php'); ?>
    </style>
    <link rel="preload" href="/wp-content/themes/ergotree/assets/fonts/fonts.css" as="style" onload="this.rel='stylesheet'">
    <?php wp_head(); ?>
</head>

<body <?php body_class('body'); ?>>
    <?php if (has_nav_menu('mobile')) : ?>
        <?php
        wp_nav_menu([
            'menu'            => 'mobile',
            'theme_location'  => 'mobile',
            'container'       => 'nav',
            'container_id'    => 'mobile-nav',
            'container_class' => 'mobile-nav',
            'menu_id'         => 'mobile-nav-menu',
            'menu_class'      => 'mobile-nav-menu'
        ]);
        ?>
    <?php endif; ?>
    <div class="above-header-info">
        <div class="my-container">
            <div class="label"><?php pll_e('Godziny otwarcia:'); ?></div>
            <div class="info"><?php pll_e('Pn-Pt 8:00 - 21:00, Sb 8:00-14:00.'); ?></div>
        </div>
    </div>
    <header id="header">
        <?php include('templates/header/template.php'); ?>
    </header>
    <div class="bubbles">
        <div class="messenger-bubble-icon">
            <?php et_svg('wp-content/themes/ergotree/assets/img/messenger-circle.svg'); ?>
        </div>
        <a href="mailto:<?php the_field('email', 'options'); ?> " class="mail-bubble"><?php et_svg('wp-content/themes/ergotree/assets/img/email-circle.svg'); ?></a>
        <a href="tel:<?php the_field('phone', 'options'); ?> " class="phone-bubble"><?php et_svg('wp-content/themes/ergotree/assets/img/phone-circle.svg'); ?></a>
    </div>