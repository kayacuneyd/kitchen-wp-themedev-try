<!doctype html>
<html lang="en">
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php 
        if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); 
    ?>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kitchen - WP Theme</title>

    <!-- CSS FILES -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">                    
    <!--

    Tooplate 2129 Crispy Kitchen

    https://www.tooplate.com/view/2129-crispy-kitchen

    -->
    <?php wp_head(); ?>
    </head>
    
    <body <?php body_class(); ?> >
    
    

    <nav class="navbar navbar-expand-lg bg-white shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/images/ck-svg-logo.svg' ?>" alt="logo">
                </a>

                <div class="d-lg-none">
                    <button type="button" class="custom-btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#BookingModal">Reservation</button>
                </div>

                <button id="navButtonToggler" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Main Menu  -->
                <div class="collapse navbar-collapse" id="navbarNav">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'main-menu',
                                'container' => false,
                                'menu_class' => '',
                                'fallback_cb' => '__return_false',
                                'items_wrap' => '<ul id="%1$s" class="navbar-nav mx-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                                'depth' => 2,
                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
                        ?>
                </div>

                <!-- Reservation Button -->
                <div class="d-none d-lg-block">
                    <button type="button" 
                            class="custom-btn btn btn-danger" 
                            data-bs-toggle="modal" 
                            data-bs-target="#BookingModal">
                            Reservation
                    </button>
                </div>
            </div>
    </nav>