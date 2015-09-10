<?php
/**
 * Template Name: Default Page
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

	<?php while (have_posts()) : the_post(); ?>

		<div class="singular stack">

			<div class="container">

				<div class="row">
					<div class="col-sm-2">
						<?php 
				            $args = array(
				              'menu'        => 'left-menu',
				              'menu_class'  => 'nav navbar-nav nav-left',
				              'container'   => 'false'
				            );
				            wp_nav_menu( $args );
				          ?>
					</div>
					<div class="col-sm-8">
					Test
					</div>
					<div class="col-sm-2">
						<?php 
				            $args = array(
				              'menu'        => 'right-menu',
				              'menu_class'  => 'nav navbar-nav nav-right',
				              'container'   => 'false'
				            );
				            wp_nav_menu( $args );
				          ?>
					</div> 
				</div>
			</div>

		</div>
			
	<?php endwhile; ?>

<?php get_footer(); ?>