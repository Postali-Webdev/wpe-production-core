<?php
/**
 * Theme footer
 *
 * @package Postali Child
 * @author Postali LLC
**/
?>
<footer>

    <section class="footer">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <a href="/" class="custom-logo-link">
                        <img src="/wp-content/uploads/2026/03/footer-logo.svg" alt="Criminal & Immigration Solutions">
                    </a>
                </div>
                <div class="column-50 block">
                    <p class="xlrg"><span class="icon-Phone"></span><strong><a href="tel:<?php the_field('global_phone','options'); ?>" title="Call Today"><?php the_field('global_phone','options'); ?></strong></a>
                    <span class="spacer-15"></span>
                    <span class="icon-email"></span><strong><a href="mailto:<?php the_field('global_email','options'); ?>" title="Email Today"><?php the_field('global_email','options'); ?></strong></a></p>
                </div>
                <div class="spacer-60"></div>
                <div class="column-full">
                    <p class="optional-disclaimer"><?php the_field('footer_disclaimer','options'); ?></p>
                </div>
                <div class="spacer-break"></div>
                <div class="footer-utility">
                    <div class="left">
                        <p>©<?php the_date('Y'); ?> <?php the_field('copyright_text','options'); ?></p>
                        <?php if( have_rows('utility_menu','options') ): ?>
                        <ul>
                        <?php while( have_rows('utility_menu','options') ): the_row(); ?>  
                            <?php 
                            $link = get_sub_field('page_link');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <li><a href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        </ul>
                        <?php endif; ?> 
                    </div>
                    <div class="right">
                        <a href="https://www.postali.com/"><img src="/wp-content/uploads/2026/03/postali-footer.png" alt="Postali | Results Driven Marketing"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bottom-border"></div>

</footer>

<!-- Add JSON Schema here -->
    <?php 
    // Global Schema
    $global_schema = get_field('global_schema', 'options');
    if ( !empty($global_schema) ) :
        echo '<script type="application/ld+json">' . $global_schema . '</script>';
    endif;

    // Single Page Schema
    $single_schema = get_field('single_schema');
    if ( !empty($single_schema) ) :
        echo '<script type="application/ld+json">' . $single_schema . '</script>';
    endif; ?>

<?php wp_footer(); ?>

</body>
</html>


