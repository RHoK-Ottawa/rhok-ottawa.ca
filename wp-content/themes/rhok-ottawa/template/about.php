<?php
/*
Template Name: About
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<!-- Banner -->
<header class="header-sub about">
	<div class="pic-center-sub"></div>
	<div class="pic-feature-sub pic-feature-about"></div>
</header>
<div class="section-center-title"><h1 class="section-title section-title-about">Random hacks of kindness<br><span>Ottawa<span></h1></div>

<!-- Template Container -->
<div class="wrap">

	<section class="col col-2of3">
		<h1 class="section-title">FAQ</h1>
		<?php if ( have_posts() ): ?>
		<?php while ( have_posts() ) : the_post(); ?>
				<article>
					<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<?php the_content(); ?>
				</article>
		<?php endwhile; ?>
		<?php else: ?>
			<h2>No posts to display</h2>
		<?php endif; ?>
	</section>

	<?php include( get_stylesheet_directory() . '/partials/sidebar-projects.php'); ?>

</div> <!-- Template Container -->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>