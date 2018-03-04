<?php snippet('header') ?>

	<?php if($page->featured() == 'picture'): ?>
		<?php $image = $page->images()->first(); ?>
		<?php if($page->hasImages()): ?>
			<img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>">
			<hr class="invisible space">
		<?php endif ?>
	<?php endif ?>

	<?php if($page->featured() == 'shuffle'): ?>
		<?php $work = $site->index()->filter(function($child) {
			return str::startsWith($child->template(), 'portfolio-');
			})->visible()->shuffle()->first(); ?>
			<?php $sample = $work->images()->shuffle()->first(); ?>
				<a href="<?php echo $work->url() ?>">
					<img src="<?php echo $sample->url() ?>" alt="<?php echo $sample->name() ?>">
				</a>
				<hr class="invisible space">
	<?php endif ?>

	<?php if($page->featured() == 'index'): ?>
		<?php $items = $site->index()->filter(function($child) {
			return str::startsWith($child->template(), 'portfolio-');
			})->visible(); ?>
		<div class="small-up-2 medium-up-3 large-up-4 row">
			<?php foreach($items as $item): ?>
				<?php if(in_array($item->template(), $ignore)) continue ?>  
				<div class="column image-wrapper overlay-fade-in">
				<!-- Thumbnail -->
				<?php echo thumb($item->images()->sortBy('sort', 'asc')->first(), array('width' => 450, 'height' => 300, 'crop' => true)); ?>
				<!-- Title -->
				<div class="image-overlay-content">
				    <a href="<?php echo $item->url() ?>"" class=""><?php echo $item->title()->html() ?></a>
				 </div>
				</div>
			<?php endforeach ?>
		</div>
		<hr class="invisible space">
	<?php endif ?>

	<?php echo kirbytext($page->text()) ?>



<?php snippet('footer') ?>