<?php get_header(); ?>

		<div class="content">


				<section>
						<div class='grid-container'>
								<div class='grid-x marT30'>
										<div class='large-12 cell'>
											<?php if ( function_exists('yoast_breadcrumb') ) {
													yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
											} ?>
										</div>
								</div>
						</div>
				</section>

				<article class='singleBlog'>
            <div class='grid-container'>
                <div class='grid-x pad100'>
									   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
										     <?php get_template_part( 'parts/loop', 'single' ); ?>
 										 <?php endwhile; else : ?>
 											   <?php get_template_part( 'parts/content', 'missing' ); ?>
 										<?php endif; ?>
								</div>
						</div>
				</article>
				<section class='greyBg'>
            <div class='grid-container'>
                <div class='grid-x'>
										<div class='large-12 cell'>
												<div class='relatedBlogs pad70'>
													 <h3 class='h2 bold marB50'>You might also like</h3>
														<div class='grid-x grid-margin-x'>
															 <?php $args = array(
																	 'posts_per_page' => 3,
																	 'post_type' => 'post',
																	 'post__not_in' => array(get_the_ID())
															 );
															 $myposts = get_posts( $args );
															 foreach ( $myposts as $post ) : setup_postdata( $post );

															 $category = get_the_category(); ?>

																 <div class='small-12 medium-6 large-4 cell'>
																		 <div class='relatedBox'>
																				 <a href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
																				 <div class='innerBox'>
																						 <?php if ( $category[0] ) {
																									echo '<a class="underline catlink" href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
																						 } ?>
																						 <a class='bold titlelink marT25 largep' href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
																				 </div>
																		 </div>
																 </div>

															 <?php endforeach; wp_reset_postdata(); ?>
													 </div>
											 </div>
										</div>
								</div>
						</div>
				</section>

		</div>

<?php get_footer(); ?>
