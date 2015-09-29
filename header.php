<!doctype html>
<html class="no-js" lang="en">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

    <?php wp_head(); ?>

  </head>
    <body <?php body_class(); ?>>

      <header class="header-container">

       <div id="headerimg">
         <h1>
           <a href="<?php echo get_option('home'); ?>">
           <img src="<?php header_image(); ?>"
           height="<?php echo get_custom_header()->height; ?>"
           width="<?php echo get_custom_header()->width; ?>" alt="" />
             </a>
         </h1>

</div><!-- end header img -->
 </header> <!-- end header -->

<div id="nav">
<ul>
<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
</ul>
</div><!-- ends nav div -->
