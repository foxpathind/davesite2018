<?php snippet('header') ?>
	<div id="masonry">
  <ul>
    <?php foreach($page->images() as $pic): ?>
    <?php $pic->fitWidth(200) ?>
    <li>
      <img src="<?php echo $pic->url() ?>" width="<?php echo $pic->width() ?>" height="<?php echo $pic->height() ?>" />
    </li>
    <?php endforeach ?>
  </ul>
</div>
<?php snippet('footer') ?>