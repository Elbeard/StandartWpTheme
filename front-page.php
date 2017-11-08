<?php get_header(); ?>
<div class="content">
	<div class="content-block">
		<?php while (have_posts()) : the_post(); ?>
			<div class="content-title">
				<a href="<?php the_permalink(); ?>"><?php the_title('<h1>','</h1>');?></a>
			</div>
			<p><?php the_content(); ?></p>
		<?php endwhile; ?>
	</div>
</div>
<?php get_sidebar('home'); ?>
<?php get_footer(); ?>