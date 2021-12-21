<?php 
/*
    Template Name: blog-list
*/
?>
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
<main id="main-container" class="main-container m-t-30">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <!-- Start Leftside - Sidebar -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <!-- Start Single Sidebar Widget -->
                    <div class="sidebar__widget gray-bg">
                        <div class="sidebar__box">
                            <h5 class="sidebar__title">Поиск</h5>
                        </div>
                        <div class="sidebar__search">
                            <form action="#" method="post" class="form-box__single-group">
                                <div class="d-flex">
                                    <input type="search" placeholder="Поиск по статьям">
                                    <button class="btn btn--submit btn--blue btn--uppercase btn--weight " type="submit"><i class="fal fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>  <!-- End Single Sidebar Widget -->
                    <!-- Start Single Sidebar Widget -->
                    <div class="sidebar__widget gray-bg">
                        <div class="sidebar__box">
                            <h5 class="sidebar__title">Рубрики</h5>
                        </div>
                        <ul class="sidebar__catagories list-space--small">
                            <li><a class="link--gray" href="#">Уроки Ардуино <span>(20)</span></a></li>
                            <li><a class="link--gray" href="#">Физика <span>(9)</span></a></li>
                            <li><a class="link--gray" href="#">Уроки Raspberry PI  <span>(11)</span></a></li>
                        </ul>
                    </div>  <!-- End Single Sidebar Widget -->  
                </div>
            </div>  <!-- End Left Sidebar -->
             <!-- Start Rightside - Content -->
            <div class="col-lg-9">
                <div class="blog">
                    <div class="row">
                    <?php 
                            $temp = $wp_query; $wp_query= null;
                            $wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
                            while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                        <!-- Start Single Blog List -->
                        <div class="col-12">
                            <div class="blog__type-list">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="blog__img"><a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image() ?>" alt=""></a></div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="blog__content">
                                            <a class="link--gray" href="<?php the_permalink(); ?>"><h3 class="title title--small title--thin"><?php the_title(); ?></h3></a>
                                            <div class="blog__archive m-t-20">
                                                <a href="#" class="link--gray link--icon-left m-r-30"><i class="far fa-calendar"></i><?php the_date(); ?></a>
                                                <a href="#" class="link--gray link--icon-left"><i class="far fa-user"></i> <?php the_author(); ?></a>
                                            </div>
                                            <div class="para m-tb-20">
                                                <p class="para__text">
                                                <?php the_excerpt(); ?>
                                                </p>
                                            </div>
                                            <a class="link--gray link--icon-right" href="<?php the_permalink(); ?>">Читать <i class="icon-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div> <!-- End Single Blog List -->
                            <?php endwhile; ?>
                    </div>
                </div>
                <div class="page-pagination">
                    <span>Отображаются 1-12 из 13 статей</span>
                    <ul class="page-pagination__list">
                        <li class="page-pagination__item">
                          <a class="page-pagination__link btn btn--gray"  href="#"><i class="icon-chevron-left"></i> Назад</a>
                        </li>
                        <li class="page-pagination__item"><a class="page-pagination__link active btn btn--gray"  href="#">1</a></li>
                        <li class="page-pagination__item"><a class="page-pagination__link btn btn--gray"  href="#">2</a></li>
                        <li class="page-pagination__item">
                          <a class="page-pagination__link btn btn--gray"  href="#">Вперед<i class="icon-chevron-right"></i></a>
                        </li>
                      </ul>
                </div>
            </div>  <!-- Start Rightside - Content -->
            
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->
 
<?php get_footer(); ?>