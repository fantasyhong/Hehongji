<?php /* Template Name: Menu */ ?>
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
 	<iframe class="pdfviewer" width="100%" height="1360" src="<?php bloginfo('template_url'); ?>/js/web/viewer.html?file=menu.pdf"></iframe>
 </div>

</main>
<?php get_footer(); ?>