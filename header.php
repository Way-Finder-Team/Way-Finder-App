<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.userway.org/widget.js" data-account="FYgjF0BqUB"></script>
<link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php
        if ( is_front_page() ) {
            echo 'Wayfinder';
        } elseif (is_single() || is_page() ){
            echo get_the_title();
        } else{
            bloginfo('name');
        }
        ?>
</title>
<?php wp_head(); ?>
</head>
<body>
    <div id = wrapper>
    
        <header class="menu-wrap">
            <input type="checkbox" id="checkbox"> <!-- Checkbox allows for opening and closing of the hamburger menu -->
            <label for="checkbox" class="menu-icon">☰</label>

            <label for="checkbox" class="title"><a href="<?php echo home_url(); ?>">
                <span>
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/logo.png" alt="Logo" class="logo"> -->
                </span>
                Way Finder</a></label>

            <div class="custom-menu-class">
                <?php 
                    wp_nav_menu( array( 
                    'theme_location' => 'my-custom-menu', 
                    'container_class' => 'custom-menu-class' ) ); 
                ?>
            </div>
        </header>


