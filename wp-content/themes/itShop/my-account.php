<?php /** Template Name: Личный кабинет  */ ?>
<?php get_header(); ?>
<!-- ::::::  Start  Breadcrumb Section  ::::::  -->
<div class="page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php the_breadcrumb(); ?> 
            </div>
        </div>
    </div>
</div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->
<!-- ::::::  Start  Main Container Section  ::::::  -->
<main id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                /* Get user info. */
                global $current_user, $wp_roles;
                get_currentuserinfo();

                /* Load the registration file. */
                require_once( ABSPATH . WPINC . '/registration.php' );
                $error = array();    
                /* If profile was saved, update profile. */
                if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) && $_POST['action'] == 'update-user' ) {
                
                    /* Update user password. */
                    if ( !empty($_POST['pass1'] ) && !empty( $_POST['pass2'] ) ) {
                        if ( $_POST['pass1'] == $_POST['pass2'] )
                            wp_update_user( array( 'ID' => $current_user->ID, 'user_pass' => esc_attr( $_POST['pass1'] ) ) );
                        else
                            $error[] = __('The passwords you entered do not match.  Your password was not updated.', 'profile');
                    }
                
                    /* Update user information. */
                    if ( !empty( $_POST['url'] ) )
                        update_user_meta( $current_user->ID, 'user_url', esc_url( $_POST['url'] ) );
                    if ( !empty( $_POST['email'] ) ){
                        if (!is_email(esc_attr( $_POST['email'] )))
                            $error[] = __('The Email you entered is not valid.  please try again.', 'profile');
                        elseif(email_exists(esc_attr( $_POST['email'] )) != $current_user->id )
                            $error[] = __('This email is already used by another user.  try a different one.', 'profile');
                        else{
                            wp_update_user( array ('ID' => $current_user->ID, 'user_email' => esc_attr( $_POST['email'] )));
                        }
                    }
                
                    if ( !empty( $_POST['first-name'] ) )
                        update_user_meta( $current_user->ID, 'first_name', esc_attr( $_POST['first-name'] ) );
                    if ( !empty( $_POST['last-name'] ) )
                        update_user_meta($current_user->ID, 'last_name', esc_attr( $_POST['last-name'] ) );
                    if ( !empty( $_POST['description'] ) )
                        update_user_meta( $current_user->ID, 'description', esc_attr( $_POST['description'] ) );
                
                    if ( count($error) == 0 ) {
                        //action hook for plugins and extra fields saving
                        do_action('edit_user_profile_update', $current_user->ID);
                        wp_redirect( get_permalink() );
                        exit;
                    }
                }
                ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>">
                    <div class="entry-content entry">
                        <?php the_content(); ?>
                        <?php if ( !is_user_logged_in() ) : ?>
                           
                         <?php else : ?>
                            <?php if ( count($error) > 0 ) echo '<p class="error">' . implode("<br />", $error) . '</p>'; ?>
                            <?php endif; ?>
                    </div><!-- .entry-content -->
                </div><!-- .hentry .post -->
                    <?php endwhile; ?>
                    <?php else: ?>
                        <p class="no-data">
                            <?php _e('Sorry, no page matched your criteria.', 'profile'); ?>
                        </p><!-- .no-data -->
                    <?php endif; ?>
            
                
            </div>
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->

<?php get_footer(); ?>