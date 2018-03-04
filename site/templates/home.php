<?php snippet('header') ?>


<?php echo kirbytext($page->text()) ?>

<hr class="invisible space">



<?php if($page->featured() == 'picture'): ?>
	<?php $image = $page->images()->first(); ?>
	<?php if($page->hasImages()): ?>
		<img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>">
	<?php endif ?>
<?php endif ?>





<?php if($page->featured() == 'shuffle'): ?>
	<?php $works = $site->index()->filter(function($child) {
	return str::startsWith($child->template(), 'portfolio-');
	})->visible();
	if($works->count() > 0): ?>
		<?php $shuffle = $works->shuffle()->first(); ?>
			<?php if($shuffle->hasImages()): ?>
				<?php $sample = $shuffle->images()->shuffle()->first(); ?>
				<a href="<?php echo $shuffle->url() ?>">
					<img src="<?php echo $sample->url() ?>" alt="<?php echo $sample->name() ?>">
				</a>
				<hr class="invisible space">
			<?php endif ?>
	<?php endif ?>
<?php endif ?>






<?php if($page->featured() == 'index'): ?>
	<?php $items = $site->index()->filter(function($child) {
	return str::startsWith($child->template(), 'portfolio-');
	})->visible();
	if($items->count() > 0): ?>
		<div class="small-up-2 medium-up-2 large-up-3 row">
			<?php foreach($items as $item): ?>
				<div class="column image-wrapper overlay-fade-in">
					<?php if($item->hasImages()): ?>
					<!-- Thumbnail -->
						<?php echo thumb($item->images()->sortBy('sort', 'asc')->first(), array('width' => 450, 'height' => 300, 'crop' => true)); ?>
					<!-- Title -->
						<div class="image-overlay-content">
							<a href="<?php echo $item->url() ?>"" class=""><?php echo $item->title()->html() ?></a>
						</div>
					<?php endif ?>
				</div>
			<?php endforeach ?>
		</div>
		<hr class="invisible space">
	<?php endif ?>
<?php endif ?>



<?php snippet('footer') ?>