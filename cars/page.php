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

			  <section class='plainPage'>
						<div class="grid-container">
								<div class="grid-x padT40 padB100">
										<div class='large-12 cell'>
												<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
													  <h1 class='marB20'><?php the_title(); ?></h1>
														<?php the_content(); ?>
												<?php endwhile; endif; ?>
										</div>
								</div>
						</div>
				</section>

		</div>

<?php get_footer(); ?>
