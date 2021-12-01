<article <?php post_class('gridlove-post gridlove-post-d gridlove-box ' . gridlove_highlight_post_class() . ' ' . $category_color ); ?>>

    <?php if( $fimg = gridlove_get_featured_image( 'd'. $post_col ) ) : ?>
        <div class="entry-image">
            <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" title="<?php echo esc_attr( $cat->name ); ?>"><?php echo $fimg; ?></a>
        </div>
    <?php endif; ?>

    <div class="entry-overlay ">

        <div class="box-inner-p">
            <h2 class="entry-title h3"><a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>"><?php echo esc_html($cat->name); ?></a></h2>
            <?php if($module['display_count']): ?>
                <div class="entry-meta"><div class="meta-item"><?php echo esc_html( $cat->count ); ?> <?php echo esc_html($module['count_label']); ?></div></div>
            <?php endif; ?>
        </div>

    </div>    

</article>