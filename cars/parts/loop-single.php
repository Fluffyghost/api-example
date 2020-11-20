<div class='large-12 cell'>
	  <div class='blogHeader marB50'>
				<?php $category = get_the_category();
				$firstCategory = $category[0]->cat_name;
				echo '<a class="underline catlink marB20" href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>'; ?>
				<h1 class='marB30'><?php the_title(); ?></h1>
				<p class='bold noMar'><?php the_author(); ?></p>
				<p class='date'><?php echo the_date('F d, Y'); ?></p>
	  </div>
		<div class='blogContent'>
			  <?php if( get_field('blog_first_img')): ?>
		        <div class='img_block'>
		            <img src="<?php echo get_field('blog_first_img'); ?>">
						</div>
			  <?php endif; ?>
				<div class='text_block'>
            <?php the_content(); ?>
				</div>
				<?php if( get_field('blog_second_text')): ?>
						<div class='text_block'>
							  <h2 class='bold'><?php echo get_field('blog_second_title'); ?></h2>
								<?php echo get_field('blog_second_text'); ?>
						</div>
		  	<?php endif; ?>
				<?php if( get_field('blog_second_img')): ?>
		        <div class='img_block'>
		            <img src="<?php echo get_field('blog_second_img'); ?>">
						</div>
			  <?php endif; ?>
				<?php if( get_field('blog_third_text')): ?>
						<div class='text_block'>
							  <h3 class='h2 bold'><?php echo get_field('blog_third_title'); ?></h3>
								<?php echo get_field('blog_third_text'); ?>
						</div>
				<?php endif; ?>
				<div class='sharePost'>
					  <h4 class='bold'>Share</h4>
						<a class='shareicon face' target='_blank' href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>"><i class="fab fa-facebook-square"></i></a>
						<a class='shareicon twit' target='_blank' href="https://twitter.com/intent/tweet?text=<?php echo the_permalink();  ?>"><i class="fab fa-twitter-square"></i></a>
						<a class='shareicon linked' target='_blank' href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo the_permalink(); ?>"><i class="fab fa-linkedin"></i></a>
			  <div>
		</div>
</div>
