<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */  ?>
<div class="my-account-area">
    <div class="row">
		<div class="col-xl-3 col-md-4">
			<div class="my-account-menu">
				<?php
				defined( 'ABSPATH' ) || exit;

				/**
				 * My Account navigation.
				 *
				 * @since 2.6.0
				 */
				do_action( 'woocommerce_account_navigation' ); ?>
			</div>
		</div>
		<div class="col-xl-8 col-md-8">
            <div class="tab-content my-account-tab" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel" aria-labelledby="pills-dashboard-tab">
					<div class="account-wrapper">
							<?php
								/**
								 * My Account content.
								 *
								 * @since 2.6.0
								 */
								do_action( 'woocommerce_account_content' );
							?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
