<?php
/**
 * Template Name: Front Page
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <section class="banner" id="hp-banner" style="background-image:url(<?php the_field('banner_background_image'); ?>);">
        <div class="container">
            <div class="columns">
                <div class="column-66">
                    <h1><?php the_field('banner_headline'); ?></h1>
                    <div class="spacer-30"></div>
                    <div class="subhead"><?php the_field('banner_subheadline'); ?></div>
                </div>
                <div class="column-50"></div>
            </div>
        </div>
        <div class="container spaced">
            <div class="column-full">
                <div class="banner-image">
                <?php 
                $image = get_field('attorney_image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                </div>    
                <div class="banner-content-block">
                    <div class="banner-content">
                        <p><?php the_field('banner_copy'); ?></p>
                    </div>
                    <div class="banner-cta-block">
                        <p><?php the_field('banner_cta'); ?></p>
                        <div class="main-contact">
                            <div class="contact-block-left">
                                <a href="tel:<?php the_field('phone_number','options'); ?>" class="btn"><?php the_field('phone_number','options'); ?></a>
                            </div>
                            <?php if (!is_page_template('page-contact.php')) { ?>
                            <div class="contact-block-right">
                                <p><a href="/contact/" title="Online form">Contact Us Online</a> <span class="icon-right-arrow"></span></p>
                            </div>
                            <?php } ?>
                        </div>
                    </div> 
                </div>
            </div>       
        </div>
        <div class="container touts">
            <div class="columns">
                <div class="column-33 left">
                    <p><?php the_field('banner_experience'); ?></p>
                </div>
                <div class="column-33 center">
                    <p><?php the_field('banner_dismissals'); ?></p>
                </div>
                <div class="column-33 right">
                    <p><?php the_field('banner_rating'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="hp-about" class="white">
        <div class="container">
            <div class="annotation">
                <span><?php the_field('about_section_annotation'); ?></span>
            </div>
            <div class="columns">
                <div class="column-33">
                    <h2><?php the_field('about_section_headline'); ?></h2>
                    <p class="subhead"><?php the_field('about_section_subhead'); ?></p>
                </div>
                <div class="column-33">
                    <?php the_field('about_section_copy_block'); ?>
                </div>
                <div class="column-33 block testimonials">
                    <?php if ( have_rows('testimonials') ): ?>
                    <?php while ( have_rows('testimonials') ): the_row(); ?>  
                        <span class="stars"></span>
                        <p class="testimonial-content"><?php the_sub_field('testimonial_content'); ?></p>
                        <p><strong><?php the_sub_field('testimonial_author'); ?></strong></p>
                    <?php endwhile; ?>
                    <?php endif; ?> 
                </div>
            </div>
            <div class="spacer-60"></div>
            <div class="columns hp-video">
                <div class="column-33 attorney-video">
                    <div class="attorney-headshot" style="background-image:url('<?php the_field('about_section_headshot'); ?>');"></div>
                    <div class="quote-box">
                        <p><?php the_field('about_section_headshot_quote'); ?></p>
                        <div class="spacer-15"></div>
                        <a href="<?php the_field('about_section_video_embed'); ?>" class="play-button" data-lity><span class="icon-tick-down"></span> Watch Video</a>
                        <p class="runtime"><?php the_field('about_section_video_runtime'); ?></p>
                    </div>
                </div>
                <div class="column-33 about-cta">
                    <div class="banner-cta-block">
                        <p><?php the_field('banner_cta'); ?></p>
                        <div class="main-contact">
                            <div class="contact-block-left">
                                <a href="tel:<?php the_field('phone_number','options'); ?>" class="btn"><?php the_field('phone_number','options'); ?></a>
                            </div>
                            <?php if (!is_page_template('page-contact.php')) { ?>
                            <div class="contact-block-right">
                                <p><a href="/contact/" title="Online form">Contact Us Online</a> <span class="icon-right-arrow"></span></p>
                            </div>
                            <?php } ?>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('block','awards'); ?>

    <section id="hp-help" class="blue">
        <div class="container">
            <div class="annotation">
                <span><?php the_field('help_section_annotation'); ?></span>
            </div>
            <div class="columns">
                <div class="column-66">
                    <h2><?php the_field('help_section_headline'); ?></h2>
                    <p class="subhead"><?php the_field('help_section_subhead'); ?></p>
                </div>
                <div class="column-33">
                    <?php the_field('help_section_copy_block'); ?>
                </div>
            </div>
        </div>
        <div class="spacer-60"></div>
        <div class="container">
            <div class="columns">
                <div class="column-full">
                <?php $n = 1; ?>
                <?php if ( have_rows('how_we_help_stages') ): ?>
                    <div class="numbered-box" style="background-image:url('<?php the_field('how_we_help_stages_background'); ?>');">
                    <?php while ( have_rows('how_we_help_stages') ): the_row(); ?>  
                        <div class="stage">
                            <div class="stage-number">0<?php echo $n; ?></div>
                            <?php the_sub_field('how_we_help_stage'); ?>
                        </div>
                        <?php $n++; ?>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?> 
                </div>
            </div>
        </div>
    </section>

    <section class="panel-separator" style="background-image:url('<?php the_field('how_we_help_panel_background'); ?>');">
        <div class="container">
            <div class="columns">
                <div class="column-33 right">
                    <p><?php the_field('how_we_help_panel_callout'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="hp-charges" class="blue">
        <div class="container">
            <div class="columns">
                <div class="column-66 centered center">
                    <h2><?php the_field('charges_headline'); ?></h2>
                    <p><?php the_field('charges_subhead'); ?></p>
                </div>
                <?php if ( have_rows('practice_areas') ): ?>
                <div class="spacer-60"></div>
                <div class="column-full practice-areas" style="background-image:url('<?php the_field('practice_areas_background'); ?>');">
                <?php while ( have_rows('practice_areas') ): the_row(); ?>  
                    <a href="<?php the_sub_field('practice_area_page_link'); ?>" class="practice-area-box">
                        <div class="box-top">
                            <p class="practice-area-name"><?php the_sub_field('practice_area'); ?></p>
                            <p class="practice-area-text"><?php the_sub_field('practice_area_text'); ?></p>
                        </div>
                        <div class="bottom-link">
                            <p class="bottom-link">Visit <?php the_sub_field('practice_area'); ?> Page </p> <span class="icon-right-arrow"></span>
                        </div>
                    </a>
                <?php endwhile; ?>
                <?php if ( have_rows('additional_practice_areas') ): ?>
                    <div class="practice-area-box additional">
                        <p class="practice-area-name">Other Practice Areas</p>
                        <?php while ( have_rows('additional_practice_areas') ): the_row(); ?>  
                        <a class="additional-link" href="<?php the_sub_field('additional_practice_area_page_link'); ?>">
                            <p><?php the_sub_field('additional_practice_area'); ?> </p> <span class="icon-right-arrow"></span>
                        </a>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?> 
                </div>
                <?php endif; ?> 
                <div class="spacer-90"></div>
                <div class="column-full">
                    <p class="green">
                        <strong><?php the_field('notable_results_headline'); ?></strong>
                    </p>
                </div>
                <?php $r = 1; ?>
                <?php if ( have_rows('notable_results') ): ?>
                <?php while ( have_rows('notable_results') ): the_row(); ?>  
                    <div class="column-50 result" id="result_<?php echo $r; ?>">
                        <h2><?php the_sub_field('result_title'); ?></h2>
                        <p><?php the_sub_field('result_copy'); ?></p>
                    </div>
                    <?php $r++; ?>
                <?php endwhile; ?>
                <?php endif; ?> 
                <div class="spacer-30"></div>
                <a href="/results/" id="result-button" class="btn">Call-To-Action</a>
            </div>
        </div>
    </section>

    <section class="white" id="hp-faqs">
        <div class="container">
            <div class="annotation">
                <span><?php the_field('faq_section_annotation'); ?></span>
            </div>
            <div class="columns">
                <div class="column-50">
                    <h2><?php the_field('faq_section_headline'); ?></h2>
                    <p class="subhead"><?php the_field('faq_section_subhead'); ?></p>
                </div>
                <div class="column-50 faqs">
                <?php if ( have_rows('top_faqs') ): ?>
                <?php while ( have_rows('top_faqs') ): the_row(); ?>  
                    <h3 class="question"><?php the_sub_field('faq_question'); ?></h3>
                    <span class="answer"><?php the_sub_field('faq_answer'); ?></span>
                <?php endwhile; ?>
                <?php endif; ?> 
                </div>

                <?php if ( have_rows('middle_faq') ): ?>
                <div class="middle-faq">
                <?php while ( have_rows('middle_faq') ): the_row(); ?>  
                    <div class="column-33 faqs">
                        <h3 class="question"><?php the_sub_field('faq_question'); ?></h3>
                    </div>
                    <div class="column-66 faqs">                
                        <span class="answer"><?php the_sub_field('faq_answer'); ?></span>
                    </div>
                <?php endwhile; ?>
                </div>
                <?php endif; ?> 

                <div class="column-50"></div>
                <div class="column-50 faqs">
                <?php if ( have_rows('bottom_faqs') ): ?>
                <?php while ( have_rows('bottom_faqs') ): the_row(); ?>  
                    <h3 class="question"><?php the_sub_field('faq_question'); ?></h3>
                    <span class="answer"><?php the_sub_field('faq_answer'); ?></span>
                <?php endwhile; ?>
                <?php endif; ?> 
                </div>

                <div class="column-50"></div>
                <div class="column-50 further-reading">
                <?php if( have_rows('further_reading')): // check for repeater fields ?>
                    <h3><?php the_field('further_reading_headline'); ?></h3>
                    <ul>
                    <?php while ( have_rows('further_reading')) : the_row(); // loop through the repeater fields ?>
                    <?php // set up post object
                        $post_object = get_sub_field('article');
                        if( $post_object ) :
                        $post = $post_object;
                        setup_postdata($post);
                        ?>

                        <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>

                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

                    <?php endif; ?> 
                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                </div>

            </div>
        </div>
    </section>

    <section class="panel-separator" style="background-image:url('<?php the_field('free_consult_panel_background'); ?>');">
        <div class="container">
            <div class="columns">
                <div class="column-33 right">
                    <p><?php the_field('free_consult_panel_callout'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="hp-why" class="blue">
        <div class="container">
            <div class="annotation">
                <span><?php the_field('why_section_annotation'); ?></span>
            </div>
            <div class="columns">
                <div class="column-66">
                    <h2><?php the_field('why_section_headline'); ?></h2>
                    <p class="subhead"><?php the_field('why_section_subhead'); ?></p>
                </div>
                <div class="column-33">
                    <?php the_field('why_section_copy_block'); ?>
                </div>
            </div>
        </div>
        <div class="spacer-60"></div>
        <div class="container">
            <div class="columns">
                <div class="column-full">
                <p class="table-head">Our Promise to Every Client</p>
                <?php $w = 1; ?>
                <?php if ( have_rows('why_mike') ): ?>
                    <div class="numbered-box" style="background-image:url('<?php the_field('why_background'); ?>');">
                    <?php while ( have_rows('why_mike') ): the_row(); ?>  
                        <div class="stage">
                            <div class="stage-number">0<?php echo $w; ?></div>
                            <p class="txt-large"><?php the_sub_field('why'); ?></p>
                            <p class="txt-sm"><?php the_sub_field('why_sub'); ?></p>
                        </div>
                        <?php $w++; ?>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?> 
                </div>
            </div>
        </div>
    </section>

    <section id="hp-location" class="white">
        <div class="container">
            <div class="annotation">
                <span><?php the_field('location_section_annotation'); ?></span>
            </div>
            <div class="columns">
                <div class="column-50">
                    <h2><?php the_field('location_section_headline'); ?></h2>
                    <div class="spacer-60 mobile"></div>
                    <?php the_field('location_section_copy_block'); ?>
                </div>
                <div class="column-50">
                <?php 
                $image = get_field('location_section_image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                </div>
                <div class="spacer-60"></div>
                <div class="column-full centered">
                    <?php the_field('location_section_copy_block_bottom'); ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('block','pre-footer'); ?>

</div><!-- #front-page -->

<?php get_footer();?>