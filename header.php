<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.userway.org/widget.js" data-account="FYgjF0BqUB"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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

            <?php if (is_front_page()) : ?>
                <!-- hunbarger icon -->
                <i class="fas fa-bars menu-icon" id="menu-toggle"></i>
            <?php else : ?>
                <!-- else go back with ← -->
                <i class="fas fa-arrow-left back-icon" onclick="history.back();"></i>
            <?php endif; ?>

            <!-- Wayfinder in center -->
            <div class="title">
                <span class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo-fff.png" alt="logo white">
                </span>
                <a href="<?php echo home_url(); ?>">Way Finder</a>
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