<ul>

<?php

// Infos
$infos = $entry->informations()->toStructure();
if (sizeof($infos)):
	foreach($infos as $info):
		if($info->_fieldset() != "space"):
			$class = 0 === strpos($info->icon(), 'fa-') ? "fa " . $info->icon() : "icon-" . $info->icon() ; 
			?>
			<li><span class='<?= $class ?>'></span> <?= $info->text()->kt() ?></li>
			<?php 
		else:
			echo "<li class='space'></li>";
		endif;
	endforeach;
endif;

// Date
$date = eventDate($entry);
if ($date) {
	echo "<li class='infos-date'><span class='entry-date icon-calendar'></span> <p>$date</p></li>";
}

// Keywords
if ($keywords = (string)$entry->keywords()):
?>
	<li class="keywords">
		<span class='icon-tag'></span>
		<p>
		<?php 
		$keywords = $entry->keywords()->split(); 
		$url = page('rechercher');
		foreach($keywords as $keyword):
			echo "<a href='{$url}' class='searchfor' data-keyword='$keyword'>$keyword</a>";
		endforeach;
		?>
		</p>
	</li>
<?php endif; ?>

</ul>