<!-- Social -->
<div class="social">

    <?php if ( get_option( 'facebook','http://facebook.com' )): ?>
        <a href="<?php echo get_option( 'facebook','http://facebook.com' ); ?>" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
    <?php endif; ?>

    <?php if ( get_option( 'google', 'http://plus.google.com' )): ?>
        <a href="<?php echo get_option( 'google', 'http://plus.google.com' ); ?>" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
    <?php endif; ?>

    <?php if ( get_option( 'twitter','http://twitter.com' )): ?>
        <a href="<?php echo get_option( 'twitter','http://twitter.com' ); ?>" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
    <?php endif; ?>

    <?php if ( get_option( 'googlereviews') ): ?>
        <a href="<?php echo get_option( 'googlereviews' ); ?>" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
    <?php endif; ?>

    <?php if ( get_option( 'youtube' )): ?>
         <a href="<?php echo get_option( 'youtube'); ?>" target="_blank"><i class="fa fa-youtube fa-lg"></i></a>
    <?php endif; ?>

    <?php if ( get_option( 'instagram' )): ?>
         <a href="<?php echo get_option( 'instagram'); ?>" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
    <?php endif; ?>

    <?php if ( get_option( 'pinterest' )): ?>
         <a href="<?php echo get_option( 'pinterest'); ?>" target="_blank"><i class="fa fa-pinterest fa-lg"></i></a>
    <?php endif; ?>

    <?php if ( get_option( 'linkedin' )): ?>
        <a href="<?php echo get_option( 'linkedin'); ?>" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
    <?php endif; ?>

    <?php if ( get_option( 'yelp' )): ?>
        <a href="<?php echo get_option( 'yelp'); ?>" target="_blank"><i class="fa fa-yelp fa-lg"></i></a>
    <?php endif; ?>

</div>