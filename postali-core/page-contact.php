<?php
/**
 * Template Name: Contact
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <?php the_content(); ?>
                    <p class="large">
                        <span class="icon-Phone"></span><strong><a href="tel:<?php the_field('global_phone','options'); ?>" title="Call Today"><?php the_field('global_phone','options'); ?></strong></a>
                        <span class="spacer-15"></span>
                        <span class="icon-email"></span><strong><a href="mailto:<?php the_field('global_email','options'); ?>" title="Email Today"><?php the_field('global_email','options'); ?></strong></a>
                    </p>

                    <p class="xsm global-disclaimer"><em><?php the_field('global_disclaimer','options'); ?></em></p>
                </div>
                <div class="column-50 contact-form block">
                    <?php echo do_shortcode( get_field('contact_form_shortcode') ); ?>
                </div>
            </div>
        </div>
    </section>
    
    <?php if(get_field('include_awards','options')) : ?>
        <?php get_template_part('block','awards'); ?>
    <?php endif; ?>

</div><!-- #front-page -->

<?php get_footer();?>