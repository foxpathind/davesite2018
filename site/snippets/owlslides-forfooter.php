
<!-- Slideshow -->
<?php echo js('assets/js/owl.carousel.js') ?>
<script type="text/javascript">
$(document).ready(function() {
 
  var owl = $(".owl"),
      status = $("#status");
 
  owl.owlCarousel({
    singleItem: true,
    pagination: false,
    paginationNumbers: false,
    slideSpeed: <?php if(!$page->slidespeed()->empty()): ?><?php echo $page->slidespeed() ?><?php else: ?>1000<?php endif ?>,
    rewindSpeed: <?php if(!$page->rewindspeed()->empty()): ?><?php echo $page->rewindspeed() ?><?php else: ?>1000<?php endif ?>,
    responsive: true,
    autoHeight: true,
    afterAction : afterAction
  });
  
  // Count
  function updateResult(pos,value){
    status.find(pos).find(".result").text(value);
  }
  function afterAction(){
    updateResult(".owlItems", this.owl.owlItems.length);
    updateResult(".currentItem", this.owl.currentItem);
  }
 
  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
  $(".play").click(function(){
    owl.trigger('owl.play',2000); //owl.play event accept autoPlay speed as second parameter
  })
  $(".stop").click(function(){
    owl.trigger('owl.stop');
  })
  $('.goTo').click(function(){
    owl.trigger('owl.goTo',0)
  });
  $('.goToText').click(function(){
    owl.trigger('owl.goTo',1)
  }); 
});
</script>

<!-- Slideshow / keyboard action -->
<script type="text/javascript"> 
jQuery(document.documentElement).keyup(function (event) {    
    var owl = jQuery(".owl");
    // handle cursor keys
    if (event.keyCode == 37) {
       // go left
       owl.trigger('owl.prev');
    } else if (event.keyCode == 39) {
       // go right
       owl.trigger('owl.next');
    }
});
</script>