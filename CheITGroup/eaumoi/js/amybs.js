
(function(moduleName, window, document) {
	if(window.isrunedonce !=1){
	var from = function(selector, selectedPlugins) {;
		
			
			var parent = document.querySelector(selector),
				slides = [].slice.call(parent.children, 0),
				activeSlide = slides[0],
				deckListeners = {},
				relnum = 0,
				isfirst = '0',
				activate = function(index, customData) {
					
					if (!slides[index]) {
						return;
					}
					//var isfirst = '0';
					fire(deckListeners, 'deactivate', createEventData(activeSlide, customData));

					activeSlide = slides[index];

					slides.map(deactivate);
					
					fire(deckListeners, 'activate', createEventData(activeSlide, customData));				
					addClass(activeSlide, 'active');
					removeClass(activeSlide, 'inactive');
					if ( jQuery.browser.msie && jQuery.browser.version == '9.0' ) { 
					jQuery( " ct_amy_section.bespoke-before-3" ).animate({ "margin-left": "-1400px" },300, "linear" );
					jQuery( " ct_amy_section.bespoke-before-2" ).animate({ "margin-left": "-966px" },300, "linear" );
					jQuery( " ct_amy_section.bespoke-before-1" ).animate({ "margin-left": "-570px" }, 300, "linear" );
					jQuery( " ct_amy_section.bespoke-active" ).animate({ "margin-left": "-175px" }, 300, "linear" );
					jQuery( " ct_amy_section" ).css("opacity","1");
					if(isfirst !=1){
					jQuery( " ct_amy_section.bespoke-after" ).css("margin-left","2000px");
					 isfirst = 1
					}
					jQuery( " ct_amy_section.bespoke-after-1" ).animate({ "margin-left": "220px" },300, "linear");
					jQuery( " ct_amy_section.bespoke-after-2" ).animate({ "margin-left": "616px" },300, "linear" );
					jQuery( " ct_amy_section.bespoke-after-3" ).animate({ "margin-left": "1200px" }, 300, "linear" );
					}
				},

				deactivate = function(slide, index) {

					var offset = index - slides.indexOf(activeSlide),
						offsetClass = offset > 0 ? 'after' : 'before';

					['before(-\\d+)?', 'after(-\\d+)?', 'active', 'inactive'].map(removeClass.bind(null, slide));
					slide !== activeSlide &&
						['inactive', offsetClass, offsetClass + '-' + Math.abs(offset)].map(addClass.bind(null, slide));



				},

				slide = function(index, customData) {
					fire(deckListeners, 'slide', createEventData(slides[index], customData)) && activate(index, customData);
					
				},

				next = function(customData) {
					var nextSlideIndex = slides.indexOf(activeSlide) + 1;


					fire(deckListeners, 'next', createEventData(activeSlide, customData)) && activate(nextSlideIndex, customData);
					if ( jQuery.browser.msie && jQuery.browser.version == '9.0' ) {
				//	jQuery( " ct_amy_section.bespoke-before-3" ).animate({ "margin-left": "-1900px" },300, "linear" );
					jQuery( " ct_amy_section.bespoke-before-3" ).animate({ "margin-left": "-1400px" },300, "linear" );
					jQuery( " ct_amy_section.bespoke-before-2" ).animate({ "margin-left": "-966px" },300, "linear" );
					jQuery( " ct_amy_section.bespoke-before-1" ).animate({ "margin-left": "-570px" }, 300, "linear" );

					jQuery( " ct_amy_section.bespoke-after-1" ).animate({ "margin-left": "220px" },300, "linear");
					jQuery( " ct_amy_section.bespoke-after-2" ).animate({ "margin-left": "616px" },300, "linear" );
					jQuery( " ct_amy_section.bespoke-after-3" ).animate({ "margin-left": "1200px" }, 300, "linear" );
					jQuery( " ct_amy_section.bespoke-after-4" ).animate({ "margin-left": "1700px" }, 300, "linear" );
					}

					// window.location.hash = '!slide-'+jQuery( "section.bespoke-active" ).attr("rel");
				},

				prev = function(customData) {
					var prevSlideIndex = slides.indexOf(activeSlide) - 1;

					fire(deckListeners, 'prev', createEventData(activeSlide, customData)) && activate(prevSlideIndex, customData);
					if ( jQuery.browser.msie && jQuery.browser.version == '9.0' ) {
					jQuery( " ct_amy_section.bespoke-before-3" ).animate({ "margin-left": "-1400px" },300, "linear" );
					jQuery( " ct_amy_section.bespoke-before-2" ).animate({ "margin-left": "-966px" },300, "linear" );
					jQuery( " ct_amy_section.bespoke-before-1" ).animate({ "margin-left": "-570px" }, 300, "linear" );

					jQuery( " ct_amy_section.bespoke-after-1" ).animate({ "margin-left": "220px" },300, "linear");
					jQuery( " ct_amy_section.bespoke-after-2" ).animate({ "margin-left": "616px" },300, "linear" );
					jQuery( " ct_amy_section.bespoke-after-3" ).animate({ "margin-left": "1200px" }, 300, "linear" );
					jQuery( " ct_amy_section.bespoke-after-4" ).animate({ "margin-left": "1700px" }, 300, "linear" );
					}

					// window.location.hash = '!slide-'+jQuery( "section.bespoke-active" ).attr("rel");

				},

				createEventData = function(slide, eventData) {
					eventData = eventData || {};
					eventData.index = slides.indexOf(slide);
					eventData.slide = slide;
					return eventData;
				},

				deck = {
					on: on.bind(null, deckListeners),
					off: off.bind(null, deckListeners),
					fire: fire.bind(null, deckListeners),
					slide: slide,
					next: next,
					prev: prev,
					parent: parent,
					slides: slides
				};
			
			addClass(parent, 'parent');
			
			slides.map(function(slide) {

				addClass(slide, 'slide');
				jQuery(slide).attr('rel', relnum);
				relnum++;
			});

			Object.keys(selectedPlugins || {}).map(function(pluginName) {
				var config = selectedPlugins[pluginName];
				config && plugins[pluginName](deck, config === true ? {} : config);
				
			});

			activate(0);

			decks.push(deck);
			
			return deck;
		},

		decks = [],

		bespokeListeners = {},

		on = function(listeners, eventName, callback) {
			(listeners[eventName] || (listeners[eventName] = [])).push(callback);
		},

		off = function(listeners, eventName, callback) {
			listeners[eventName] = (listeners[eventName] || []).filter(function(listener) {
				return listener !== callback;
			});
		},

		fire = function(listeners, eventName, eventData) {
			return (listeners[eventName] || [])
				.concat((listeners !== bespokeListeners && bespokeListeners[eventName]) || [])
				.reduce(function(notCancelled, callback) {
					return notCancelled && callback(eventData) !== false;
				}, true);
		},

		addClass = function(el, cls) {
		
			el.classList.add(moduleName + '-' + cls);
		},

		removeClass = function(el, cls) {
			el.className = el.className
				.replace(new RegExp(moduleName + '-' + cls +'(\\s|$)', 'g'), ' ')
				.replace(/^\s+|\s+$/g, '');
		},

		callOnAllInstances = function(method) {
			return function(arg) {
				decks.map(function(deck) {
					deck[method].call(null, arg);
				});
			};
		},

		bindPlugin = function(pluginName) {
			return {
				from: function(selector, selectedPlugins) {
					(selectedPlugins = selectedPlugins || {})[pluginName] = true;
					return from(selector, selectedPlugins);
				}
			};
		},

		makePluginForAxis = function(axis) {
			return function(deck) {
				var startPosition,
					delta;

				document.addEventListener('keydown', function(e) {
					var key = e.which;

					if (axis === 'X') {
						key === 37 && deck.prev();
						(key === 32 || key === 39) && deck.next();
					} else {
						key === 38 && deck.prev();
						(key === 32 || key === 40) && deck.next();
					}
				});

				deck.parent.addEventListener('touchstart', function(e) {
					if (e.touches.length) {
						startPosition = e.touches[0]['page' + axis];
						delta = 0;
					}
				});

				deck.parent.addEventListener('touchmove', function(e) {
					if (e.touches.length) {
						e.preventDefault();
						delta = e.touches[0]['page' + axis] - startPosition;
					}
				});

				deck.parent.addEventListener('touchend', function() {
					Math.abs(delta) > 50 && (delta > 0 ? deck.prev() : deck.next());
				});
			};
		},

		plugins = {
			horizontal: makePluginForAxis('X'),
			vertical: makePluginForAxis('Y')
		};

	window[moduleName] = {
		from: from,
		slide: callOnAllInstances('slide'),
		next: callOnAllInstances('next'),
		prev: callOnAllInstances('prev'),
		horizontal: bindPlugin('horizontal'),
		vertical: bindPlugin('vertical'),
		on: on.bind(null, bespokeListeners),
		off: off.bind(null, bespokeListeners),
		plugins: plugins
	};
	window.isrunedonce =1
	}
}('bespoke', this, document));