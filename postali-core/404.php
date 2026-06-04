<?php
/**
 * 404 Page Not Found.
 *
 * @package Postali Crest
 * @author Postali LLC
 */

get_header(); ?>

    <div class="body-container">

    <section class="banner" style="background-image:url('');">
        <div class="container">
            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
            <div class="columns">
                <div class="column-66 block">
                    <h1 class="post-title">Page Not Found</h1>
                </div>
                <div class="column-33 banner-cta">
                    <p class="cta"><?php the_field('banner_cta_text','options'); ?> </p>
                    <?php get_template_part('block','cta-block'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-interior">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <img src="/wp-content/uploads/2026/03/interior-droop.svg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="container">
            <div class="columns">
                <div class="column-66 center block">                      
                    <p>We apologize but the page you're looking for could not be found.</p>
                    <a href="/" class="btn">Return to Homepage</a>
                </div>
            </div>
        </div>
    </section>

</div>

<?php get_footer();
