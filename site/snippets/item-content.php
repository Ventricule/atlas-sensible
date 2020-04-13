<div>&nbsp;</div>

<?php snippet('part-slider', array('entry'=>$entry)) ?>

<div class="entry-article cf">

	<div class="entry-content">
		<?php snippet('part-texte', array('entry' => $entry)); ?>
	</div>

	<div class="entry-infos">
		<?php snippet('part-infos', array('entry'=>$entry)) ?>
	</div>

</div>

<div class="circle icon-plus viewmore" data-uri="<?= $entry->uri() ?>"></div>

<?php snippet('part-relations', array('entry'=>$entry)) ?>


<div>&nbsp;</div>