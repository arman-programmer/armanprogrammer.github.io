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
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3 col-xl-3">
                    <?php get_sidebar(); ?>
                </div>
                 <!-- Start Rightside - Content -->
                <div class="col-lg-9">
                    <div class="blog">
                    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                                <div class="blog__type-single">
                                    <div class="blog__content">
                                        <h3 class="title title--small title--thin"><?php the_title() ?></h3>
                                        <div class="para m-tb-20">
                                            <p class="para__text">
                                            <?php the_content() ?>
                                            </p>
                                            
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                        </div>
                    </div>
                    <!--   Start Recent Blog News    -->
                    <div class="blog blog--1 swiper-outside-arrow-hover">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-content section-content--border d-flex align-items-center justify-content-between">
                                    <h5 class="section-content__title">Возможно вас также заунтересует</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="swiper-outside-arrow-fix pos-relative">
                                    <div class="blog-news blog-news-3grid overflow-hidden  m-t-50">
                                        <div class="swiper-wrapper">
                                            <!-- Single Blog News Item -->
                                            <div class="blog-news__box swiper-slide">
                                                <div class="blog-news__img-box">
                                                    <a href="blog-single-left-sidebar.html" class="blog-news__img--link">
                                                        <img src="assets/img/blog/news/blog-news-home-1-img-1.jpg" alt="" class="blog-news__img">
                                                    </a>
                                                </div>

                                                <div class="blog-news__archive m-t-25">
                                                    <a href="#" class="blog-news__postdate"><i class="far fa-calendar"></i> 29.11.2021</a>
                                                    <a href="#" class="blog-news__author"><i class="far fa-user"></i> Админ</a>
                                                </div>

                                                <a href="blog-single-left-sidebar.html" class="blog-news__link">
                                                    <h5>Урок ардуино</h5>
                                                </a>
                                            </div> <!-- End Blog News Item -->
                                            <!-- Single Blog News Item -->
                                            <div class="blog-news__box swiper-slide">
                                                <div class="blog-news__img-box">
                                                    <a href="blog-single-left-sidebar.html" class="blog-news__img--link">
                                                        <img src="assets/img/blog/news/blog-news-home-1-img-1.jpg" alt="" class="blog-news__img">
                                                    </a>
                                                </div>

                                                <div class="blog-news__archive m-t-25">
                                                    <a href="#" class="blog-news__postdate"><i class="far fa-calendar"></i> 29.11.2021</a>
                                                    <a href="#" class="blog-news__author"><i class="far fa-user"></i> Админ</a>
                                                </div>

                                                <a href="blog-single-left-sidebar.html" class="blog-news__link">
                                                    <h5>Урок ардуино</h5>
                                                </a>
                                            </div> <!-- End Blog News Item -->
                                            <!-- Single Blog News Item -->
                                            <div class="blog-news__box swiper-slide">
                                                <div class="blog-news__img-box">
                                                    <a href="blog-single-left-sidebar.html" class="blog-news__img--link">
                                                        <img src="assets/img/blog/news/blog-news-home-1-img-1.jpg" alt="" class="blog-news__img">
                                                    </a>
                                                </div>

                                                <div class="blog-news__archive m-t-25">
                                                    <a href="#" class="blog-news__postdate"><i class="far fa-calendar"></i> 29.11.2021</a>
                                                    <a href="#" class="blog-news__author"><i class="far fa-user"></i> Админ</a>
                                                </div>

                                                <a href="blog-single-left-sidebar.html" class="blog-news__link">
                                                    <h5>Урок ардуино</h5>
                                                </a>
                                            </div> <!-- End Blog News Item -->
                                            <!-- Single Blog News Item -->
                                            <div class="blog-news__box swiper-slide">
                                                <div class="blog-news__img-box">
                                                    <a href="blog-single-left-sidebar.html" class="blog-news__img--link">
                                                        <img src="assets/img/blog/news/blog-news-home-1-img-1.jpg" alt="" class="blog-news__img">
                                                    </a>
                                                </div>

                                                <div class="blog-news__archive m-t-25">
                                                    <a href="#" class="blog-news__postdate"><i class="far fa-calendar"></i> 29.11.2021</a>
                                                    <a href="#" class="blog-news__author"><i class="far fa-user"></i> Админ</a>
                                                </div>

                                                <a href="blog-single-left-sidebar.html" class="blog-news__link">
                                                    <h5>Урок ардуино</h5>
                                                </a>
                                            </div> <!-- End Blog News Item -->
                                            <!-- Single Blog News Item -->
                                            <div class="blog-news__box swiper-slide">
                                                <div class="blog-news__img-box">
                                                    <a href="blog-single-left-sidebar.html" class="blog-news__img--link">
                                                        <img src="assets/img/blog/news/blog-news-home-1-img-1.jpg" alt="" class="blog-news__img">
                                                    </a>
                                                </div>

                                                <div class="blog-news__archive m-t-25">
                                                    <a href="#" class="blog-news__postdate"><i class="far fa-calendar"></i> 29.11.2021</a>
                                                    <a href="#" class="blog-news__author"><i class="far fa-user"></i> Админ</a>
                                                </div>

                                                <a href="blog-single-left-sidebar.html" class="blog-news__link">
                                                    <h5>Урок ардуино</h5>
                                                </a>
                                            </div> <!-- End Blog News Item -->
                                        </div>
                                        <div class="swiper-buttons">
                                            <!-- Add Arrows -->
                                            <div class="swiper-button-next default__nav default__nav--next"><i class="fal fa-chevron-right"></i></div>
                                            <div class="swiper-button-prev default__nav default__nav--prev"><i class="fal fa-chevron-left"></i></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> <!--   End Recent Blog News  -->

                </div>  <!-- Start Rightside - Content -->
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->
<?php get_footer(); ?>