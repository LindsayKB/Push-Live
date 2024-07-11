<?php
/**
* Template Name: Push Live
 */
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header('push'); ?>

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">
		<div class="site-section image-not-clicked" id="welcome" style="background-image:url('<?php the_field('welcome_video_thumbnail'); ?>')">
		<video loop id="welcome-vid" src="<?php the_field('welcome_video'); ?>" playsinline></video>
<span onclick="toggleMute()" id="the-mute-btn" class="mute-btn"></span>
		</div>
		<div class="live-title" id="live">
			<h1>Live By Push</h1>
			</div>
		<div class="site-section live-body">
		<?php
echo do_shortcode('[recent_post_carousel slides_to_show="5" slides_to_scroll="1" category="3"]');
?>
		</div>
			<div class="parallax one" data-speed="0.75" style="background-image:url(<?php the_field('image_between_live_and_power'); ?>);" ></div>
		<div class="site-section" id="power">
		<h1>The Power of Push</h1>
			<div class="d-flex flex-row justify-content-center stats-col">
  				<div class="p-2">
					<div class="orange col-md-12"><?php the_field('live_stream_number'); ?></div>
					<div class="stats-description col-md-12">
						LIVE STREAMS
					</div>
				</div>
 				 <div class="p-2">
					 <div class="blue col-md-12"><?php the_field('live_views_number'); ?></div>
					 <div class="stats-description col-md-12">
						 LIVE VIEWS
					 </div>
				</div>
  				<div class="p-2">
					<div class="yellow col-md-12"><?php the_field('audience_number'); ?></div>
					<div class="stats-description col-md-12">
						CUMULATIVE AUDIENCE
					</div>
				</div>
			</div>
		</div>
			<div class="parallax two" data-speed="0.75" style="background-image:url(<?php the_field('image_between_power_and_about'); ?>);" ></div>
		<div class="site-section" id="about">
		<h1>About Push</h1>
			<div class="row">
				<div class="col-md-6">
					<h2><?php the_field('about_title'); ?></h2>
					<p><?php the_field('about_text_black_background'); ?></p>
				</div>
				<div class="col-md-6">
					<img src="<?php the_field('about_photo_black_bg'); ?>">
				</div>
			</div>
                  <img src="<?php the_field('about_diagram'); ?>" class="chart">
		</div>
		<div class="site-section" id="about-bottom">
			<div class="row">
				<div class="col-md-6">
					<h2>We connect with your audience and amplify your content by simultaneously narrowcasting through multiple channels with customised streams, tailored to each target destination.
					</h2>
 
<p><?php the_field('about_left_text_white_background'); ?></p>

				</div>

				<div class="col-md-6">
					<img src="<?php the_field('about_photo_white_bg_first_row'); ?>">
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<img src="<?php the_field('about_us_white_bg_second_row'); ?>">
				</div>
				<div class="col-md-6" style="padding-top:5px;padding-left:15px;">
					<p><?php the_field('about_right_text_white_background'); ?></p>

			</div>

			</div>

			</div>
		<div class="parallax three" data-speed="0.75" style="background-image:url(<?php the_field('image_between_about_and_push_projects'); ?>)" ></div>
		<div class="site-section" id="projects">
		<h1>Push Projects</h1>
			<?php echo do_shortcode("[pt_view id=e093916ce0]"); ?>
		</div>
			<div class="parallax four" data-speed="0.75" style="background-image:url(<?php the_field('images_between_push_projects_and_contact')?>)";  ></div>
		<div class="site-section" id="contact">
		<h1>Contact</h1>
			<p><a href="mailto:hello@push.live" style="font-size:20px">hello@push.live</a><p>
		</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
