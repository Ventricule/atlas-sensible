<div class="entry-title" >
	
	<h3 class="collapse cursor-pointer">
		<?php echo $entry->title()->html(); ?>
	</h3>
	<h4 class="date"><?= eventDate($entry) ?></h4>
	<div class="circle icon-location cursor-pointer setview" data-uri="<?= $entry->uri() ?>"></div>

</div>