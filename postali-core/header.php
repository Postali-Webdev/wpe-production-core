<?php
/**
 * Theme header.
 *
 * @package Postali Child
 * @author Postali LLC
**/
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<!-- End Google Tag Manager -->
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">

</head>

<a class="skip-link" href='#main-content'>Skip to Main Content</a>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
    <!-- End Google Tag Manager (noscript) -->

	<header>
        <div class="utility">
            <div class="container">
                <div class="columns">
                    <div class="column-full">
                        <div class="menu-item menu-item-search search-holder">
                            <form class="navbar-form-search" role="search" method="get" action="/">
                                <div class="search-form-container hdn" id="search-input-container">
                                    <div class="search-input-group">
                                        <div class="form-group">
                                            <input type="text" name="s" placeholder="Search for..." id="search-input-5cab7fd94d469" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn-search" id="search-button" aria-label="search"><span class="icon-crest-search-icon" aria-hidden="true"></span></button>
                            </form>	
                        </div>

                        <!-- end search -->
                        <div class="translation-box">
                            <div id="weglot_here"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div id="header-top" class="container">
			<div id="header-top_left">
				<?php the_custom_logo(); ?>
                <div class="mobile-logo">
                    <a href="/" class="custom-logo-link-mobile" rel="home">
                        <img src="/wp-content/uploads/2026/03/footer-logo.svg" class="custom-logo" alt="easdalestage" decoding="async">
                    </a>
                </div>
			</div>
			
			<div id="header-top_right">
				<div id="header-top_right_menu">
                    <?php
                        $args = array(
                            'container' => false,
                            'theme_location' => 'header-nav'
                        );
                        wp_nav_menu( $args );
                    ?>	
					<div id="header-top_mobile">
						<div id="menu-icon" class="toggle-nav">
							<span class="line line-1"></span>
							<span class="line line-2"></span>
							<span class="line line-3"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header> 

    <span id="main-content"></span>