<?php get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

<div class="entry-content">
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
	<?php the_post_thumbnail() ?>
	<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'themonic' ) ); ?>
	<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'themonic' ), 'after' => '</div>' ) ); ?>
</div><!-- .entry-content -->

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>