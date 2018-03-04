<?php snippet('header') ?>

<?php if(!$page->text()->empty()): ?>
	<!-- Text -->
	<?php echo $page->text()->kirbytext() ?>
<?php endif ?>

<hr class="invisible space">

		<div class="slide">
			<?php if($page->images()->count() > 1): ?>
			<ul class="menu">
				<li><a class="prev">Prev</a></li>
				<li><a class="next">Next</a></li>
				<li><a class="goTo">Back</a></li>
			</ul>
			<?php endif ?>
		  	<div class="owl">
				<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
					<div class="item">
						<img  src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>">
						<a class="prev prev-hover"></a>
						<a class="next next-hover"></a>
					</div>
				<?php endforeach ?>
			</div>
		
		</div>



<?php snippet('footer') ?>