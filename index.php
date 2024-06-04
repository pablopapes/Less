<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <title><?php bloginfo('name'); ?>
        | <?php if (is_home()) : echo bloginfo('description'); endif; ?><?php wp_title('', true); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


<?php
/*-----------------------------------------------------------------------------------*/
/* Start header
/*-----------------------------------------------------------------------------------*/
get_header();
?>

<?php if (is_home() || is_archive()) : ?>
<div class="container container-content">
    <div id="primary">
        <div id="content" role="main" class="content-main">
            <?php else : ?>
            <div class="container container-single-post">
                <div id="primary">
                    <div id="content" role="main">
                        <?php endif; ?>
                        <?php
                        /*-----------------------------------------------------------------------------------*/
                        /* Start Home loop
                        /*-----------------------------------------------------------------------------------*/

                        if (is_home() || is_archive()) {

                            ?>
                            <?php if (have_posts()) : ?>

                                <?php while (have_posts()) : the_post(); ?>

                                    <article class="post">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <h1 class="title">
                                                <?php the_title() ?>
                                            </h1>
                                        </a>
                                        <div class="the-content">
                                            <?php the_excerpt(); ?>
                                        </div>

                                    </article>

                                <?php endwhile; ?>

                                <!-- pagintation -->
                                <div id="pagination" class="clearfix">
                                    <div class="next-page"><?php next_posts_link('&raquo; Nuevos'); ?></div>
                                    <div class="past-page "><?php previous_posts_link('Anteriores &laquo;'); ?></div>
                                </div><!-- pagination -->


                            <?php else : ?>

                                <article class="post error">
                                    <h2 class="404">Nothing posted yet</h2>
                                </article>

                            <?php endif; ?>


                        <?php } //end is_home(); ?>

                        <?php
                        /*-----------------------------------------------------------------------------------*/
                        /* Start Single loop
                        /*-----------------------------------------------------------------------------------*/

                        if (is_single()) {
                            ?>


                            <?php if (have_posts()) : ?>

                                <?php while (have_posts()) : the_post(); ?>

                                    <article class="post">

                                        <h1 class="title"><?php the_title() ?></h1>
                                        <div class="post-meta">
							<span class="comments-link">
								<?php the_date(); ?>
							</span>
                                            <?php if (comments_open()) : ?>
                                                <span class="comments-link">
									| <?php comments_popup_link(__('Comentario', 'less'), __('1 Comentario', 'less'), __('% Comentarios', 'less')); ?>
								</span>
                                            <?php endif; ?>

                                        </div><!--/post-meta -->

                                        <div class="the-content">
                                            <?php the_content('Continue...'); ?>

                                            <?php wp_link_pages(); ?>
                                        </div><!-- the-content -->

                                        <div class="meta clearfix">
                                            <div class="category"><?php echo get_the_category_list(); ?></div>
                                            <div class="tags"><?php echo get_the_tag_list('| &nbsp;', '&nbsp;'); ?></div>
                                        </div><!-- Meta -->

                                    </article>

                                <?php endwhile; ?>

                                <?php
                                // If comments are open or we have at least one comment, load up the comment template
                                if (comments_open() || '0' != get_comments_number())
                                    comments_template('', true);
                                ?>


                            <?php else : ?>

                                <article class="post error">
                                    <h2 class="404">Nothing posted yet</h2>
                                </article>

                            <?php endif; ?>


                        <?php } //end is_single(); ?>

                        <?php
                        /*-----------------------------------------------------------------------------------*/
                        /* Start Page loop
                        /*-----------------------------------------------------------------------------------*/

                        if (is_page()) {
                            ?>

                            <?php if (have_posts()) : ?>

                                <?php while (have_posts()) : the_post(); ?>

                                    <article class="post">

                                        <h1 class="title"><?php the_title() ?></h1>

                                        <div class="the-content">
                                            <?php the_content(); ?>

                                            <?php wp_link_pages(); ?>
                                        </div><!-- the-content -->

                                    </article>

                                <?php endwhile; ?>

                            <?php else : ?>

                                <article class="post error">
                                    <h2 class="404">Nothing posted yet</h2>
                                </article>

                            <?php endif; ?>

                        <?php } // end is_page(); ?>

                    </div><!-- #content .site-content -->
                </div><!-- #primary .content-area -->

            </div><!-- / container-->

            <?php
            /*-----------------------------------------------------------------------------------*/
            /* Start Footer
            /*-----------------------------------------------------------------------------------*/
            get_footer();
            ?>

            <?php wp_footer(); ?>

</body>
</html>
