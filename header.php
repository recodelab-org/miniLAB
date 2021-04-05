<!DOCTYPE html>
<!--
miniLAB – a ridiculously simple wordPress theme.
Copyright (C) 2020 - 2021  Enno Hyttrek

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

https://www.gnu.org/licenses/
-->
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <div class="ehy-header-content-wrapper">
            <?php if ( is_front_page() ) { ?>            
            <h1><?php bloginfo('title'); ?> H1</h1>
            <?php } else { ?>
                <h2><?php bloginfo('title'); ?> H2</h2>
            <?php } 
            ?>
        </div>
    </header>


    <nav id="main-nav" class="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>

    <nav class="burger-icon" onclick="toggleMobileNav()">
        <i class="fas fa-bars"></i>
    </nav>

    <nav id="mobile-nav" class="mobile-nav" onclick="hideMobileNav()">
        <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
    </nav>