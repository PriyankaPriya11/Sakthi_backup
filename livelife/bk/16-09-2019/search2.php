<?php
$query = isset( $_REQUEST['swpquery'] ) ? ( $_REQUEST['swpquery'] ) : '';
if(trim($query) == '')
{
include('search-page.php');
exit();
}
if(isset($_REQUEST['rtds'])){
    $RTDS = $_REQUEST['rtds'];
} else if(isset($_REQUEST['RTDS'])){
    $RTDS = $_REQUEST['RTDS'];
} else {
    $RTDS = 1;
}
if(isset($_REQUEST['tmplt'])){
    $tmplt = $_REQUEST['tmplt'];
}else if(isset($_REQUEST['TMPLT'])){
    $tmplt = $_REQUEST['TMPLT'];
} else {
    $tmplt = 1;
}       
?>
<?php  include('header-search-sys.php'); ?>
<div id="content" class="gridlove-site-content container new-search" style="display:none;">
    <div class="gridlove-module module-type-posts ">
    <div class="cc-wrapp-search-pages">
    <div class="row gridlove-posts yoyo2">
            <div class="web2"><div data-s1search="mainline-top"></div>
            <?php if($RTDS == 1): ?>
            <div class="box-inner-ptbr box-col-b entry-sm-overlay">
            <div id="relatedResults-mobile">
                    <div id="relatedResults" data-s1search="sidebar"></div>
            </div>
            </div>
            <?php endif; ?>


            <div class="cc-sidebar-stick ">

                <div class="cc-sidebar-content-fixed">

                    <?php if($RTDS == 2): ?>
                        <div id="relatedResults" data-s1search="sidebar"></div>
                    <?php endif; ?>

                    <?php if($tmplt == 3): ?>
                        <div>
                            <?php
                                require_once('wp-config.php');
                                $args=array('s'=> $_REQUEST['swpquery'],'order'=> 'DESC', 'posts_per_page'=>3);
                                $query=new WP_Query($args);
                                $count = $query->found_posts;
                                if($query->have_posts() && $count > 0):
                            ?>
                            <span class="">Article Results</span>
                            <div class="ss-article-results">
                                <?php  while( $query->have_posts()): $query->the_post(); { ?>
                                    <div class="cc-article-results">
                                        <a class="articles-knowzo__title" href="<?php the_permalink(); ?>" target="_blank" style="color: #3300b5;font-size: 18px;line-height: 20px;text-decoration: none;"><?php  echo $post->post_title; ?></a><br>
                                        <div class="articles-knowzo__url" style="color: #0e7744;font-size: 14px;line-height: 18px;word-break: break-all;"><?php if (strlen(get_the_permalink()) > 5){ echo $str = substr(get_the_permalink(), 0,40) . '...';} ?></div>
                                        <span class="articles-knowzo__description" style="color: #333;font-size: 13px;line-height: 18px;"><?php echo wp_trim_words(get_the_content(),15, '...' ); ?></span><br>
                                    </div>
                            <?php } 
                                    endwhile;  
                                else:  
                                endif; 
                            ?>
                        </div>
                        </div>
                        <script>
                            jQuery(document).ready(function() {
                                jQuery(window).scroll(function() {
                                    var windowpos = jQuery(window).scrollTop();
                                    if (windowpos >= 60) {
                                        jQuery(".cc-sidebar-stick").addClass("stick");
                                    } else {
                                        jQuery(".cc-sidebar-stick").removeClass("stick");	
                                    }
                                });
                            });
                        </script>
                    <?php endif; ?>

                </div>

            </div>


            
            <div class="web1"><div data-s1search="mainline-algo"></div></div>
             <div data-s1search="mainline-bottom"></div>
            <div data-s1search="pagination"></div>
    </div>
    </div>
    </div></div>
<?php        
include('footer-search-sys.php');
?>