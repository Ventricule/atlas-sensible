<?php snippet('header') ?>

<?php
$bgcolor = $page->color();
?>
<body style="background-color:<?php echo $bgcolor; ?>">
	<script>
		<?php
		if ((string)$page->parent()->uid()) :
			?>
			var pageTitle		= "<?= $page->title()->escape() ?>",
				pageUid			= "<?= $page->uid() ?>",
				pageUrl			= "<?= $page->url() ?>",
				typeTitle		= "<?= $page->parent()->title()->escape() ?>",
				typeUid			= "<?= $page->parent()->uid() ?>",
				typeUrl			= "<?= $page->parent()->url() ?>";
			<?php
		else :
			?>
			var pageTitle		= false,
				pageUid			= false,
				pageUrl			= "<?= $page->url() ?>",
				typeTitle		= "<?= $page->title()->escape() ?>",
				typeUid			= "<?= $page->uid() ?>",
				typeUrl			= "<?= $page->parent()->url() ?>";
			<?php
		endif;
		?>
		var siteTitle 	= "<?= $site->title()->escape() ?>",
			pageUri		= "<?= $page->uri() ?>",
			mapCenter	= <?= $site->mapcenter() ?>;
			mapZoom		= <?= $site->mapzoom() ?>;
	</script>
	<?php snippet('menu') ?>
	<main id="column" class="main" role="main" style="background-color:<?= $bgcolor ?>">
		<?php snippet('search') ?>
		<div id="content">
		</div>
		<?php snippet('player') ?>
	</main>

	<div id='map'>
	</div>

	<div id="loading">
		<div class="half-circle dark">
			<div class="circle" style="background-color:<?= $bgcolor ?>">
			</div>
		</div>
		<div class="half-circle light">
			<div class="circle">
			</div>
		</div>
	</div>

	<div id='line'></div>
	<div id='compass' class="fa fa-hand-o-right"></div>

	<?php snippet('fullscreen') ?>
	
	<?php snippet('analytics') ?>

</body>
</html>
