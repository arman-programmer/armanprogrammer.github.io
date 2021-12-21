<?php get_header(); ?>
<!-- ::::::  Start  Main Container Section  ::::::  -->
<main id="main-container" class="main-container m-t-30">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-3 col-xl-3">
                <?php get_sidebar(); ?>
            
               
            </div>
            <div class="col-lg-9 col-xl-9">
                
                
                <!-- ::::::  Start  Product Style - Default Section [2column]  ::::::  -->
                <div class="product product--1 swiper-outside-arrow-hover">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-content section-content--border d-md-flex align-items-center justify-content-between">
                                <h5 class="section-content__title">Категории: </h5>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner banner--1">
                    <div class="container">
                        <div class="row">
                            <?php 
                                $prod_cat_args = array(
                                    'taxonomy'    => 'product_cat',
                                    'orderby'     => 'id', // здесь по какому полю сортировать
                                    'hide_empty'  => false, // скрывать категории без товаров или нет
                                    'parent'      => 0 // id родительской категории
                                  );
                                
                                $woo_categories = get_categories( $prod_cat_args );
                                  foreach ( $woo_categories as $woo_cat ) {
                                    $woo_cat_id = $woo_cat->term_id; //category ID
                                    $woo_cat_name = $woo_cat->name; //category name
                                    $woo_cat_slug = $woo_cat->slug; //category slug
                                    echo '<div class="col-12 col-sm-6 col-md-4 col-xl-3">';
                                    echo '<div class="banner__box">';
                                    $category_thumbnail_id = get_woocommerce_term_meta($woo_cat_id, 'thumbnail_id', true);
                                    $thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
                                    echo '<a class="banner__link" href="' . get_term_link( $woo_cat_id, 'product_cat' ) . '">'  ;
                                    echo '<img class="banner__img" src="' . $thumbnail_image_url . '"/>';
                                    echo '</a>';
                                    echo '<a  style="text-align: center;" class="product__link product__link--weight-regular m-t-30">';
                                    echo $woo_cat_name;
                                    echo '</a>';
                                    echo '</div>';
                                    echo '</div>';
                                  }
                            ?>  
                        </div>
                    </div>
                </div> <!-- ::::::  End banner Section  ::::::  -->
                <div class="col-12">
                    <!-- ::::::  Start CMS Section  ::::::  -->
                    <div class="cms cms--1">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-12">
                                <!-- Start Single CMS box -->
                                <div class="cms__content">
                                    <div class="cms__icon">
                                        <img class="cms__icon-img" src="<?php echo get_template_directory_uri(); ?>/assets/image/icon1.png" alt="">
                                    </div>
                                    <div class="cms__text">
                                        <h6 class="cms__title">Бесплатная доставка </h6>
                                        <span class="cms__des">По городу Алматы</span>
                                    </div>
                                </div>
                            </div> <!-- End Single CMS box -->
                            <!-- Start Single CMS box -->
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="cms__content">
                                    <div class="cms__icon">
                                        <img class="cms__icon-img" src="<?php echo get_template_directory_uri(); ?>/assets/image/icon2.png" alt="">
                                    </div>
                                    <div class="cms__text">
                                        <h6 class="cms__title">Удобный способ оплаты</h6>
                                        <span class="cms__des">Оплатите только при получении</span>
                                    </div>
                                </div>
                            </div> <!-- End Single CMS box -->
                            <!-- Start Single CMS box -->
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="cms__content">
                                    <div class="cms__icon">
                                        <img class="cms__icon-img" src="<?php echo get_template_directory_uri(); ?>/assets/image/icon3.png" alt="">
                                    </div>
                                    <div class="cms__text">
                                        <h6 class="cms__title">Возврат денег</h6>
                                        <span class="cms__des">В течении 14 дней</span>
                                    </div>
                                </div>
                            </div> <!-- End Single CMS box -->
                            <!-- Start Single CMS box -->
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="cms__content">
                                    <div class="cms__icon">
                                        <img class="cms__icon-img" src="<?php echo get_template_directory_uri(); ?>/assets/image/icon4.png" alt="">
                                    </div>
                                    <div class="cms__text">
                                        <h6 class="cms__title">24/7 Центр поддержки</h6>
                                        <span class="cms__des">Быстрая поддержка</span>
                                    </div>
                                </div>
                            </div> <!-- End Single CMS box -->
                        </div>
                    </div> <!-- ::::::  End CMS Section  ::::::  -->
                </div>
            </div>
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->
<?php get_footer(); ?>