<?php get_header(); ?>

    <div class="content">

        <section>
            <div class='grid-container'>
                <div class='grid-x padT30'>
                    <div class='large-12 cell'>
                      <?php if ( function_exists('yoast_breadcrumb') ) {
                          yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                      } ?>
                    </div>
                </div>
            </div>
        </section>

        <section class='blogArchive padT20 padB80'>
            <div class='grid-container'>
                <div class='grid-x grid-margin-x marB40'>
                    <div class='large-12 cell'>
                        <h1>Destinations</h1>
												<p class='marB40'>Browse our vast list of cities to explore.</p>
										</div>

                    <div class='large-12 cell'>

                        <div class='grid-x grid-margin-x'>
                            <?php $args = array(
                                'posts_per_page' => -1,
                                'post_type' => 'destinations',
                                'orderby'=>'title',
                                'order'=>'ASC',
                                // 'tax_query' => array(
                                //     array(
                                //       'taxonomy' => 'destinations_cat',
                                //       'field'    => 'slug',
                                //       'terms'    => 'spain',
                                //     ),
                                // ),
                            );
                            $myposts = get_posts( $args );
                            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>


                              <div class='small-12 medium-6 large-4 cell'>
                                  <div class='blogBox'>

                                      <a href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                                      <div class='innerBox'>
                                          <a class='bold titlelink marB20 largep' href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                                          <?php $categories = get_the_terms( $post->ID, 'destinations_cat' );
                                              if ( $categories ) {
                                                  foreach( $categories as $category ) {
                                                      echo '<a class="underline catlink" href="' . get_site_url(). '/destination-cats/' . $category->slug . '">' . $category->name . '</a>';
                                                  }
                                              } else {
                                                  echo '<a class="underline catlink" href="'. get_site_url(). '/contact-us">No country assigned</a>';
                                              }
                                          ?>
                                      </div>
                                  </div>
                              </div>




                            <?php endforeach; wp_reset_postdata(); ?>
                        </div>
                    </div>

                </div>
						</div>
				</section>

		</div>

<?php get_footer(); ?>
