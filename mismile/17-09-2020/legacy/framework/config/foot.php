<!--JS Google CDN Calls the main JS Lib-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!--Bootsrap JS CDN Calls Bootstrap's JS components-->
<script src="https://mismile.com/wp-content/themes/legacy/framework/assets/js/bootstrap.min.js"></script>
<!--Custom Scrips (Maps, Translations, etc. Enqueue JS in the function file.)-->
<?php echo get_theme_mod( 'custom_scripts' ); ?>
<?php wp_footer(); ?>
</body>
</html>