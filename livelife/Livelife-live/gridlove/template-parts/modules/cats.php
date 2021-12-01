<div id="gridlove-module-<?php echo esc_attr( $m_ind ); ?>" class="gridlove-module module-type-cats <?php echo esc_attr($module['css_class']); ?>">
	
	<?php echo gridlove_get_module_heading( $module ); ?>
	<?php $mod_cats = get_categories( array( 'include' => implode(",", $module['cat']) ) ); ?>

    <?php 
        $new_mod_cats = array();
        
        foreach( $mod_cats as $cat){
            if(!empty($module['cat'])){
                $new_mod_cats[array_search( $cat->term_id, $module['cat'])] = $cat;                
             } else {
                $new_mod_cats[$cat->term_id] = $cat;
             }
        }
        
        ksort($new_mod_cats);
               
    ?>

	<?php $grid = gridlove_get_module_layout( $module ); ?>
    <?php $slider_class = gridlove_module_is_slider( $module ) && ( count( $new_mod_cats ) > 1 )  ? 'gridlove-slider' : ''; ?>


	<div class="row gridlove-posts gridlove-cats <?php echo esc_attr($slider_class); ?>">
		
		<?php if( !empty( $new_mod_cats ) ): ?> 
            <?php foreach( $new_mod_cats as $cat ): ?>
                
                <?php $cat_post = new WP_Query( array( 'post_type' => 'post', 'category__in' => array( $cat->term_id ), 'posts_per_page' => 1, 'ignore_sticky_posts' => 1 ) ); ?>
                
	                <?php if( $cat_post->have_posts()): ?>
	                    <?php $i = 0; while( $cat_post->have_posts()): $cat_post->the_post(); ?>             
							<?php if( $i == count( $grid ) ) { $i = 0; } ?>				        
								<?php $post_col = $grid[$i]['col']; ?>
								<?php $category_color = $module['category_color'] ? 'gridlove-cat gridlove-cat-'.$cat->term_id : ''; ?>
					        	<div class="<?php echo esc_attr( gridlove_get_bootstrap_columns( $post_col )); ?>">
						     		<?php include( locate_template('template-parts/cat-layouts/content-'. $grid[$i]['layout'].'.php') ); ?>
						     	</div>
							<?php $i++; endwhile; ?>
	                <?php endif; ?>

                <?php wp_reset_postdata(); ?>
            
            <?php endforeach; ?>
        <?php endif; ?>

	</div>

</div>