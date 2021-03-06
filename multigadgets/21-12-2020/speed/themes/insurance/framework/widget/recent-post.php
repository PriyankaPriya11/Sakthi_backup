<?php
/**
 * Recent_Posts widget class
 *
 * @since 2.8.0
 */
class insurance_widget_recent_posts extends WP_Widget {

    function __construct() {
        $widget_ops = array('classname' => 'widget_recent_entries', 'description' => __( "The most recent posts on your site", 'insurance') );
        parent::__construct('recent-posts', __('insurance Recent Posts', 'insurance'), $widget_ops);
        $this->alt_option_name = 'widget_recent_entries';

        add_action( 'save_post', array($this, 'flush_widget_cache') );
        add_action( 'deleted_post', array($this, 'flush_widget_cache') );
        add_action( 'switch_theme', array($this, 'flush_widget_cache') );
    }

    function widget($args, $instance) {
        $cache = wp_cache_get('insurance_widget_recent_posts', 'widget');

        if ( !is_array($cache) )
            $cache = array();

        if ( ! isset( $args['widget_id'] ) )
            $args['widget_id'] = $this->id;

        if ( isset( $cache[ $args['widget_id'] ] ) ) {
            echo htmlspecialchars_decode( $cache[ $args['widget_id'] ] );
            return;
        }

        ob_start();
        extract($args);

        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts', 'insurance' );
        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
        $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 10;       
        $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;

        $r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
        if ($r->have_posts()) :
?>
        <?php echo htmlspecialchars_decode( $before_widget ); ?>
        <?php if ( $title != '' ){ echo htmlspecialchars_decode($before_title ) . esc_attr( $title ) . htmlspecialchars_decode( $after_title ); } ?>

            <ul>                            
                <?php while ( $r->have_posts() ) : $r->the_post(); ?> 
                <li>
                    <div class="small-tumbnail">
                        <a href="<?php the_permalink() ?>">
                        <?php 
                                $params = array( 'width' => 120, 'height' => 120 );
                                $image = bfi_thumb( wp_get_attachment_url(get_post_thumbnail_id()), $params ); 
                        ?>
                        <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr( get_the_title() ? get_the_title() : get_the_ID() ); ?>"></a>
                    </div>
                    <h3 class="recent-title"><a href="<?php the_permalink() ?>" title="<?php echo esc_attr( get_the_title() ? get_the_title() : get_the_ID() ); ?>"><?php if ( get_the_title() ) the_title(); else the_ID(); ?>   </a>
                    
                    <span class="meta-date"><?php if ( $show_date ){ ?>  <i class="fa fa-calendar"> </i> <?php the_time('M d, Y') ?><?php } ?> </span>
                    </h3>
                </li>
                <?php endwhile; ?>
            </ul>
             
		
        <?php echo htmlspecialchars_decode($after_widget); ?>
    <?php
        // Reset the global $the_post as this query will have stomped on it
        wp_reset_postdata();

        endif;

        $cache[$args['widget_id']] = ob_get_flush();
        wp_cache_set('insurance_widget_recent_posts', $cache, 'widget');
    }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['number'] = (int) $new_instance['number'];
        $instance['show_date'] = (bool) $new_instance['show_date'];
        $this->flush_widget_cache();

        $alloptions = wp_cache_get( 'alloptions', 'options' );
        if ( isset($alloptions['widget_recent_entries']) )
            delete_option('widget_recent_entries');

        return $instance;
    }

    function flush_widget_cache() {
        wp_cache_delete('insurance_widget_recent_posts', 'widget');
    }

    function form( $instance ) {
        $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
        $number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
        $show_date = isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : false;
?>
        <p><label for="<?php echo htmlspecialchars_decode($this->get_field_id( 'title' )); ?>"><?php _e( 'Title:', 'insurance' ); ?></label>
        <input class="widefat" id="<?php echo htmlspecialchars_decode($this->get_field_id( 'title' )); ?>" name="<?php echo htmlspecialchars_decode($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo htmlspecialchars_decode($title); ?>" /></p>

        <p><label for="<?php echo htmlspecialchars_decode($this->get_field_id( 'number' )); ?>"><?php _e( 'Number of posts to show:', 'insurance' ); ?></label>
        <input id="<?php echo htmlspecialchars_decode($this->get_field_id( 'number' )); ?>" name="<?php echo htmlspecialchars_decode($this->get_field_name( 'number' )); ?>" type="number" value="<?php echo htmlspecialchars_decode($number); ?>" size="3" /></p>

        <p><input class="checkbox" type="checkbox" <?php checked( $show_date ); ?> id="<?php echo htmlspecialchars_decode($this->get_field_id( 'show_date' )); ?>" name="<?php echo htmlspecialchars_decode($this->get_field_name( 'show_date' )); ?>" />
        <label for="<?php echo htmlspecialchars_decode($this->get_field_id( 'show_date' )); ?>"><?php _e( 'Display post date?', 'insurance' ); ?></label></p>
<?php
    }
}

function insurance_register_custom_widgets() {
    register_widget( 'insurance_widget_recent_posts' );
}
add_action( 'widgets_init', 'insurance_register_custom_widgets' );	