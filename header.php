<?php
/**
 * Header Template
 *
 * The header template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the top of the file. It is used mostly as an opening
 * wrapper, which is closed with the footer.php file. It also executes key functions needed
 * by the theme, child themes, and plugins. 
 *
 * @package Hybrid
 * @subpackage Template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<title><?php hybrid_document_title(); ?></title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="/wp-content/themes/laura/laura.js"></script>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />

<link rel="stylesheet" href="/fonts/district-thin/stylesheet.css" type="text/css" media="all" />
<link rel="stylesheet" href="/fonts/gnuolane-regular/stylesheet.css" type="text/css" media="all" />
<link rel="stylesheet" href="/fonts/winterthur-condensed/stylesheet.css" type="text/css" media="all" />
<link rel="stylesheet" href="/fonts/quattro/stylesheet.css" type="text/css" media="all" />

<link rel="publisher" href="https://plus.google.com/100882312995566664243" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php do_atomic( 'head' ); // @deprecated 0.9.0. Use 'wp_head'. ?>
<?php wp_head(); // wp_head ?>

</head>

<body class="<?php hybrid_body_class(); ?>">

<?php do_atomic( 'before_html' ); // hybrid_before_html ?>

<div id="body-container">

   <?php do_atomic( 'before_header' ); // hybrid_before_header ?>

   <div id="header-container">

      <div id="header">

      <a href="/"><img src="/images/Website-Banner.png" alt="Real Family Solutions" /></a>

      <div id="hcard-Laura-Marsh" class="vcard">
       <span class="fn">Laura Marsh, PCD (NAPS)</span>

       <div class="role">
        Postpartum Doula
       </div>

       <div class="role">
        Seattle, WA
       </div>

       <div class="tel">206.432.6937</div>
      </div>

<!--
         <?php do_atomic( 'header' ); // hybrid_header ?>
-->

      </div><!-- #header -->

   </div><!-- #header-container -->

   <?php do_atomic( 'after_header' ); // hybrid_after_header ?>

   <div id="container">

      <?php do_atomic( 'before_container' ); // hybrid_before_container ?>
