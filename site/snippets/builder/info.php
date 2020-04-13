<?php
if( preg_match('/fa-/', $data->icon() ) ) :
	$icon = 'fa ' . $data->icon() ;
else :
	$icon = 'icon-' . $data->icon() ;
endif;
?>
<span class="entypoplus <?= $icon ?>"></span> <?= $data->text() ?>