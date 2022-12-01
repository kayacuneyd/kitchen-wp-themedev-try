        <!--footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h4 class="text-white mb-4 me-5 mx-auto text-center">Crispy Kitchen</h4>
                    </div>
                    
                    </?php if ( is_active_sidebar( 'footer_widgets' ) ) : ?>
                            
                        </?php dynamic_sidebar( 'footer_widgets' ); ?>
                        
                    </?php endif; ?>

                </div>
            </div>
        </footer-->

        <footer 
            class="site-footer section-padding" 
            style="background-image: url('<?php echo get_template_directory_uri( ); ?>/images/daan-evers-tKN1WXrzQ3s-unsplash.jpg')">
            
            <div class="container">
                <div class="row text-center">
                        <div class="footer-image col-12 d-none">
                            <?php if ( is_active_sidebar( 'footer_image' ) ) : ?>  
                                <?php dynamic_sidebar( 'footer_image' ); ?>
                            <?php endif; ?>                    
                        </div>

                        <?php if ( is_active_sidebar( 'maps_button' ) ) : ?>  
                            <?php dynamic_sidebar( 'maps_button' ); ?>
                        <?php endif; ?>

                        <?php if ( is_active_sidebar( 'working_hours' ) ) : ?>  
                            <?php dynamic_sidebar( 'working_hours' ); ?>
                        <?php endif; ?>

                        <?php if ( is_active_sidebar( 'social_media' ) ) : ?>  
                            <?php dynamic_sidebar( 'social_media' ); ?>
                        <?php endif; ?>
                        
                </div><!-- row ending -->   
            </div><!-- container ending -->

            <div class="copyright pt-3 pb-3 border-top-gray">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <p class="small m-0 text-white">
                                Copyright &copy; <?php echo date('Y'); ?> -
                                    <a href="https://kayacuneyt.com" target="_blank"> 
                                        Cüneyt Kaya
                                    </a>
                                - All rights reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
             
        </footer>
        

        <!-- Modal -->
        <div class="modal fade" id="BookingModal" tabindex="-1" aria-labelledby="BookingModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">  
                    <div class="modal-body d-flex flex-column justify-content-center">
                        <div class="booking">          
                            <form class="booking-form row" role="form" method="post">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <?php if ( is_active_sidebar( 'modal_forms' ) ) : ?>  
                                    <?php dynamic_sidebar( 'modal_forms' ); ?>
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>

        <?php wp_footer(); ?>
    </body>
</html>