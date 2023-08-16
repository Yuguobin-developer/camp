<?php get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">

<div class="retreats-section"><div class="posts-block">
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="each-block-wrap">
					<div class="each-block">
						<div class="date-part">

							<div class="date"><span class="d-date"><?php echo date("M j", strtotime(get_field('retreat_date')));?></span>
								<br><?php echo get_field('retreat_time');?></div>
							<span class="instructor"><?php echo get_field('retreat_instructor');?></span>
						</div>
						<div class="contents">
							<div class="limit-content">
								<h3><a href="<?php echo get_permalink(); ?>" class="learn_more"><?php echo get_the_title(); ?></a></h3>
								<p><?php echo get_the_content(); ?></p>
							</div>
							<div class="button-area">
								<a href="<?php echo get_field('retreat_link');?>" class="register primary">REGISTER</a>
								<a href="<?php echo get_permalink(); ?>" class="learn_more">LEARN MORE</a>
							</div>
							
						</div>
					</div>
					<div class="featured-image">
						<a href="<?php echo get_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Featured Image"></a>
					</div>
				</div>

			<?php endwhile; ?>
			
<?php if(get_posts_nav_link()): ?>
    <?php wp_pagenavi(); ?>
<?php endif ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		
</div></div>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer(); ?>