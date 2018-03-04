          </div>
          </div><!-- /.medium-12 columns -->
       </div><!-- /.off-canvas-content -->
    </div><!-- /.off-canvas-wrapper-inner -->
  </div><!-- /.off-canvas-wrapper -->
</div><!-- /.row -->


<?php echo js('assets/js/jquery.min.js') ?>
<?php echo js('assets/js/foundation.js') ?>
<script type="text/javascript">
    $(document).foundation();
</script>


<!-- Flickity Slideshow -->
<?php echo js('assets/js/flickity.pkgd.min.js') ?>

<script type="text/javascript">

$('.carousel').flickity({
  // options
  cellAlign: 'left',
  contain: true
});

</script>




<!-- Plugin oembed -->
<?php echo js('assets/plugins/oembed/js/oembed.js') ?>


<!-- Masonry -->
<?php echo js('assets/js/masonry.pkgd.js') ?>
<script>
$(window).load(function(){
  $('#container').masonry({
    itemSelector: '#container div'
  });
});
</script>


<?php echo analytics() ?>

</body>
</html>