<?php go('/'); ?>

<pre>
<?php
/*



// UPDATE MEDIAS
foreach(page('lignes')->children() as $entry):
	$mediatype = $entry->mediatoggle();
	if ($mediatype == 'audio'):
		$audiofile = $entry->audiofile();
		$startat = $entry->audiostart();
		$fieldData = [  [ 'audiofile' => $audiofile, 'audiostart' => $startat, 'audiotitle' => '', '_fieldset' => 'audioset' ] ];
		echo $fieldData = yaml::encode($fieldData);
		$entry->update(array(
			'medias' => $fieldData
		));
	endif;
	if ($mediatype == 'video'):
		$embed = $entry->embed();
		$fieldData = [  [ 'embed' => $embed, '_fieldset' => 'videoset' ] ];
		echo $fieldData = yaml::encode($fieldData);
		$entry->update(array(
			'medias' => $fieldData
		));
	endif;
	if ($mediatype == 'radio'):
		$radio = $entry->radio();
		$fieldData = [  [ 'radio' => $radio, 'audiotitle' => '', '_fieldset' => 'radioset' ] ];
		echo $fieldData = yaml::encode($fieldData);
		$entry->update(array(
			'medias' => $fieldData
		));
	endif;
endforeach;

// UPDATE DATES

foreach(page('lignes')->children() as $entry):

	$infos = $entry->informations()->toStructure();
	$startdate = $entry->date('d.m.Y');
	$enddate = '';
	if (sizeof($infos)):
		foreach($infos as $info):
			if($info->_fieldset() == "date"):
				$dates = explode('-', $info->text()) ;
				$startdate = $dates[0];
				$enddate = array_key_exists(1, $dates) ? $dates[1] : '' ;
			endif;
		endforeach;
		echo $startdate . ' -> ' . $enddate . '<br>';
		$entry->update(array(
			'startdate' => $startdate,
			'enddate' => $enddate
		));
	endif;
endforeach;
*/


?>
</pre>