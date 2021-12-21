<?php
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
add_theme_support( 'custom-logo' );

function theme_name_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'plaza-icon', get_template_directory_uri() . '/assets/css/plaza-icon.css' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.css' );
    wp_enqueue_style( 'themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css' );
    wp_enqueue_style( 'swiper.min', get_template_directory_uri() . '/assets/css/swiper.min.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );
    

    
    
    
    
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}

register_nav_menus( array(
    'header-menu' => esc_html__('Header-menu'),
) );

function clean_custom_menus() {
    $menu_name = 'header-menu'; 
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        $menu_list = '<nav>' ."\n";
        $menu_list .= "\t\t\t\t". '<ul class="header__nav">' ."\n";
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $url = $menu_item->url;
            $menu_list .= "\t\t\t\t\t". '<li class="header__nav-item pos-relative"><a href="'. $url .'" class="header__nav-link">'. $title .'</a></li>' ."\n";
        }
        $menu_list .= "\t\t\t\t". '</ul>' ."\n";
        $menu_list .= "\t\t\t". '</nav>' ."\n";
    }
    echo $menu_list;
}



function get_categories_product($categories_list = "", $parent_id = 0, $i = 0) {
    $get_categories_product = get_terms("product_cat", [
        "orderby" => "name", // Тип сортировки
        "order" => "ASC", // Направление сортировки
        "hide_empty" => 0, // Скрывать пустые. 1 - да, 0 - нет.
        "hierarchical" => 1,
        "parent" => $parent_id
    ]);

    if(count($get_categories_product) > 0) {
        if($parent_id == 0) {
            $categories_list .= '<ul class="menu-content">';
            $i = 0;
        } else {
            $i++;
            $categories_list .= '<ul class="sub-menu sub-menu-'.$i.'">';
        }
        foreach($get_categories_product as $categories_item) {
            $categories_list .= '<li class="menu-item"><a href="'.esc_url(get_term_link((int)$categories_item->term_id)).'">'.esc_html($categories_item->name).'<i class="icon-chevron-right"></i></a>';
            $categories_list .= get_categories_product("", $categories_item->term_id, $i);
            $categories_list .= '</li>';
        }

        $categories_list .= '</ul>';

    }

    return $categories_list;

}


function my_account_loginout_link() {    

    if (is_user_logged_in() ) {  
    global $wp; 
    $current_user = get_user_by( 'id', get_current_user_id() ); 

    echo ' <p>Здраствуйте, <strong><a href="'. get_permalink( wc_get_page_id( 'myaccount' ) ) .'">'.$current_user->display_name.'</a></strong>! (Вы не <strong>'.$current_user->display_name.'</strong>?<a href="'. wp_logout_url( get_permalink( wc_get_page_id( 'shop' ) ) ) .'"> Выйти</a> )</p>';

}
    
    }
    function catch_that_image() {
        global $post, $posts;
        $first_img = '';
        ob_start();
        ob_end_clean();
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
        $first_img = $matches [1] [0];
       
        if(empty($first_img)){ //Defines a default image
          $first_img = "/images/default.jpg";
        }
        return $first_img;
      }


      /*=============================================
      =            BREADCRUMBS			            =
      =============================================*/
      
      //  to include in functions.php
      function the_breadcrumb() {
      
          $sep = ' > ';
      
          if (!is_front_page()) {
          
          // Start the breadcrumb with a link to your homepage
              echo '<a href="';
              echo get_option('home');
              echo '">';
              echo'Главная';
              echo '</a>' . $sep;
          
          // Check if the current page is a category, an archive or a single page. If so show the category or archive name.
              if (is_category() || is_single() ){
                  the_category('title_li=');
              } elseif (is_archive() || is_single()){
                  if ( is_day() ) {
                      printf( __( '%s', 'text_domain' ), get_the_date() );
                  } elseif ( is_month() ) {
                      printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
                  } elseif ( is_year() ) {
                      printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
                  } else {
                      _e( 'Blog Archives', 'text_domain' );
                  }
              }
          
          // If the current page is a single post, show its title with the separator
              if (is_single()) {
                  echo $sep;
                  the_title();
              }
          
          // If the current page is a static page, show its title.
              if (is_page()) {
                  echo the_title();
              }
          
          // if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
              if (is_home()){
                  global $post;
                  $page_for_posts_id = get_option('page_for_posts');
                  if ( $page_for_posts_id ) { 
                      $post = get_post($page_for_posts_id);
                      setup_postdata($post);
                      the_title();
                      rewind_posts();
                  }
              }
      
              echo '</div>';
          }
      }
      wp_tag_cloud( array(
        'smallest'  => 8,
        'largest'   => 22,
        'unit'      => 'pt',
        'number'    => 45,
        'format'    => 'flat',
        'separator' => "\n",
        'orderby'   => 'name',
        'order'     => 'ASC',
        'exclude'   => null,
        'include'   => null,
        'link'      => 'view',
        'taxonomy'  => 'post_tag',
        'echo'      => true,
        'topic_count_text_callback' => 'default_topic_count_text',
    ) );

       

?>
