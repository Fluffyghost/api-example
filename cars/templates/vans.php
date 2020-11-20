<?php /* Template Name: Vans */ get_header(); ?>

  	<div class="content">

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
                        <div class='whiteBox'>
                            <h1 class='marB30'>Search for a van rental</h1>

                            <div ct-app><noscript>YOUR BROWSER DOES NOT SUPPORT JAVASCRIPT</noscript></div>

                        </div>
                    </div>
                    <div class='small-12 medium-12 large-7 cell hidemed'>
                        <div class='textBox'>
                            <p class='h1 white marB20'>Why use Veetoo Vans?</p>
                            <?php echo get_field('car_list', 'options'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class='logoSlider mar50'>
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

        <section class='rentalDesintationsCpt mar80'>
            <div class='grid-container'>
                <div class='grid-x mar30'>
                    <div class='large-12 cell'>
                        <h2 class='h3'>Featured rental destinations</h2>
                    </div>
                </div>
                <div class='grid-x mar30'>
                    <div class='small-12 medium-12 large-12 cell'>
                        <div class='grid-x grid-margin-x'>
                            <?php if( have_rows('desintations_cats','options')):  $i = 1; ?>
                                <?php while ( have_rows('desintations_cats','options')) : the_row(); ?>
                                    <div class='small-12 medium-6 large-3 cell'>
                                        <img class="countryimg img_<?php echo $i; ?>" src="<?php echo get_sub_field('cat_img','options'); ?>">
                                        <h4 class='h3 marT30 marB20'><?php echo get_sub_field('title','options'); ?></h4>
                                        <?php if( have_rows('cities','options')): ?>
                                            <?php while ( have_rows('cities','options')) : the_row(); ?>
                                                <a class='blue cities' href="<?php echo get_sub_field('city_link','options'); ?>"><span class='underline'><?php echo get_sub_field('city_name','options'); ?></span><span class="material-icons">navigate_next</span></a>
                                            <?php endwhile; $i++; ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class='testimonials pad100'>
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

        <section class='blogsResources pad100'>
            <div class='grid-container'>
                <div class='grid-x mar30'>
                    <div class='large-12 cell'>
                        <div class='titleLinkwrap'>
                            <h3 class='h2'>Blogs & Resources</h3>
                            <a class='blue blogLink' href='<?php echo get_site_url(); ?>/blogs'><span class='underline'>View all blogs</span> <span class="material-icons">navigate_next</span></a>
                        </div>
                    </div>
                </div>
                <div class='grid-x mar30'>
                    <div class='small-12 medium-12 large-12 cell'>
                        <div class='grid-x grid-margin-x'>
                          <?php
                              $args = array(
                                  'posts_per_page' => 3,
                                  // 'category_name'    => 'featured',
                              );
                              $i = 1;
                              $myposts = get_posts( $args );
                              foreach ( $myposts as $post ) : setup_postdata( $post );

                          ?>
                              <div class='small-12 medium-6 large-4 cell'>
                                  <a class='featimg' href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                                  <a href='<?php echo the_permalink(); ?>'><p class='h4 marT40'><?php the_title(); ?></p></a>
                                  <div class='introText'><?php echo the_excerpt(); ?></div>
                              </div>

                          <?php endforeach; wp_reset_postdata(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>

  	</div>

<?php get_footer(); ?>
