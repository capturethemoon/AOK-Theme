<?php
/*
	Template Name: Right Sidebar
*/
?>

<?php get_header(); ?>


 <section class="two-column row no-max pad">
      <div class="small-12 columns">
        <div class="row">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <!--<h1><?php the_title(); ?></h1>-->
          <p><?php the_content(); ?></p>
		<?php endwhile; else : ?>

			<p><?php _e( 'Sorry, no pages found.', 'aok-theme' ); ?></p>

		<?php endif; ?>

	  </div>

<?php dynamic_sidebar( 'page' ); ?>

		</div>
	</section>

<?php get_footer(); ?>
