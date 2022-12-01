<?php get_header(); ?>

<main>

            <header class="site-header site-news-detail-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">
                              <?php echo get_the_title(); ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </header>

            <section class="news-detail section-padding pt-0">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <div class="col-lg-9 col-md-12 col-sm-12 col-9 mx-auto mt-5">
                                    <?php 
                                        // check if the post or page has a Featured Image assigned to it.
                                        if ( has_post_thumbnail() ) { 
                                    ?>
                                        <img class="img-fluid rounded pb-3" src="<?php echo get_the_post_thumbnail_url()?>" alt="<?php echo get_the_title(); ?>" />
                                    <?php }else{ ?>
                                        <img class="img-fluid rounded pb-3" src="<?php echo get_template_directory_uri() . '/img/placeholder.png' ?>" alt="<?php echo get_the_title(); ?>" />
                                    <?php } ?>

                                <article class="main-content">
                                    <?php the_content(); ?>
                                    <p class="postmetadata alert alert-secondary">
                                        <?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?>
                                        <br>
                                        <?php the_tags('Social tagging: ', ', '); ?>
                                    </p>
                                    
                                </article>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="comments section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-12 mx-auto">
                            <?php 
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif; 
                            ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="related-news section-padding bg-white">
                <div class="container">
                    <div class="row">
                        <h2 class="text-center mb-lg-5 mb-4">Related News</h2>
                        <?php example_cats_related_post() ?>
                    </div>
                </div>
            </section>

            <!--section class="newsletter section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="images/charles-deluvio-FdDkfYFHqe4-unsplash.jpg" class="img-fluid newsletter-image" alt="">
                        </div>

                        <div class="col-lg-6 col-12 d-flex align-items-center mt-5 mt-lg-0 mx-auto">
                            <div class="subscribe-form-wrap">
                                <h4 class="mb-0">Our Newsletter</h4>

                                <p>The food news every day</p>

                                <form class="custom-form subscribe-form mt-4" role="form">
                                    <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Your email address" required="">

                                    <button type="submit" class="form-control mb-3" id="subscribe">Subscribe</button>

                                    <small>By signing up, you agree to our Privacy Notice and the data policy</small>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </section -->

        </main>

<?php get_footer(); ?>