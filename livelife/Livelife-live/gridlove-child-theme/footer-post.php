<?php do_action('gridlove_before_end_content'); ?>

<?php get_template_part('template-parts/ads/above-footer'); ?>

<div id="footer" class="gridlove-footer">

	<?php if( gridlove_get_option('footer_widgets') ): ?>

	        <div class="container">
	            <div class="row">
	                <?php 
						$layout = explode( "_", gridlove_get_option('footer_layout') );
						$columns = $layout[0];
						$col_lg = $layout[1];
						$col_md = $columns > 1 ? 6 : 12;


					?>

					<?php for($i = 1; $i <= $columns; $i++) : ?>
						<div class="col-lg-<?php echo esc_attr($col_lg); ?> col-md-<?php echo esc_attr($col_md); ?> col-sm-12">
							<?php if( is_active_sidebar( 'gridlove_footer_sidebar_'.$i ) ) : ?>
								<?php dynamic_sidebar( 'gridlove_footer_sidebar_'.$i );?>
							<?php endif; ?>
						</div>
					<?php endfor; ?>

	            </div>
	        </div>

	<?php endif; ?>

	<div class="container">
		<div class="row">
		
		<?php if( gridlove_get_option('footer_bottom') ): ?>

			<div class="col col-lg-6 gridlove-copyright text-left">
				<div class="container">
					<?php echo wp_kses_post( gridlove_get_option('footer_copyright') ); ?>
				</div>
			</div>

		<?php endif; ?>
		
			<div class="col col-lg-6 gridlove-copyright text-right footer-menu" >
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
			</div>
		</div>
	</div>
	
</div>

<?php get_template_part('template-parts/header/side'); ?>

<?php wp_footer(); ?>
<script>
	jQuery('.search_field').click(function() {
    	jQuery('.search_field').val('');
	});
	jQuery('.search_field').blur(function(e){ 
		var me = this; 
		if(jQuery(me).val() == ""){ 
			jQuery(me).val('Search Guides...'); 
		} 
	});
</script>
<script>
jQuery('body').on('click','.trigger',function()
{
	jQuery('.modal').addClass("show-modal");
}
);	
var modal = document.querySelector(".modal");
var trigger = document.querySelector(".trigger");
var closeButton = document.querySelector(".close-button");

function toggleModal() {
    modal.classList.toggle("show-modal");
}

function windowOnClick(event) {
    if (event.target === modal) {
        toggleModal();
    }
}
//trigger.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);
jQuery(document).ready(function()
{
	jQuery('body').on('click','.cc-close-cookie',function()
	{
		jQuery("#cookie-law-info-bar").css("display","none");
		jQuery("#cookie-law-info-again").css("display","block");	
	}
	);
	jQuery('body').on('click','#cookie-law-info-again',function()
	{
		jQuery(this).css("display","none");
		jQuery("#cookie-law-info-bar").css("display","block");	
	}
	);

}
);
</script>
</body>

</html>