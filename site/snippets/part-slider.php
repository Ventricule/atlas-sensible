<?php $photos = $entry->photos()->yaml() ?>
<?php $single = count($photos) > 1 ? false : 'single' ?>

<?php if ($photos): ?>
	<div class="gallery <?= $single ?>" style="color:<?php echo $entry->parent()->color() ?>">
		<?php $max = 0 ?>
		<?php foreach ($photos as $key => $photo): ?>
			<?php 
			$slide = $entry->image($photo); 
			$cropped = $slide->extension() == 'gif' ? $slide : $slide->crop('800', '600');
			?>
			<?php if ($key == 0): ?>
				<figure class="swiper-slide image-slide" data-index="<?= $key ?>">
					<img src="<?= $cropped->url(); ?>" data-src="<?= $slide->resize('1200', '800')->url() ?>">
					<figcaption class="mobile"><?= $slide->caption()->kt() ?></figcaption>
				</figure>
			<?php else: ?>
				<figure class="swiper-slide image-slide hidden" data-index="<?= $key ?>">
					<img src="" data-src="<?= $slide->resize('1200', '800')->url() ?>">
					<figcaption class="mobile"><?= $slide->caption()->kt() ?></figcaption>
				</figure>
			<?php endif ?>
			<?php $max = $key+1; ?>

		<?php endforeach ?>
		<div class="nav pagination">
			<span class="number">1</span><span class="slash">/</span><span class="total"><?= $max ?></span>
		</div>
		<div class="nav icon-magnifying-glass mobile fullscreen"></div>
	</div>
<?php endif ?>

<div>
	<?php 
	foreach($entry->medias()->toStructure() as $media):
		switch ($media->_fieldset()) :
			case 'audioset':
				$file = $entry->file($media->audiofile());
				$mp3file = new MP3File($file->url());
				$duration = $mp3file->getDuration();
				$duration = MP3File::formatTime($duration);
				$name = $media->audiotitle() != '' ? $media->audiotitle() : $file->filename() ;
				echo "<div class='playthissong btn-player' data-entry='{$entry->uri()}' data-song='{$entry->audiofile()}' data-start='{$entry->audiostart()}'>";
				echo "<span class='icon-controller-play icon-play'></span><span class='name'>{$name}</span><span class='length'>{$duration}</span>";
				echo "</div>";
				break;

			case 'videoset':
				echo '<div class="entry-video">';
				echo $media->embed()->oembed([ 'lazyvideo' => true ]);
				echo '</div>';
				break;

			case 'radioset':
				$name = $media->audiotitle() != '' ? $media->audiotitle() : $entry->title() ;
				echo "<div class='playthisradio btn-player' data-iframe='" . htmlspecialchars($media->radio()) . "'>";
				echo "<span class='icon-radio icon-play'></span><span class='name'>{$name}</span><span class='length'>R22 Tout-Monde</span>";
				echo "</div>";
				break;

		endswitch;
	endforeach;
	?>
</div>