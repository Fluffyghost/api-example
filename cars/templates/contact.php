<?php /* Template Name: Contact */ get_header(); ?>

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

        <section class='twoCols'>
            <div class='grid-container'>
                <div class='grid-x grid-margin-x align-middle marT40 marB70'>
                    <div class='small-12 medium-12 large-6 cell contactDetails'>
                        <h1 class='bold marB20'>Contact us</h1>
                        <p class='intro'><?php echo get_field('contact_intro'); ?></p>
                        <h2 class='largep bold marT50'>Customer support</h2>
                        <p>Need help with anything?</p>
                        <a class='underline marT25 blue' href="https://customer.cartrawler.com/s/prod-publicfaqlanding?language=en_US/faq" target="_blank">View our Frequently asked questions</a>
                        <a class='phone blue marT25' href="tel:<?php echo get_field('phone','options');?>"><span class="material-icons">call</span><span class='underline'><?php echo get_field('phone','options');?></span></a>
                        <a class='email blue marT25' href="mailto:<?php echo get_field('email','options');?>"><span class="material-icons">email</span><span class='underline'><?php echo get_field('email','options');?></span></a>
                        <p class='largep bold marT40'>Veetoo Trades address</p>
                        <p><?php echo get_field('address','options'); ?></p>
                    </div>
                    <div class='small-12 medium-12 large-6 cell contactForm'>
                        <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form"]'); ?>
                    </div>
                </div>
            </div>
        </section>

  	</div>

<?php get_footer(); ?>
