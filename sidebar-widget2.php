<div class="row">
	<a href="<?php bloginfo('url'); ?>/aktualnosci"><h3>Aktualności</h3></a>			
	<div class="news  column--left">
		<?php
		query_posts( array ( 'category_name' => 'news', 'posts_per_page' => 2 ) );
		while ( have_posts() ) : the_post();
		echo '<p class="bold"><strong>'; ?>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<?php echo '</strong></p>';?>
		<p class="date"><?php echo get_the_date(); ?></p>
		<?php the_excerpt(); ?>
		<a class="more-link" href="<?php the_permalink(); ?>"><?php pll_e('Więcej'); ?> &rarr;</a>
		<?php
		endwhile;
		wp_reset_query();
		?>
	</div>
</div>