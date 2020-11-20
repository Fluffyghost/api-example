<div class="mobBar">
    <a href="<?php echo get_home_url(); ?>"><img class='moblogo' src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"></a>
    <button class="hamburger hamburger--spring" type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>
    <div class='mobnav'>
        <?php joints_top_nav(); ?>
    </div>
</div>

<div class='grid-container deskBar'>
    <div class='grid-x align-middle deskWrap'>
        <div class='large-3 cell leftHead'>
            <a href="<?php echo get_home_url(); ?>"><img class='desklogo' src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"></a>
        </div>
        <div class='large-9 cell rightHead'>
            <?php joints_top_nav(); ?>
        </div>
    </div>
</div>
