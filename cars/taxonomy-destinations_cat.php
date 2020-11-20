<?php get_header(); ?>

    <div class="content singleDestination">

        <?php $term = get_queried_object();
            $taxonomy = $term->taxonomy;
            $term_id = $term->term_id;

            $bannerimg = get_field('main_banner_image', $term);

            $imageone = get_field('block_img_first', $term);
            $titleone = get_field('block_title_first', $term);
            $textone = get_field('block_text_first', $term);

            $imagetwo = get_field('block_img_second', $term);
            $titletwo = get_field('block_title_second', $term);
            $texttwo = get_field('block_text_second', $term);

            $imagethird = get_field('block_img_third', $term);
            $titlethird = get_field('block_title_third', $term);
            $textthird = get_field('block_text_third', $term);

            $imagefourth = get_field('block_img_forth', $term);
            $titlefourth = get_field('block_title_forth', $term);
            $textfourth = get_field('block_text_forth', $term);
       ?>


        <section class='carBookingForm rel' style="background-image:url('<?php echo $bannerimg ?>');">
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

                            <h1 class='marB30'>Search for a car rental in <?php echo $term->name ?> </h1>

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

        <section class='textImg_block'>
            <div class='grid-container'>
                <div class='grid-x grid-margin-x align-middle marB80'>
                    <div class='small-12 medium-6 large-6 cell imgCol'>
                        <img src="<?php echo $imageone; ?>">
                    </div>
                    <div class='small-12 medium-6 large-6 cell textColR'>
                        <h2 class='bold marB25'><?php echo $titleone; ?></h2>
                        <?php echo $textone; ?>
                    </div>
                </div>
            </div>
        </section>


        <!-- <section class='icon_block'>
            <div class='grid-container'>
                <div class='grid-x grid-margin-x marB80'>
                    <div class='small-12 medium-6 large-4 cell blockWrap'>
                        <img class='marB20' src="</?php echo get_field('block_logo_one', $term); ?>"/>
                        <p class='h3 bold'></?php echo get_field('block_title_one', $term); ?></p>
                        <p class='text'></?php echo get_field('block_text_one', $term); ?></p>
                    </div>
                    <div class='small-12 medium-6 large-4 cell blockWrap'>
                        <img class='marB20' src="</?php echo get_field('block_logo_two', $term); ?>"/>
                        <p class='h3 bold'></?php echo get_field('block_title_two', $term); ?></p>
                        <p class='text'></?php echo get_field('block_text_two', $term); ?></p>
                    </div>
                    <div class='small-12 medium-6 large-4 cell blockWrap'>
                        <img class='marB20' src="</?php echo get_field('block_logo_three', $term); ?>"/>
                        <p class='h3 bold'></?php echo get_field('block_title_three', $term) ?></p>
                        <p class='text'></?php echo get_field('block_text_three', $term); ?></p>
                    </div>
                </div>
            </div>
        </section> -->

        <?php get_template_part( 'parts/destination', 'logos' ); ?>



        <section class='textImg_block'>
            <div class='grid-container'>
                <div class='grid-x grid-margin-x align-middle marB80'>
                    <div class='small-12 medium-6 large-6 cell textColL'>
                        <h3 class='h2 bold marB25'><?php echo $titletwo; ?></h3>
                        <?php echo $texttwo; ?>
                    </div>
                    <div class='small-12 medium-6 large-6 cell imgCol'>
                        <img src="<?php echo $imagetwo; ?>">
                    </div>
                </div>
            </div>
        </section>

        <section class='blogArchive'>
            <div class='grid-container'>
                <div class='grid-x marB80'>
                    <div class='large-12 cell'>
                        <p class='h2 marB40'>View some of our cities in <?php echo $term->name ?></p>
                        <div class='grid-x grid-margin-x'>
                            <?php $args = array(
                                'posts_per_page' => 3,
                                'post_type' => 'destinations',
                                'orderby'=>'title',
                                'order'=>'ASC',
                                'tax_query' => array(
                                    array(
                                      'taxonomy' => 'destinations_cat',
                                      'field'    => 'slug',
                                      'terms'    => $term->name
                                    ),
                                ),
                            );
                            $myposts = get_posts( $args );
                            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

                                <div class='small-12 medium-6 large-4 cell'>
                                    <div class='blogBox'>
                                        <a href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                                        <div class='innerBox'>
                                            <?php $categories = get_the_terms( $post->ID, 'destinations_cat' );
                                                if ( $categories ) {
                                                    foreach( $categories as $category ) {
                                                        echo '<a class="underline catlink" href="' . get_site_url(). '/destination-cats/' . $category->slug . '">' . $category->name . '</a>';
                                                    }
                                                } else {
                                                    echo '<a class="underline catlink" href="'. get_site_url(). '/contact-us">No country assigned</a>';
                                                }
                                            ?>
                                            <a class='bold titlelink marT25 largep' href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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


        <section class='textImg_block'>
            <div class='grid-container'>
                <div class='grid-x grid-margin-x align-middle marB80'>
                    <div class='small-12 medium-6 large-6 cell imgCol'>
                        <img src="<?php echo $imagethird; ?>">
                    </div>
                    <div class='small-12 medium-6 large-6 cell textColR'>
                        <h3 class='h2 bold marB25'><?php echo $titlethird ?></h3>
                        <?php echo $textthird; ?>
                    </div>
                </div>
            </div>
        </section>



        <section class='destinationBanner rel marB80' style="background-image:url('<?php echo get_field('dest_background', $term); ?>');">
            <div class='bannerOverlay'></div>
            <div class='grid-container'>
                <div class='grid-x align-middle'>
                    <div class='small-12 medium-12 large-12 cell innerBox'>
                        <!-- <p class='h2 bold marB40'></?php echo get_field('dest_title', $term); ?></p>
                        <a class='pinkB' href="</?php echo get_field('dest_link', $term); ?>"></?php echo get_field('dest_name', $term); ?></a> -->
                        <p class='h2 bold marB40'>Book your car hire now</p>
                        <button id='book-destination' class='pinkB'>Search for a car hire</a>
                    </div>
                </div>
            </div>
        </section>


        <section class='textImg_block'>
            <div class='grid-container'>
                <div class='grid-x grid-margin-x align-middle marB80'>
                    <div class='small-12 medium-6 large-6 cell textColL'>
                        <h3 class='h2 bold marB25'><?php echo $titlefourth; ?></h3>
                        <?php echo $textfourth; ?>
                    </div>
                    <div class='small-12 medium-6 large-6 cell imgCol'>
                        <img src="<?php echo $imagefourth; ?>">
                    </div>
                </div>
            </div>
        </section>


    </div>

<?php get_footer(); ?>
