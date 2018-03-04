<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/normalize.css') ?>
  <?php echo css('assets/css/foundation.css') ?>
  <?php echo css('assets/css/font-awesome.min.css') ?>
  <?php echo css('assets/css/owl.carousel.min.css') ?>
  <?php echo css('assets/css/owl.theme.default.min.css') ?>
  <?php echo css('assets/plugins/oembed/css/oembed.css') ?>
  <?php echo css('assets/css/phtgrph.css') ?>
  <?php echo css('assets/css/masonry-cf.css') ?>
  <?php echo css('assets/css/flickity.min.css') ?>
  <?php echo css('assets/css/carousel.css') ?>


  <style>
    body, .off-canvas .top,  .off-canvas .bottom { background-color: <?php echo $site->bgcolor() ?> !important; }
    body, h1, h2, h3, h4, h5, .content, .text { color: <?php echo $site->primarycolor() ?> !important; }

    a, a:hover, a:focus, a.active, a:active { color: <?php echo $site->secondarycolor() ?> !important; }
    .menu a { text-decoration: none !important; }
    a:hover, a:focus { text-decoration: underline !important; }
    a.active, a:active { text-decoration: underline !important; }

    .menu, .menu a, .menu a:hover, .menu a:focus, .menu a.active, .menu a:active { color: <?php echo $site->secondarycolor() ?>; }
    .menu a { text-decoration: none !important; }
    .menu a:hover, .menu a:focus { text-decoration: underline !important; }
    .menu a.active, .menu a:active { text-decoration: underline !important; }

    <?php echo $site->css() ?>

  </style>
</head>

<body class="<?php echo $page->template() ?>">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="">
  <div class="off-canvas-wrapper" data-offcanvas>
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
 
      <?php snippet('menu') ?>

      <!-- .off-canvas-content -->
      <div class="off-canvas-content" data-off-canvas-content style="<?php if($site->showmenu() != '1'): ?>margin-left: 0 !important;<?php endif ?><?php if(!$site->maxwidth()->empty()): ?> max-width: <?php echo $site->maxwidth()->html() ?>px;<?php endif ?>">

        <!-- Top menu -->
        <div class="medium-12 columns">
            <ul class="left-off-canvas-toggle menu<?php if($site->showmenu() == '1'): ?> hide-for-large<?php endif ?>">
              <!-- burger -->
              <li class="" type="button" data-open="offCanvas">
              <a href="#" class=""><i class="fa fa-bars"></i></a>
              </li>
              <!-- Site name / title -->
              <!-- <li class="menu-text"><?php echo $site->title() ?></li> -->
              <li class="menu-text"><?php echo $page->title() ?></li>
            </ul>
        </div>

        <!-- Content -->
        <div class="medium-12 columns content">