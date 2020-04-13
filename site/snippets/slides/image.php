<figure class="swiper-slide image-slide" data-index="">
	<img src="<?php //echo $entry->file($slide->image())->resize(500)->url(); ?>" class="swiper-lazy" data-src="<?php echo $entry->file($slide->image())->resize(900)->url(); ?>" data-src-large="<?php echo $entry->file($slide->image())->resize(1600)->url(); ?>" alt="" >
	<figcaption class="mobile"><?= $slide->caption() ?></figcaption>
</figure>