
<?php $category = get_the_category(); ?>

<div class='small-12 medium-6 large-4 cell'>
		<div class='blogBox'>
				<a href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
				<div class='innerBox'>
					  <?php if ( $category[0] ) {
							   echo '<a class="underline catlink" href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
					  } ?>
						<a class='bold titlelink marT25 largep' href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
		</div>
</div>
