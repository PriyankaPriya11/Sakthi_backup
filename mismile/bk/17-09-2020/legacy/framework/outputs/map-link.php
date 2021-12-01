<?php
$address   = str_replace( ' ', '', get_option( 'address' ) );
$city      = str_replace( ' ', '', get_option( 'city' ) );
$state     = str_replace( ' ', '', get_option( 'state' ) );
$zipcode   = str_replace( ' ', '', get_option( 'zip' ) );
?>
http://maps.google.com/?q=<?php echo $address.$city.$state.$zipcode; ?>