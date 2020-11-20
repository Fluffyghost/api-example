<?php /* Template Name: booking */ get_header(); ?>

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

        <section class='blogsResources padT20 padB100'>
            <div class='grid-container'>
                <div class='grid-x marB30'>
                    <div class='large-12 cell'>
                        <h1>Book your vehicle</h1>
                    </div>
                </div>
                <div class='grid-x marB30'>
                    <div class='large-12 cell'>
                        <div ct-app><noscript>YOUR BROWSER DOES NOT SUPPORT JAVASCRIPT</noscript></div>
                    </div>
                </div>
            </div>
        </section>

  	</div>

<?php get_footer(); ?>
