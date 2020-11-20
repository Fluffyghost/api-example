                <footer class="footer padT100 padB60" role="contentinfo">
                    <div class='grid-container'>
                        <div class='grid-x footWrap'>
                            <div class='small-12 medium-12 large-12 cell'>
                                <?php menu_footer(); ?>
                            </div>
                        </div>
                    </div>
    			      </footer>
                <div class='creditBar'>
                    <div class='grid-container'>
                        <div class='grid-x'>
                            <div class='small-12 medium-12 large-4 cell credCol hidemed'>
                                <a class='text tiny' href="http://boxchilli.com" target="_blank">Designed & Developed by boxChilli</a>
                            </div>
                            <div class='small-12 medium-12 large-4 cell credCol'>
                                <ul class='social'>
                                    <?php if( get_field('twitter','options')) : ?>
                                        <li><a href="<?php echo get_field('twitter', 'options'); ?>" target='_blank'><i class="fab fa-twitter"></i></a></li>
                                    <?php endif; ?>
                                    <?php if( get_field('facebook','options')) : ?>
                                        <li><a href="<?php echo get_field('facebook', 'options'); ?>" target='_blank'><i class="fab fa-facebook-square"></i></a></li>
                                    <?php endif; ?>
                                    <?php if( get_field('instagram','options')) : ?>
                                        <li><a href="<?php echo get_field('instagram', 'options'); ?>" target='_blank'><i class="fab fa-instagram"></i></a></li>
                                    <?php endif; ?>
                                    <?php if( get_field('linkedin','options')) : ?>
                                        <li><a href="<?php echo get_field('linkedin', 'options'); ?>" target='_blank'><i class="fab fa-linkedin-in"></i></a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class='small-12 medium-12 large-4 cell credCol'>
                                <p class='tiny noMar'>&copy; 2020 Veetoo Cars. All rights reserved.</p>
                            </div>
                            <div class='small-12 medium-12 large-4 cell credCol showmed'>
                                <a class='text tiny' href="http://boxchilli.com" target="_blank">Designed & Developed by boxChilli</a>
                            </div>
                        </div>
                    </div>
                </div>

			      </div><!-- end .off-canvas-content -->
		    </div><!-- end .off-canvas-wrapper -->

		<?php wp_footer(); ?>

    </body>
</html>
