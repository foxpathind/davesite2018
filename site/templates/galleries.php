<?php snippet('header') ?>


<?php if(!$page->text()->empty()): ?>
	<?php echo $page->text()->kirbytext() ?>
<?php endif ?>

<hr class="invisible space">


<div class="carousel">
	<?php foreach($page->gallery()->structure() as $pic): 
	$myimage = $pic->gallery_image()->toFile()->resize(null, 800);?>
		<div class="carousel-cell">
			<img src="<?php echo $myimage->url()?>">
		</div>
	<?php endforeach ?>
</div>
<br />
<br />
<br />

<div class="carousel">
	<?php foreach($page->gallery2()->structure() as $pic): $myimage = $pic->gallery_image()->toFile()->resize(null, 800);?>
		<div class="carousel-cell">
			<img src="<?php echo $myimage->url()?>"/>
		</div>
	<?php endforeach ?>
</div>

<br />
<br />
<br />

<div class="carousel">
	<?php foreach($page->gallery3()->structure() as $pic): $myimage = $pic->gallery_image()->toFile()->resize(null, 800);?>
		<div class="carousel-cell">
			<img src="<?php echo $myimage->url()?>"/>
		</div>
	<?php endforeach ?>
</div>

<br />
<br />
<br />

<div class="carousel">
	<?php foreach($page->gallery4()->structure() as $pic): $myimage = $pic->gallery_image()->toFile()->resize(null, 800);?>
		<div class="carousel-cell">
			<img src="<?php echo $myimage->url()?>"/>
		</div>
	<?php endforeach ?>
</div>


<?php snippet('footer') ?>