var debug = false,
	map, geocoder, markers = [],

// Global debug logger
log = function(s){
	if(debug) {
		console.log(s);
	}
},



// Mapbox module
Carto = (function($){

	var s;

	function init() {
		log("Carto.init()");
		s = {
			mapcanvas:		$("#carto-map"),
			locationField: 	$("#carto-coordinates"),
			outils: 		$("#carto-map").attr('data-outils') ? $("#carto-map").attr('data-outils').split(' ') : 0,
			// Fallback coordinates - center of Netherlands
			defaultLat:		52.312500,
			defaultLng:		5.548611,

		};

		s.marker = false;
		s.polyline = false;
		if (s.outils){
			s.marker = $.inArray('point', s.outils) > -1 ? true : false;
			s.polyline = $.inArray('ligne', s.outils) > -1 ? true : false;
		} 


		// If mapcanvas is present, read the field and load the map
		if(s.mapcanvas.length) {
			buildMap();
		}
	}





	// MAPBOX
	// ==========================================================================


	function buildMap() {
		L.mapbox.accessToken = 'pk.eyJ1Ijoic2FtdWVscm0iLCJhIjoicVJuNV9YMCJ9.7Bol-cHVhp6d_l-lVhPpew';
		var map = L.mapbox.map('carto-map', 'samuelrm.3e35d3f6')
			.setView([48.87,2.4], 13);

		map.scrollWheelZoom.disable();

		var bezierLayer = L.mapbox.featureLayer().addTo(map);
		var featureGroup = L.featureGroup().addTo(map);
 
		var geocoderControl = L.mapbox.geocoderControl('mapbox.places', {keepOpen: false, autocomplete: true});
			geocoderControl.addTo(map);

		geocoderControl.on('select', function(object){
			geocoderControl._toggle();
			// Les nouvelles coordonnées
			var coords = object.feature.center.reverse();
			// supression des anciens éléments
			featureGroup.eachLayer(function (layer) {
				featureGroup.removeLayer(layer);
			});
			// On ajoute le nouveau marker
			var marker = L.marker(coords).addTo(featureGroup);
			// Enregistrement
			s.locationField.val('[[' + coords.join(",") + ']]');
		});



		/* ---- INIT ---- */

		// Récupération des anciennes données et affichage sur la carte :
		function setMap(coords){
			if(coords){
				datas = JSON.parse(coords);
				if (datas.length == 1 ) {
					// Si marker
					datas = datas[0];
					var marker = L.marker(datas).addTo(featureGroup);
					map.setView(datas, 15)
				}
				else if (datas.length > 1 ) {
					// Si polyline
					var polyline = L.polyline(datas).addTo(featureGroup);
					map.fitBounds(polyline.getBounds(), {paddingTopLeft:[40, 60], paddingBottomRight:[40, 60], maxZoom: 17})
				}			
			}
		}
		setMap(s.locationField.val());
		


		
		// petit hack pour éviter une erreur js (bug avéré du plugin)
		L.EditToolbar.Edit.prototype._editStyle = function() {};

		// Initialisation des contrôles de Leaflet Draw
		var drawControl = new L.Control.Draw({
			draw: {
				marker: s.marker,
				polyline: s.polyline,
				polygon: false,
				rectangle: false,
				circle: false,
			},
			edit: {
				featureGroup: featureGroup,
				remove: true
			},
			position: 'bottomleft'
		}).addTo(map);



		/* ---- CRÉATION D'UN ÉLÉMENT ---- */

		map.on('draw:created draw:drawvertex', function(e) {

			// supression des anciens éléments
			featureGroup.eachLayer(function (layer) {
				featureGroup.removeLayer(layer);
			});

			// on regarde si il y a un ou plusieurs "layers(s)"
			if (typeof e.layers !== "undefined") {
				e.layers.eachLayer(function(layer){
					featureGroup.addLayer(layer);
				})
			} else if (typeof e.layer !== "undefined"){
				featureGroup.addLayer(e.layer);
			}
			// Ajout du nouvel élément sur la carte
			recordLayer( featureGroup );
		});


		/* ---- ÉDITION D'UN ÉLÉMENT---- */

		// Mémorisation des données contenues dans le champs.
		var coords_memory = null;		
		map.on('draw:editstart draw:drawstart', function(e) {
			coords_memory = s.locationField.val();
		})

		// Enregistrement qu'on a cliqué sur save ou qu'on a créé un nouvel élément
		var edited = false;
		map.on('draw:edited draw:created', function(e) {
			edited = true;
		})

		// Arret du mode édition / création mais on ne sait pas si c'est cancel ou save.
		map.on('draw:editstop draw:drawstop', function(e) {
			if(edited == true){
				// On a cliqué sur save : on save.
				edited = false;
				recordLayer( featureGroup )
			} else {
				// On a cliqué sur cancel : on restaure les anciennes données dans le locationField.
				s.locationField.val(coords_memory);
				setMap(s.locationField.val());
				coords_memory = null;
			}
		});

		// Enregistrement des coordonnées dans locationField
		map.on('draw:editmove draw:editvertex', function(e) {
			recordLayer( featureGroup )
		});
		map.on('draw:deleted', function(e) {
			s.locationField.val("");
		});



		/* ---- ENREGISTRER DANS LE LOCATIONFIELD ---- */

		function recordLayer( layers ){
			var coords = [];
			if (typeof layers !== "undefined") {
				layers.eachLayer(function (layer) {
					if(typeof layer._latlngs !== "undefined"){
						$.each(layer._latlngs, function(point, coord){
							coords.push("["+[coord.lat, coord.lng].join(",")+"]")
						})
					} else if (typeof layer._latlng !== "undefined") {
						var coord = layer._latlng;
						coords.push("["+[coord.lat, coord.lng].join(",")+"]")
					}
				});
				coords = "["+coords.join(",")+"]";
				s.locationField.val(coords);
			}
		}
	}






	// Public methods
	// ==========================================================================

	return {
		init: init,
		build: buildMap
	}

})(jQuery);

// Load method triggered by Kirby
// https://github.com/getkirby/panel/issues/228#issuecomment-58379016
(function($) {
	$.fn.location = function() {
		Carto.init();
	}
})(jQuery);
