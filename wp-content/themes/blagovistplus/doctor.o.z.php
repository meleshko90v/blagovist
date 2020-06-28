<?php
/*
Template Name: Оксана Зінько
*/
?>
<?php get_header(); ?>

<!-- ***** Features Area Start ***** -->
<div class="medilife-features-area section-padding-top-200">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="features-thumbnail">
                    <img class="padding-botton" src="<?php the_field('features-thumbnail') ?>" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="features-content">
                    <?php the_field('features-content') ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Features Area End ***** -->

<?php get_footer(); ?>