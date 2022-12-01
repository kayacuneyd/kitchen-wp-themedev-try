<?php get_header(); ?>

        <main>

            <section class="hero">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-12 m-auto">
                            <div class="heroText">
                                <h1 class="text-white mb-lg-5 mb-3">Delicious Steaks</h1>
                                <div class="c-reviews my-3 d-flex flex-wrap align-items-center">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <h4 class="text-white mb-0 me-3">4.4/5</h4>
                                        <div class="reviews-stars">
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                        </div>
                                    </div>
                                    <p class="text-white w-100">From <strong>1,206+</strong> Customer Reviews</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-12">
                            <div id="carouselExampleCaptions" class="carousel carousel-fade hero-carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="carousel-image-wrap">
                                            <img src="<?php echo get_template_directory_uri( ) ?>/images/slide/jay-wennington-N_Y88TWmGwA-unsplash.jpg" class="img-fluid carousel-image" alt="">
                                        </div>
                                        
                                        <div class="carousel-caption">
                                            <span class="text-white">
                                                <i class="bi-geo-alt me-2"></i>
                                                Manhattan, New York
                                            </span>

                                            <h4 class="hero-text">Fine Dining Restaurant</h4>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="carousel-image-wrap">
                                            <img src="<?php echo get_template_directory_uri( ) ?>/images/slide/jason-leung-O67LZfeyYBk-unsplash.jpg" class="img-fluid carousel-image" alt="">
                                        </div>
                                        
                                        <div class="carousel-caption">
                                            <div class="d-flex align-items-center">
                                                <h4 class="hero-text">Steak</h4>

                                                <span class="price-tag ms-4"><small>$</small>26.50</span>
                                            </div>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <h5 class="reviews-text mb-0 me-3">3.8/5</h5>

                                                <div class="reviews-stars">
                                                    <i class="bi-star-fill reviews-icon"></i>
                                                    <i class="bi-star-fill reviews-icon"></i>
                                                    <i class="bi-star-fill reviews-icon"></i>
                                                    <i class="bi-star reviews-icon"></i>
                                                    <i class="bi-star reviews-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="carousel-image-wrap">
                                            <img src="<?php echo get_template_directory_uri( ) ?>/images/slide/ivan-torres-MQUqbmszGGM-unsplash.jpg" class="img-fluid carousel-image" alt="">
                                        </div>
                                        
                                        <div class="carousel-caption">
                                            <div class="d-flex align-items-center">
                                                <h4 class="hero-text">Sausage Pasta</h4>

                                                <span class="price-tag ms-4"><small>$</small>18.25</span>
                                            </div>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <h5 class="reviews-text mb-0 me-3">4.2/5</h5>

                                                <div class="reviews-stars">
                                                    <i class="bi-star-fill reviews-icon"></i>
                                                    <i class="bi-star-fill reviews-icon"></i>
                                                    <i class="bi-star-fill reviews-icon"></i>
                                                    <i class="bi-star-fill reviews-icon"></i>
                                                    <i class="bi-star reviews-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-wrap">
                    <video autoplay="" loop="" muted="" class="custom-video" poster="">
                        <source src="<?php echo get_template_directory_uri( ) ?>/video/production_ID_3769033.mp4" type="video/mp4">
                        	Your browser does not support the video tag.
                    	</>
                </div>
                <div class="overlay"></div>
            </section>


            

            <section class="menu section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center mb-lg-5 mb-4">Special Menus</h2>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="menu-thumb">
                                <div class="menu-image-wrap">
                                    <img src="<?php echo get_template_directory_uri( ) ?>/images/breakfast/brett-jordan-8xt8-HIFqc8-unsplash.jpg" class="img-fluid menu-image" alt="">
                                    <span class="menu-tag bg-warning">Breakfast</span>
                                </div>
                                <div class="menu-info d-flex flex-wrap align-items-center">
                                    <h4 class="mb-0"><?php the_field('food_name'); ?></h4>                                    
                                    <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>12.50</span>
                                    <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                        <h6 class="reviews-text mb-0 me-3">4.3/5</h6>
                                        <div class="reviews-stars">
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                        </div>
                                        <p class="reviews-text mb-0 ms-4">102 Reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="menu-thumb">
                                <div class="menu-image-wrap">
                                    <img src="<?php echo get_template_directory_uri( ) ?>/images/lunch/farhad-ibrahimzade-MGKqxm6u2bc-unsplash.jpg" class="img-fluid menu-image" alt="">
                                    <span class="menu-tag bg-warning">Lunch</span>
                                </div>
                                <div class="menu-info d-flex flex-wrap align-items-center">
                                    <h4 class="mb-0">Tooplate Soup</h4>
                                    <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>24.50</span>
                                    <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                        <h6 class="reviews-text mb-0 me-3">3/5</h6>
                                        <div class="reviews-stars">
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                        </div>
                                        <p class="reviews-text mb-0 ms-4">50 Reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="menu-thumb">
                                <div class="menu-image-wrap">
                                    <img src="<?php echo get_template_directory_uri( ) ?>/images/dinner/keriliwi-c3mFafsFz2w-unsplash.jpg" class="img-fluid menu-image" alt="">

                                    <span class="menu-tag bg-warning">Dinner</span>
                                </div>

                                <div class="menu-info d-flex flex-wrap align-items-center">
                                    <h4 class="mb-0">Premium Steak</h4>

                                    <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>45</span>

                                    <del class="ms-4"><small>$</small>150</del>

                                    <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                        <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                        <div class="reviews-stars">
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                        </div>

                                        <p class="reviews-text mb-0 ms-4">86 Reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="menu-thumb">
                                <div class="menu-image-wrap">
                                    <img src="<?php echo get_template_directory_uri( ) ?>/images/dinner/farhad-ibrahimzade-ZipYER3NLhY-unsplash.jpg" class="img-fluid menu-image" alt="">

                                    <span class="menu-tag bg-warning">Dinner</span>
                                </div>

                                <div class="menu-info d-flex flex-wrap align-items-center">
                                    <h4 class="mb-0">Seafood Set</h4>

                                    <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>86</span>

                                    <del class="ms-4"><small>$</small>124</del>

                                    <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                        <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                        <div class="reviews-stars">
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                        </div>

                                        <p class="reviews-text mb-0 ms-4">44 Reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="menu-thumb">
                                <div class="menu-image-wrap">
                                    <img src="<?php echo get_template_directory_uri( ) ?>/images/breakfast/louis-hansel-dphM2U1xq0U-unsplash.jpg" class="img-fluid menu-image" alt="">

                                    <span class="menu-tag bg-warning">Breakfast</span>
                                </div>

                                <div class="menu-info d-flex flex-wrap align-items-center">
                                    <h4 class="mb-0">Burger Set</h4>

                                    <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>20.50</span>

                                    <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                        <h6 class="reviews-text mb-0 me-3">4.3/5</h6>

                                        <div class="reviews-stars">
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                        </div>

                                        <p class="reviews-text mb-0 ms-4">102 Reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <section class="BgImage" style="background-image: url('<?php echo get_template_directory_uri( ); ?>/images/alex-haney-CAhjZmVk5H4-unsplash.jpg')"></section>
            <section class="news section-padding">
                <div class="container">
                    <div class="row">
                        <h2 class="text-center mb-lg-5 mb-4">News &amp; Events</h2>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="news-thumb mb-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <!--img src="</?php echo get_template_directory_uri( ) ?>/images/news/pablo-merchan-montes-Orz90t6o0e4-unsplash.jpg" class="img-fluid news-image" alt="" -->
                                        <?php 
                                            // check if the post or page has a Featured Image assigned to it.
                                            if ( has_post_thumbnail() ) { 
                                        ?>
                                            <img class="img-fluid rounded news-image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" />
                                        <?php }else{ ?>
                                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri() . '/images/sincerely-media-HoEYgBL_Gcs-unsplash.jpg' ?>" alt="<?php echo get_the_title(); ?>" />
                                        <?php } ?>
                                    </a>
                                    
                                    <div class="news-text-info news-text-info-large">
                                        <span class="category-tag bg-danger"><?php echo the_category(', '); ?></span>

                                        <h5 class="news-title mt-2">
                                            <a href="news-detail.html" class="news-title-link text-decoration-none"><?php echo get_the_title(); ?></a>
                                        </h5>
                                    </div>
                                </div> 
                            </div>
                        <?php endwhile; else : ?>
                            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </main>

        
    
        
<?php get_footer(); ?>