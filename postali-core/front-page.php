<?php
/**
 * Template Name: Front Page
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <div class="hp-banner-icon">
        <img src="/wp-content/uploads/2026/03/Icon.svg" alt="">
    </div>

    <section class="hp-banner">
        <div class="container">
            <div class="columns">
                <div class="column-66 centered center">
                    <h1 class="eyebrow"><?php the_field('page_title'); ?></h1>
                    <p class="headline"><?php the_field('headline'); ?></p>
                </div>
                <div class="column-50 centered center">
                    <p class="large"><?php the_field('intro_copy'); ?></p>
                    <div class="spacer-30"></div>
                    <?php get_template_part('block','cta-block'); ?>
                </div>
            </div>
        </div>
        <div class="container photo-block">
            <div class="photo-grid">
                <div class="column1">
                    <div class="block1">
                        <?php 
                        $image = get_field('images_column_1_top');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="block2">
                        <?php 
                        $image = get_field('images_column_1_bottom');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
                <div class="column2">
                    <div class="block1">
                        <?php 
                        $image = get_field('images_column_2_top');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="block2">
                        <?php 
                        $image = get_field('images_column_2_bottom');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
                <div class="column3">
                    <div class="block1">
                        <?php 
                        $image = get_field('images_column_3');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
                <div class="column4">
                    <div class="block1">
                        <?php 
                        $image = get_field('images_column_4_top');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="block2">
                        <?php 
                        $image = get_field('images_column_4_bottom');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
                <div class="column5">
                    <div class="block1">
                        <?php 
                        $image = get_field('images_column_5_top');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="block2">
                        <?php 
                        $image = get_field('images_column_5_bottom');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cream no-pad large">
        <div class="container">
            <div class="columns">
                <div class="column-50 centered center">
                    <p class="eyebrow"><?php the_field('p1_eyebrow'); ?></p>
                    <h2><?php the_field('p1_headline'); ?></h2>
                </div>
                <div class="column-66 centered center">
                    <?php the_field('p1_body_copy'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="bottom-curve">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1529.1 168.2" preserveAspectRatio="none">
            <path class="st0" d="M1245.5,166.3c75-2.5,209.6-21.8,283.6-49.9V0H0v43c5.8-.2,9.9-.8,14.5-1.9C87.9,21.3,215.7-1.5,376.1,14.5c102.7,10,189.4,39.4,261.5,63.8,14.2,4.8,27.8,9.4,40.9,13.7,10.3,3.3,20.3,6.5,30,9.2,258.7,74.7,441.8,68.4,529.8,65.4h.8c1,0,1.9,0,2.9-.1h1.3c.8,0,1.5,0,2.2-.1Z"/>
        </svg>
    </section>

    <section class="after-curve large">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <p class="eyebrow"><?php the_field('p2_eyebrow'); ?></p>
                    <h2><?php the_field('p2_headline'); ?></h2>
                    <?php the_field('p2_body_copy'); ?>
                </div>
                <div class="column-50 image">
                    <div class="image-container">
                        <?php 
                        $right_image = get_field('p2_right_image');
                        if( !empty( $right_image ) ): ?>
                            <img src="<?php echo esc_url($right_image['url']); ?>" alt="<?php echo esc_attr($right_image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="spacer-60"></div>
            <div class="columns touts">
                <h3 class="subhead large center"><?php the_field('p2_consultations_headline'); ?></h3>
                <div class="spacer-30"></div>
                <?php if( have_rows('p2_consultation_touts') ): ?>
                <?php while( have_rows('p2_consultation_touts') ): the_row(); ?>  
                    <div class="column-33">
                        <p class="large underlined"><strong><?php the_sub_field('tout_headline'); ?></strong></p>
                        <p><?php the_sub_field('tout_copy'); ?></p>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?> 
            </div>
        </div>
    </section>

    <section class="hp-p3 reversed">
        <?php if(get_field('p3_bg_img')) {
            $p3_bg = get_field('p3_bg_img');
        } ?>
        <div class="container" style="background-image:url(<?php echo $p3_bg; ?>);">
            <div class="columns">
                <div class="column-50">
                    <h2><?php the_field('p3_left_headline'); ?></h2>
                    <p><?php the_field('p3_left_copy'); ?></p>
                </div>
                <div class="column-50">
                    <div class="highlight-box">
                        <div class="top">
                            <p><?php the_field('p3_right_top_headline'); ?></p>
                        </div>
                        <div class="bottom">
                            <p class="headline"><?php the_field('p3_right_bottom_headline'); ?></p>
                            <p><?php the_field('p3_right_bottom_copy'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hp-p4">
        <div class="container">
            <div class="columns">
                <div class="column-50 image-grid">
                <?php if( have_rows('p4_image_grid') ): ?>
                <?php while( have_rows('p4_image_grid') ): the_row(); ?>  
                    
                    <?php
                    $grid_type = get_sub_field('block_content'); ?>
                    <?php if( $grid_type == 'image' ) { ?>

                    <div class="grid-block image-block">
                        <?php 
                        $block_image = get_sub_field('block_image');
                        if( !empty( $block_image ) ): ?>
                            <img src="<?php echo esc_url($block_image['url']); ?>" alt="<?php echo esc_attr($block_image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <?php } elseif( $grid_type == 'text' ) { 
                        $bg_color = get_sub_field('block_bg_color');
                        $text_color = get_sub_field('block_text_color');
                    ?>

                    <div class="grid-block text-block" style="background:<?php echo $bg_color; ?>">
                        <p style="color:<?php echo $text_color; ?>"><?php the_sub_field('block_text'); ?></p>
                    </div>
                    <?php } ?>
                    
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
                <div class="column-50">
                    <h2><?php the_field('p4_headline'); ?></h2>
                    <?php the_field('p4_body_copy'); ?>

                    <?php 
                    $link = get_field('p4_button');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>

                </div>
                <div class="spacer-90"></div>
                <div class="column-full call-out center">
                    <div class="quote">
                        <img src="<?php the_field('call_out_box_icon'); ?>" alt="">
                    </div>
                    <div class="copy">
                        <p class="xlrg"><em><?php the_field('call_out_box_text'); ?></em></p>
                        <div class="spacer-15"></div>
                        <p class="small"><strong><?php the_field('call_out_box_citation'); ?></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="top-swoosh">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1440 131.9" preserveAspectRatio="none">
            <path class="st1" d="M195.1,60.7c-50.8,7.5-128.2,24-195.1,43v28.2h1440V0c-71.8,23.4-198.5,55.7-360.6,63.9-103.7,5.4-193.2-5.3-267.6-14.1h0c-14.7-1.7-28.7-3.4-42.2-4.9-10.7-1.2-20.9-2.2-30.9-3-265.8-22.4-448.5,4.7-536.4,17.8l-4.9.7c-.8.1-1.5.2-2.2.3Z"/>
            <path class="st2" d="M240.2,74.7C177.8,79.9,74.1,95.2,0,113.3v18.6h1440v-47.6c-73.8,16.2-190.9,34.8-336.3,34.4-101.7-.2-188.4-13.6-260.5-24.8h0c-14.2-2.2-27.8-4.3-40.9-6.2-10.3-1.5-20.3-2.9-29.9-4.1-258.1-31.9-438.4-16.8-525.1-9.6l-4.9.4c-.7,0-1.5.1-2.2.2Z"/>
        </svg>
    </section>

    <section class="hp-p5 reversed large">
        <div class="container">
            <div class="columns">
                <div class="column-66 centered center">
                    <h2><?php the_field('p5_headline'); ?></h2>
                    <?php the_field('p5_body_copy'); ?>
                </div>
                <div class="spacer-30"></div>
                <div class="services-grid">
                <?php if( have_rows('p5_services') ): ?>
                <?php while( have_rows('p5_services') ): the_row(); ?>  
                    <div class="grid-box">
                        <p class="xlrg"><?php the_sub_field('service'); ?></p>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?> 
                </div>
            </div>
        </div>
    </section>

    <section class="hp-p6 reversed large">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <h2><?php the_field('p6_headline'); ?></h2>
                    <?php the_field('p6_body_copy'); ?>
                </div>
                <div class="column-50 hp-faqs">
                <?php if( have_rows('p6_faqs') ) : ?>
                <?php $n=1; ?>
                    <div class="accordion-container">
                    <?php while( have_rows('p6_faqs') ) : the_row();  ?>

                        <?php if ($n==1) {
                            $class="active";
                        } else {
                            $class="";
                        } ?>

                        <div class="accordions <?php echo $class; ?>">
                            <div class="accordions_title">
                                <h3><?php the_sub_field('question'); ?> <span></span></h3>
                            </div>
                            <div class="accordions_content">
                                <?php the_sub_field('answer'); ?>
                            </div>
                        </div>
                        <?php $n++; ?>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <div class="spacer-30"></div>
                <a href="/faqs/" class="btn">Review all faqs</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bark reversed large hp-p7">
        <div class="container">
            <div class="columns">
                <div class="column-66 centered center">
                    <h2><?php the_field('p7_headline'); ?></h2>
                    <?php the_field('p7_body_copy'); ?>
                    <div class="spacer-30"></div>
                    <?php get_template_part('block','cta-block'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="large hp-p8">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <p class="eyebrow"><?php the_field('p8_eyebrow'); ?></p>
                    <h2><?php the_field('p8_headline'); ?></h2>
                    <?php the_field('p8_body_copy'); ?>
                </div>

                <div class="column-50">
                    <div class="highlight-box">
                        <div class="top">
                            <p><?php the_field('p8_right_top_headline'); ?></p>
                        </div>
                        <div class="bottom">
                            <?php the_field('p8_right_top_copy'); ?>
                        </div>
                    </div>
                    <div class="spacer-30"></div>
                    <div class="highlight-box">
                        <div class="top tan">
                            <p><?php the_field('p8_right_bottom_headline'); ?></p>
                        </div>
                        <div class="bottom">
                            <?php the_field('p8_right_bottom_copy'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hp-p9">
        <div class="container">
            <div class="columns">
                <div class="column-50 sticky">
                    <?php 
                    $image = get_field('p9_left_image');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="column-50">
                <?php if( have_rows('p9_right_copy') ): ?>
                <?php while( have_rows('p9_right_copy') ): the_row(); ?>  
                    <h2><?php the_sub_field('headline'); ?></h2>
                    <?php the_sub_field('copy'); ?>
                    <div class="spacer-90"></div>
                <?php endwhile; ?>
                <?php endif; ?> 
                </div>
            </div>
        </div>
        <div class="top-curve">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1529.1 168.2" preserveAspectRatio="none">
            <path class="st10" d="M283.6,1.9C208.6,4.4,74,23.7,0,51.8v116.4h1529.1v-43c-5.8.2-9.9.8-14.5,1.9-73.4,19.8-201.2,42.6-361.6,26.6-102.7-10-189.4-39.4-261.5-63.8-14.2-4.8-27.8-9.4-40.9-13.7-10.3-3.3-20.3-6.5-30-9.2C561.9-7.7,378.8-1.4,290.8,1.6h-.8c-1,0-1.9,0-2.9.1h-1.3c-.8,0-1.5,0-2.2.1h0Z"/>
            </svg>
        </div>
    </section>

    <section class="hp-p10 reversed large">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <h2><?php the_field('p10_headline'); ?></h2>
                    <?php the_field('p10_body_copy'); ?>
                    <a href="tel:<?php the_field('global_phone'); ?>" class="btn">Call Today</a>
                    <div class="spacer-60"></div>
                    <div class="spacer-line"></div>
                    <p class="xsm global-disclaimer"><em><?php the_field('global_disclaimer','options'); ?></em></p>
                </div>
                <div class="column-50">
                    <?php echo do_shortcode( ' [gravityform id="1" title="false"] ' ); ?>
                </div>
            </div>
        </div>
    </section>


</div><!-- #front-page -->

<?php get_footer();?>