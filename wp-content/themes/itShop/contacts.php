<?php /** Template Name: Шаблон контактов  */ ?>
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
            <div class="col-lg-6 col-md-12">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2905.4447951497054!2d76.93726621581612!3d43.263056579136496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836ea2594b3ebf%3A0xcfe311c1e86f592f!2z0L_RgNC-0YHQv9C10LrRgiDQkNCx0YvQu9Cw0Lkg0KXQsNC90LAgNTUsINCQ0LvQvNCw0YLRiyAwNTAwMDA!5e0!3m2!1sru!2skz!4v1633280235551!5m2!1sru!2skz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact-info-wrap gray-bg m-t-40">
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-info-dec">
                            <a href="tel://+77719093655">+7 771 909 36 55</a>
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                        <div class="contact-info-dec">
                            <a href="mailto://it@shop.kz">it@shop.kz</a>
                            <a href="mailto://itshop.kz">itshop.kz</a>
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-info-dec">
                            <span>Адрес:</span>
                            <span>город Алматы, пр. Абылай Хана, 55</span>
                        </div>
                    </div>
                    <div class="contact-social m-t-40">
                        <div class="section-content">
                            <h5 class="section-content__title">Мы в соц. сетях:</h5>
                        </div>
                        <div class="social-link m-t-30">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
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
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="contact-form gray-bg m-t-40">
                    <div class="section-content">
                        <h5 class="section-content__title">Напишите нам:</h5>
                    </div>
                    <form class="contact-form-style" id="contact-form" action="#" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-box__single-group">
                                    <input type="text" placeholder="Ваше имя" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                               <div class="form-box__single-group">
                                    <input type="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-box__single-group">
                                    <textarea rows="10" placeholder="Your Messege" required></textarea>
                                </div>
                                <button class="btn btn--box btn--small btn--blue btn--uppercase btn--weight m-t-30" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->
<?php get_footer(); ?>