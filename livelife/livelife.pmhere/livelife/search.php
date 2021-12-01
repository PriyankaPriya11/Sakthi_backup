<?php

get_header();

?>
<div class="container search_section">

<h1>Search</h1>

<?php printf( __( 'Search Results for: %s', 'livelife' ), get_search_query() ); ?>

<?php if(have_posts()):
while(have_posts()):the_post();
?>
<div class="post"><a href="<?php the_permalink();?>" class="link">
<?php the_title();?></a>

<div class="content_1">

 <?php the_content(); ?>

<div class="date">published date:<?php the_date();?><?php the_time(); ?> <br>published by:<?php the_author(); ?></div>

<?php endwhile;
else:
 echo wpautop("sorry, result not found;");
endif;
?>
</div>
</div>
</div>
<?php

get_footer();	

?>