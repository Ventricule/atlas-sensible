<?php

class RelationField extends CheckboxesField {

  public $search = true;

  static public $assets = array(
    'css' => array(
      'relation.css'
     ),
    'js' => array(
      'relation.js'
    )
  );

  public function __construct() {
    $this->icon    = 'chevron-down';
  }

  public function input() {
    $value = func_get_arg(0);
    $input = parent::input($value);
    return str_replace('required','', $input);
  }

  public function item($value, $text) {
    $input = $this->input($value);

    $label = new Brick('label');
    $label->addClass('input');
    $label->attr('data-focus', 'true');
		
    $text = new Brick('span', $this->i18n($text));
    $label->prepend($text);
		
		/*$parent = substr($value, 0, strpos($value, '/'));
		$parent = new Brick('i', $parent);
		$parent = $parent->attr('class', 'parent');
		$label->append($parent);*/
		
		//$check = new Brick('span');
		//$label->prepend($check);

    $label->prepend($input);


    if($this->readonly) {
      $label->addClass('input-is-readonly');
    }

    return $label;

  }

  public function content() {

    $relation = new Brick('div');
    $relation->addClass('input input-display');

    if($this->readonly()) $relation->addClass('input-is-readonly');
    $relation->data(array(
      'field'    => 'relation',
      'search'   => $this->search ? 1 : 0,
      'readonly' => ($this->readonly or $this->disabled) ? 1 : 0,
    ));

    $relation->append('<div class="placeholder">&nbsp;</div>');

    $content = new Brick('div');
    $content->addClass('field-content input-with-relationbox');
    $content->append($relation);


    // list with options
		$page_uri = str_replace('pages/', '', panel()->path); // awful, but works
		$page_uri = str_replace('/edit', '', $page_uri); // awful, but works
    $html  = '<div class="input-list" data-uri="'.$page_uri.'">';
    if ($this->search) {
      $html .= '<input class="relationbox-search" placeholder="Rechercher">';
    }
    $html .= '<ul>';
    foreach($this->options() as $key => $value) {
      $html .= '<li class="input-list-item">';
      $html .= $this->item($key, $value);
      $html .= '</li>';
    }
    $html .= '</ul>';
    $html .= '</div>';

    $content->append($html);


    $content->append($this->icon());

    return $content;

  }

  public function label() {
    $label = parent::label();
    $label->attr('for', '');
    return $label;
  }

  public function result() {
    $result = parent::result();
    return empty($result) ? null : $result;
  }

}
