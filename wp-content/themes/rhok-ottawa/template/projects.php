<?php
/*
Template Name: Projects
*/
// Filter to query the project date.
$category_year = '2014-summer';
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<header class="header-sub proj">
	<div class="pic-center-sub"></div>
	<div class="pic-feature-sub pic-feature-proj"></div>
</header>


<div class="section-center-title"><h1 class="section-title section-title-proj">Projects we will be hacking on</h1></div>

<div class="wrap wrap-proj">
	<section class="col col-1 section-proj">

		<?php
			$args = array( 
				'post_type' => 'project', 
				'posts_per_page' => 10,
				'paged' => get_query_var('page'),
				'meta_key' => 'wpcf-live-site',
				'tax_query' => array(
						array(
							'taxonomy' => 'project-year',
							'field' => 'slug',
							'terms' => $category_year
						)
					)
				);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();

			$organizationDescription = types_render_field("organization-description", array());
			$liveURL = types_render_field("live-site", array("raw"=>"true","separator"=>";"));
			$repositoryURL = types_render_field("repository", array("raw"=>"true","separator"=>";"));
		?>	

			<article class="proj-item">
				<div class="proj-img col-1of3"><a href="" target="_blank"><?php the_post_thumbnail(); ?></a></div>
				<div class="proj-detail col-2of3">
					<h2 class="proj-detail-name"><?php the_title(); ?></h2>
					<?php if($liveURL){ ?>
						<a href="<?= $liveURL ?>">Live Site</a> / 
					<?php } ?> 
					<?php if($repositoryURL){ ?>
						<a href="<?= $repositoryURL ?>">Repository</a> 
					<?php } ?>
					<?php echo $organizationDescription; ?>
				</div>
			</article>
		<?php		
			endwhile;
		?>

	</section>
</div>

<div class="section-center-title"><h1 class="section-title section-title-proj">See past projects we've hacked on.</h1></div>
<div class="wrap wrap-proj">
	<section class="col col-1 section-proj">

		<?php
			$args = array( 
				'post_type' => 'project', 
				'posts_per_page' => 10,
				'paged' => get_query_var('page'),
				'meta_key' => 'wpcf-live-site',
				'order' => 'ASC',
				'orderby' => 'name',
				'tax_query' => array(
						array(
							'taxonomy' => 'project-year',
							'field' => 'slug',
							'terms' => $category_year,
							'operator' => 'NOT IN'
						)
					)
				);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();

			$liveURL = types_render_field("live-site", array("raw"=>"true","separator"=>";"));
			$repositoryURL = types_render_field("repository", array("raw"=>"true","separator"=>";"));
		?>	

			<article class="proj-item">
				<div class="proj-img col-1of3"><a href="" target="_blank"><?php the_post_thumbnail(); ?></a></div>
				<div class="proj-detail col-2of3">
					<h2 class="proj-detail-name"><?php the_title(); ?></h2>
					<?php if($liveURL){ ?>
						<a href="<?= $liveURL ?>">Live Site</a> / 
					<?php } ?> 
					<?php if($repositoryURL){ ?>
						<a href="<?= $repositoryURL ?>">Repository</a> 
					<?php } ?>
					<?php echo $organizationDescription; ?>
				</div>
			</article>
		<?php		
			endwhile;
		?>

	</section>
</div>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
