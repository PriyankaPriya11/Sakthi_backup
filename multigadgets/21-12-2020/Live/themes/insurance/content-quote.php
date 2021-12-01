<?php 
global $insurance_option;
?>	
	



<div class="col-md-12 tp-blog-post"><!-- blog post start-->
	
	<p class="meta"> <span class="meta-date"><i class="fa fa-calendar"></i><?php the_time('M d, Y'); ?></span>
	<?php if(has_tag()) { ?>
  <span class="meta-tags"><i class="fa fa-tags"></i><?php the_tags('', ', ' ); ?></span> 
  <?php } ?></p>

	<div class="quote">
		<?php 
            $text = get_post_meta(get_the_ID(),'_cmb_quote', true);
            $autor = get_post_meta(get_the_ID(),'_cmb_quote_author', true);
        ?>
		<div class="content">
		<h1><a href="<?php the_permalink(); ?>"><?php echo esc_attr($text);?></a></h1>
		<div class="author">
			<p>- <?php echo esc_attr($autor);?></p>
		</div>
		</div>
	</div>								
</div>
	