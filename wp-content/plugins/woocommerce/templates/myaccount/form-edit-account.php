<?php
/**
 * Edit account form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */


defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_edit_account_form' ); ?>
<form  class="woocommerce-EditAccountForm edit-account" action="" method="post" <?php do_action( 'woocommerce_edit_account_form_tag' ); ?> >
<?php do_action( 'woocommerce_edit_account_form_start' ); ?>

        <h4 class="account-title">Настройки аккаунта</h4>        
		<div class="account-details">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-box__single-group">
                        <input type="text" placeholder="<?php esc_html_e( 'First name', 'woocommerce' ); ?>" name="account_first_name" id="account_first_name" autocomplete="given-name" value="<?php echo esc_attr( $user->first_name ); ?>" />
						<div class="clear"></div>
					</div>
                </div>
				<div class="col-md-6">
                    <div class="form-box__single-group">
                        <input type="text" placeholder="<?php esc_html_e( 'Last name', 'woocommerce' ); ?>" name="account_last_name" id="account_last_name" autocomplete="family-name" value="<?php echo esc_attr( $user->last_name ); ?>" />
						<div class="clear"></div>
                    </div>
                </div>
				<div class="col-md-12">
                    <div class="form-box__single-group">
                        <input type="text" placeholder="<?php esc_html_e( 'Display name', 'woocommerce' ); ?>" name="account_display_name" id="account_display_name" value="<?php echo esc_attr( $user->display_name ); ?>" /> <span><em><?php esc_html_e( 'This will be how your name will be displayed in the account section and in reviews', 'woocommerce' ); ?></em></span>
						<div class="clear"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-box__single-group">
                        <input type="email" placeholder="<?php esc_html_e( 'Email address', 'woocommerce' ); ?>" name="account_email" id="account_email" autocomplete="email" value="<?php echo esc_attr( $user->user_email ); ?>" />
						<div class="clear"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-box__single-group">
                        <h5 class="title"<?php esc_html_e( 'Password change', 'woocommerce' ); ?>></h5>
                    </div>
                </div>
				<div class="col-md-12">
                    <div class="form-box__single-group">
                        <h5 class="title">Изменить пароль</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-box__single-group">
                        <input type="password" placeholder="<?php esc_html_e( 'Current password (leave blank to leave unchanged)', 'woocommerce' ); ?>" name="password_current" id="password_current" autocomplete="off" />
						<div class="clear"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-box__single-group">
                        <input type="password" placeholder="<?php esc_html_e( 'New password (leave blank to leave unchanged)', 'woocommerce' ); ?>" name="password_1" id="password_1" autocomplete="off" />
						<div class="clear"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-box__single-group">
                        <input type="password" placeholder="<?php esc_html_e( 'Confirm new password', 'woocommerce' ); ?>" name="password_2" id="password_2" autocomplete="off" />
						<div class="clear"></div>
                    </div>
                </div>
				
				<?php do_action( 'woocommerce_edit_account_form' ); ?>
                <div class="col-md-6">
                    <div class="form-box__single-group">
						<?php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>
                        <button type="submit" class="btn btn--box btn--small btn--uppercase btn--blue"value="<?php esc_attr_e( 'Save changes', 'woocommerce' ); ?>"><?php esc_html_e( 'Save changes', 'woocommerce' ); ?></button>
						<input type="hidden" name="action" value="save_account_details" />
					</div>
                </div>
            </div>

</div>
<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
</form>

<?php do_action( 'woocommerce_after_edit_account_form' ); ?>