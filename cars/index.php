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

        <section class='blogArchive padT40 padB80'>
            <div class='grid-container'>
                <div class='grid-x marB40'>
                    <div class='large-12 cell'>
                        <h1>Blogs</h1>
												<p><?php echo get_field('archive_description', 'option'); ?></p>
										</div>
								</div>
								<div class='grid-x grid-margin-x'>
                    <?php if ( $paged < 2 ) : ?>
                        <?php get_template_part( 'parts/loop', 'featured' ); ?>
                    <?php else : endif; ?>
                    <?php if (have_posts()) : query_posts($query_string.'&cat=-33,-34'); while (have_posts()) : the_post(); ?>
										    <?php get_template_part( 'parts/loop', 'archive' ); ?>
									  <?php endwhile; ?>
										    <?php joints_page_navi(); ?>
									  <?php else : ?>
										    <?php get_template_part( 'parts/content', 'missing' ); ?>
									  <?php endif; ?>
								</div>
						</div>
				</section>

		</div>

<?php get_footer(); ?>
