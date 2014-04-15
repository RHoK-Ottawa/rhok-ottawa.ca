<?php
/*
Template Name: Home
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<!-- Banner -->
<header>
	<div class="pic-center"><div id="rhok_brief"><span><a href="http://www.rhok.org/">Random Hacks of Kindness | RHoK</a></span><br>is a global initiative to make the world a better place by developing solutions in response to challenges facing humanity<a href="http://www.rhok.org/solutions" target="_blank" class="rohklink" ><div class="learnmore">Check out the past RHoK projects</div></a></div></div>
	<div class="pic-feature"></div>
</header>

<!-- Template Container -->
<div class="wrap">

<section class="col col-2of3">
		<h1 class="section-title">Testimonial</h1>

			<article class="testimonial-article">
				<div class="profile-pic jm"></div>
				<div class="profile">
					<h2 class="profile-name">Jonathan Marshall</h2>
					<h2 class="profile-title">Computer Programmer</h2>
				</div>
				<div class="testimonial">
					<p>"I would definitely do it again!"</p>
				</div>
			</article>
			
			<article class="testimonial-article">
				<div class="profile-pic em right"></div>
				<div class="profile right">
					<h2 class="profile-name right">Enrique Martinez</h2>
					<h2 class="profile-title right">Front-end Developer</h2>
				</div>
				<div class="testimonial right">
					<p>"Great time spent with great people and awesome beer!"</p>
				</div>
			</article>

			<article class="testimonial-article">
				<div class="profile-pic mr"></div>
				<div class="profile">
					<h2 class="profile-name">Melisa Richardson</h2>
					<h2 class="profile-title">User Interface Designer</h2>
				</div>
				<div class="testimonial">
					<p>"I am amazed how many great ideas we can come out just over a weekend!"</p>
				</div>
			</article>

	</section>

	<section class="col col-1of3">
		<h1 class="section-title">Upcoming</h1>
		<ul class="upcoming-event-ul">
			<li class="event-date"><span data-icon="&#xe023;"></span><p>June 13 - June 15, 2014</p></li>
			<li class="event-time"><span data-icon="&#x7d;"></span><p>Friday 07:30 - Sunday 18:00</p> <p class="event-schedule"><a href="" >See full schedule</a></p></li>
			<li class="event-location"><span data-icon="&#xe081;"></span><p>The Shopify Lodge, 126 York Street</p></li>
			<a href=""><div class="register-btn"><span class="register-btn-em">Sing up</span> for the <br>next <span class="register-btn-em">hackathon</span></div></a>
		</ul>
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