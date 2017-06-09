<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

<?php 
$post=get_the_ID();
if ($post==546){  /* Firma */ ?>
<div class="row">
	<div class="grid grid--effect-vega min--500">
		<a href="<?php bloginfo('url'); if (get_locale() == 'pl_PL') echo '/firma/strategia-spolki/'; else echo '/about'; ?>" class="col-xs-12 col-sm-6 grid__item grid__item--c1">
			<div class="stack">
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__figure">
					<img class="stack__img" src="<?php echo get_template_directory_uri(); ?>/images/business-561388_1920.jpg" alt="Image"/>
				</div>
			</div>
			<div class="grid__item-caption">
				<h3 class="grid__item-title">Strategia Spółki</h3>
				<div class="column column--left">
				</div>
				<div class="column column--right">
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url'); if (get_locale() == 'pl_PL') echo '/firma/wladze-spolki/'; else echo '/investment-portfolio'; ?>" class="col-xs-12 col-sm-6 grid__item grid__item--c5">
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
				<h3 class="grid__item-title">Władze Spółki</h3>
				<div class="column column--left">
				</div>
				<div class="column column--right">
				</div>
			</div>
		</a>
	</div>
</div>
<?php }	
else if($post==551){ /* Portfel inwestycyjny */ ?>
<div class="row">
	<div class="grid grid--effect-vega min--500">
		<a href="<?php bloginfo('url'); if (get_locale() == 'pl_PL') echo '/portfel-inwestycyjny/inplus-sp-z-o-o'; else echo '/about'; ?>" class="col-xs-12 col-sm-6 grid__item grid__item--c6">
			<div class="stack">
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__figure">
					<img class="stack__img" src="<?php echo get_template_directory_uri(); ?>/images/logo_inplus.png" alt="Image"/>
				</div>
			</div>
			<div class="grid__item-caption">
				<h3 class="grid__item-title">Inplus Sp. z o.o.</h3>
				<div class="column column--left">
				</div>
				<div class="column column--right">
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url'); if (get_locale() == 'pl_PL') echo '/portfel-inwestycyjny/magna-inwestycje-sp-zoo-ska'; else echo '/investment-portfolio'; ?>" class="col-xs-12 col-sm-6 grid__item grid__item--c5">
			<div class="stack">
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__figure">
					<img class="stack__img" src="<?php echo get_template_directory_uri(); ?>/images/abstract-1852931_1920.jpg" alt="Image"/>
				</div>
			</div>
			<div class="grid__item-caption">
				<h3 class="grid__item-title">Magna Inwestycje Sp. z o.o. S.K.A.</h3>
				<div class="column column--left">
				</div>
				<div class="column column--right">
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url'); if (get_locale() == 'pl_PL') echo '/firma/magna-inwestycje-sp-z-o-o'; else echo '/about'; ?>" class="col-xs-12 col-sm-6 grid__item grid__item--c1">
			<div class="stack">
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__figure">
					<img class="stack__img" src="<?php echo get_template_directory_uri(); ?>/images/ring-binder-2-1149793-639x479.jpg" alt="Image"/>
				</div>
			</div>
			<div class="grid__item-caption">
				<h3 class="grid__item-title">Magna Inwestycje Sp. z o.o.</h3>
				<div class="column column--left">
				</div>
				<div class="column column--right">
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url'); if (get_locale() == 'pl_PL') echo '/portfel-inwestycyjny/magna-polonia-sp-z-o-o'; else echo '/investment-portfolio'; ?>" class="col-xs-12 col-sm-6 grid__item grid__item--c2">
			<div class="stack">
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__figure">
					<img class="stack__img" src="<?php echo get_template_directory_uri(); ?>/images/business-1989130_1920.jpg" alt="Image"/>
				</div>
			</div>
			<div class="grid__item-caption">
				<h3 class="grid__item-title">Magna Polonia Sp. z o.o.</h3>
				<div class="column column--left">
				</div>
				<div class="column column--right">
				</div>
			</div>
		</a>
	</div>
</div>
<?php }
else if($post==555){ /* Relacje inwestorskie */ ?>
<div class="row">
	<div class="grid grid--effect-vega min--500">
		<a href="<?php bloginfo('url'); if (get_locale() == 'pl_PL') echo '/relacje-inwestorskie/akcjonariat'; else echo '/about'; ?>" class="col-xs-12 col-sm-6 grid__item grid__item--c1">
			<div class="stack">
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__figure">
					<img class="stack__img" src="<?php echo get_template_directory_uri(); ?>/images/stock-exchange-738671_1280.jpg" alt="Image"/>
				</div>
			</div>
			<div class="grid__item-caption">
				<h3 class="grid__item-title">Akcjonariat</h3>
				<div class="column column--left">
				</div>
				<div class="column column--right">
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url'); if (get_locale() == 'pl_PL') echo '/relacje-inwestorskie/walne-zgromadzenia'; else echo '/investment-portfolio'; ?>" class="col-xs-12 col-sm-6 grid__item grid__item--c2">
			<div class="stack">
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__figure">
					<img class="stack__img" src="<?php echo get_template_directory_uri(); ?>/images/business-1989130_1920.jpg" alt="Image"/>
				</div>
			</div>
			<div class="grid__item-caption">
				<h3 class="grid__item-title">Walne Zgromadzenia</h3>
				<div class="column column--left">
				</div>
				<div class="column column--right">
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url'); if (get_locale() == 'pl_PL') echo '/relacje-inwestorskie/raporty-biezace'; else echo '/about'; ?>" class="col-xs-12 col-sm-6 grid__item grid__item--c3">
			<div class="stack">
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__figure">
					<img class="stack__img" src="<?php echo get_template_directory_uri(); ?>/images/analytics-1841554_1920.jpg" alt="Image"/>
				</div>
			</div>
			<div class="grid__item-caption">
				<h3 class="grid__item-title">Raporty bieżące</h3>
				<div class="column column--left">
				</div>
				<div class="column column--right">
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url'); if (get_locale() == 'pl_PL') echo '/relacje-inwestorskie/sprawozdania-finansowe'; else echo '/investment-portfolio'; ?>" class="col-xs-12 col-sm-6 grid__item grid__item--c4">
			<div class="stack">
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__figure">
					<img class="stack__img" src="<?php echo get_template_directory_uri(); ?>/images/calculator-1680905_1920.jpg" alt="Image"/>
				</div>
			</div>
			<div class="grid__item-caption">
				<h3 class="grid__item-title">Sprawozdania finansowe</h3>
				<div class="column column--left">
				</div>
				<div class="column column--right">
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url');?>/wp-content/uploads/files/zasady_ladu_korporacyjnego.pdf" class="col-xs-12 col-sm-6 grid__item grid__item--c5">
			<div class="stack">
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__figure">
					<img class="stack__img" src="<?php echo get_template_directory_uri(); ?>/images/graph-163509_1280.jpg" alt="Image"/>
				</div>
			</div>
			<div class="grid__item-caption">
				<h3 class="grid__item-title">Zasady ładu korporacyjnego</h3>
				<div class="column column--left">
				</div>
				<div class="column column--right">
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url'); if (get_locale() == 'pl_PL') echo '/relacje-inwestorskie/prospekt-emisyjny'; else echo '/investment-portfolio'; ?>" class="col-xs-12 col-sm-6 grid__item grid__item--c6">
			<div class="stack">
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__figure">
					<img class="stack__img" src="<?php echo get_template_directory_uri(); ?>/images/newspaper-1834656_1920.jpg" alt="Image"/>
				</div>
			</div>
			<div class="grid__item-caption">
				<h3 class="grid__item-title">Prospekt emisyjny</h3>
				<div class="column column--left">
				</div>
				<div class="column column--right">
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url'); if (get_locale() == 'pl_PL') echo '/relacje-inwestorskie/program-skupu-akcji-wlasnych'; else echo '/investment-portfolio'; ?>" class="col-xs-12 col-sm-6 grid__item grid__item--c1">
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
				<h3 class="grid__item-title">Program skupu akcji własnych</h3>
				<div class="column column--left">
				</div>
				<div class="column column--right">
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url'); if (get_locale() == 'pl_PL') echo '/relacje-inwestorskie/dokumenty'; else echo '/docs'; ?>" class="col-xs-12 col-sm-6 grid__item grid__item--c3">
			<div class="stack">
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__figure">
					<img class="stack__img" src="<?php echo get_template_directory_uri(); ?>/images/archive-1850170_1920.jpg" alt="Image"/>
				</div>
			</div>
			<div class="grid__item-caption">
				<h3 class="grid__item-title">Dokumenty</h3>
				<div class="column column--left">
				</div>
				<div class="column column--right">
				</div>
			</div>
		</a>
	</div>
</div>
<?php }	
else if($post==561){ /* Dokumenty */ ?>
<div class="row">
	<div class="grid grid--effect-vega">
		<a href="<?php bloginfo('url'); if (get_locale() == 'pl_PL') echo '/firma'; else echo '/about'; ?>" class="col-xs-12 col-sm-6 grid__item grid__item--c1">
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
				<h3 class="grid__item-title">Strategia Spółki</h3>
				<div class="column column--left">
				</div>
				<div class="column column--right">
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url'); if (get_locale() == 'pl_PL') echo '/portfel-inwestycyjny'; else echo '/investment-portfolio'; ?>" class="col-xs-12 col-sm-6 grid__item grid__item--c2">
			<div class="stack">
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__figure">
					<img class="stack__img" src="<?php echo get_template_directory_uri(); ?>/images/business-1989130_1920.jpg" alt="Image"/>
				</div>
			</div>
			<div class="grid__item-caption">
				<h3 class="grid__item-title">Władze Spółki</h3>
				<div class="column column--left">
				</div>
				<div class="column column--right">
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url'); if (get_locale() == 'pl_PL') echo '/firma'; else echo '/about'; ?>" class="col-xs-12 col-sm-6 grid__item grid__item--c1">
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
				<h3 class="grid__item-title">Strategia Spółki</h3>
				<div class="column column--left">
				</div>
				<div class="column column--right">
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url'); if (get_locale() == 'pl_PL') echo '/portfel-inwestycyjny'; else echo '/investment-portfolio'; ?>" class="col-xs-12 col-sm-6 grid__item grid__item--c2">
			<div class="stack">
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__deco"></div>
				<div class="stack__figure">
					<img class="stack__img" src="<?php echo get_template_directory_uri(); ?>/images/business-1989130_1920.jpg" alt="Image"/>
				</div>
			</div>
			<div class="grid__item-caption">
				<h3 class="grid__item-title">Władze Spółki</h3>
				<div class="column column--left">
				</div>
				<div class="column column--right">
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url'); if (get_locale() == 'pl_PL') echo '/firma'; else echo '/about'; ?>" class="col-xs-12 col-sm-6 grid__item grid__item--c1">
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
				<h3 class="grid__item-title">Strategia Spółki</h3>
				<div class="column column--left">
				</div>
				<div class="column column--right">
				</div>
			</div>
		</a>
	</div>
</div>
<?php } ?>
