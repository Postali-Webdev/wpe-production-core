    <section id="pre-footer">
        <div class="container">
            <div class="columns">
                <div class="column-75 center centered block">
                    <h2><?php the_field('pre_footer_headline','options'); ?></h2>
                    <p><?php the_field('pre_footer_copy','options'); ?></p>
                    
                    <?php get_template_part('block','cta-block'); ?>

                </div>
            </div>
        </div>
    </section>