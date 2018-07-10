<?php /* Template Name: 新闻 */ ?>
<?php get_header(); ?>

 <div class="news-header">
			<div class="fs-row">
				<div class="fs-cell typography">
					<h1>新闻</h1>
				</div>
				<div class="fs-cell">
					<hr>
				</div>
			</div>
		</div>

 <div class="news">
			<div class="view-content">
				
				<?php query_posts('category_name=新闻&showposts=9'); ?>
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
					                    <img class="image-style-thumbnail" <?php the_post_thumbnail(array(71,100)); ?>
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
							<p class="field-content"><a href="<?php the_permalink(); ?>">查看全文 »</a></p>
				</div>
        	</div>
        	<?php
        		endwhile;
			 } 
			?> 
			
    </div>
</div>
 


    		
  			
<?php get_footer(); ?>
</div>