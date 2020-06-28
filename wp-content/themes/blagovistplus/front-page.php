<?php
/*
Template Name: Головна
*/
?>
<?php get_header(); ?>

<!-- ***** carousel ***** -->

<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class=""></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3" class=""></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4" class=""></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="5" class=""></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="6" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 desc">
                    <div class="carousel-caption d-none d-md-block">
                    <h2><?php the_field('title0') ?></h2>
                    <h6><?php the_field('under_title0') ?></h6>
                    <p data-animation="fadeInUp" data-delay="100ms" class="color-p"><?php the_field('text_0') ?></p>
                    </div>
                </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 desc">
                        <img class="d-block w-100" src="<?php the_field('img_slide0') ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 desc">
                        <div class="carousel-caption d-none d-md-block">
                            <h2><?php the_field('title1') ?></h2>
                            <h6><?php the_field('under_title1') ?></h6>
                            <p data-animation="fadeInUp" data-delay="100ms" class="color-p"><?php the_field('text1') ?></p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 desc">
                        <img class="d-block w-100" src="<?php the_field('img_slide1') ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 desc">
                        <div class="carousel-caption d-none d-md-block">
                            <h2><?php the_field('title2') ?></h2>
                            <h6><?php the_field('under_title2') ?></h6>
                            <p data-animation="fadeInUp" data-delay="100ms" class="color-p"><?php the_field('text2') ?></p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 desc">
                        <img class="d-block w-100" src="<?php the_field('img_slide2') ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 desc">
                        <div class="carousel-caption d-none d-md-block">
                            <h2><?php the_field('title3') ?></h2>
                            <h6><?php the_field('under_title3') ?></h6>
                            <p data-animation="fadeInUp" data-delay="100ms" class="color-p"><?php the_field('text3') ?></p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 desc">
                        <img class="d-block w-100" src="<?php the_field('img_slide3') ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 desc">
                        <div class="carousel-caption d-none d-md-block">
                            <h2><?php the_field('title4') ?></h2>
                            <h6><?php the_field('under_title4') ?></h6>
                            <p data-animation="fadeInUp" data-delay="100ms" class="color-p"><?php the_field('text4') ?></p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 desc">
                        <img class="d-block w-100" src="<?php the_field('img_slide4') ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 desc">
                        <div class="carousel-caption d-none d-md-block">
                            <h2><?php the_field('title5') ?></h2>
                            <h6><?php the_field('under_title5') ?></h6>
                            <p data-animation="fadeInUp" data-delay="100ms" class="color-p"><?php the_field('text5') ?></p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 desc">
                        <img class="d-block w-100" src="<?php the_field('img_slide5') ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 desc">
                        <div class="carousel-caption d-none d-md-block">
                            <h2><?php the_field('title6') ?></h2>
                            <h6><?php the_field('under_title6') ?></h6>
                            <p data-animation="fadeInUp" data-delay="100ms" class="color-p"><?php the_field('text6') ?></p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 desc">
                        <img class="d-block w-100" src="<?php the_field('img_slide6') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!--about us-->

<section class="about-us">
    <div class="container" id="about">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <img src="<?php the_field('background_about') ?>" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="about-us-front-wrap">
                    <h1><?php the_field('title_about') ?></h1>
                    <p><?php the_field('text_about') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Наші лікарі ***** -->
<section class="doctors">
<div class="container">
    <h1 class="p-20"><?php the_field('title') ?></h1>
    <div class="row">
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card">
                <a href="oksana-glushok"><img class="card-img-top" src="<?php the_field('background_doctor1') ?>" alt=""></a>
                <div class="card-body">
                    <a href="oksana-glushok"><h3 class="color-click"><?php the_field('name1') ?></h3></a>
                    <h6 class="line-height"><?php the_field('cat1') ?></h6>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card">
                <a href="vitaliy-glushok"><img class="card-img-top" src="<?php the_field('background_doctor2') ?>" alt=""></a>
                <div class="card-body">
                    <a href="vitaliy-glushok"><h3 class="color-click"><?php the_field('name2') ?></h3></a>
                    <h6 class="line-height"><?php the_field('cat2') ?></h6>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card">
                <a href="oksana-zinko"><img class="card-img-top" src="<?php the_field('background_doctor3') ?>" alt=""></a>
                <div class="card-body">
                    <a href="oksana-zinko"><h3 class="color-click"><?php the_field('name3') ?></h3></a>
                    <h6 class="line-height"><?php the_field('cat3') ?></h6>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card">
                <a href="victoria-glushok"><img class="card-img-top" src="<?php the_field('background_doctor4') ?>" alt=""></a>
                <div class="card-body">
                    <a href="victoria-glushok"><h3 class="color-click"><?php the_field('name4') ?></h3></a>
                    <h6 class="line-height"><?php the_field('cat4') ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!--gallery-->

<div class="gallery" id="blog">
    <div class="container">
        <h1 class="text-center p-20"><?php the_field('title_gallery') ?></h1>
        <div class="row">
            <div class="col-md-4 col-lg-6 col-sm-12 p-15">
                <div class="card-none">
                    <div class="card-img">
                        <img align="center" src="<?php the_field('img_gallery') ?>" class="img-fluid" style="width: 100%; height: 300px;">
                    </div>

                    <div class="card-footer">
                        <a href="" class="card-link"><?php the_field('link_gallery') ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-6 col-sm-12 p-15">
                <div class="card-none">
                    <div class="card-img">
                        <img align="center" src="<?php the_field('img_gallery2') ?>" class="img-fluid" style="width: 100%; height: 300px;">
                    </div>

                    <div class="card-footer">
                        <a href="" class="card-link"><?php the_field('link_gallery2') ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-6 col-sm-12 p-15">
                <div class="card-none">
                    <div class="card-img">
                        <video src="<?php echo get_template_directory_uri()?>/assets/video/MVI_6191.MOV" controls style="width: 100%; height: 100%;"></video>
                    </div>

                    <div class="card-footer">
                        <a href="" class="card-link"><?php the_field('link_gallery1v') ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-6 col-sm-12 p-15">
                <div class="card-none">
                    <div class="card-img">
                        <video src="<?php echo get_template_directory_uri()?>/assets/video/MVI_6242.MOV" controls style="width: 100%; height: 100%;"></video>
                    </div>

                    <div class="card-footer">
                        <a href="" class="card-link"><?php the_field('link_gallery2v') ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-center">
            <a href="gallery"><button type="button" class="btn btn-outline-warning"><?php the_field('btn') ?></button></a>
        </div>
    </div>
</div>

<?php get_footer(); ?>