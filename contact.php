<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

 <div class="news-header">
	    	<div class="fs-row">
	         	<div class="fs-cell typography">
    				<h1><?php echo pll__( 'Contact Us' );?></h1>
        		</div>
        		<div class="fs-cell">
    				<hr>
    			</div>
	    	</div>
        </div>


  <div class="news-wrapper">
      		<div class="news-content">
        		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
              the_content();
            endwhile;   ?>
              
            <?php endif; ?>
        		</div>
</div>
<?php get_footer(); ?>