<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/bootstrap-carousel.js"></script>
<script src="/assets/js/jquery.contenthover.js" type="text/javascript"></script>
<script type="text/javascript">        var addthis_config = { "data_track_addressbar": true };</script>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-507c44304467c88e"></script>

</body>

<script type="text/javascript">
$(document).ready(function() {

  if (!isMobile()) {
    $('#first, #second, #third').contenthover({
        effect: 'slide',
        slide_direction: 'right',
        overlay_x_position: 'right',
        overlay_y_position: 'center',
        overlay_background: 'rgba(0, 0, 0, 0.5)',
        overlay_opacity: 0.8
    });
  }
  else {
    /* prepend menu icon */
    $('#mobileNavWrap').prepend('<div id="menu-icon">Menu</div>');
    
    /* toggle nav */
    $("#menu-icon").on("click", function(){
      $("#mobileNavContainer").slideToggle();
      $(this).toggleClass("active");
    });

  }

 $(".carousel").carousel();
});

function isMobile(){
  return $(window).width() <= 640;
}
</script>