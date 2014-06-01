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
		<div class="intro">
			<h1>Join us for a Hackathon here in Ottawa June 27-29th, 2014</h1>
			<p>We'll be working to build solutions to address challenges faced by non-profits, humanitarian and community organizations.</p>
			<p><strong>Interested in participating?</strong></p>
			<a class="register-btn" href="https://www.eventbrite.ca/e/rhok-ottawa-june-2014-tickets-11722172333">Sign up</a>
		</div>
		<h1>Frequently Asked Questions</h1>
		<h2>What is a Hackathon?</h2>
		<p>A hackathon is an event where people get together (usually over a weekend) to try and build a prototype to solve some problem defined by the event.</p>
		<p>At RHoK Ottawa, we are going to build open source software that solves hard problems facing humanity and humanitarians. For example, we are working with Amnesty to build a tablet app to help collect signatures.</p>
		<h3>What do you mean by hack? Like breaking into computers and wreaking other people's stuff?</h3>
		<p>Most certainly not! We're using the word "hack" here in it's original sense: To come up with a clever and unconventional solution to a problem.</p>
		<h3>Do I have to be a "hacker" to participate?</h3>
		<p>Not at all! Building great software requires designers, developers and people who are familiar with the problems we are solving, but most importantly we need people who are passionate about solving problems.</p>
		<h3>Do I have to have a lot of experience?</h3>
		<p>No! Hackathons are a great way to learn from people with more experience or to learn from people who have skills completely different from your own. If you are just getting started with CSS or want to know more about web pages we want you there</p>
		<h3>What do I need to bring?</h3>
		<p>We strongly recommend that you bring a laptop, since we are building software at the event, but it's not absolutely essential.</p>
		<h3>What do you expect people to build in a weekend?</h3>
		<p>To be very clear, it’s really hard to build something complete and working in a weekend. If at the end of the weekend, your team only has card board prototypes of an app flow, that’s perfectly ok! The whole point of a hackathon is to get people with different skill sets together to try and solve a problem.</p>
	</section>

	<section class="col col-1of3">
		<h1 class="section-title">Upcoming</h1>
		<ul class="upcoming-event-ul">
			<li class="event-date"><span data-icon="&#xe023;"></span><p>June 13 - June 15, 2014</p></li>
			<li class="event-time"><span data-icon="&#x7d;"></span><p>Friday 07:30 - Sunday 18:00</p> <p class="event-schedule"><a href="" >See full schedule</a></p></li>
			<li class="event-location"><span data-icon="&#xe081;"></span><p>The Shopify Lodge, 126 York Street</p></li>
		</ul>
		<a class="register-btn"><span class="register-btn-em">Sing up</span> for the <br>next <span class="register-btn-em">hackathon</span></a>
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