<?php
/*Template Name: Home Template */
get_header('pmhere');

?>
<!--section One-->
<section id="section2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="content1">
                        <strong><?php echo get_field('live_life');?></strong><br><p><span><?php echo get_field('live_life1');?></span>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-4">
                        <div class="content2">
                            <strong><?php echo get_field('million_20');?></strong><br><p><span><?php echo get_field('million_text');?></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="content2">
                            <strong><?php echo get_field('lifestyle');?></strong><br><p><span><?php echo get_field('lifestyle_text');?></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="content2 cont2">
                            <strong><?php echo get_field('over_500');?></strong><br><p><span><?php echo get_field('over_text');?></span>
                            </p>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-md-12">
                <div class="mobile_content">
                    <?php echo get_field('mobile_text');?>

                </div>
            </div>
        </div>
    </div>
</section>
<!--section One-->
<!--section second-->
<section id="section3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-1">
                    <div class="side_title">
                        <h3> <?php echo get_field('popular');?></h3>
                    </div>
                    <div class="side-title_mobile">
                        <h3><?php echo get_field('popular_mobile');?></h3>
                    </div>

                </div>
                <div class="col-md-11 md2">
                    <?php global $post; 
                        $args = array( 'numberposts' => 4, 'tag_name' => 'popular' );
                        $posts = get_posts( $args );
                        foreach( $posts as $post ): setup_postdata($post);
                    ?>
                    <div class="col-md-3">
                        <?php
                                        $thumb = get_post_thumbnail_id();
                                        $img_url = wp_get_attachment_url( $thumb,'full');
                                        $image = $img_url; 
                                        echo '<img src="'.$img_url.'" alt="event-img" />';
                                    ?>
                        <div class="title1">
                            <h3 class="main-title1"><a
                                    href="<?php the_permalink();?>"><?php $categories = get_the_category();echo $categories[0]->name;?></a>
                            </h3>
                            <h3 class="sub-title1"><?php the_title();?></h3>
                            <?php the_excerpt();?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--section second-->
<!--section third-->
<section id="section-three">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-1">
                    <div class="side_title">
                        <h3>Latest Posts</h3>
                    </div>
                    <div class="side-title_mobile">
                        <h3>Latest Posts</h3>
                    </div>
                </div>
                <div class="col-md-11">
                    <div class="owl-carousel owl-theme" id="carousel1">
                        <?php global $post;
                                    $args = array('post_per_page'=>4,'post_type'=>'post','order_by'=>'ASC');
                                    $i=1;
                                    $myposts = get_posts( $args );
                                    foreach ( $myposts as $post ) :
                                    setup_postdata( $post );
                                ?>
                        <div class="item" data-dot="<button>0<?php echo $i; ?></button>">
                            <?php
                                        $thumb = get_post_thumbnail_id();
                                        $img_url = wp_get_attachment_url( $thumb,'full');
                                        $image = $img_url;   
                                        echo '<img src="'.$img_url.'" alt="event-img" />';
                                    ?>
                            <div class="carousel_item1">
                                <h3 class="carousle_title_1"><a
                                        href="<?php the_permalink();?>"><?php $categories = get_the_category();echo $categories[0]->name;?></a>
                                </h3>
                                <p><?php the_title();?></p>
                                <div class="sub-line">
                                    <div class="right-line"></div>
                                    <a href="<?php the_permalink();?>">Read more</a>
                                </div>
                            </div>
                        </div>
                        <?php $i++; endforeach; wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--section third-->
<!---section four-->
<section id="four">
    <div class="container">
        <div class="row">
            <div class="col-md-12 md-12-section">
                <div class="col-md-1">
                    <div class="side_title">
                        <h3><?php echo get_field('home');?></h3>
                    </div>
                    <div class="side-title_mobile">
                        <h3><?php echo get_field('home_mobile');?></h3>
                    </div>
                </div>
                <div class="col-md-7 md-10">
                    <?php global $post; 
                        $myposts = get_posts( array(
                            'posts_per_page' => 1,
                            'offset'         => 1,
                            'category'       => 48
                        ) );
                    
                        if ( $myposts ) {
                            foreach ( $myposts as $post ) : 
                                setup_postdata( $post ); ?>
                    <div class="home_section">
                        <?php
                                            $thumb = get_post_thumbnail_id();
                                            $img_url = wp_get_attachment_url( $thumb,'full');
                                            $image = $img_url;
                                            echo '<img src="'.$img_url.'" alt="event-img" class="event-altimg" />';
                                        ?>
                        <div class="home_section_title">
                            <h3><a
                                    href="<?php the_permalink();?>"><?php $categories = get_the_category();echo $categories[0]->name;?></a>
                            </h3>
                            <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                            <p><?php the_excerpt();?></p>
                            <div class="sub-line">
                                <div class="right-line"></div>
                                <a href="<?php the_permalink();?>">Read more</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; wp_reset_postdata();}?>
                </div>
                <div class="col-md-4">
                    <?php
                            global $post;

                            $myposts = get_posts( array(
                            'posts_per_page' => 2,
                            'offset' => 1,
                            'category' => 43
                            ) );
                            $a=0;
                            if ( $myposts ) {
                            foreach ( $myposts as $post ) :
                            setup_postdata( $post ) ;
                    if ($a>0)
                    { ?>
                    <div class="home_section">
                        <?php
                                            $thumb = get_post_thumbnail_id();
                                            $img_url = wp_get_attachment_url( $thumb,'full');
                                            $image = $img_url;
                                            echo '<img src="'.$img_url.'" alt="event-img" class="event-altimg" />';
                                        ?>
                        <div class="home_section_title">
                            <h3><a
                                    href="<?php the_permalink();?>"><?php $categories = get_the_category();echo $categories[0]->name;?></a>
                            </h3>
                            <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                            <p><?php the_excerpt();?></p>
                            <div class="sub-line">
                                <div class="right-line"></div>
                                <a href="<?php the_permalink();?>">Read more</a>
                            </div>
                        </div>
                    </div>
                    <?php } 
                    $a++; 
                    endforeach;
                     wp_reset_postdata();
                    }
                     ?>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-1">
                    <div class="side_title">
                        <h3><?php echo get_field('beauty');?></h3>
                    </div>
                    <div class="side-title_mobile">
                        <h3><?php echo get_field('beauty_mobile');?></h3>
                    </div>
                </div>
                <div class="col-md-7 md-10">
                    <div class="section_under1">
                        <?php global $post; 
                            $myposts = get_posts( array(
                                'posts_per_page' => 4,
                                'offset'         => 1,
                                'category'       => 63
                            ) );
                        
                            if ( $myposts ) {
                                foreach ( $myposts as $post ) : 
                                setup_postdata( $post ); ?>
                        <div class="col-md-6">
                            <?php
                                            $thumb = get_post_thumbnail_id();
                                            $img_url = wp_get_attachment_url( $thumb,'full');
                                            $image = $img_url; 
                                            echo '<img src="'.$img_url.'" alt="event-img" class="event-altimg" />';
                                        ?>
                            <div class="beauty_content1">
                                <h3><a
                                        href="<?php the_permalink();?>"><?php $categories = get_the_category();echo $categories[0]->name;?></a>
                                </h3>
                                <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                                <?php the_excerpt();?>
                                <div class="sub-line">
                                    <div class="right-line"></div>
                                    <a href="<?php the_permalink();?>">Read more</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; wp_reset_postdata();}?>
                    </div>
                    <div class="section_under2">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-1">
                        <div class="title_rotate">
                            <h3><?php echo get_field('newletter');?></h3>
                        </div>
                    </div>
                    <div class="col-md-11">
                        <div class="home_form">
                            <h4><?php echo get_field('newletter_title');?></h4>
                            <p><?php echo get_field('newletter_content');?></p>
                            <?php echo do_shortcode( '[contact-form-7 id="14584" title="Subscription"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!---section four-->
<!--section five-->
<section id="five">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-1"></div>
                <div class="col-md-7">
                    <div class=" col-md-6 subscribe_Text">
                        <h3><?php echo get_field('subscribe');?></h3>
                        <p><?php echo get_field('subscribe_text');?></p>
                    </div>
                    <div class="col-md-6 subscribe_form">
                        <div class="home_form">
                            <?php echo do_shortcode( '[contact-form-7 id="14584" title="Subscription"]' ); ?>
                        </div>

                    </div>
                </div>
                <div class="col-md-4" style="text-align: center;">
                    <?php $image = get_field('subscribe_img');?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
            </div>
        </div>
    </div>
</section>
<!--section five-->
<!--section six-->
<section id="six">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-1">
                    <div class="side_title">
                        <h3><?php echo get_field('wellness');?></h3>
                    </div>
                    <div class="side-title_mobile">
                        <h3><?php echo get_field('wellness_mobile');?></h3>
                    </div>
                </div>
                <div class="col-md-11">
                    <?php global $post; 
                            $myposts = get_posts( array(
                                'posts_per_page' => 3,
                                'offset'         => 1,
                                'category'       => 46
                            ) );
                        
                            if ( $myposts ) {
                                foreach ( $myposts as $post ) : 
                                setup_postdata( $post ); ?>
                    <div class="col-md-4">
                        <?php
                            $thumb = get_post_thumbnail_id();
                            $img_url = wp_get_attachment_url( $thumb,'full');
                            $image = $img_url;
                            echo '<img src="'.$img_url.'" alt="event-img" class="event-altimg" />';
                        ?>
                        <div class="wel-content">
                            <h3><a
                                    href="<?php the_permalink();?>"><?php $categories = get_the_category();echo $categories[0]->name;?></a>
                            </h3>
                            <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                            <p><?php the_excerpt();?></p>
                            <div class="sub-line">
                                <div class="right-line"></div>
                                <a href="<?php the_permalink();?>">Read more</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; wp_reset_postdata();}?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--section six-->
<!--section seven-->
<section id="seven">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-1">
                    <div class="side_title t1">
                        <h3><?php echo get_field('best_post');?></h3>
                    </div>
                    <div class="side-title_mobile">
                        <h3><?php echo get_field('best_post_mobile');?></h3>
                    </div>
                </div>
                <div class="col-md-11">
                    <?php global $post;
                        $args = array( 'numberposts' => 2, 'tag_name' => 'best-post' );
                        $posts = get_posts( $args );
                        foreach( $posts as $post ): setup_postdata($post);
                    ?>
                    <div class="col-md-6">
                        <?php
                                        $thumb = get_post_thumbnail_id();
                                        $img_url = wp_get_attachment_url( $thumb,'full');
                                        $image = $img_url;
                                        echo '<img src="'.$img_url.'" alt="event-img" />';
                                    ?>
                        <div class="post_content">
                            <h3><a
                                    href="<?php the_permalink();?>"><?php $categories = get_the_category();echo $categories[0]->name;?></a>
                            </h3>
                            <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                            <p><?php the_excerpt();?></p>
                            <div class="sub-line">
                                <div class="right-line"></div>
                                <a href="<?php the_permalink();?>">Read more</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--section seven-->
<!--section eight-->
<section id="eight">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-1">
                    <div class="side_title">
                        <h3>Diabetes</h3>
                    </div>
                    <div class="side-title_mobile">
                        <h3>Diabetes</h3>
                    </div>
                </div>
                <div class="col-md-11 md33">
                    <div class="col-md-8 md88">
                        <?php global $post; 
                            $myposts = get_posts( array(
                                'posts_per_page' => 5,
                                'offset'         => 1,
                                'category'       => 49
                            ) );
                        
                            if ( $myposts ) {
                                foreach ( $myposts as $post ) : 
                                setup_postdata( $post ); ?>
                        <div class="col-md-5 md5">
                            <?php
                                $thumb = get_post_thumbnail_id();
                                $img_url = wp_get_attachment_url( $thumb,'full');
                                $image = $img_url;   
                                echo '<img src="'.$img_url.'" alt="event-img" class="event-altimg" />';
                            ?>
                        </div>
                        <div class="col-md-7 md77">
                            <div class="recent-content">
                                <h3><a
                                        href="<?php the_permalink();?>"><?php $categories = get_the_category(); echo $categories[0]->name;?></a>
                                </h3>
                                <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                                <?php the_excerpt();?>
                                <div class="sub-line">
                                    <div class="right-line"></div>
                                    <a href="<?php the_permalink();?>">Read more</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; wp_reset_postdata();}?>
                        <a href="<?php the_permalink();?>" class="more">MORE FROM</a>
                    </div>
                    <div class="col-md-4 md34">
                        <div class="col-md-1">
                            <div class="title_rotate">
                                <h3><?php echo get_field('newletter');?></h3>
                            </div>
                        </div>
                        <div class="col-md-11">
                            <div class="home_form">
                                <h4><?php echo get_field('newletter_title');?></h3>
                                </h4>
                                <p><?php echo get_field('newletter_content');?></h3>
                                </p>
                                <?php echo do_shortcode( '[contact-form-7 id="14584" title="Subscription"]' ); ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--section eight-->

<?php
get_footer('pmhere');	
?>