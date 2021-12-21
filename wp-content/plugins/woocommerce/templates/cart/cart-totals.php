<?php
/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.3.6
 */

defined( 'ABSPATH' ) || exit;

?>
<div class="cart_totals <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">

	<?php do_action( 'woocommerce_before_cart_totals' ); ?>


	<table cellspacing="0" class="shop_table shop_table_responsive">


		<?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

			<?php do_action( 'woocommerce_cart_totals_before_shipping' ); ?>

			<?php wc_cart_totals_shipping_html(); ?>

			<?php do_action( 'woocommerce_cart_totals_after_shipping' ); ?>

		<?php elseif ( WC()->cart->needs_shipping() && 'yes' === get_option( 'woocommerce_enable_shipping_calc' ) ) : ?>

			<tr class="shipping">
				<th><?php esc_html_e( 'Shipping', 'woocommerce' ); ?></th>
				<td data-title="<?php esc_attr_e( 'Shipping', 'woocommerce' ); ?>"><?php woocommerce_shipping_calculator(); ?></td>
			</tr>

		<?php endif; ?>

		

	</table>



</div>

<div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="sidebar__widget gray-bg m-t-40">
                    <div class="sidebar__box">
                        <h5 class="total-cost">Всего:<span><?php wc_cart_totals_subtotal_html(); ?></span></h5>
                    </div>
                    <div class="total-shipping">
                        <span>Тарифы доставки</span>
						<?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>
							<?php do_action( 'woocommerce_cart_totals_before_shipping' ); ?>

							<?php wc_cart_totals_shipping_html(); ?>
										
							<?php do_action( 'woocommerce_cart_totals_after_shipping' ); ?>
			
                        <ul class="shipping-cost m-t-10">
                            <li>
								<?php elseif ( WC()->cart->needs_shipping() && 'yes' === get_option( 'woocommerce_enable_shipping_calc' ) ) : ?>
                                <label for="ship-standard">
                                    <input type="radio" class="shipping-select" name="shipping-cost" value="Standard" id="ship-standard" checked><span><?php woocommerce_shipping_calculator(); ?></span>
                                </label>
                                <span class="ship-price">0 тг</span>
								<?php endif; ?>
                            </li>
                            <li>
                                <label for="ship-express">
                                    <input type="radio" class="shipping-select" name="shipping-cost" value="Express" id="ship-express"><span>Экспресс за 1 час по городу</span>
                                </label>
                                <span class="ship-price">1000 тг</span>
                            </li>
                        </ul>
                    </div>
                    <div class="total-shipping">
                        <span>Способы оплаты</span>
                        <ul class="shipping-cost m-t-10">
                            <li>
                                <label for="ship-standard">
                                    <input type="radio" class="shipping-select" name="shipping-cost" value="Standard" id="ship-standard" checked><span>Оплата наличными при получении заказов</span>
                                </label>
                            </li>
                            <li>
                                <label for="ship-express">
                                    <input type="radio" class="shipping-select" name="shipping-cost" value="Express" id="ship-express"><span>Оплата платежными картами</span>
                                </label>
                            </li>
                        </ul>
                    </div>
					<?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?>
                    <h4 class="grand-total m-tb-25">Итоговая сумма <span><?php wc_cart_totals_order_total_html(); ?></span></h4>
                    <div class="wc-proceed-to-checkout">
						<?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
						<?php do_action( 'woocommerce_after_cart_totals' ); ?>
					</div>
                </div>
            </div>
        </div>