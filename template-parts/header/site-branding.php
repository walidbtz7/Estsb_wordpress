

<div class="site-branding">
    <?php if (has_custom_logo()) { ?>
        <div class="custom-logo">
            <?php the_custom_logo(); ?>
        </div>
    <?php } else { ?>
        <div class="site-branding-text">
            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                      rel="home"><?php bloginfo('name'); ?></a></h1>
            <p class="site-description"><?php echo esc_html(get_bloginfo('description')); ?></p>
            <p class="site-description" style="font-family: 'Tajawal', sans-serif;margin-top: 10px;">
                <?php
                echo steduty_get_option('arabic_description_text');
                ?>
            </p>
        </div>
    <?php } ?>
</div>

