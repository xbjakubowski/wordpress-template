<?php // Template Name: Sprawozdania Finansowe ?>
<?php get_header(); ?>
<section class="content">

	<div class="content-wrapper">

		<main class="container" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
			<section class="col-md-9 col-xs-12">
				<?php if (!is_page()) {?>
				<div class="col-md-12 nopadding">
					<?php dynamic_sidebar( 'slider' ); ?>
				</div>	
				<?php } else get_template_part( 'pages' ); ?>	
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
								<ul class="nav nav--tabsbar">
									<li class="active"><a href="#menu1" data-toggle="tab">Kwartale sprawozdania finansowe</a></li>
									<li><a href="#menu2" data-toggle="tab">Półroczne sprawozdania finansowe</a></li>
									<li><a href="#menu3" data-toggle="tab">Roczne sprawozdania finansowe</a></li>
								</ul>
								<ul class="rb nopadding tab-content">
									<?php for($j=1;$j<4;$j++){ 
										$c_year=1998;
										$c_name="k-sf";	
										if($j==2){
											$c_year=1999;
											$c_name="p-sf";	
										}
										else if($j==3){
											$c_year=1996;
											$c_name="r-sf";	
										}?>
										<div id="menu<?php echo $j;?>" class="tab-pane fade <?php if($j==1){echo 'in active';}?>">
											<?php for($i=date( 'Y' );$i>=$c_year;$i--){  ?> 
												<li class="rb" <?php if($i==1996){echo 'style="display: none;"';}?>>
												<a href="#<?php echo $i;?>" class="list"><?php echo $i;?></a>

												<ul class="novisible">

													<?php 
													$temp = $wp_query;
													$args = array(  
														'post_type' => 'post',   
														'posts_per_page' => 120,   
														'paged' => $paged,
														'category_name' => $c_name,
														'year'  => $i
														);
													$wp_query= null;
													$wp_query = new WP_Query($args);
													while ( have_posts() ) : the_post();
													echo '<li class="rb">';
													?>
													<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
													<p><?php the_content(); ?></p>

													<?php
													echo '</li>';
													endwhile;?>
												</ul>
												<?php } ?>
											</div>
											<?php } ?> 
										</ul>
									</ul>
								</section>

							</article>
						<?php endwhile; ?>

					<?php endif; ?>
				</section>
				<div class="col-xs-12 col-sm-8 col-md-3">
					<?php get_sidebar( 'widget2' ); ?>

				</div>	
				<div class="col-xs-12 col-sm-4 col-md-3">
					<?php get_sidebar( 'widget3' ); ?>
				</div>	
			</main>
		</div>
	</section>
	<script type="text/javascript">
		jQuery(".list").on("click", function(e) {
			e.preventDefault();
			jQuery(this).next("ul").slideToggle();
		});
	</script>
	<?php get_footer(); ?>