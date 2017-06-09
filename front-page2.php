<?php // Template Name: Front2 ?>
<?php get_header(); ?>
<section class="content">

	<div class="content-wrapper">

		<main class="container" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
			<section class="col-md-9 col-xs-12">
				<div class="col-md-12 nopadding">
					<?php dynamic_sidebar( 'slider' ); ?>
				</div>		
				<div class="row">
					<div class="grid grid--effect-vega">
						<a href="<?php bloginfo('url'); if (get_locale() == 'pl_PL') echo '/firma'; else echo '/about'; ?>" class="col-xs-6 col-sm-4 grid__item grid__item--c1">
							<div class="stack">
								<div class="stack__deco"></div>
								<div class="stack__deco"></div>
								<div class="stack__deco"></div>
								<div class="stack__deco"></div>
								<div class="stack__figure">
									<img class="stack__img" src="<?php echo get_template_directory_uri(); ?>/images/blur-1853262_1920.jpg" alt="Image"/>
								</div>
							</div>
							<div class="grid__item-caption">
								<h3 class="grid__item-title">MagnaPolonia</h3>
							</div>
						</a>
						<a href="<?php bloginfo('url'); if (get_locale() == 'pl_PL') echo '/aktualnosci'; else echo '/news'; ?>" class="col-xs-6 col-sm-4 grid__item grid__item--c5">
							<div class="stack">
								<div class="stack__deco"></div>
								<div class="stack__deco"></div>
								<div class="stack__deco"></div>
								<div class="stack__deco"></div>
								<div class="stack__figure">
									<img class="stack__img" src="<?php echo get_template_directory_uri(); ?>/images/document-428334_1920.jpg" alt="Image"/>
								</div>
							</div>
							<div class="grid__item-caption">
								<h3 class="grid__item-title">Aktualności</h3>
							</div>
						</a>
						<a href="<?php bloginfo('url'); if (get_locale() == 'pl_PL') echo '/kontakt'; else echo '/contact'; ?>" class="col-xs-6 col-sm-4 grid__item grid__item--c6">
							<div class="stack">
								<div class="stack__deco"></div>
								<div class="stack__deco"></div>
								<div class="stack__deco"></div>
								<div class="stack__deco"></div>
								<div class="stack__figure">
									<img class="stack__img" src="<?php echo get_template_directory_uri(); ?>/images/coins-1523383_1920.jpg" alt="Image"/>
								</div>
							</div>
							<div class="grid__item-caption">
								<h3 class="grid__item-title">Kontakt</h3>
							</div>
						</a>
					</div>
					<article class="col-md-12 post type-post status-publish format-standard hentry category-wazne-nowosci" role="article">
						<header class="article-header">
							<h1 class="h2 entry-title">
								<a href="<?php bloginfo('url'); ?>/firma/strategia-spolki/"" rel="bookmark" title="Strategia Magna Polonia S.A.">Strategia Magna Polonia S.A.</a>
							</h1>
						</header>
						<section class="entry-content">
							<p style="text-align: justify;">Magna Polonia S.A. będzie się aktywnie angażowała w projekty w branżach, które Zarząd ocenia jako branże o wysokim potencjale rozwoju: związane z nowymi technologiami, rozbudową infrastruktury, informatyką, IT, Internetem, instalacjami inteligentnymi i automatyką oraz energetyką i wzrostem efektywności energetycznej. </p>

							<p style="text-align: justify;">Szczególnie interesujące są projekty odporne na wahania koniunktury gospodarczej i jednocześnie posiadające długoterminowe perspektywy wzrostu. W przypadku projektów o dużej skali Spółka dopuszcza przedsięwzięcia typu joint-venture z partnerami finansowymi. W miarę możliwości Magna Polonia zamierza być inwestorem aktywnym. </br>
								W przypadku pojawienia się atrakcyjnych projektów inwestycyjnych na zagranicznych rynkach w szczególności w krajach Europy Środkowej i Wschodniej, nie wykluczamy poszerzenia geograficznej skali aktywności o tego typu przedsięwzięcia. Należy jednak zaznaczyć, że podstawowym obszarem działania pozostaje rynek polski. </p>
								<a style="float: right;" href="<?php bloginfo('url'); ?>/firma/strategia-spolki/">Więcej →</a>
							</section>
						</article>
					</div>
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
	<?php get_footer(); ?>