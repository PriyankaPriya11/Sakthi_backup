<!-- Links -->
<div class="links">
    <ul>
        <?php if ( get_option( 'link_1','Important Link 1' ) ): ?>
        <li>
            <a href="<?php if ( get_option( 'link_1_url' ) ): ?><?php echo esc_url( get_permalink(get_option( 'link_1_url' )) ); ?><?php endif; ?>"><?php echo get_option( 'link_1','Important Link 1' ); ?></a>
        </li>
        <?php endif; ?>
        <?php if ( get_option( 'link_2','Important Link 2' ) ): ?>
        <li>
            <a href="<?php if ( get_option( 'link_2_url' ) ): ?><?php echo esc_url( get_permalink(get_option( 'link_2_url' )) ); ?><?php endif; ?>"><?php echo get_option( 'link_2','Important Link 2' ); ?></a>
        </li>
        <?php endif; ?>
        <?php if ( get_option( 'link_3','Important Link 3' ) ): ?>
        <li>
            <a href="<?php if ( get_option( 'link_3_url' ) ): ?><?php echo esc_url( get_permalink(get_option( 'link_3_url' )) ); ?><?php endif; ?>"><?php echo get_option( 'link_3','Important Link 3' ); ?></a>
        </li>
        <?php endif; ?>
        <?php if ( get_option( 'link_4','Important Link 4' ) ): ?>
        <li>
            <a href="<?php if ( get_option( 'link_4_url' ) ): ?><?php echo esc_url( get_permalink(get_option( 'link_4_url' )) ); ?><?php endif; ?>"><?php echo get_option( 'link_4','Important Link 4' ); ?></a>
        </li>
        <?php endif; ?>
        <?php if ( get_option( 'link_5','Important Link 5' ) ): ?>
        <li>
            <a href="<?php if ( get_option( 'link_5_url' ) ): ?><?php echo esc_url( get_permalink(get_option( 'link_5_url' )) ); ?><?php endif; ?>"><?php echo get_option( 'link_5','Important Link 5' ); ?></a>
        </li>
        <?php endif; ?>
    </ul>
</div>