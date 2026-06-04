<?php
/**
 * Template Name: About
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="panel-1">
        <div class="container">
            <div class="columns">
                <div class="column-66 block">
                    <p class="eyebrow"><?php the_field('p1_eyebrow'); ?></p>
                    <h2><?php the_field('p1_headline'); ?></h2>    
                    <?php the_field('p1_copy'); ?>
                </div>
                <div class="column-33">
                    <div class="spacer-60"></div>
                    <div class="highlight-box">
                        <div class="top tan">
                            <p>Helpful Links</p>
                        </div>
                        <div class="bottom">
                            <?php the_field('sidebar_menu','options'); ?>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="panel-2">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <?php 
                    $image = get_field('p2_photo');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="column-50 block">
                    <p class="eyebrow"><?php the_field('p2_eyebrow'); ?></p>
                    <h2><?php the_field('p2_headline'); ?></h2>    
                    <?php the_field('p2_copy'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="panel-3">
        <div class="container">
            <div class="columns">
                <div class="column-66 centered center">
                    <p class="eyebrow"><?php the_field('p3_eyebrow'); ?></p>
                    <h2><?php the_field('p3_headline'); ?></h2>    
                    <?php the_field('p3_copy'); ?>
                    <a href="/contact/" class="btn">Contact Us Today</a>
                </div>
            </div>
            <div class="spacer-60"></div>
            <div class="columns touts">
                <h3 class="subhead large center"><?php the_field('p3_approach_headline'); ?></h3>
                <div class="spacer-30"></div>
                <?php if( have_rows('p3_our_approach') ): ?>
                <?php while( have_rows('p3_our_approach') ): the_row(); ?>  
                    <div class="column-25">
                        <p class="large underlined"><strong><?php the_sub_field('headline'); ?></strong></p>
                        <p><?php the_sub_field('copy'); ?></p>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?> 
            </div>
        </div>
    </section>

    <?php if(get_field('testimonial_content')) { ?>

    <section class="testimonial bark reversed">
        <div class="container">
            <div class="columns">
                <div class="column-66 centered center">
                    <img src="/wp-content/uploads/2026/03/quote-icon.svg" alt="">
                    <div class="spacer-60"></div>
                    <p class="xlrg"><em><?php the_field('testimonial_content'); ?></em></p>
                    <p class="citation"><?php the_field('testimonial_citation'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <?php } ?>

    <section class="panel-5">
        <div class="container">
            <div class="columns">
                <div class="column-66 center">  
                    <?php the_field('p5_content'); ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('block','pre-footer'); ?>
    
    <?php if(get_field('include_awards','options')) : ?>
        <?php get_template_part('block','awards'); ?>
    <?php endif; ?>

</div>

<?php get_footer();?>