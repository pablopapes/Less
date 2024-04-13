<header id="masthead" class="site-header" role="banner">
    <div class="container container-header">

        <div class="gravatar">
            <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="gravatar link">
                <?php
                // grab admin email and their photo
                $admin_email = get_option('admin_email');
                echo get_avatar($admin_email, 100);
                ?>
            </a>
        </div><!--/ author -->
    </div><!--/container -->

</header><!-- #masthead .site-header -->