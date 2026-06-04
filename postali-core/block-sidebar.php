<?php if(get_field('sidebar_add_testimonial','options')) { ?>
    <div class="testimonial-block">
        <img src="/wp-content/uploads/2026/03/quote-icon-teal.svg" alt="">
        <p class="testimonial"><?php the_field('sidebar_testimonial_copy','options'); ?></p>
        <p><strong><?php the_field('sidebar_testimonial_author','options'); ?></strong></p>
    </div>
    <div class="spacer-30"></div>
 <?php } ?>

<?php if(get_field('sidebar_add_highlight','options')) { ?>
    <div class="highlight-block">
        <p class="large"><strong><?php the_field('sidebar_highlight_title','options'); ?></strong></p>
        <p><?php the_field('sidebar_highlight_copy','options'); ?></p>
    </div>
    <div class="spacer-30"></div>
 <?php } ?>

<?php if(get_field('sidebar_add_menu','options')) { ?>	
    <div class="highlight-box">
        <div class="top tan">
            <p>Helpful Links</p>
        </div>
        <div class="bottom">
            <?php the_field('sidebar_menu','options'); ?>	
        </div>
    </div>
<?php } ?>