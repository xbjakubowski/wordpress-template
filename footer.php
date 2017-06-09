<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
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
			<h3>Skontaktuj się z nami</h3>
			<h4>+48 22 630 77 00</h4>
		</div>
	</div>
</div>
</div>
</footer>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
<script>
/**
 * main.js
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2017, Codrops
 * http://www.codrops.com
 */
 (function(window) {

 	'use strict';

	/**
	 * StackFx: The parent class.
	 */
	 function StackFx(el) {
	 	this.DOM = {};
	 	this.DOM.el = el;
	 	this.DOM.stack = this.DOM.el.querySelector('.stack');
	 	this.DOM.stackItems = [].slice.call(this.DOM.stack.children);
	 	this.totalItems = this.DOM.stackItems.length;
	 	this.DOM.img = this.DOM.stack.querySelector('.stack__figure > .stack__img');
	 	this.DOM.caption = this.DOM.el.querySelector('.grid__item-caption');
	 	this.DOM.title = this.DOM.caption.querySelector('.grid__item-title');
	 	this.DOM.columns = {left: this.DOM.caption.querySelector('.column--left'), right: this.DOM.caption.querySelector('.column--right')};
	 }

	 StackFx.prototype._removeAnimeTargets = function() {
	 	anime.remove(this.DOM.stackItems);
	 	anime.remove(this.DOM.img);
	 	anime.remove(this.DOM.title);
	 	anime.remove(this.DOM.columns.left);
	 	anime.remove(this.DOM.columns.right);
	 };

	/************************************************************************
	 * VegaFx.
	 ************************************************************************/
	 function VegaFx(el) {
	 	StackFx.call(this, el);
	 	this._initEvents();
	 }

	 VegaFx.prototype = Object.create(StackFx.prototype);
	 VegaFx.prototype.constructor = VegaFx;

	 VegaFx.prototype._initEvents = function() {
	 	var self = this;
	 	this._mouseenterFn = function() {
	 		self._removeAnimeTargets();
	 		self._in();
	 	};
	 	this._mouseleaveFn = function() {
	 		self._removeAnimeTargets();
	 		self._out();
	 	};
	 	this.DOM.stack.addEventListener('mouseenter', this._mouseenterFn);
	 	this.DOM.stack.addEventListener('mouseleave', this._mouseleaveFn);
	 };

	 VegaFx.prototype._in = function() {
	 	var self = this;

	 	this.DOM.stackItems.map(function(e, i) {
	 		e.style.opacity = i !== self.totalItems - 1 ? 0.2*i+0.2 : 1
	 	});

	 	anime({
	 		targets: this.DOM.stackItems,
	 		translateZ: [
	 		{ 
	 			value: function(target, index) {
	 				return index*8 + 8;
	 			},
	 			duration: 200 ,
	 			easing: [0.42,0,1,1]
	 		},
	 		{ 
	 			value: function(target, index) {
	 				return index*20 + 20;
	 			},
	 			duration: 700,
	 			easing: [0.2,1,0.3,1]
	 		}
	 		],
	 		rotateX: [
	 		{ 
	 			value: function(target, index) {
	 				return -1 * (index*2 + 2);
	 			},
	 			duration: 200,
	 			easing: [0.42,0,1,1]
	 		},
	 		{ 
	 			value: 0, 
	 			duration: 700,
	 			easing: [0.2,1,0.3,1]
	 		}
	 		]
	 	});

	 	anime({
	 		targets: this.DOM.img,
	 		duration: 900,
	 		easing: [0.2,1,0.3,1],
	 		scale: 0.7
	 	});

	 	anime({
	 		targets: this.DOM.title,
	 		translateY: {
	 			value: [35,0], 
	 			duration: 500, 
	 			easing: [0.5,1,0.3,1]
	 		},
	 		opacity: {
	 			value: [0,1], 
	 			duration: 400, 
	 			easing: 'linear'
	 		}
	 	});

	 	anime({
	 		targets: [this.DOM.columns.left, this.DOM.columns.right],
	 		translateY: [
	 		{
	 			value: function(target, index) {
	 				return index === 0 ? [40,0] : [60,0];
	 			}, 
	 			duration: 500, 
	 			easing: [0.5,1,0.3,1], 
	 			delay: 100
	 		}
	 		],
	 		opacity: [
	 		{value: [0,0], duration: 1, easing: 'linear'},
	 		{value: 1, delay: 100, duration: 400, easing: 'linear'}
	 		]
	 	});
	 };

	 VegaFx.prototype._out = function() {
	 	var self = this;

	 	anime({
	 		targets: this.DOM.stackItems,
	 		translateZ: [
	 		{ 
	 			value: function(target, index) {
	 				return index * 20 + 20 - 8;
	 			},
	 			duration: 200 ,
	 			easing: [0.42,0,1,1]
	 		},
	 		{ 
	 			value: 0,
	 			duration: 900,
	 			easing: [0.2,1,0.3,1]
	 		}
	 		],
	 		rotateX: [
	 		{ 
	 			value: function(target, index) {
	 				return index*2 + 2;
	 			},
	 			duration: 200,
	 			easing: [0.42,0,1,1]
	 		},
	 		{ 
	 			value: 0, 
	 			duration: 900,
	 			easing: [0.2,1,0.3,1]
	 		}
	 		],
	 		opacity: {
	 			value: function(target, index, cnt) {
	 				return index !== cnt - 1 ? 0 : 1
	 			},
	 			duration: 900,
	 			delay: 200,
	 			easing: [0.2,1,0.3,1]
	 		}
	 	});

	 	anime({
	 		targets: this.DOM.img,
	 		duration: 900,
	 		easing: [0.2,1,0.3,1],
	 		scale: 1
	 	});

	 	anime({
	 		targets: this.DOM.title,
	 		duration: 750,
	 		easing: [0.2,1,0.3,1],
	 		translateY: 0,
	 		opacity: 1
	 	});

	 	anime({
	 		targets: [this.DOM.columns.left, this.DOM.columns.right],
	 		duration: 750,
	 		easing: [0.2,1,0.3,1],
	 		translateY: 0,
	 		opacity: 1
	 	});
	 };

	 window.VegaFx = VegaFx;

	})(window);
	(function() {
		[].slice.call(document.querySelectorAll('.grid--effect-vega > .grid__item')).forEach(function(stackEl) {
			new VegaFx(stackEl);
		});
	})();
</script>
</body>

</html>
