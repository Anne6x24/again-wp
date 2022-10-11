<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ScapeShot
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


<?php do_action( 'wp_body_open' ); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'scapeshot' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-header-main">
			<div class="header-blank"></div>
				<div class="wrapper">
					<?php
					get_template_part( 'template-parts/header/site', 'branding-secondary' );

					get_template_part( 'template-parts/navigation/nav-full-screen-menu' );

					get_template_part( 'template-parts/header/site', 'branding' );
					?>

					<div class="header-right-wrapper">
					<?php get_template_part( 'template-parts/navigation/primary-search' ); ?>
					</div>
			</div><!-- .wrapper -->
		</div><!-- .site-header-main -->
	</header><!-- #masthead -->

	<?php get_template_part( 'template-parts/navigation/navigation', 'social-floating' ); ?>

	<?php scapeshot_sections(); ?>
	
	<div id="content" class="site-content">
		<div class="wrapper">
            <div class="styles">
                <div class="ship">
                <h4>READY TO SHIP</h4>
                <p><i>There is only one of each and it is ready to be shipped right away - buy now or cry later</i></p>
                
            <?php echo do_shortcode("[pt_view id=89e368804q]"); ?>
        
            </div>


            <div class="order">
            <h4>MADE TO ORDER</h4>
            <p> <i> Please notice, there is a longer delivery time. Each style is made specially for you.</i></p>
        <?php echo do_shortcode("[pt_view id=e09504d0vo]"); ?>
        </div>

       

        </div>
	



<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ScapeShot
 */

?>
		</div><!-- .wrapper -->
	</div><!-- #content -->
	
	<?php get_template_part( 'template-parts/footer/footer-instagram' ); ?>

	<footer id="colophon" class="site-footer">
		
		<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

		<div id="site-generator" class="one">
			<?php get_template_part('template-parts/navigation/navigation-footer'); ?>

			<?php get_template_part('template-parts/footer/site-info'); ?>
		</div><!-- #site-generator -->
        <?php echo do_shortcode("[hfe_template id='80']"); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

