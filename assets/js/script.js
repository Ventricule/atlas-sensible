var currentUri, currentType = false, siteTitle, loadItems, loadItem;

$(document).ready(function(){
	
	var vh = $(window).height();
	
	/* -------------------------------------------- */
	/*			TEXTE
	/* -------------------------------------------- */

	$(document).on('click', '#menu:not(.isOpen) #showmap', function(){
		$content.hide_();
	}).on('click', '#menu:not(.isOpen) #showcontent', function(){
		$content.show_();
	})

	// loadItem
	
	$(document).on('click', '#menu li', function(e) {
		//e.preventDefault();
		// en mode desktop ou si pas deja ouvert
		if($content.isMobile() === false || $(this).hasClass('open') == false){
			$menu.loadThis($(this).find('.loadItems'));
		}
		if($content.isMobile() === true ){
			if ($(this).hasClass('open')) {
				if ($menu.isOpen === false) {
					$menu.open_();
				} else {
					$menu.close_();					
				}
			} else {
				$menu.loadThis($(this));
				$menu.close_();
			}

		}	
	});

	$('#menu a').click(function(e) {
		e.preventDefault();
	});
	
	var timer = 50;
	var $menu = {
		isOpen: false,
		loadThis: function($this){
			var url = $this.attr('data-url'),
				item = $this.attr('data-item'),
				items = $this.attr('data-items');
			// History
			History.pushState({ type: items, item: item }, siteTitle , url);
			$content.show_();
		},
		open_: function(){
			$menu.time = timer;
			$($('#menu').find('li').get().reverse()).each(function(){
				open_elem($(this));
			});
			function open_elem($elem){
				if ($elem.hasClass('open') == false) {
					setTimeout(function() {
						$elem.addClass('deploy');
					}, $menu.time);
					$menu.time += timer;
				}
			}
			$menu.isOpen = true;
			$('#menu').addClass('isOpen');
		},
		close_: function(){
			$menu.time = timer;
			$($('#menu').find('li').get().reverse()).each(function(){
				close_elem($(this));
			});
			function close_elem($elem){
				if ($elem.hasClass('open') == false) {
					setTimeout(function() {
						$elem.removeClass('deploy');
					}, $menu.time);
					$menu.time += timer;
				}
			}
			$menu.isOpen = false;
			$('#menu').removeClass('isOpen');
		},
	}

	/* Mots clés
	---------------------------------------------- */
	$(document).on('click', '.searchfor', function(e) {
		e.preventDefault();
		var url = '/rechercher';
		History.pushState({ type: 'rechercher', item: $(this).attr('data-keyword') }, siteTitle , url);
	});
	
	/* Inception
	---------------------------------------------- */
	$(document).on('click', '.inception .synth', function(e) {
		$li = $(this);
		$li.siblings('.open').each(function(){$(this).removeClass('open').find('.entry-full').slideUp(250)});
		if ( $li.hasClass('open') ) {
			$li.removeClass('open').find('.entry-full').slideUp(250);
			resetStyle();
			filterAndSetStyle('uri', [$(this).closest('.item').attr('data-uri')], 'bold');
			$li.removeClass('open').find('.entry-full').slideUp(250);
		} else {
			$fulltext = $li.find('.entry-full');
			loadItem( $li.attr('data-uri'), false, $fulltext, function(){ $li.addClass('open').find('.entry-full').slideDown(250); } );
		}
	});
	$(document).on('click', '.inception .synth .entry-full', function(e) {
		e.stopPropagation();
	});
	function initRelations() {
		var numVisibles = 10 ;
		$('.inception').each(function(){
			var itemsRelated = $(this).children('li');
			if (itemsRelated.size() >= numVisibles) {

				var liste = $(this);

				itemsRelated.slice(numVisibles).hide().addClass('next');
				
				var prev = $('<li class="prevButton"><p>Précédents</p></li>')
				.css('background-color', $('#column').css('background-color') )
				.addClass('hidden')
				.click(function(){
					liste.find('.itemRelated').not(".next, .previous").addClass("next");
					var $this = $(this);
					setTimeout(function(){
						liste.find('.itemRelated.next').hide();
						var nouveaux = liste.find('.itemRelated.previous').slice(-numVisibles);
						nouveaux.show();
						liste.find('.nextButton').removeClass('hidden');
						if(! liste.find('.itemRelated.previous').not(nouveaux).size()) {
							$this.addClass('hidden');
						}
						setTimeout(function(){
							liste.find('.itemRelated').removeClass("first");
							nouveaux.removeClass('previous').first().addClass("first");
						},50);
					}, 250);

					
				});

				var next = $('<li class="nextButton"><p>Suivants</p></li>')
				.css('background-color', $('#column').css('background-color') )
				.click(function(){
					liste.find('.itemRelated').not(".next, .previous").addClass("previous");
					var $this = $(this);
					setTimeout(function(){
						liste.find('.itemRelated.previous').hide();
						var nouveaux = liste.find('.itemRelated.next').slice(0,numVisibles);
						nouveaux.show();		
						liste.find('.prevButton').removeClass('hidden');
						if(! liste.find('.itemRelated.next').not(nouveaux).size()) {
							$this.addClass('hidden');
						}
						setTimeout(function(){
							liste.find('.itemRelated').removeClass("first");
							nouveaux.removeClass("next").first().addClass("first");;
						},100);
					}, 500);
				});

				$(this).prepend(prev).append(next);
				

			}
		});
		
	}
	

	
	/* Fold / Unfold items
	---------------------------------------------- */
	$(document).on('click', '.rubrique > .item.default:not(.open)', function(e) {
		var $li = $(this),
			items = $li.attr('data-type'),
			item = $li.attr('id'),
			url = $li.attr('data-url');
		History.pushState({ type: items, item: item }, siteTitle , url);
	});

	$(document).on('click', '.rubrique > .item.default.open > .entry-title', function(e) {
		var $li = $(this).closest('li'),
			items = $li.attr('data-type'),
			item = false,
			url = $li.attr('data-url');
			url = url.substring(0, url.lastIndexOf('/'));
		History.pushState({ type: items, item: item }, siteTitle , url);

	});

	$(document).on('click', '.inception .entry-title h3, .inception .viewmore', function(e) {
		var $li = $(this).closest('li'),
			items = $li.attr('data-type'),
			item = $li.attr('id'),
			url = $li.attr('data-url');
		History.pushState({ type: items, item: item }, siteTitle , url);
	});

	$(document).on('click', '.setview', function(e){
		e.stopPropagation();
		$content.hide_();

		var result = filterAndSetStyle('uri', [ $(e.target).closest('.setview').attr('data-uri') ], 'bold');
		if(result.bounds) {
			map.fitBounds(result.bounds, { padding:[10,10], maxZoom:18 });
		} else {
			var bounds = new L.LatLngBounds(result.LatLngs);
			map.fitBounds(bounds, { padding:[50,50], maxZoom:17 });
		}
	});

	/* Draw lines
	----------------------------------------------- */
	$(document).on('mouseover', '.rubrique > .item.default:not(.open) , .rubrique > .item.default.open .entry-title, .itemRelated', function(e) {

		if($(this).is(".entry-title")) {
			var item = $(this).closest('.item'),
				anchor = $(this);
		}else {
			var item = $(this),
				anchor = item;
		}

		// Coordinates of the starting point
		var offset = anchor.offset(),
			height = parseInt(anchor.outerHeight()),
			startpoint = { x: offset.left - $(window).scrollLeft(), y: offset.top - $(window).scrollTop() + height / 2 };

		// Exeption s'il s'agît d'un element imbriqué
		if( $(this).is('.itemRelated, .entry-title') ) {
			startpoint.x = $("#column").offset().left - $(window).scrollLeft();
		}

		// Couleur du lien
		color = item.attr('data-color') ? item.attr('data-color') : item.css('background-color') ;

		// Coordinates of the ending point
		var uri = item.attr('data-uri').split( '/' ),
			type = uri[0],
			uid = uri[1];
		endpoint = getItemPosition(type, uid);

		// trigo
		var angle = Math.atan2(endpoint.y - startpoint.y, endpoint.x - startpoint.x) * 180 / Math.PI;
		var length = Math.sqrt( Math.pow((startpoint.x-endpoint.x), 2) + Math.pow((startpoint.y-endpoint.y), 2) );

		if (startpoint.x > endpoint.x) {
			$('#line').addClass('show').css({ top: startpoint.y , left: startpoint.x, borderColor: color, transform: 'rotate('+angle+'deg)', width: length });
		} else {
			$('#compass').addClass('show').css({ top: startpoint.y , left: startpoint.x, backgroundColor: color, transform: 'rotate('+angle+'deg)' });
		}

	});

	$(document).on('mouseout', '.rubrique > .item.default, .itemRelated', function(e) {

		$('#line, #compass').removeClass('show');

	});
	

	
	/* -------------------------------------------- */
	/*			Slideshow
	/* -------------------------------------------- */
	
	var isfullscreen = false, myswiper;
	var $slideshow = {
		init: function(gallery, reduit, callback) {
			var $el = gallery, imgIndex = 0, total = $el.find('figure').length;
			$el.find('.pagination .total').text(total)
			$el.find('figure').each(function(){
				imgIndex += 1;
				$(this).attr('data-index', imgIndex);
			});
			var thisSwiper = $el.swiper($slideshow.params($el));
		},
		params: function($el){
			return {
				mode:'horizontal',
				loop: false,
				speed: 500,
				centeredSlides: true,
				slideActiveClass: 'activeImg',
				slideDuplicateClass: 'duplicateImg',
				preloadImages: false,
				lazyLoading: true,
				lazyLoadingInPrevNext: true,
				lazyLoadingOnTransitionStart: true,
				nextButton: $el.find('.next-slide'),
				prevButton: $el.find('.prev-slide'),
				pagination: $el.find('.pagination'),
				paginationType: 'fraction',
				paginationFractionRender: function(swiper, currentClassName, totalClassName){
					return '<span class="' + currentClassName + '"></span>' +
	             '/' +
	             '<span class="' + totalClassName + '"></span>';
				}
			}
		},
		open_: function($original_gallery){
			var $fullscreen = $('#fullscreen'),
				$wrapper = $('#fullscreenWrapper'),
				rgbaCol = $original_gallery.closest('.item').css('background-color').replace(')', ', 0.95)').replace('rgb', 'rgba'),
				shadow = '-1px -1px 10px '+rgbaCol+', 1px -1px 10px '+rgbaCol+', 1px 1px 10px '+rgbaCol+', -1px 1px 10px '+rgbaCol,
				count = 0;

			$fullscreen.css('background-color', rgbaCol ).css('text-shadow', shadow );

			$wrapper.html('');
			$original_gallery.find('figure').each(function(){
				var $fig = $(this).clone();
				var $figsrc = $fig.find('img').attr('data-src');
				$fig.find('img').attr('src', $figsrc);
				$fig.removeClass('hidden').appendTo($wrapper);
				count += 1;
			});
			$container = $('#fullscreenContainer');
			myswiper = $container.swiper($slideshow.params($container));

			$fullscreen.addClass('shown');
			$('html, body').addClass('isfullscreen');
			isfullscreen = true;

		},
		close_: function(){
			$('html, body').removeClass('isfullscreen');
			$('#fullscreen').removeClass('shown');
			setTimeout(function() {
				myswiper.destroy(true, true);
				myswiper=null;			
			}, 500);
			isfullscreen = false;
		},
		next_: function(){
			myswiper.slideNext();
		},
		prev_: function(){
			myswiper.slidePrev();
		}
	}
	$(document).on('keydown', function(e){
		if (isfullscreen === true) {
			switch (e.which) {
				case 39: // right
					$slideshow.next_();
					break;
				case 37: // left
					$slideshow.prev_();
					break;
				case 27: // esc
					$slideshow.close_();
					break;
			}
		}
	});

	$(document).on('click', '.gallery', function(e) {
		e.preventDefault();
		if (isfullscreen === false) {
			$slideshow.open_($(this));
		}
	}).on('click', '.swiper-slide', function(e) {
		e.preventDefault();
		if (isfullscreen === true) {
			myswiper.slideNext();
		}
	}).on('click', '#fullscreenCross', function(){
		$slideshow.close_($(this));
	});


	$(document).on('click', '.read-more', function(){
		($(this).hasClass('active')) ? $(this).removeClass('active') : $(this).addClass('active');
	});



	/* -------------------------------------------- */
	/*			Responsive : Show / hide map
	/* -------------------------------------------- */


	var $content = {
		show_: function(){
			$('body').removeClass('showmap');
			setTimeout(function() {$content.isOpen = true}, 200);
		},
		hide_: function(){
			$('body').addClass('showmap');
			setTimeout(function() {$content.isOpen = false}, 200);
		},
		isMobile: function(){
			if($(window).width() < 800 ){
				return true;
			} else {
				return false;			
			}

		},
		scrollSpeed: function(){
			if ($content.isMobile() === false || $content.isOpen) {
				return 500 
			} else {
				return 500;
			}
		}
	}



	/* -------------------------------------------- */
	/*			Map
	/* -------------------------------------------- */
	
	var map, markersLayer, markersCluster, lines ;

	/* Init
	---------------------------------------------- */
	L.mapbox.accessToken = 'pk.eyJ1Ijoic2FtdWVscm0iLCJhIjoicVJuNV9YMCJ9.7Bol-cHVhp6d_l-lVhPpew';
	
	map = L.mapbox.map('map', 'samuelrm.3e35d3f6', { 
		zoomControl: false, 
		attributionControl: false 
	});
	map.setView(mapCenter[0], mapZoom);
	new L.Control.Zoom({ position: 'bottomleft' }).addTo(map);
	
	

	
	
	
	/* Create specials layers
	---------------------------------------------- */
	
	// Create clusters
	markersCluster = L.markerClusterGroup({ 
		iconCreateFunction: function(cluster) {
			var markers = cluster.getAllChildMarkers(),
					color = markers[0].feature.properties['marker-color'];
			return new L.DivIcon({ 
				className:"clusterIcon", 
				html: "<span style='background-color:" + color + "'>" + cluster.getChildCount() + "</span>" 
			})
		},
		zoomToBoundsOnClick:false,
		showCoverageOnHover:false,
		animateAddingMarkers:true,
		maxClusterRadius:10,
		title:'titre'
	}).setZIndex(4).addTo(map);
	
	/* Create main layers
	---------------------------------------------- */
	
	
	linesLayer = L.mapbox.featureLayer().setZIndex(2).addTo(map);
	markersLayer = L.mapbox.featureLayer().setZIndex(3).addTo(map);
	lieuxLayer = L.mapbox.featureLayer().setZIndex(0).addTo(map);
	
	/* ajaxLoad 
	---------------------------------------------- */
	function loadGeoJson() {
		$.ajax({
      url: '/ajax',
			data: { function: 'getGeoJson' },
      success : function(response) {
				var points = JSON.parse(response.points),
					lieux = JSON.parse(response.lieux),
					lignes = JSON.parse(response.lignes);
				// Add geojson
				if(points != "") {
					markersLayer.setGeoJSON(points);
				}
				if(lignes != "") {
					linesLayer.setGeoJSON(lignes);
				}
				if(lieux != "") {
					lieuxLayer.setGeoJSON(lieux);
				}
			}
   });
	}
	loadGeoJson();
	
	/* Load features
	---------------------------------------------- */
	
	// On MARKER add
	markersLayer.on('layeradd', function(e) {
		var layer = e.layer,
				feature = layer.feature;
		
		if (feature.geometry.type == 'Point') {
			var marker = layer;
			markerInit(layer);
		} else {
			markersLayer.removeLayer(layer);
		}
	});
	
	// On LINES add
	linesLayer.on('layeradd', function(e) {
		var layer = e.layer,
				feature = layer.feature;
		
		if (feature.geometry.type == 'LineString') {
			var line = layer;
			lineInit(line);
		}  else {
			linesLayer.removeLayer(layer);
		}
		
	});
		
	// On LIEUX add
	lieuxLayer.on('layeradd', function(e) {
		var layer = e.layer,
				feature = layer.feature;
		
		if (feature.geometry.type == 'Point') {
			var marker = layer;
			lieuInit(layer);
		} else {
			lieuxLayer.removeLayer(layer);
		}
	});
	
	/* Markers methods
	------------------------------------------------*/
	function markerInit(marker) {
		var feature = marker.feature;
		setMarkerStyle(marker, 'normal');
		marker.setIcon(L.divIcon(feature.properties.divIcon));
		marker.off('click');
		marker.on('click', function() {
			var item = feature.properties.uid,
				items = feature.properties.categorie;	
			loadItems(items, item);
			$content.show_();
		});
		marker.bindTooltip(feature.properties.title, {
			offset: [0, 0],
			direction: 'bottom'
		});
		marker.addTo(markersCluster);
	}
	function setMarkerStyle(marker, style) {
		icon = marker.feature.properties.divIcon;
		switch (style) {
			case 'normal':
				$(marker._icon).removeClass('bold').addClass('normal');
				marker.closeTooltip();
				break;
			case 'bold':
				$(marker._icon).removeClass('normal').addClass('bold');
				spiderfyCluster(marker);
				marker.openTooltip();
				break;
			default: false;
		}
	}
	
	
	/* Lines methods
	---------------------------------------------- */
	function lineInit(line) {
		var feature = line.feature;
		line.setStyle(feature.style);
		setLineStyle(line, 'normal');
		line.bindTooltip(feature.properties.title, {
			//offset: [12, 0],
			sticky: true
		});
		line.off('click');
		line.on('click', function() {
			var item = feature.properties.uid,
				items = feature.properties.categorie;	
			loadItems(items, item);
			$content.show_();
		});
		line.on('mouseover', function(e) {
			var style = e.target.options;
			if(e.target.options.weight < 7) {
				line.setStyle({ weight: 5, dashArray: [], opacity: 1, lineCap: 'round', lineJoin: 'round' });
			}
		});
		line.on('mouseout', function() {
			line.setStyle(feature.style);
		});
		
	}

	function setLineStyle(line, style) {
		switch (style) {
			case 'normal':
				line.feature.style = { weight: 5, dashArray: [], opacity: .5, lineCap: 'round', lineJoin: 'round' };
				break;
			case 'bold':
				line.feature.style = { weight: 7, dashArray: [], opacity: 1, lineCap: 'round', lineJoin: 'round' };
				break;
			default:
				break;
		}
		line.setStyle(line.feature.style);
		return (line.feature.style);
	}
	
	/* Lieux methods
	------------------------------------------------*/
	function lieuInit(marker) {
		var feature = marker.feature;
		setMarkerStyle(marker, 'normal');
		marker.setIcon(L.divIcon(feature.properties.divIcon));
		marker.off('click');
		marker.on('click', function() {
			var item = feature.properties.uid,
					items = feature.properties.categorie;	
			loadItems(items, item);
			$content.show_();
		});
		marker.bindTooltip(feature.properties.title, {
			className:'map-etiquette',
			direction: 'bottom',
			//offset: [12, 0]
		});
	}

	function setMarkerStyle(marker, style) {
		icon = marker.feature.properties.divIcon;
		switch (style) {
			case 'normal':
				$(marker._icon).removeClass('bold').addClass('normal');
				marker.closeTooltip();
				break;
			case 'bold':
				$(marker._icon).removeClass('normal').addClass('bold');

				spiderfyCluster(marker);
				marker.openTooltip();
				break;
			default: false;
		}
	}

	/* Convert to latLng
	---------------------------------------------- */
	var reverseCoord = function(waypoint) {
		return waypoint.reverse();
	}

	/* Styles methods
	------------------------------------------*/

	function getItemPosition(type, uid) {
		var layer = { 'points' : markersLayer , 'lignes' : linesLayer, 'lieux' : lieuxLayer };
		var result;
		layer[type].eachLayer(function(layer) {
			if (layer.feature.properties["uri"] == type + '/' + uid) {
				if(type == 'lignes'){
					result = map.latLngToContainerPoint(layer.getLatLngs()[0]);
				}else {
					result = map.latLngToContainerPoint(layer.getLatLng());
				}

			}
		});
		return(result);
	}

	function filterAndSetStyle(property, values, style) {
		var LatLngs = new Array();
		var bounds;
		linesLayer.eachLayer(function(layer) {
			if( property in layer.feature.properties ) {
				var lookingFor = layer.feature.properties[property];
				values.forEach(function(value) {
					if (value == lookingFor) {
						setLineStyle(layer, style);
						bounds = layer.getBounds();
						if( ! map.getBounds().contains(bounds) ) {
							map.panInsideBounds(bounds, { "duration" : 2 });
						}
					}
				});
			}
		});
		markersLayer.eachLayer(function(layer) {
			if( property in layer.feature.properties ) {
				var lookingFor = layer.feature.properties[property];
				values.forEach(function(value) {
					if (value == lookingFor) {
						setMarkerStyle(layer, style);
						var coordinates = layer.feature.geometry.coordinates.slice(0).reverse();
						LatLngs.push([coordinates]);
						bounds = false;
							
						if( ! map.getBounds().contains(coordinates) ) {
							map.panTo(coordinates, { "duration" : 2 });
						}
					}
				});
			}
		});
		lieuxLayer.eachLayer(function(layer) {
			if( property in layer.feature.properties ) {
				var lookingFor = layer.feature.properties[property];
				values.forEach(function(value) {
					if (value == lookingFor) {
						setMarkerStyle(layer, style);
						var coordinates = layer.feature.geometry.coordinates.slice(0).reverse();
						LatLngs.push([coordinates]);
						bounds = false;
						if( ! map.getBounds().contains(coordinates) ) {
							map.panTo(toLatLng(coordinates), { "duration" : 2 });
						}
					}
				});
			}
		});
		var result = { bounds: bounds, LatLngs: LatLngs }
		return result;
	}

	function resetStyle() {
		linesLayer.eachLayer(function(layer) {
			setLineStyle(layer, 'normal');
		});
		markersLayer.eachLayer(function(layer) {
			setMarkerStyle(layer, 'normal');
		});
		lieuxLayer.eachLayer(function(layer) {
			setMarkerStyle(layer, 'normal');
		});
	}

	
	/* Clusters methods
	------------------------------------------*/
	var oldMarkerCluster = null;

	map.on('preclick', function() {
		$(".leaflet-marker-pane").removeClass('spiderified');
	});
	markersCluster.on('clusterclick', function (a) {
		a.layer.spiderfy();
		oldMarkerCluster = a.layer;
		$(".leaflet-marker-pane").addClass('spiderified');
	});
	function spiderfyCluster(marker) {
		var markerCluster = markersCluster.getVisibleParent(marker);
		if (oldMarkerCluster !== null){
			oldMarkerCluster.unspiderfy();
			oldMarkerCluster = null;
		}
		if (markerCluster instanceof L.MarkerCluster){
			markerCluster.spiderfy();
			oldMarkerCluster = markerCluster;
		}
	}


	/* -------------------------------------------- */
	/*			RECHERCHER
	/* -------------------------------------------- */
	
	var searchfield = $("#searchfield input");
	var previousSearch = false;
	searchfield.on("change keyup paste", function(event){
		var keyword = searchfield.val();
		if (keyword != previousSearch) {
			previousSearch = keyword;
			if( keyword.length > 2) {
				searchItems(keyword);
			} else {
				$('#content').html('');
			}
		}
	})

	/* -------------------------------------------- */
	/*			INIT
	/* -------------------------------------------- */
	
	searchItems = function(keyword) {
		$('#content').hide();
		$('#loading').show();
		$.ajax({
				url: '/ajax',
				data: { function: 'searchItems', keyword: keyword },
				success : function(response) {
					resetStyle();
					// Hide loading
					$('#loading').hide();
					// Update content
					$('#content').html(response.content).show();
				}
		});
	}
	
	loadItems = function(type, item) {
		if(type != currentType) {
			item = item || false;
			$('#content').hide();
			$('#loading').show();
			$.ajax({
				url: '/ajax',
				data: { function: 'loadItems', type: type, uid: item },
				success : function(response) {
					resetStyle();
					currentType = type;
					// Hide loading
					$('#loading').hide();
					// Update menu
					$('#menu li[data-items="'+type+'"]').addClass('open').siblings().removeClass('open');
					// Update content
					$('#content').html(response.content).show();
					// Update styles
					var color = $('#content > ul > li').first().css('background-color');
					$('body, #column, #loading .dark .circle').css('background-color', color);
					// Show/hide Search bar
					if (type == 'rechercher') {
						$("#searchfield").show();
						$("#searchfield input").val('');
						$("#searchfield input").focus();
					} else {
						$("#searchfield").hide();
					}
					// Slide To
					if(type == 'rechercher' && item) {
						$('#searchfield input').val(item).trigger('change');
					} else {
						if(item) { 
							openItem(item); 
						} else { 
							closeItems(); 
						}
					}
				}
			});
		} else {
			if(item) { openItem(item); } else { closeItems(); }
		}
	}
	
	loadItem = function(uri, what, where, callback) {
		$('#loading').show();
		$.ajax({
			url: '/ajax',
			data: { function : 'loadItem', uri : uri },
			success: function(response) {
				$('#loading').hide();
				if(what){
					where.html( $(response.content).find(what).children() );
				} else {
					where.html(response.content);
				}
				if (callback) { callback() };

				resetStyle();
				// Update map
				filterAndSetStyle('uri', [uri], 'bold');
			}
		});
	}


	loadSong = function(entry, song, start) {
		$.ajax({
			url: '/ajax',
			data: { function : 'loadSong', entry: entry, song: song, start: start },
			success: function(response) {
				var playerwrapper = $('#player');
				playerwrapper.html(response.content);

				//song link
				$('.loadItems').click(function(){
					$menu.loadThis($(this));
				});

				//player
				audiojs.createAll();
				var player = playerwrapper.find('audio');
				if(player.length) {
					player = player.first();
					player.on('canplay', function() {
						var start = playerwrapper.find('.entry-audio').attr('data-start');
						this.currentTime = start; // jumps to 29th secs
						player.off('canplay');
						$("#player .audiojs .play").first().click();
					});
				}
			}
		});
	}

	$(document).on('click', '.playthissong', function(e){
		var $button = $(e.target).closest('.playthissong');
		$('#player-wrapper').removeClass('r22').addClass('show');
		loadSong($button.attr('data-entry'), $button.attr('data-song'), $button.attr('data-start'));
	});

	$(document).on('click', '.playthisradio', function(e){
		var iframe = $(e.target).closest('.playthisradio').attr('data-iframe');
		$('#player-wrapper').addClass('show r22');
		var player = $('#player');
		player.html(iframe);
	});

	$(document).on('click', '#player-wrapper .close', function(e){
		$('#player-wrapper').removeClass('show');
		setTimeout(function(){
			$('#player-wrapper').removeClass('r22');
			$('#player').html('')
		}, 1000);
	});
	
	openItem = function(item) {
	
		$li = $("#content").find('#' + item);

		var uri = $li.attr('data-uri');

		var targetScroll, 
			openedItem = $li.siblings('.open'),
			paddingTop = parseInt($("#column").css("padding-top")),
			offset = $li.position().top - paddingTop;

		if(openedItem.length && $li.index() > openedItem.index()){
			var openedItemHeight = openedItem.find('.entry-full').outerHeight() || 0;
			targetScroll = offset - openedItemHeight + 1;
		} else {
			targetScroll = offset + 1;
		}
		$fulltext = $li.find('.entry-full');

		console.log(targetScroll);

		loadItem( uri, '.entry-full', $fulltext, function(){ 
			$("html, body, #column").animate({ scrollTop: targetScroll + 'px' }, $content.scrollSpeed());
			//sliding effect
			$li.siblings('.open').removeClass('open').find('.entry-full').slideUp(500);
			$li.addClass('open'); 
			$fulltext.slideDown(500);
			//relations
			initRelations();
		} );
	}
	
	closeItems = function() {
		$("#content li .entry-full").slideUp(500);
		$("#content li.open").removeClass('open');
	}
	
	loadItems(typeUid, pageUid);
	
		// Bind to StateChange Event
		History.Adapter.bind(window,'statechange',function(){
		var State = History.getState();
		
		loadItems(State.data.type, State.data.item);

	});

	/* External link
	---------------------------------------------- */

	$(document).on("click", "a", function (e) {

		var href = e.target.getAttribute("href");

		if(href) {
			var external = href.lastIndexOf('http', 0) === 0;
		    
		    if ( !e.target.hasAttribute("target") && external) {
		        e.target.setAttribute("target", "_blank");
		    }
		}

	});   
	
	
}); // END OF JQUERY


/* -------------------------------------------- */
/*			UTILITIES
/* -------------------------------------------- */



/* Attach event handler functions with delay http://yckart.github.com/jquery.unevent.js/
---------------------------------------------- */
;(function ($) {
    var on = $.fn.on, timer;
    $.fn.on = function () {
        var args = Array.apply(null, arguments);
        var last = args[args.length - 1];

        if (isNaN(last) || (last === 1 && args.pop())) return on.apply(this, args);

        var delay = args.pop();
        var fn = args.pop();

        args.push(function () {
            var self = this, params = arguments;
            clearTimeout(timer);
            timer = setTimeout(function () {
                fn.apply(self, params);
            }, delay);
        });

        return on.apply(this, args);
    };
}(this.jQuery || this.Zepto));

/* Mode
/* value that appears most often in a set of data
/* usefull to choose a title for a marker cluster
---------------------------------------------- */
function mode(array)
{
	if(array.length == 0)
		return null;
	var modeMap = {};
	var maxEl = array[0], maxCount = 1;
	for(var i = 0; i < array.length; i++)
	{
		var el = array[i];
		if(modeMap[el] == null)
			modeMap[el] = 1;
		else
			modeMap[el]++;	
		if(modeMap[el] > maxCount)
		{
			maxEl = el;
			maxCount = modeMap[el];
		}
	}
	return maxEl;
}
/* Uniq
---------------------------------------------- */
function uniqBy(a, key) {
	var seen = {};
	return a.filter(function(item) {
		var k = key(item);
		return seen.hasOwnProperty(k) ? false : (seen[k] = true);
	})
}
/* Oembed
---------------------------------------------- */
$(function() {
  $(document).on('click', '.oembed-video .thumb, .oembed-video .play, .kirby-plugin-oembed__thumb', function() {
    var wrapper = $(this).parent();
    var embed = wrapper.find('iframe, object');
    embed.attr('src', embed.attr('data-src'));
    embed.css({'display' : 'block'});
    wrapper.find('.play, .thumb, .kirby-plugin-oembed__thumb').remove();
  });
});



/* Split Color Component
---------------------------------------------- */
function splitComponent(color) {
	var rgbColors = new Object();
	color = color.substring(color.indexOf('(')+1, color.indexOf(')'));
	var result = color.split(',', 3);
		return result ? { 
			r: parseFloat(result[0]/255),
			g: parseFloat(result[1]/255),
			b: parseFloat(result[2]/255)
		} : null;
}

/* Change Color 
---------------------------------------------- */

function textColor(bgColor){
	var gamma = 2.2;
	var luminosity = 
		0.2126 * Math.pow(splitComponent(bgColor).r,gamma) + 
		0.7152 * Math.pow(splitComponent(bgColor).g,gamma) + 
		0.0722 * Math.pow(splitComponent(bgColor).b, gamma);
	if (luminosity < 0.3) { 
		return "text-light" 
	} else {
		return "text-dark" 
	}
}