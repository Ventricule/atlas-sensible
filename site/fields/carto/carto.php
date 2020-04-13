
<?php 

class CartoField extends InputField {

	public function __construct() {
		$this->type				= 'text';
		$this->icon				= 'map-marker';
		$this->label			= l::get('fields.location.label', 'Lieu');
		$this->placeholder		= l::get('fields.location.placeholder', 'Coordonnées');
		$this->readonly			= true;
		$this->id				= "carto-coordinates";
	}

	static public $assets = array(
		'js' => array(
			'mapbox.js',
			'leaflet.draw.js',
			'turf.min.js',
			'carto.js',
		),
		'css' => array(
			'mapbox.css',
			'leaflet.draw.css',
			'carto.css'
		)
	);
	public function input() {
		$input = parent::input();
		$input->data('field','location');
		return $input;
	}

	public function icon() {
		$i = new Brick('i');
		$i->addClass('icon fa fa-' . $this->icon);
		$icon = new Brick('div');
		$icon->addClass('field-icon');
		$icon->append($i);
		return $icon;
	}

	public function content() {
		$mapfield = new Brick('div');
		$mapfield->addClass('field-content');
		$mapfield->append($this->map());

		$inputfield = new Brick('div');
		$inputfield->addClass('field-content');
		$inputfield->append($this->input());
		$inputfield->append($this->icon());

		$content = $mapfield . $inputfield;

		return $content;
	}



	public function map() {
		$element = new Brick('div');
		$element->attr("id", 'carto-map')->attr("data-outils", $this->outils());
		return $element;
	}

}