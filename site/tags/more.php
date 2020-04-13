<?php

kirbytext::$tags['more'] = array(
  'html' => function($tag) {
		$more = '<p class="read-more">' . htmlspecialchars( (string)$tag->attr('more') ? $tag->attr('more') : 'Lire la suite...' ) . '</p>';
    return $more;
  }
);