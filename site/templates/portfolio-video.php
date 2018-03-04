<?php snippet('header') ?>

<?= $page->featured_video()->oembed() ?>

<?php if(!$page->text()->empty()): ?>
	<hr class="invisible space">
	<?php echo $page->text()->kirbytext() ?>
<?php endif ?>

<?php snippet('footer') ?>