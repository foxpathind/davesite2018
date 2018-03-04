<?php snippet('header') ?>


<?php if(!$page->text()->empty()): ?>
	<!-- Text -->
	<?php echo $page->text()->kirbytext() ?>
	<hr class="invisible space">

<?php endif ?>


<div class="small-up-2 medium-up-2 large-up-3 row"  id="container">
	<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
		<div class="column">
			<a data-open="<?php echo $image->hash() ?>">
				<img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>">
			</a>
		</div>
	<?php endforeach ?>
</div>

<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
	<div class="large reveal" id="<?php echo $image->hash() ?>" data-reveal>
		<img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>">
		<button class="close-button" data-close aria-label="Close modal" type="button">
			<span aria-hidden="true">Back</span>
		</button>
	</div>
<?php endforeach ?>


<?php snippet('footer') ?>