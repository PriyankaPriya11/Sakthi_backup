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
?>
<?php  include('header-search-sys.php'); ?>
<div id="content" class="gridlove-site-content container new-search">
    <div class="gridlove-module module-type-posts ">
    <div class="cc-wrapp-search-pages">
    <div class="row gridlove-posts yoyo2">
            <div class="web2"><div data-s1search="mainline-top"></div></div>
            <?php if($RTDS == 1): ?>
            <div class="box-inner-ptbr box-col-b entry-sm-overlay">
            <div id="relatedResults-mobile">
                    <div id="relatedResults" data-s1search="sidebar"></div>
            </div>
            </div>
            <?php endif; ?>
            <?php if($RTDS == 2): ?>
							<div class="cc-sidebar-content relatedResults layout-simple cc-mobile-relatedResults cc-sidebar-stick" style="display:none;">
								<div class="cc-sidebar-content-fixed">
									<div id="relatedResults" data-s1search="sidebar"></div>
								</div>
							</div>
			<?php endif; ?>
            
            <div class="web1"><div data-s1search="mainline-algo"></div></div>
            <div data-s1search="mainline-bottom"></div>
            <div data-s1search="pagination"></div>
            <script async type="text/javascript" src="https://s.flocdn.com/@s1/embedded-search/embedded-search-1.js"></script>
    </div>
    </div>
    </div>
</div>
<?php        
include('footer-search-sys.php');
?>