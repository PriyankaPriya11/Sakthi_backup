<?php
$address   = str_replace( ' ', '', get_option( 'address' ) );
$city      = str_replace( ' ', '', get_option( 'city' ) );
$state     = str_replace( ' ', '', get_option( 'state' ) );
$zipcode   = str_replace( ' ', '', get_option( 'zip' ) );
?>
<!-- Map -->
<div class="custom-video"></div>
<script type="text/javascript">
jQuery(window).bind("load", function() 
{
setTimeout(function(){ jQuery(".custom-video").load("https://mismile.com/wp-content/themes/legacy/framework/outputs/map.html"); }, 6000);

});
</script>