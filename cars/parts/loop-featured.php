<div class='small-12 medium-12 large-6 cell'>
		<?php $args = array(
				'posts_per_page' => 1,
				'post_type' => 'post',
				'category_name' => 'main-featured',
		);
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post );

		$category = get_the_category(); ?>

		<div class='grid-x'>
				<div class='mainFeatured'>
						<a href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
						<div class='innerBox pad25'>
								<?php if ( $category[0] ) {
										 echo '<a class="underline catlink" href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
								} ?>
								<a class='bold titlelink marT25 h3' href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
						</div>
				</div>
		</div>

		<?php endforeach; wp_reset_postdata(); ?>
</div>

<div class='small-12 medium-12 large-6 cell'>
    <div class='grid-x grid-margin-x marB60'>
				<?php $args = array(
						'posts_per_page' => 3,
						'post_type' => 'post',
						'category_name' => 'featured',
				);
				$myposts = get_posts( $args );
				$i = 1;
				foreach ( $myposts as $post ) : setup_postdata( $post );

				$category = get_the_category(); ?>

						<div class='small-12 medium-12 large-12 cell featured feat_<?php echo $i; ?>'>
								<div class='featBox'>
										<a href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
										<div class='innerBox pad25'>
												<?php if ( $category[0] ) {
														 echo '<a class="underline catlink" href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
												} ?>
												<a class='bold titlelink marT25' href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
										</div>
								</div>
						</div>

				<?php $i++; endforeach; wp_reset_postdata(); ?>
		</div>

</div>
