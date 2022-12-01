<?php

    function admin_bar(){

      if(is_user_logged_in()){
        add_filter( 'show_admin_bar', '__return_true' , 1000 );
      }
    }
    add_action('init', 'admin_bar' );

    //Theme Files
    function theme_files(){
      wp_enqueue_style('main-style', get_template_directory_uri( ) . '/style.css');
      wp_enqueue_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css');
  
      wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js', array( 'jquery'), true, true);
      wp_enqueue_script('custom-js', get_template_directory_uri( ) . '/js/custom.js',array('jquery'), true, true);
    
    }
    add_action('wp_enqueue_scripts', 'theme_files');
 
    // WP Core Custom Fields
    add_filter('acf/settings/remove_wp_meta_box', '__return_false');

    //Title Tag Support
    add_theme_support('title-tag'); 

    /**
     * Register our sidebars and widgetized areas.
     *
     */
    function custom_widgets() {

      register_sidebar( array(
        'name'          => 'Front Page Banner Text',
        'id'            => 'front_page_banner_text',
        'before_widget' => '<div class="banner-text">',
        'after_widget' => '</div>',
        'before_title'  => '<h1 class="fs-4">',
        'after_title'   => '</h1>',
      ) );

      register_sidebar( array(
        'name'          => 'Front Page Banner Video',
        'id'            => 'front_page_banner_video',
        'before_widget' => '<div id="video-wrapper" class="video-wrap">',
        'after_widget' => '</div>',
        'before_title'  => '',
        'after_title'   => '',
      ) );

      register_sidebar( array(
        'name'          => 'Copyright',
        'id'            => '',
        'before_widget' => '',
        'after_widget' => '',
        'before_title'  => '',
        'after_title'   => '',
      ) );

      register_sidebar( array(
        'name'          => 'Social Media Buttons',
        'id'            => 'social_media',
        'before_widget' => '<div class="col-lg-4 col-md-4 col-xs-12 kaya-mt30"><div class="social-icon">',
        'after_widget' => '</div></div>',
        'before_title'  => '<h6 class="text-white mb-lg-4 mb-3">',
        'after_title'   => '</h6>',
      ) );

      register_sidebar( array(
        'name'          => 'Maps Button',
        'id'            => 'maps_button',
        'before_widget' => '<div class="col-lg-4 col-md-4 col-xs-12 kaya-mt30">',
        'after_widget' => '</div>',
        'before_title'  => '<h6 class="text-white mb-lg-4 mb-3">',
        'after_title'   => '</h6>',
      ) );

      register_sidebar( array(
        'name'          => 'Default Sidebar',
        'id'            => 'default_sidebar',
        'before_widget' => '<aside class="card small mb-3 default_sidebar">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="card-header fs-5">',
        'after_title'   => '</h3>',
      ) );

      register_sidebar( array(
        'name'          => 'Footer Image',
        'id'            => 'footer_image',
        'before_widget' => '<div class="footer-image col-12 d-none">',
        'after_widget' => '</div>',
        'before_title'  => '',
        'after_title'   => '',
      ) );

      register_sidebar( array(
        'name'          => 'Footer Widgets',
        'id'            => 'footer_widgets',
        'before_widget' => '<div class="col-log-3 col-md-3"><div class="footer_widget small">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h4 class="fs-6">',
        'after_title'   => '</h4>',
      ) );

      register_sidebar( array(
        'name'          => 'Working Hours',
        'id'            => 'working_hours',
        'before_widget' => '<div class="col-lg-4 col-md-4 col-xs-12 kaya-mt30">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="text-white mb-lg-4 mb-2">',
        'after_title'   => '</h6>',
      ) );

      register_sidebar( array(
        'name'          => 'Modal Forms',
        'id'            => 'modal_forms',
        'before_widget' => '<div class="modal-body d-flex flex-column justify-content-center"><div class="booking">',
        'after_widget'  => '</div></div>',
        'before_title'  => '',
        'after_title'   => '',
      ) );

    }
    add_action( 'widgets_init', 'custom_widgets' );

    /**
    * Add HTML5 theme support.
    */
    function wpdocs_after_setup_theme() {
      add_theme_support( 'html5', array( 'search-form' ) );
    }
    add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

    // Page excerpt support
    add_post_type_support( 'page', 'excerpt' );

    // Post Thumbnail support
    add_theme_support( 'post-thumbnails' );

    // bootstrap 5 wp_nav_menu walker
    class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
    {
      private $current_item;
      private $dropdown_menu_alignment_values = [
        'dropdown-menu-start',
        'dropdown-menu-end',
        'dropdown-menu-sm-start',
        'dropdown-menu-sm-end',
        'dropdown-menu-md-start',
        'dropdown-menu-md-end',
        'dropdown-menu-lg-start',
        'dropdown-menu-lg-end',
        'dropdown-menu-xl-start',
        'dropdown-menu-xl-end',
        'dropdown-menu-xxl-start',
        'dropdown-menu-xxl-end'
      ];

  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $dropdown_menu_class[] = '';
    foreach($this->current_item->classes as $class) {
      if(in_array($class, $this->dropdown_menu_alignment_values)) {
        $dropdown_menu_class[] = $class;
      }
    }
    $indent = str_repeat("\t", $depth);
    $submenu = ($depth > 0) ? ' sub-menu' : '';
    $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $this->current_item = $item;

    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $li_attributes = '';
    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
    $classes[] = 'nav-item';
    $classes[] = 'nav-item-' . $item->ID;
    if ($depth && $args->walker->has_children) {
      $classes[] = 'dropdown-menu dropdown-menu-end';
    }

    $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = ' class="' . esc_attr($class_names) . '"';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
    $nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
    $attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}
// register a new menu
register_nav_menu('main-menu', 'Main menu');

    // related news 
    function example_cats_related_post() {

      $post_id = get_the_ID();
      $cat_ids = array();
      $categories = get_the_category( $post_id );
  
      if(!empty($categories) && !is_wp_error($categories)):
          foreach ($categories as $category):
              array_push($cat_ids, $category->term_id);
          endforeach;
      endif;
  
      $current_post_type = get_post_type($post_id);
  
      $query_args = array( 
          'category__in'   => $cat_ids,
          'post_type'      => $current_post_type,
          'post__not_in'    => array($post_id),
          'posts_per_page'  => '3',
       );
  
      $related_cats_post = new WP_Query( $query_args );
  
      if($related_cats_post->have_posts()):
           while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
                    
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card">
                                <a href="<?php the_permalink(); ?>">
                                    <img 
                                      src="<?php echo get_the_post_thumbnail_url()?>" 
                                      class="card-img-top" 
                                      alt=""
                                    >
                                </a>
                                
                                <div class="card-body">
                                    <span class="category-tag bg-danger"><?php the_category( ', ' ); ?></span>

                                    <h5 class="card-title">
                                        <a class="text-decoration-none text-dark" href="<?php the_permalink(); ?>">
                                          <?php the_title(); ?>
                                        </a>
                                    </h5>
                                </div>
                            </div> 
                        </div>
          <?php endwhile;
          // Restore original Post Data
          wp_reset_postdata();
       endif;
    }
?>