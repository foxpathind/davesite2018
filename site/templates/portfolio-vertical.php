<?php snippet('header') ?>

<div id="first" data-magellan-target="first"></div>


<?php if(!$page->text()->empty()): ?>
	<?php echo $page->text()->kirbytext() ?>
<?php endif ?>

<hr class="invisible space">

<?php foreach($page->gallery()->structure() as $image): 
	$myimage = $image->gallery_image()->toFile()->resize(null, 900); ?>
	<img src="<?php echo $myimage->url()?>" alt="<?php echo $image->name() ?>" >
	<hr class="invisible space">
	<ul class="menu" data-magellan>
  		<li><a href="#first" class="">Back</a></li>
	</ul>
<?php endforeach ?>

<hr class="invisible space">

<h1> Here below are a set of galleries gathered from the "Testing Galleries" page. </h1>
<br>
<br>
<br>

<!-- Galleries taken from another page -->
<div>
<?php $pg = page('testinggalleries'); ?>
<?php echo $pg->field()->count(); ?>
<div class="carousel">
	<?php foreach($pg->gallery()->structure() as $pic): 
	$myimage = $pic->gallery_image()->toFile()->resize(null, 800);?>
		<div class="carousel-cell">
			<img src="<?php echo $myimage->url()?>">
		</div>
	<?php endforeach ?>
</div>

<div class="carousel">
	<?php foreach($pg->gallery2()->structure() as $pic): $myimage = $pic->gallery_image()->toFile()->resize(null, 800);?>
		<div class="carousel-cell">
			<img src="<?php echo $myimage->url()?>"/>
		</div>
	<?php endforeach ?>
</div>

<br />
<br />
<br />

<div class="carousel">
	<?php foreach($pg->gallery3()->structure() as $pic): $myimage = $pic->gallery_image()->toFile()->resize(null, 800);?>
		<div class="carousel-cell">
			<img src="<?php echo $myimage->url()?>"/>
		</div>
	<?php endforeach ?>
</div>


</div>


<?php snippet('footer') ?>