<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Pizzeria</title>
    <?php wp_head(); ?>
</head>
<body>

<header class="site-header">
<div class="container">
    <div class="logo">
        <a href="#<?php echo esc_url( home_url('/') ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="" class="logoimage">
        </a>
    </div>
    <div class="header-information">
        <div class="socials">
            <?php 
            wp_nav_menu( array( 
                'theme_location' => 'social-menu',
                'container' => 'nav',
                'container_class' => 'socials',
                'container_id' => 'socials',
                'link_before' => '<span class="sr-text">',
                'link_after' => '</span>' ) ); 
            ?>
        </div>
        <div class="address">
        <p>2754 Ocean Avenue Pallo Alto, CA 90481</p>
        <p>Phone: 777-777-7777</p>
        </div>
    </div>

    <div class="main-menu">
        <div class="navigation container">
        <?php wp_nav_menu( array( 
            'theme_location' => 'header-menu', 
            'container' => 'nav',
            'container_class' => 'site-nav' ) ); 
        ?>
        <nav class="site-nav"></nav>
        </div>
    </div>
</div>
</header>