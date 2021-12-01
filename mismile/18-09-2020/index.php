<?php get_header();?>

<!-- Content Area -->
<div id="main-content">
<?php if(!is_page(2755) && !is_page(3518) && !is_page(3591) && !is_page(3650) && !is_page(3706)) { ?>
    <div class="container">
        <div class="row">
            <main class="col-md-12 clearfix">
                <?php get_template_part ('framework/outputs/system-output') ?>
            </main>
            <?php // Use get_sidebar(); to include your sidebar.php (Remember to Change main elemenet column size.)?>
        </div>
    </div>
<?php } else { ?>
			 <?php get_template_part ('framework/outputs/system-output') ?>
<?php } ?>
</div>

<?php get_footer(); ?>