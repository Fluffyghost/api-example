<?php get_header(); ?>

		<div class="content singleDestination">

				<section class='carBookingForm rel' style="background-image:url('<?php echo get_field('banner_background','options'); ?>');">
						<div class='bannerOverlay'></div>
						<div class='grid-container formMedWidth'>


								<div class='grid-x padT30 breadWrap'>
										<div class='large-12 cell'>
											<?php if ( function_exists('yoast_breadcrumb') ) {
													yoast_breadcrumb( '<p id="breadcrumbs" class="whitecrumbs">','</p>' );
											} ?>
										</div>
								</div>

								<div class='grid-x grid-margin-x align-middle formCols formColsnoH'>
										<div class='small-12 medium-12 large-5 cell'>
												<div class='whiteBox' id='destination-form'>
													  <?php $categories = get_the_terms( $post->ID, 'destinations_cat' ); ?>
														<?php if ( $categories ) { ?>
																<?php foreach( $categories as $category ) { ?>
																		<h1 class='marB30'>Search for a car rental in <?php echo $category->name; ?></h1>
		                            <?php } ?>
														<?php } else { ?>
															  <h1 class='marB30'>Search for a car rental</h1>
														<?php } ?>
														<div ct-app><noscript>YOUR BROWSER DOES NOT SUPPORT JAVASCRIPT</noscript></div>

												</div>
										</div>
										<div class='small-12 medium-12 large-7 cell'>
												<div class='textBox'>
														<p class='h1 white marB20'>Why use Veetoo Cars?</p>
														<?php echo get_field('car_list', 'options'); ?>
												</div>
										</div>
								</div>
						</div>
				</section>

				<section class='logoSlider marT50 marB80'>
						<div class='grid-container'>
								<div class='grid-x grid-margin-x'>
											<div class='large-12 cell'>
													<div class='grid-x grid-margin-x logos'>
															<?php if( have_rows('company_carousel', 'options')): ?>
																	<?php while ( have_rows('company_carousel', 'options')) : the_row(); ?>
																			<div class='small-6 medium-3 large-auto cell logoimg'>
																					<img src="<?php echo get_sub_field('company_logo', 'options'); ?>"/>
																			</div>
																	<?php endwhile; ?>
															<?php endif; ?>
													</div>
											</div>
									</div>
						</div>
				</section>

        <?php if( get_field('block_img_first')): ?>
						<section class='textImg_block'>
		            <div class='grid-container'>
		                <div class='grid-x grid-margin-x align-middle marB80'>
		                    <div class='small-12 medium-6 large-6 cell imgCol'>
		                        <img src="<?php echo get_field('block_img_first'); ?>">
												</div>
												<div class='small-12 medium-6 large-6 cell textColR'>
													  <h2 class='bold marB25'><?php echo get_field('block_title_first'); ?></h2>
		                        <?php echo get_field('block_text_first'); ?>
												</div>
										</div>
								</div>
						</section>
			  <?php endif; ?>


				<?php get_template_part( 'parts/destination', 'logos' ); ?>

				<?php if( get_field('block_text_second')): ?>
						<section class='textImg_block'>
		            <div class='grid-container'>
		                <div class='grid-x grid-margin-x align-middle marB80'>
		                    <div class='small-12 medium-6 large-6 cell textColL'>
													  <h3 class='h2 bold marB25'><?php echo get_field('block_title_second'); ?></h3>
		                        <?php echo get_field('block_text_second'); ?>
												</div>
												<div class='small-12 medium-6 large-6 cell imgCol'>
		                        <img src="<?php echo get_field('block_img_second'); ?>">
												</div>
										</div>
								</div>
				    </section>
				<?php endif; ?>

				<section class='testimonials pad100 marB80'>
						<div class='grid-container'>
								<div class='grid-x grid-margin-x'>
										<div class='small-12 medium-12 large-12 cell'>
												<div class='reviewBox center '>
														<div class='grid-x testSlider'>
																<?php
																		$args = array(
																				'posts_per_page' => -1,
																				'post_type' => 'testimonials',
																		);
																		$myposts = get_posts( $args );
																		foreach ( $myposts as $post ) :  setup_postdata( $post );
																?>
																		<div class='large-12 cell'>
																				<img class='stars' src="<?php echo get_template_directory_uri(); ?>/assets/images/stars.png">
																				<div class='feedback'><?php the_content(); ?></div>
																				<p class='bold marB80'><?php the_title(); ?></p>
																		</div>
																<?php endforeach; wp_reset_postdata();  ?>
														</div>
														<div class='controlWrap'>
																<a class="prevButton"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/arrow-left.svg"></a>
																<a class="nextButton"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/arrow-right.svg"></a>
														</div>
												</div>
										</div>
								</div>
						</div>
				</section>

				<?php if( get_field('block_img_third')): ?>
						<section class='textImg_block'>
		            <div class='grid-container'>
		                <div class='grid-x grid-margin-x align-middle marB80'>
		                    <div class='small-12 medium-6 large-6 cell imgCol'>
		                        <img src="<?php echo get_field('block_img_third'); ?>">
												</div>
												<div class='small-12 medium-6 large-6 cell textColR'>
													  <h3 class='h2 bold marB25'><?php echo get_field('block_title_third'); ?></h3>
		                        <?php echo get_field('block_text_third'); ?>
												</div>
										</div>
								</div>
						</section>
				<?php endif; ?>

        <?php if( get_field('dest_background')): ?>
						<section class='destinationBanner rel marB80' style="background-image:url('<?php echo get_field('dest_background'); ?>');">
								<div class='bannerOverlay'></div>
								<div class='grid-container'>
										<div class='grid-x align-middle'>
												<div class='small-12 medium-12 large-12 cell innerBox'>
												    <p class='h2 bold marB40'>Book your car hire now</p>
														<!-- <a class='pinkB' href="</?php echo get_field('dest_link'); ?>"></?php echo get_field('dest_name'); ?></a> -->
														<button id='book-destination' class='pinkB'>Search for a car hire</a>
												</div>
										</div>
								</div>
						</section>
				<?php endif; ?>

        <?php if( get_field('block_text_forth')): ?>
						<section class='textImg_block'>
								<div class='grid-container'>
										<div class='grid-x grid-margin-x align-middle marB80'>
												<div class='small-12 medium-6 large-6 cell textColL'>
													  <h3 class='h2 bold marB25'><?php echo get_field('block_title_forth'); ?></h3>
														<?php echo get_field('block_text_forth'); ?>
												</div>
												<div class='small-12 medium-6 large-6 cell imgCol'>
														<img src="<?php echo get_field('block_img_forth'); ?>">
												</div>
										</div>
								</div>
						</section>
				<?php endif; ?>

	  </div>

<?php get_footer(); ?>
