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
?>

<header id="masthead" class="site-header" role="banner">
  <div class="container">

    <div class="gravatar">
      <?php
        // grab admin email and their photo
        $admin_email = get_option('admin_email');
        echo get_avatar( $admin_email, 100 );
      ?>
    </div><!--/ author -->

    <div id="brand">
      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> &mdash; <span><?php echo get_bloginfo( 'description' ); ?></span></h1>
    </div><!-- /brand -->

    <nav role="navigation" class="site-navigation main-navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav><!-- .site-navigation .main-navigation -->

    <div class="clear"></div>
  </div><!--/container -->

</header><!-- #masthead .site-header -->

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
          <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
          <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
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
?>

<footer class="site-footer" role="contentinfo">
  <div class="site-info container">
    <?php do_action( 'break_credits' ); ?>
    <a href="http://wordpress.org/" title="A Semantic Personal Publishing Platform" rel="generator">Proudly powered by WordPress</a>
    <span class="sep"> and based on </span>
    <a href="http://lessmade.com/themes/less" rel="theme">LESS</a> by <a href="http://jarederickson.com" rel="designer">Jared Erickson</a>
  </div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); ?>

</body>
</html>