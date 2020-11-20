<?php /* Template Name: About */ get_header(); ?>

  	<div class="content">

        <section class='pageBanner rel' style="background-image:url('<?php echo get_field('banner_background'); ?>');">
            <div class='bannerOverlay'></div>
            <div class='grid-container'>
                <div class='grid-x marT30 marB20 breadWrap'>
                    <div class='large-12 cell aboutcrumbs'>
                      <?php if ( function_exists('yoast_breadcrumb') ) {
                          yoast_breadcrumb( '<p id="breadcrumbs" class="whitecrumbs">','</p>' );
                      } ?>
                    </div>
                </div>
                <div class='grid-x grid-margin-x align-middle bannerWrap'>
                    <div class='small-12 medium-12 large-12 cell'>
                        <div class='textBox'>
                            <p class='norm white center'>About Veetoo Cars</p>
                            <h1 class='white marB20 center'><?php echo get_field('banner_title'); ?></h1>
                            <a class='pinkB alCen marT40' href="<?php echo get_field('button_url'); ?>"><?php echo get_field('button_name'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class='firstTextCol'>
            <div class='grid-container'>
                <div class='grid-x grid-margin-x align-middle marT120 marB120'>
                    <div class='small-12 medium-12 large-6 cell textCol'>
                        <?php echo get_field('first_text_col'); ?>
                    </div>
                    <div class='small-12 medium-12 large-6 cell imgCol padL40'>
                        <img src="<?php echo get_field('first_img_col'); ?>"/>
                    </div>
                </div>
            </div>
        </section>

        <section class='secondTextCol'>
            <div class='grid-container'>
                <div class='grid-x grid-margin-x align-middle marT120 marB120'>
                    <div class='small-12 medium-12 large-6 cell imgCol padR40'>
                        <img src="<?php echo get_field('second_img_col'); ?>"/>
                    </div>
                    <div class='small-12 medium-12 large-6 cell textCol'>
                        <?php echo get_field('second_text_col'); ?>
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

        <section class='thirdTextCol'>
            <div class='grid-container'>
                <div class='grid-x grid-margin-x align-middle marT120 marB120'>
                    <div class='small-12 medium-12 large-6 cell textCol'>
                        <?php echo get_field('third_text_col'); ?>
                    </div>
                    <div class='small-12 medium-12 large-6 cell imgCol padL40'>
                        <img src="<?php echo get_field('third_img_col'); ?>"/>
                    </div>
                </div>
            </div>
        </section>

        <section class='ctaBanner pinkBg'>
            <div class='grid-container'>
                <div class='grid-x pad100'>
                    <div class='small-12 medium-12 large-12 cell'>
                        <p class='h2 center white marB30'><?php echo get_field('cta_title'); ?></p>
                        <a class='whiteB alCen' href="<?php echo get_field('cta_url'); ?>"><?php echo get_field('cta_name'); ?></a>
                    </div>
                </div>
            </div>
        </section>


  	</div>

<?php get_footer(); ?>
