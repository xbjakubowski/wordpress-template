		<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
		<div class="f_top">
			<div class="container">
				<div class="row">
					<section class="col col-xs-6 col-md-4 small">
					<h3>Siedziba Spółki</h3>
					<p>Grzybowska 4 lok. 96</br>
					00-131 Warszawa</br>
					+48 22 630 77 00</p>
					</section>
					<section class="col col-xs-6 col-md-4 center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_gray.svg" alt="MagnaPolonia" class="logo_bottom">
					</section>
					<section class="col hidden-xs hidden-sm col-md-offset-1 col-md-3 small">
						<?php wp_nav_menu( array(
							'theme_location' => 'bottom-menu',
							'container' => false,
							'menu_class'=> '',
							'items_wrap' => '<ul class="footer-menu" id="footer-menu">%3$s</ul>',
						)); ?>
					</section>

					</div>
				</div>
			</div>
			<div class="f_bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-8">Magna Polonia S.A., NIP: 118-00-87-290, REGON: 011140008; Spółka zarejestrowana w Sądzie Rejonowym dla m.st. Warszawy, Sąd Gospodarczy, XII Wydział Krajowego Rejestru Sądowego, KRS 0000019740; </br>
						Kapitał zakładowy: 13.921.975 zł, w pełni wpłacony,
						Zarząd: Mirosław Janisiewicz – Prezes Zarządu </br>
						Konto: BZ WBK S.A. 4/ O w Warszawie 40 1090 1056 0000 0000 0600 7893
						</br>
						</br>
						<p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. Wszelkie prawa zastrzeżone.</p>
						</div>
						<div class="col-md-4 text-right">
							<h2>Skontaktuj się z nami</h2>
							<h3>+48 22 630 77 00</h3>
						</div>
					</div>

				</div>
			</div>
			<script>
			function menu() {
				var x = document.getElementById("menu");
				if (x.className === "menu nav navbar-nav navbar-right top-menu" ||x.className === "menu nav navbar-nav navbar-right top-menu shrink" ) {
					x.className += " visible";
				} else {
					x.className = "menu nav navbar-nav navbar-right top-menu";
				}
			};
			</script>
		</footer>
		<?php wp_footer(); ?>
	</body>

</html>
