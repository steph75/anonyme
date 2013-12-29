<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package anonyme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>

	<div id="top-bar">
	<div class="container">
	
	<div class="col-md-1 menu-icon-container">
	<a id='main-menu' href="#sidr"><i class="icon-list menu-icon"> </i></a>
	</div>
	<div id="top-search" class="col-md-5">
	<?php get_search_form(); ?>
	</div>
	
	</div>
	</div><!--#top-bar-->    
    
    
    <header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

    </header><!-- #masthead -->

 	<div id="sidr" class="default-nav-wrapper">
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <div id="nav-container">
                    <h1 class="menu-toggle"></h1>
                    <div class="screen-reader-text skip-link">
                        <a href="#content" title="<?php esc_attr_e( 'Skip to content', 'anonyme' ); ?>"><?php _e( 'Skip to content', 'anonyme' ); ?></a>
                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</div>
            </nav><!-- #site-navigation -->
        </div>
       
        
        
	<div id="content" class="site-content">
