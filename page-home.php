<?php
/**
 * Template Name: Home Page
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<div id="popup" class="modal-box">  
	<a href="#" class="js-modal-close close">X</a>
	<div class="modal-body modal-contact">
		<div class="email"><a href="mailto:hopederossett@gmail.com?Subject=Hello" target="_top">hopederossett@gmail.com</a></div>
		<div class="social">@hopederossett</div>
		<a href="http://hopederossett.com/wp-content/uploads/2015/08/hopederossettresume_2015.pdf" class="resume">View Resume</a>
	</div>
</div>
<div id="popup2" class="modal-box">  
	<a href="#" class="js-modal-close close">×</a>
	<div class="modal-body">
		<div class="link-header">01</div>
		<a href="https://vitalmagazine.com/" class="portfolio-link">Vital Magazine</a>
		<div class="link-header">02</div>
		<a href="http://dyingoutloudchallenge.org/" class="portfolio-link">Dying Out Loud Challenge</a>
		<div class="link-header">03</div>
		<a href="http://supermoonishere.com/" class="portfolio-link">Supermoon</a>
		<div class="link-header">04</div>
		<a href="http://www.showmesystems.com/" class="portfolio-link">Show Me Systems</a>
		<div class="link-header">05</div>
		<a href="http://nixacc.org/home/" class="portfolio-link">Nixa CC</a>
	</div>
</div>

	<div class="container shape-container">
		<div class="content-container">
			<div class="recentwork-small">
				<a class="js-open-modal" href="#" data-modal-id="popup2">Recent Work</a>
			</div>
			<div class="contact">
				<a class="js-open-modal" href="#" data-modal-id="popup">Contact</a>
			</div>
			<div class="text">
				<p>Hope DeRossett is a front-end developer based in New York City. She enjoys playing music, being a vegan, playing video games and watching horror movies. She is currently accepting new projects and looking for full-time opportunities in the NYC area.</p>
			</div>
			<div class="recentwork-large">
				<a class="js-open-modal" href="#" data-modal-id="popup2">Recent Work</a>
			</div>
		</div>
<?php get_footer(); ?>