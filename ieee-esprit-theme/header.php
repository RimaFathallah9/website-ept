<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="header-container">
            <div class="site-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php 
                    if ( has_custom_logo() ) {
                        the_custom_logo();
                    } else {
                        // Use the new logo file
                        echo '<img src="' . get_template_directory_uri() . '/assets/images/logo.png" alt="IEEE EPT SB">';
                    }
                    ?>
                </a>
            </div>
            
            <nav class="main-navigation">
                <?php
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'depth'          => 1,
                    ) );
                } else {
                    // Fallback menu if no menu is assigned in WP Admin
                    echo '<ul>';
                    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
                    echo '<li><a href="#">About Us</a></li>';
                    echo '<li><a href="#">Events</a></li>';
                    echo '<li><a href="#">Units</a></li>';
                    echo '<li><a href="#" class="register-btn">Register Now</a></li>';
                    echo '</ul>';
                }
                ?>
            </nav>
            
            <div class="menu-toggle">☰</div>
        </div>
    </header>
