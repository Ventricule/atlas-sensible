<nav id="menu">
	<ul>
		<?php $currentPage = $page->depth() == 1 ? $page->uid() : $page->parent()->uid() ?>
		<?php foreach($site->children()->visible() as $page): ?>
			<?php $color = $page->color(); ?>
			<li class="<?= e($currentPage == $page->uid(),'open') ?> text-<?= luminosity($color) ?>" style="background-color:<?= $page->color() ?>" data-items="<?= $page->uid() ?>">
				<a href="<?= $page->uri() ?>" data-url="<?= $page->url() ?>" class="loadItems" data-items="<?= $page->uid() ?>">
					<span><?= $page->title()?></span>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
	<div id="showmap" class="icon-left-open-big"></div>
	<div id="showcontent" class="icon-right-open-big"></div>
</nav>