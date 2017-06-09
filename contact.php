<?php // Template Name: Contact ?>
<?php get_header(); ?>
<section class="content">
	<div class="content-wrapper">
		<main class="container" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
			<section class="row">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-md-12' ); ?> role="article">
						<?php if (!is_page()) {?>
						<header class="article-header">

							<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							<p class="byline entry-meta vcard">
								<?php printf( __( 'Edytowano').' %1$s',
									'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'
									); ?>
								</p>

							</header>
							<?php } ?>	
							<section class="entry-content">
								<?php the_content(); ?>
							</section>

						</article>

					<?php endwhile;?>
					<?php if ($GLOBALS['wp_query']->max_num_pages > 1): ?>
						<nav class="pagination col-md-12" role="navigation">
							<span style="float: left"><?php next_posts_link('&larr; ' . pll__('Starsze wpisy')); ?></span>
							<span style="float: right"><?php previous_posts_link(pll__('Nowsze wpisy') . ' &rarr;'); ?></span>
						</nav>
					<?php endif; ?>
				<?php else : ?>

					<article id="post-not-found" class="entry">
						<header class="article-header">
							<h1><?php _e( 'BŁĄD 404.', 'magna' ); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e( 'Wybrana strona nie istnieje.', 'magna' ); ?></p>
						</section>
					</article>

				<?php endif; ?>
			</section>
		</main>
	</div>
</section>
<?php get_footer(); ?>