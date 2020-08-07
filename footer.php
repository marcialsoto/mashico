<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mashico
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-footer-wrapper">
			<nav id="site-footer-navigation" class="footer-navigation">
				<a href="https://dribbble.com/marcialsoto" target="_blank">
					<i class="icon icon-dribbble" data-icon="dribbble" data-theme="fill"></i>
				</a>
				<a href="https://www.linkedin.com/in/marcialsoto/" target="_blank">
					<i class="icon icon-linkedin" data-icon="linkedin" data-theme="fill"></i>
				</a>
				<a href="https://www.facebook.com/marcialsotocom" target="_blank">
					<i class="icon icon-facebook" data-icon="facebook" data-theme="fill"></i>
				</a>
				<a href="https://www.youtube.com/channel/UCmNQkmawK1SOsgrNopgFWcw" target="_blank">
					<i class="icon icon-youtube" data-icon="youtube" data-theme="fill"></i>
				</a>
			</nav><!-- #site-navigation -->
			<div class="site-info">
				<?php 
					$year = date("Y");
					
					echo $year .' @ <a href="'. get_bloginfo('url') .'">'. get_bloginfo('name') .'</a>';
				?>
			</div><!-- .site-info -->
			
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
