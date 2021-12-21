<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

<div class="u-columns col2-set" id="customer_login">

	<div class="u-column1 col-1">

<?php endif; ?>
		<!-- ::::::  Start  Main Container Section  ::::::  -->
<main id="main-container" class="main-container">
    <div class="container">
        <div class="row">
           <div class="col-12">
            <!-- login area start -->
            <div class="login-register-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                            <div class="login-register-wrapper">
                                <div class="login-register-tab-list nav">
                                    <a class="active" data-toggle="tab" href="#lg1">
                                        <h4><?php esc_html_e( 'Login', 'woocommerce' ); ?></h4>
                                    </a>
                                    <a data-toggle="tab" href="#lg2">
                                        <h4><?php esc_html_e( 'Register', 'woocommerce' ); ?></h4>
                                    </a>
                                </div>
                                <div class="tab-content">
                                    <div id="lg1" class="tab-pane active">
                                        <div class="login-form-container">
                                            <div class="login-register-form">
                                                <form method="post">
													<?php do_action( 'woocommerce_login_form_start' ); ?>
                                                    <div class="form-box__single-group">
                                                        <input type="text"  placeholder="<?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                                                    </div>
                                                    <div class="form-box__single-group">
                                                        <input  placeholder="<?php esc_html_e( 'Password', 'woocommerce' ); ?>" type="password" name="password" id="password" autocomplete="current-password" />
                                                    </div>
													<?php do_action( 'woocommerce_login_form' ); ?>
                                                    <div class="d-flex justify-content-between flex-wrap m-tb-20">
                                                        <label for="account-remember">
                                                            <input type="checkbox" name="rememberme"  id="rememberme" value="forever" />
                                                            <span>Запомнить меня</span>
                                                        </label>
														<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                                                        <a class="link--gray" href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
                                                    </div>
                                                    <button class="btn btn--box btn--small btn--blue btn--uppercase btn--weight" type="submit"name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
													<?php do_action( 'woocommerce_login_form_end' ); ?>
												</form>
												<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="lg2" class="tab-pane">
                                        <div class="login-form-container">
                                            <div class="login-register-form">
                                                <form method="post"  <?php do_action( 'woocommerce_register_form_tag' ); ?>>
												<?php do_action( 'woocommerce_register_form_start' ); ?>
													<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
                                                    <div class="form-box__single-group">
                                                        <input type="text" id="form-uregister-sername-email" placeholder="<?php esc_html_e( 'Username', 'woocommerce' ); ?>" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                                                    </div>
													<?php endif; ?>
                                                    <div class="form-box__single-group">
                                                        <input type="email"  placeholder="<?php esc_html_e( 'Email address', 'woocommerce' ); ?>" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                                                    </div>
													<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
													<div class="form-box__single-group">
                                                        <input type="password" id="form-uregister-sername-password" placeholder="<?php esc_html_e( 'Password', 'woocommerce' ); ?>">
                                                    </div>
													<?php else : ?>
														<p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>
													<?php endif; ?>										
													<?php do_action( 'woocommerce_register_form' ); ?>
                                                    <div class="form-box__single-group m-b-20">
                                                        <input type="password" placeholder="Повторите пароль" name="password" id="reg_password" autocomplete="new-password" />
                                                    </div>
													<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
                                                    <button class="btn btn--box btn--small btn--blue btn--uppercase btn--weight" type="submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
													<?php do_action( 'woocommerce_register_form_end' ); ?>
												</form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php endif; ?>
			<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
            <!-- login area end -->
           </div>
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->


