<?php /* Template Name: General */ ?>
<?php get_header(); ?>
<main class="flex-fill">
 <div class="main-header">
			<div class="fs-row">
				<div class="fs-cell typography">
					<h1><?php echo esc_html(the_title() ); ?></h1>
				</div>
				<div class="fs-cell">
					<hr>
				</div>
			</div>
		</div>

 <div class="main">
			<div class="main-img">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php
                  if ( has_post_thumbnail() ) {

                  ?>
               <div class="media-object-section ">
                  <div class="thumbnail">
                     <a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
                  </div>
               </div>
                <?php
                  }

                              ?>
            </div>
            <div class="main-content">
            	<?php the_content(); ?>
            </div>
            <?php endwhile; endif; ?>
</div>
 

</main>
    		
  			
<?php get_footer(); ?>
</div>