<?php /* Template Name: Projects */ ?>
<?php get_header(); ?>

<div class="projects-header">
	<div class="fs-row">
		<div class="fs-cell typography">
			<h1><?php echo pll__('Projects');?></h1>
		</div>
		<div class="fs-cell">
			<hr />
		</div>
	</div>
</div>
<div class="projects">
	<div class="projects-wrapper">
		<div class="project-item">
			<div class="project-img">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
				endwhile; 	?>
	
				<?php endif; ?>
 				</div>
 			</div>
 		<?php get_footer(); ?>
 </div>

 
