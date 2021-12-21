<?php /** Template Name: Корзина  */ ?>
<?php get_header(); ?>
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
                <div class="section-content">
                    <h5 class="section-content__title">Товары в вашей корзине</h5>
                </div>
                <?php  echo do_shortcode( '[woocommerce_cart]' );?>
            </div>
            
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->
<?php get_footer(); ?>
