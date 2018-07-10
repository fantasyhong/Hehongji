<?php get_header(); ?>
<main class="flex-fill">
 <div class="news-header">
	    	<div class="fs-row">
	         	<div class="fs-cell typography">
        		</div>
	    	</div>
        </div>


  <div class="news-wrapper">
		 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<h2><?php the_title(); ?></h2>
		 

		 	<div class="news-date">
        		<time class="news_item_date"><?php the_date(); ?></time>
        		<hr>
        		</div>
        	 <div class="news-img">
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

        		<div class="news-content">
        		<?php the_content(); ?>
        		</div>
		<?php endwhile; endif; ?>
      <!-- <div class="go-back">
        <?php
        $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
        echo "<a class='go-back-button' href='$url'>";?>
        <?php echo pll__( 'Go Back' ),'</a>';?> 
      </div> -->
</div>
</main>
<?php get_footer(); ?>
