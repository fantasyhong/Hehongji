<?php get_header(); ?>
<main class="flex-fill">
<div class="main-header">
			<div class="fs-row">
				<div class="fs-cell typography">
					<!-- <h1><?php echo esc_html(the_title() ); ?></h1> -->
				</div>
			</div>
		</div>
 <div class="main">
 	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	the_content();
endwhile; 	?>
	
<?php endif; ?>
 </div>

</main>
<?php get_footer(); ?>