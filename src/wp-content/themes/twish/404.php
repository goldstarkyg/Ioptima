<?php get_header(); ?>


<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
	<div class="container">
		<?php get_template_part('breadcrumb'); ?>
		<h1><?php _e("404", 'adap'); ?></h1>
	</div>
</header>

<div class="container">
	<div class="row">

		<div class="span12" role="main">

			<div class="page-404-content">
				<p class="message-404"><span class="page-title-404"><?php _e("404", 'adap'); ?></span><span
						class="page-404-error"><?php _e("error", 'adap'); ?></span></p>

				<p class="tagline-404"><?php _e("Sorry, this page does not exist anymore.", 'adap'); ?></p>

			</div>
			<p class="align-center gohome-button">
				<?php echo do_shortcode('[button url="' . home_url() . '" label="' . __('go back to our homepage', 'adap') . '" icon="none" entypo_icon="none" size="normal"]'); ?>
			</p>

		</div>

	</div>
</div>


<?php get_footer(); ?>
