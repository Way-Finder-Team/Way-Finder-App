<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.userway.org/widget.js" data-account="FYgjF0BqUB"></script>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
            if (is_front_page()) {
                echo 'Wayfinder';
            } elseif (is_single() || is_page()) {
                echo get_the_title();
            } else {
                bloginfo('name');
            }
            ?>
    </title>
    <?php wp_head(); ?>
</head>

<body>
    <div id="wrapper">
        <header class="menu-wrap">

            <?php if (is_front_page() || is_page('thank-you')): ?>
                <!-- humbarger icon -->
                <div class="menu-icon" id="menu-toggle">☰</div>
            <?php else : ?>
                <!-- else go back with ← -->
                <div class="menu-icon back-icon" onclick="history.back();">←</div>
            <?php endif; ?>

            <!-- Wayfinder in center -->
            <div class="title">
                <a href="<?php echo home_url(); ?>">Wayfinder</a>
            </div>

            <!-- navigation menu -->
            <nav class="custom-menu-class" id="main-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'my-custom-menu',
                    'container' => false
                ));
                ?>
            </nav>
        </header>