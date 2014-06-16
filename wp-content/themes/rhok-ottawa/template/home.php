<?php
/*
Template Name: Home
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<!-- Banner -->
<header>
	<div class="pic-center"><div id="rhok_brief"><span><a href="http://www.rhok.org/">Random Hacks of Kindness | RHoK</a></span></div></div>
	<div class="pic-feature"></div>
</header>

<!-- Template Container -->
<div class="wrap">

	<section class="col col-2of3">
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					//
					the_content();
					//
				} // end while
			} // end if
		?>
	</section>

	<section class="col col-1of3">
		<h1 class="section-title">Upcoming</h1>
		<ul class="upcoming-event-ul">
			<li class="event-date"><span data-icon="&#xe023;"></span><p>June 13 - June 15, 2014</p></li>
			<li class="event-time"><span data-icon="&#x7d;"></span><p>Friday 19:30 - Sunday 18:00</p> <p class="event-schedule"><a href="http://beta.rhok-ottawa.ca/?page_id=43" >See full schedule</a></p></li>
			<li class="event-location"><span data-icon="&#xe081;"></span><p><a href="https://www.google.com/maps/place/126+York+St/@45.4292652,-75.6900505,17z">The Shopify Lounge, 126 York Street</a></p></li>
		</ul>
		<a href="https://www.eventbrite.ca/e/rhok-ottawa-june-2014-tickets-11722172333" class="register-btn"><span class="register-btn-em">Sign up</span> for the <br>next <span class="register-btn-em">hackathon</span></a>

	<?php include( get_stylesheet_directory() . '/partials/sidebar-projects.php'); ?>
	</section>

	<!-- Sponsors -->
	<section class="col col-1">
		<div class="section-center-title"><h1 class="section-title">Meet our sponsors</h1></div>
		<ul class="col col-1 sponsorlist">
			<?php
			$args = array( 'post_type' => 'sponsor', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				echo '<li><a href="">';
				the_post_thumbnail();
				echo '</a></li>';
			endwhile;
			?>
		</ul>
	</section>


</div> <!-- Template Container -->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
