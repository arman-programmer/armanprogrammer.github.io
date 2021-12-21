<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
<head>	
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title( '|', true, 'right' ); ?> </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
		<?php
		wp_body_open();
		?>
<!-- ::::::  Start Large Header Section  ::::::  -->
<header>
        <div class="header header--1">
            <!-- Start Header Middle area -->
            <div class="header__middle header__middle--style-2 p-tb-30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="header__logo">
                                <?php the_custom_logo(); ?>
                            </div>
                        </div>
                        <div class="col-md-9 offset-md-1">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <?php echo get_search_form(); ?>
                                </div>
                                <div class="col-lg-4 offset-lg-1">
                                    <h5 class="number">+7(771)909-36-55</h5>
                                    <h6><a href="#" class="number-1">Закажите звонок</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Header Middle area -->

            <!-- Start Header Menu Area -->
            <div class="header-menu">
                <div class="container">
                    <div class="row col-12 justify-content-between">   
                            <?php if (function_exists(clean_custom_menus())) clean_custom_menus(); ?>
                        <div class="header__wishlist-box">
                         <!-- Start Header Add Cart Box -->
                            <div class="header-add-cart pos-relative m-l-40">
                            <?php global $woocommerce; ?>
                                <a href="#offcanvas-add-cart__box" class="header__wishlist-link offcanvas-toggle">
                                    <i class="icon-shopping-cart white-color"></i>
                                    <span class="wishlist-item-count pos-absolute yellow-bg"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
                                </a>
                            </div> <!-- End Header Add Cart Box -->
                        </div>
                    </div>
                </div>
            </div> <!-- End Header Menu Area -->
        </div> <!-- ::::::  End Large Header Section  ::::::  -->
        <!-- ::::::  Start Mobile Header Section  ::::::  -->
        <div class="header__mobile mobile-header--1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Header Mobile Top area -->
                        <div class="header__mobile-top">
                            <div class="mobile-header__logo">
                                <?php the_custom_logo(); ?>
                            </div>
                            <div class="header__wishlist-box">
                                <!-- Start Header Add Cart Box -->
                                <div class="header-add-cart pos-relative m-l-20">
                                    <a href="#offcanvas-add-cart__box" class="header__wishlist-link offcanvas--open-checkout offcanvas-toggle">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="wishlist-item-count pos-absolute"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
                                    </a>
                                </div> <!-- End Header Add Cart Box -->

                                <a href="#offcanvas-mobile-menu" class="offcanvas-toggle m-l-20"><i class="icon-menu"></i></a>

                            </div>
                        </div> <!-- End Header Mobile Top area -->

                        <!-- Start Header Mobile Middle area -->
                        <div class="header__mobile-middle header__top--style-1 p-tb-10">
                            <?php echo get_search_form(); ?>
                        </div>
                         <!-- End Header Mobile Middle area -->
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  Start Mobile Header Section  ::::::  -->

        <!-- ::::::  Start Mobile-offcanvas Menu Section  ::::::  -->
        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
            <button class="offcanvas__close offcanvas-close">&times;</button>
            <div class="offcanvas-inner">
                <div class="offcanvas-menu m-b-30">
                    <h4>Меню:</h4>
                    <ul>
                        <li><a href="#"><span>Главная</span></a></li>
                        <li><a href="#">Личный кабинет</a></li>
                        <li><a href="#">Доставка и оплата</a></li>
                        <li><a href="#">Статьи</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
                <hr>
                <div class="m-b-30">
                    <h5>+7(771)909-36-55</h5>
                    <h6><a href="#" class="number-2">Закажите звонок</a></h6>
                </div>
                <hr>
                <div class="offcanvas-social">
                    <span>Мы в соц. сетях</span>
                    <ul>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- ::::::  End Mobile-offcanvas Menu Section  ::::::  -->

        <!-- ::::::  Start Popup Add Cart ::::::  -->
        <div  id="offcanvas-add-cart__box" class="offcanvas offcanvas-cart offcanvas-add-cart">
            <div class="offcanvas-add-cart__top m-b-40">
                <span class="offcanvas-add-cart__top-text"><i class="icon-shopping-cart"></i> Товары в корзине: <?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
                <button class=" offcanvas-close">&times;</button>
            </div>
            <!-- Start Add Cart Item Box-->
            <ul class="offcanvas-add-cart__menu">
            <?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
                <!-- Start Single Add Cart Item-->
                <li class="offcanvas-add-cart__list pos-relative">
                    <div class="offcanvas-add-cart__img-box pos-relative">
                    <?php
						$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

						if ( ! $product_permalink ) {
							echo $thumbnail; // PHPCS: XSS ok.
						} else {
							printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
						}
						?>
                        <span class="offcanvas-add-cart__item-count pos-absolute"><?php echo($cart_item['quantity']); ?>x</span>
                    </div>
                    <div class="offcanvas-add-cart__detail">
                        <a href="single.html" class="offcanvas-add-cart__link"><?php echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ).'' ); ?></a>
                        <span class="offcanvas-add-cart__price"><?php echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); ?></span>
                    </div>
                    <button class="offcanvas-add-cart__item-dismiss pos-absolute">&times;</button>
                </li> <!-- Start Single Add Cart Item-->
                <?php
				}
			}
			?>
            </ul> <!-- Start Add Cart Item Box-->
            <!-- Start Add Cart Checkout Box-->
            <div class="offcanvas-add-cart__checkout-box-bottom">
                <!-- Start offcanvas Add Cart Checkout Info-->
                <ul class="offcanvas-add-cart__checkout-info">
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Доставка</span>
                        <span class="offcanvas-add-cart__checkout-right-info">0тг</span>
                    </li> <!-- End Single Add Cart Checkout Info-->
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Общая сумма:</span>
                        <span class="offcanvas-add-cart__checkout-right-info">7800тг</span>
                    </li> <!-- End Single Add Cart Checkout Info-->
                </ul> <!-- End offcanvas Add Cart Checkout Info-->

                <div class="offcanvas-add-cart__btn-checkout">
                    <a href="checkout.html" class="btn btn--block btn--box btn--gray btn--large btn--uppercase btn--weight">Оформить заказ!</a>
                </div>
            </div> <!-- End Add Cart Checkout Box-->
        </div> <!-- :::::: End Popup Add Cart :::::: -->

        <div class="offcanvas-overlay"></div>
</header> <!-- ::::::  End  Header Section  ::::::  -->