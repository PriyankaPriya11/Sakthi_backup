<?php if(!wp_is_mobile()): ?>
<li class="header-search gridlove-actions-button gridlove-action-search" id="cc-desktop-search-menu">
	<?php 
		add_filter( 'get_search_form', 'related_search_form' );
		get_search_form(); 
		remove_filter( 'get_search_form', 'related_search_form' );
		?>
</li>
<?php else: ?>
<li class="gridlove-actions-button gridlove-action-search" id="cc-mobile-search-menu">
	<span>
		<i class="fa fa-search"></i>
	</span>
	<ul class="sub-menu">
		<li>
		<?php 
			add_filter( 'get_search_form', 'related_search_form' );
			get_search_form(); 
			remove_filter( 'get_search_form', 'related_search_form' );
		?>
		</li>
	</ul>
</li>
<?php endif; ?>