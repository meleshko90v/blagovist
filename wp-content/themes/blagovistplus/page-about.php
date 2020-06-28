<?php
/*
Template Name: Про Нас
*/
?>
<?php get_header(); ?>

<!-- ***** Breadcumb Area Start ***** -->
<section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(<?php the_field('background-overlay') ?>);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <h3 class="breadcumb-title"><?php the_field('breadcumb-title') ?></h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Breadcumb Area End ***** -->

<!-- ***** About Area Start ***** -->
<div class="medilife-features-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="features-content">
                    <h3><?php the_field('features-content') ?></h3>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="features-content">
                    <img src="<?php the_field('features-img') ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** About Area End ***** -->


<?php get_footer(); ?>