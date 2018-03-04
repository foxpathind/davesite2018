<?php snippet('header') ?>


<?php if($user = $site->user() and $user->hasRole('admin')): ?>




<?php if(!$page->text()->empty()): ?>
	<?php echo $page->text()->kirbytext() ?>
<?php endif ?>

<hr class="invisible space">


<div class="" style="overflow-y: hidden; overflow-x: scroll; white-space:nowrap">
<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
	<img style="display: inline-block;" src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>">
<?php endforeach ?>
</div>



<?php else: ?>

<a href="<?php echo url('login') ?>">Please LOGIN to Access this page.</a>


<?php endif ?>

<?php snippet('footer') ?>
