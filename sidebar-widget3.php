<div class="row">
	<a href="<?php bloginfo('url'); ?>/relacje-inwestorskie/raporty-biezace"><h3>Raporty Bieżące</h3></a>			
	<ul class="rb nopadding">
		<?php

// The Query
		if (get_locale() == 'pl_PL')
			query_posts( array ( 'category_name' => 'raporty-biece', 'posts_per_page' => 4 ) );
		else
			query_posts( array ( 'category_name' => 'current-reports', 'posts_per_page' => 4 ) );
// The Loop
			while ( have_posts() ) : the_post();
		echo '<li class="rb">';
		?>
		<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
		<?php
		echo '</li>';
		endwhile;

// Reset Query
		wp_reset_query();

		?>
	</ul>
</div>