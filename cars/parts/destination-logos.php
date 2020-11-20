<section class='icon_block'>
    <div class='grid-container'>
        <div class='grid-x grid-margin-x marB80'>
          <?php if( have_rows('icon_block', 'options')): ?>
              <?php while ( have_rows('icon_block', 'options')) : the_row(); ?>
                  <div class='small-12 medium-6 large-4 cell blockWrap'>
                      <img class='marB20' src="<?php echo get_sub_field('block_logo', 'options'); ?>"/>
                      <p class='h3 bold'><?php echo get_sub_field('block_title', 'options'); ?></p>
                      <p class='text'><?php echo get_sub_field('block_text', 'options'); ?></p>
                  </div>
              <?php endwhile; ?>
          <?php endif; ?>
        </div>
    </div>
</section>
