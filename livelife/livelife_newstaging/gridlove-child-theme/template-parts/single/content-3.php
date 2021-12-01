<article id="post-<?php the_ID(); ?>" <?php post_class( 'gridlove-box box-vm'); ?>>

<div class="box-inner-p-smaller box-single">
	<?php get_template_part('template-parts/single/entry-header'); ?>
</div>
<?php if( $meta = gridlove_get_meta_data('single') ) : ?>
    	<div class="entry-meta" style="margin-bottom: 10px;"><?php echo $meta; ?></div>
    <?php endif; ?>
<?php get_template_part('template-parts/single/entry-media-'. gridlove_get_post_format() ); ?> 
                        
<div class="box-inner-p-bigger box-single">

    <?php get_template_part('template-parts/single/entry-content'); ?>

    <?php get_template_part('template-parts/single/author'); ?>

    <?php get_template_part('template-parts/single/prev-next'); ?>

</div>

</article>