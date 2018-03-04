<?php snippet('header') ?>

<?php $items = $site->index()->visible()->sortBy('title', 'asc'); ?>
<?php $ignore = array('error', 'section', 'cover', 'index'); // pages with template in $ignore are ignored ?>

<div class="small-up-2 medium-up-3 large-up-4">
  <?php foreach($items as $item): ?>
  <?php if(in_array($item->template(), $ignore)) continue ?>  
    <div class="column">
      <a class="" href="<?php echo $item->url() ?>">
      <!-- Thumbnail -->
      <?php if($item->hasImages()): ?>
          <?php echo thumb($item->images()->sortBy('sort', 'asc')->first(), array('width' => 450, 'height' => 300, 'crop' => true)); ?>
      <?php else: ?>
          <div style="max-width: 450px; max-height: 300px;"></div>
      <?php endif ?>
      </a>
      <!-- Title -->
      <ul class="menu">
      <li class="menu-text"><a href="<?php echo $item->url() ?>" class=""><?php echo $item->title()->html() ?></a></li>

      <li><br/></li> 
      </ul>
    </div>
  <?php endforeach ?>
</div>

<?php snippet('footer') ?>