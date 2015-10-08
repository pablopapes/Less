<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php bloginfo('name'); ?> | <?php if( is_home() ) : echo bloginfo( 'description' ); endif; ?><?php wp_title( '', true ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


<?php
  /*-----------------------------------------------------------------------------------*/
  /* Start header
  /*-----------------------------------------------------------------------------------*/
  get_header();
?>

<div class="container">

  <div id="primary">
    <div id="content" role="main">

<?php
  /*-----------------------------------------------------------------------------------*/
  /* Start 404 description
  /*-----------------------------------------------------------------------------------*/
?>


      <article class="post error">
        <h2 class="404">Content not found!</h2>
      </article>

      <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <label>
          <span class="screen-reader-text"><?php echo _x( 'Try searching:', 'label' ) ?></span>
          <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Enter query …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
        </label>
        <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
      </form>

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