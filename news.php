<?php /* Template Name: News */ ?>
<?php get_header(); ?>
<main class="flex-fill">
 <div class="news-header">
			<div class="fs-row">
				<div class="fs-cell typography">
					<!-- <?php echo '
					<h1>' . __('News', 'Barhems') . '</h1>
					'; ?> -->
					<h1><?php echo pll__( 'News' );?></h1>
				</div>
				<div class="fs-cell">
					<hr>
				</div>
			</div>
		</div>

 <div class="news">
			<div class="view-content">
				
				<?php query_posts(array('category_name'=>'news','posts_per_page'=> 3,'paged'=>$paged)); ?>
			  <?php 
			    if ( have_posts() ) { 
			        while ( have_posts() ) : the_post();
    			?>
    			<div class="views-row">
			 		<div class="blog-post">
			 			<div class="views-field views-field-title">
							<h2 class="blog-post-title">
								<a href="<?php the_permalink(); ?>" style="text-decoration: none; color: #777;" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							</h2>
						</div>	
						<div class="views-field views-field-field-primary-image">
							<div class="field-content imagelink">
								<?php if ( has_post_thumbnail() ) {?>
					                    <img class="image-style-thumbnail" <?php the_post_thumbnail(); ?>
					               <?php
					                  } else{
					                      ?>
					                    <img class="image-style-thumbnail" src="<?php bloginfo('template_url'); ?>/imgs/logo.jpg" width="71" height="100">
					               <?php
					                  }

					                              ?>
							</div>
						</div>
						<div class="views-field views-field-body">
								<div class="field-content">
				                <?php the_excerpt(); ?>
				        </div>
                     </div>
      			</div>
      			<div class="views-field views-field-view-node">
							<p class="field-content"><a href="<?php the_permalink(); ?>"><?php echo pll__( 'Read more »' );?></a></p>
				</div>
        	</div>
        	<?php
        		endwhile;
			 } 
			?> 
			<div class="page_number"><?php echo paginate_links( $args ); ?></div>
    </div>
</div>
 

</main>
    		
  			
<?php get_footer(); ?>
</div>