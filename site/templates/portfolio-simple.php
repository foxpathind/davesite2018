<?php snippet('header') ?>


<?php $images = $page->images()->sortBy('sort', 'asc')->paginate(1); ?>
<?php foreach($images as $image): ?>
	<div class="item">
		<img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>">
	</div>
<?php endforeach ?>

<ul class="menu">
	<li><?php if($images->pagination()->hasPrevPage()): ?><a href="<?php echo $images->pagination()->prevPageURL() ?>">Prev</a><?php else: ?><span class="menu-text">Prev</span><?php endif ?></li> 
	<li><?php if($images->pagination()->hasNextPage()): ?><a href="<?php echo $images->pagination()->nextPageURL() ?>">Next</a><?php else: ?><span class="menu-text">Next</span><?php endif ?></li>

	<!--
	<?php $pagination = $images->pagination(); ?>
    <?php foreach($pagination->range(5) as $range): ?>
    <li><a<?php if($pagination->page() == $range) echo ' class="active"' ?> href="<?php echo $pagination->pageURL($r) ?>"><?php echo $range ?></a></li>
    <?php endforeach ?>
    -->

	<li class="menu-text"><?php echo $images->pagination()->page() ?> / <?php echo $images->pagination()->items() ?></li>
	<li><a href="<?php echo $images->pagination()->firstPageUrl() ?>">︎Back</a></li>
</ul>

<hr class="invisible space">



  <ul class="menu">

  </ul>

<?php if(!$page->text()->empty()): ?>
	<!-- Text -->
	<?php echo $page->text()->kirbytext() ?>
<?php endif ?>

<?php snippet('footer') ?>