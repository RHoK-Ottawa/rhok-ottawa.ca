<?php 
// Filter to query the project date.
$category_year = '2014-summer';
?>

	<h1 class="section-title">Projects</h1>
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

		$liveURL = types_render_field("live-site", array("raw"=>"true","separator"=>";"));
		$repositoryURL = types_render_field("repository", array("raw"=>"true","separator"=>";"));
	?>	
		<article class="archive-proj">
				<h2 class="archive-proj-name"><?php the_title(); ?></h2>
				<ul class="archive-proj-links">
				<?php if($liveURL){ ?>
					<li class="archive-proj-links-site"><a href="<?= $liveURL ?>">Live Site</a></li> 
				<?php } ?> 
				<?php if($repositoryURL){ ?>
					<li class="archive-proj-links-code"><a href="<?= $repositoryURL ?>">Repository</a></li>
				<?php } ?>
				</ul>
				<?php the_content(); ?>
		</article>
	<?php		
		endwhile;
	?>
