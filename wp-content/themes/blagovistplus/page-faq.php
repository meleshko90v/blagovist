<?php
/*
Template Name: FAQ
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
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Breadcumb Area End ***** -->

<!-- Medilife Tab Text  -->
<div class="medilife-tab-text padding-40">
    <div class="container">
        <div class="row">
            <div class="col-12">
        <?php the_field('medilife-text') ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>