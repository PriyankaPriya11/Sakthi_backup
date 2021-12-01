<?php 

// Custom Heading
add_shortcode('heading','heading_func');
function heading_func($atts, $content = null){
	extract(shortcode_atts(array(

		'text'		=>	'',

		'tag'		=> 	'h1',

		'size'		=>	'',

		'color'		=>	'',

		'align'		=>	'left',

		'class'		=>	'',

	), $atts));

	$size1 = (!empty($size) ? 'font-size: '.$size.';' : '');

	$color1 = (!empty($color) ? 'color: '.$color.';' : '');

	$align1 = (!empty($align) ? 'text-align: '.$align.';' : '');

	$class1 = (!empty($class) ? $class.'' : '');

	$html .= '<'.$tag.' class="'.$class1.'" style="' . $size1 . $align1 . $color1 .'">'. $text .'</'.$tag.'>';


	return $html;

}

// Detail Block
add_shortcode('deblock', 'deblock_func');

function deblock_func($atts, $content = null){

	extract(shortcode_atts(array(

	  'icon1'   => '',

      'icon2'   => '',

      'icon3'   => '',

      'icon4'   => '',

      'soc1'   	=> '',

      'soc2'   	=> '',

      'soc3'   	=> '',

      'soc4'   	=> '',

	), $atts));

	ob_start(); ?>
	<div class="tp-agent-detail" id="tp-agent-detail">
	<div class="detail-block">

		<?php if($content) { ?><?php echo htmlspecialchars_decode($content) ?><?php } ?>

		<?php if($icon1) { ?>
				<a href="<?php echo esc_url($soc1); ?>"><i class="fa fa-<?php echo esc_attr($icon1); ?>"></i></a>
			<?php }if($icon2) { ?>
				<a href="<?php echo esc_url($soc2); ?>"><i class="fa fa-<?php echo esc_attr($icon2); ?>"></i></a>
			<?php }if($icon3) { ?>
				<a href="<?php echo esc_url($soc3); ?>"><i class="fa fa-<?php echo esc_attr($icon3); ?>"></i></a>
			<?php }if($icon4) { ?>
				<a href="<?php echo esc_url($soc4); ?>"><i class="fa fa-<?php echo esc_attr($icon4); ?>"></i></a>
			<?php }?>
	</div>
	</div>
	<?php return ob_get_clean();

}

// Block Quote 1
add_shortcode('bquote1', 'bquote1_func');

function bquote1_func($atts, $content = null){

	extract(shortcode_atts(array(

		'title' 	=> '',

	), $atts));

	ob_start(); ?>

	
<div class="tp-blockquotes" id="tp-blockquotes">
<div class="blq">

		 <blockquote>
		<?php if($title) { ?> <p><?php echo htmlspecialchars_decode($title) ?></p><?php } ?>
		<?php if($content) { ?><footer><?php echo htmlspecialchars_decode($content) ?></footer><?php } ?>

		</blockquote>

</div>
</div>

	<?php return ob_get_clean();

}

// Block Quote 2
add_shortcode('bquote2', 'bquote2_func');

function bquote2_func($atts, $content = null){

	extract(shortcode_atts(array(

		'title' 	=> '',

	), $atts));

	ob_start(); ?>

	
<div class="tp-blockquotes" id="tp-blockquotes">
<div class="blq">

		 <blockquote class="blockquote-reverse">
		<?php if($title) { ?> <p><?php echo htmlspecialchars_decode($title) ?></p><?php } ?>
		<?php if($content) { ?><footer><?php echo htmlspecialchars_decode($content) ?></footer><?php } ?>

		</blockquote>

</div>
</div>

	<?php return ob_get_clean();

}

// Icon Boxes
add_shortcode('ibb', 'ibb_func');
function ibb_func($atts, $content = null){
	extract(shortcode_atts(array(

		'title' 	=> '',

		'stitle' 	=> '',

		'btn' 		=> '',

		'link' 		=> '',

		'icon' 		=> '',

		'style'		=> 'style1',

	), $atts));

	ob_start(); ?>

	<?php if($style == 'style3') { ?>
	
		<div class="grey-box">

		<?php if($icon) { ?><i class="fa fa-<?php echo esc_attr($icon); ?>"></i><?php } ?>

		<?php if($title) { ?><h3><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>

		<?php if($stitle) { ?><h1><?php echo htmlspecialchars_decode($stitle); ?></h1><?php } ?>

		<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>

		<?php if($btn) { ?><a href="<?php echo esc_url($link); ?>" class="btn tp-btn tp-btn-orange"><?php echo htmlspecialchars_decode($btn); ?></a><?php } ?>

		</div>
	
	<?php }elseif($style == 'style4') { ?>
	<div class="investor-box">
	<div class="grey-box">

		<?php if($icon) { ?><i class="fa fa-<?php echo esc_attr($icon); ?>"></i> <?php } ?>
		<?php if($title) { ?><h2><?php echo htmlspecialchars_decode($title); ?></h2><?php } ?>
		<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
		<?php if($btn) { ?><a href="<?php echo esc_url($link); ?>" class="btn tp-btn tp-btn-orange"><?php echo htmlspecialchars_decode($btn); ?></a><?php } ?>

	</div>
	</div>
	<?php }elseif($style == 'style5') { ?>
	<div class="tp-cta-section">
	<div class="cta-box">

		<?php if($icon) { ?><i class="fa-3x fa fa-<?php echo esc_attr($icon); ?>"></i> <?php } ?>

		<?php if($title) { ?><h2><?php echo htmlspecialchars_decode($title); ?></h2><?php } ?>

		<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>

		<?php if($btn) { ?><p><a href="<?php echo esc_url($link); ?>" class="btn tp-btn tp-btn-orange"><?php echo htmlspecialchars_decode($btn); ?></a></p><?php } ?>

	</div>
	</div>
	<?php }elseif($style == 'style1') { ?>
	<div class="investor-box">
	<div class="grey-box">
		<?php if($icon) { ?><i class="fa-3x fa fa-<?php echo esc_attr($icon); ?>"></i> <?php } ?>
		<?php if($title) { ?><h2><?php echo htmlspecialchars_decode($title); ?></h2><?php } ?>

		<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>

		<?php if($btn) { ?><p><a href="<?php echo esc_url($link); ?>" class="btn tp-btn tp-btn-orange"><?php echo htmlspecialchars_decode($btn); ?></a></p><?php } ?>

	</div>
	</div>
	<?php }else{ ?>
	
		<div class="product-thumb item">
		<div class="grey-box">

		<?php if($title) { ?><h1><a href="#"><?php echo htmlspecialchars_decode($title); ?></a></h1><?php } ?>

		<?php if($stitle) { ?><p class="desc"><?php echo htmlspecialchars_decode($stitle); ?></p><?php } ?>

		<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>

		<?php if($icon) { ?><span class="icon"><i class="fa fa-<?php echo esc_attr($icon); ?>"></i></span><?php } ?>

		<?php if($btn) { ?><p><a href="<?php echo esc_url($link); ?>" class="d-btn d-btn-primary d-btn-small"><?php echo htmlspecialchars_decode($btn); ?></a></p><?php } ?>

		</div>
	</div>
	
	<?php } ?>

	<?php return ob_get_clean();
}

// Step Boxes
add_shortcode('stb', 'stb_func');
function stb_func($atts, $content = null){
	extract(shortcode_atts(array(

		'number'	=> '',

		'title' 	=> '',

		'stitle' 	=> '',

		'icon' 		=> '',

		'style'		=> 'style1',

		'btn' 		=> '',

		'link' 		=> '',

	), $atts));

	ob_start(); ?>

	<?php if($style == 'style3') { ?>
	<div class="tp-how-it-works font-increase" id="tp-how-it-works">
		<div class="htw-option-two section-space">
			<div class="step-box">

				<div class="grey-box">

				<?php if($icon) { ?><i class="fa fa-<?php echo esc_attr($icon); ?>"></i><?php } ?>

				<?php if($title) { ?><h2><?php echo htmlspecialchars_decode($title); ?></h2><?php } ?>

				<?php if($stitle) { ?><h1><?php echo htmlspecialchars_decode($stitle); ?></h1><?php } ?>

				<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>

				</div>
			</div>
		</div>
	</div>
	
	<?php }elseif($style == 'style4') { ?>
	<div class="tp-how-it-works font-increase" id="tp-how-it-works">
		<div class="row htw-option-three">
			<div class="col-md-offset-1 col-md-10">
				<div class="col-md-6 step-box">

					<?php if($icon) { ?><i class="fa fa-<?php echo esc_attr($icon); ?>"></i> <?php } ?>

					<?php if($title) { ?><h2><?php echo htmlspecialchars_decode($title); ?></h2><?php } ?>

					<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
					
				</div>
			</div>
		</div>
	</div>
	<?php }elseif($style == 'style5') { ?>
		
			 <div class="col-md-6 insurance-block">

				<?php if($icon) { ?><i class="fa fa-<?php echo esc_attr($icon); ?>"></i> <?php } ?>

				<?php if($title) { ?><h2><a href="#"><?php echo htmlspecialchars_decode($title); ?></a></h2><?php } ?>

				<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>

				<?php if($btn) { ?><p><a href="<?php echo esc_url($link); ?>" class="btn tp-btn tp-btn-orange"><?php echo htmlspecialchars_decode($btn); ?></a></p><?php } ?>
			</div>
		
	<?php }elseif($style == 'style2') { ?>
	<div class="tp-how-it-works font-increase" id="tp-how-it-works">
		<div class="row htw-option-three">
			<div class="col-md-offset-1 col-md-10">
				<div class="col-md-6 col-md-offset-6 step-box-right">
					
					<?php if($icon) { ?><i class="fa fa-<?php echo esc_attr($icon); ?>"></i> <?php } ?>

					<?php if($title) { ?><h2><?php echo htmlspecialchars_decode($title); ?></h2><?php } ?>

					<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
					
				</div>
			</div>
		</div>
	</div>
	<?php }else{ ?>
	
	<div class="tp-how-it-works font-increase" id="tp-how-it-works">
	<div class="howitwork section-space">
	<div class="step-box">
		<?php if($number) { ?><span class="number"><?php echo htmlspecialchars_decode($number); ?></span><?php } ?>

		<?php if($icon) { ?><i class="fa fa-<?php echo esc_attr($icon); ?>"></i> <?php } ?>

		<?php if($title) { ?><h2><?php echo htmlspecialchars_decode($title); ?></h2><?php } ?>

		<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
	</div>
	</div>
	</div>
	
	<?php } ?>

	<?php return ob_get_clean();
}

// Feature Boxes
add_shortcode('featureb', 'featureb_func');
function featureb_func($atts, $content = null){
	extract(shortcode_atts(array(

		'title' 	=> '',

		'icon' 		=> '',

		'style'		=> 'style1',

	), $atts));

	ob_start(); ?>

	<?php if($style == 'style3') { ?>
	<div class="lp-feature-block">

		<div class="feature-box">
			<div class="orng-box">
				<?php if($icon) { ?><i class="fa fa-<?php echo esc_attr($icon); ?>"></i><?php } ?>
			</div>

			<?php if($title) { ?><h2><?php echo htmlspecialchars_decode($title); ?></h2><?php } ?>

		</div>
	</div>
	<?php }elseif($style == 'style4') { ?>
	<div class="lp-life" id="lp-life">
	<div class="life-feature">
	<div class="life-feature-box">

		<?php if($icon) { ?><i class="fa fa-<?php echo esc_attr($icon); ?>"></i> <?php } ?>

		<?php if($title) { ?><h3><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>

	</div>
	</div>
	</div>
	<?php }elseif($style == 'style5') { ?>
	<div class="lp-business" id="lp-business">
	<div class="business-block">
	<div class="business-feature">

		<?php if($icon) { ?><i class="fa fa-<?php echo esc_attr($icon); ?>"></i> <?php } ?>

		<?php if($title) { ?><h3><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>

		<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>

	</div>
	</div>
	</div>
	<?php }elseif($style == 'style1') { ?>
	<div class="lp-travel" id="lp-travel">
	<div class="travel-feature">
	<div class="travel-feature-box">

		<h3><?php if($icon) { ?><i class="fa fa-<?php echo esc_attr($icon); ?>"></i> <?php } ?>

		<?php if($title) { ?><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>

		<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>

	</div>
	</div>
	</div>
	<?php }else{ ?>
		<div class="lp-home" id="lp-home">
		<div class="home-feature">
		<div class="home-feature-box">

		<?php if($icon) { ?><i class="fa fa-<?php echo esc_attr($icon); ?>"></i></span><?php } ?>

		<?php if($title) { ?><h3><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>

		<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>

		</div>
		</div>
		</div>
	<?php } ?>

	<?php return ob_get_clean();
}

// Call To Action 1
add_shortcode('cta1', 'cta1_func');
function cta1_func($atts, $content = null){
	extract(shortcode_atts(array(

		'icon' 		=> '',

		'btntext1' 	=> '',

		'btnlink1' 	=> '',

		'btntext2' 	=> '',

		'btnlink2' 	=> '',

		'title'		=> '',

		'style'		=> 'style1',



	), $atts));

	ob_start(); ?>

	<?php if($style == 'style1') { ?>
	<div class="promo-box-page" id="promo-box-page">
	<div class="cta-box">
	<h2><?php echo htmlspecialchars_decode($title); ?></h2>
	<div class="promo-box">
		<?php if($icon) { ?><i class="fa fa-<?php echo esc_attr($icon); ?>"></i><?php } ?>

		<div class="promo-caption"><h2><?php if($content) echo htmlspecialchars_decode($content); ?></h2>

		<a href="<?php echo esc_url($btnlink1); ?>" class="btn tp-btn tp-btn-orange tp-btn-default"><?php echo esc_attr($btntext1); ?></a>
		
		</div>
	</div>
	</div>
	</div>
	<?php }elseif($style == 'style3'){ ?>
	<div class="cta-box">
	<h2 ><?php echo htmlspecialchars_decode($title); ?></h2>
	<div class="promo-box-two">
		<?php if($icon) { ?><i class="fa fa-<?php echo esc_attr($icon); ?>"></i><?php } ?>

		<div class="promo-caption"><h2><?php if($content) echo htmlspecialchars_decode($content); ?></h2>

		<?php if($btntext1) { ?><a href="<?php echo esc_url($btnlink1); ?>" class="btn tp-btn tp-btn-grey tp-btn-default"><?php echo htmlspecialchars_decode($btntext1); ?></a> <?php }if($btntext2) { ?><a href="<?php echo esc_url($btnlink2); ?>" class="btn tp-btn tp-btn-orange tp-btn-default"><?php echo htmlspecialchars_decode($btntext2); ?></a><?php } ?>

	</div>
	</div>
	</div>
	<?php }else{ ?>
	<div class="career-title">
		<div class="grey-box">
	 		<div class="caption">

				<h1><?php echo htmlspecialchars_decode($title); ?></h1>

				<p class="job-info"><?php if($content) echo htmlspecialchars_decode($content); ?></p>
			 </div>
	
			<div class="caption-btn">

				<a href="<?php echo esc_attr($btnlink1); ?>" class="btn tp-btn tp-btn-orange pull-right"><?php echo esc_attr($btntext1); ?></a>
			</div>
		</div>
	</div>
	<?php } ?>
	<?php return ob_get_clean();

}



// Call To Action 2
add_shortcode('cta2', 'cta2_func');
function cta2_func($atts, $content = null){
	extract(shortcode_atts(array(

		'btntext1' 	=> '',

		'btnlink1' 	=> '',

		'btntext2' 	=> '',

		'btnlink2' 	=> '',

		'title'		=> '',

		'stitle'  	=> '',

		'style'		=> 'style1',

	), $atts));

	ob_start(); ?>
	<?php if($style == 'style1') { ?>
	<div class="tp-claim-center" id="tp-claim-center">
	
	<div class="claim-title">

		<h2><?php echo htmlspecialchars_decode($title); ?></h2>

		<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>

		<?php if($btntext1) { ?><a href="<?php echo esc_url($btnlink1); ?>" class="btn tp-btn tp-btn-orange"><?php echo htmlspecialchars_decode($btntext1); ?></a> <?php if($stitle) { ?><strong class="call"><?php echo htmlspecialchars_decode($stitle); ?></strong><?php } ?>
		<?php }if($btntext2) { ?><a href="<?php echo esc_url($btnlink2); ?>" class="btn tp-btn tp-btn-orange"><?php echo htmlspecialchars_decode($btntext2); ?></a><?php } ?>

	</div>
	
	</div>
	<?php }else{ ?>
	<div class="cta-box">
	<h2 ><?php echo htmlspecialchars_decode($title); ?></h2>
	<div class="promo-box-two">
		<?php if($icon) { ?><i class="fa fa-<?php echo esc_attr($icon); ?>"></i><?php } ?>

		<div class="promo-caption"><h2><?php if($content) echo htmlspecialchars_decode($content); ?></h2>

		<?php if($btntext1) { ?><a href="<?php echo esc_url($btnlink1); ?>" class="btn tp-btn tp-btn-orange tp-btn-default"><?php echo htmlspecialchars_decode($btntext1); ?></a> <?php }if($btntext2) { ?><a href="<?php echo esc_url($btnlink2); ?>" class="btn tp-btn tp-btn-orange tp-btn-default"><?php echo htmlspecialchars_decode($btntext2); ?></a><?php } ?>

	</div>
	</div>
	</div>
	<?php } ?>
	<?php return ob_get_clean();

}

// Latest News
add_shortcode('lproject', 'lproject_func');
function lproject_func($atts, $content = null){
	extract(shortcode_atts(array(

		'title' 	=> '',

		'number'	=> '',

		'excerpt'	=> '',

	  	'style'		=> 'style1',

	), $atts));

	$number1 = !empty($number) ? $number : 3;
	$excerpt1 = !empty($excerpt) ? $excerpt : 15;

	ob_start(); ?>
		
	<div id="<?php if($style == 'style3') echo 'projects'; elseif($style == 'style2') echo 'latest-projects'; else echo 'projects1';?>" >		
		<?php if($style == 'style2') { ?>
			
		<?php } ?>
		<?php 

			$args = array(

				'post_type' => 'post',

				'posts_per_page' => $number1,	

			);  

			$wp_query = new WP_Query($args);					

			while ($wp_query -> have_posts()) : $wp_query -> the_post(); 

		?>

		<?php if($style == 'style1') { ?>	
		<div id="tp-blog-news" class="tp-blog-news section-space">
			<div class="col-md-4 thumb-box">
				<div class="tp-pic">
             	<a href="<?php echo get_permalink(); ?>"><img src="<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>" alt=""></a>
				</div>
				<h2><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h2>
				<p><?php echo insurance_excerpt($excerpt1); ?></p>
				<p class="tp-meta">	<span class="meta-date"><i class="fa fa-calendar"></i><?php the_time('d M, Y'); ?></span> <span class="meta-user"><i class="fa fa-user"></i><?php the_author_posts_link(); ?></span> </p>
			</div>
		</div>
		
		<?php }else{ ?>
		<div id="tp-latest-news" class="tp-latest-news section-space">
			<div class="col-md-4 thumb-box">
				<div class="tp-pic">
					<a href="<?php echo get_permalink(); ?>"><img src="<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>" alt=""></a>
				</div>
				<div class="thumb-info">
				<h2><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h2>
				<p><?php echo insurance_excerpt($excerpt1); ?></p>
			 	<div class="tp-meta">
			 	<span class="meta-date"><?php _e('Posted on ','insurance') ?><a href="<?php echo get_permalink(); ?>"><?php the_time('M d, Y'); ?></a></span>
			 	</div>

				</div>
			</div>
		</div>
		<?php } ?>
		<?php endwhile; wp_reset_postdata(); ?>
		
	</div>
	<?php return ob_get_clean();

}

// Buttons
add_shortcode('button', 'button_func');
function button_func($atts, $content = null){
	extract(shortcode_atts(array(

		'btntext' 	=> '',

		'btnlink' 	=> '',

		'icon'  	=> '',

		'type'		=> 'color',

		'size'		=> 'small',

	), $atts));

	ob_start(); ?>

	<?php 

		if($type == 'border2'){

			$type1 = 'secondary-border';

		}elseif($type == 'color'){

			$type1 = 'primary';

		}elseif($type == 'border1'){

			$type1 = 'primary-border';

		}else{
			$type1 = 'secondary';
		}



		if($size == 'small'){

			$size2 = 'small';

		}elseif($size == 'large'){

			$size2 = 'large';

		}else{

			$size2 = 'normal';

		}

	?>

	<a href="<?php echo esc_url($btnlink); ?>" class="btn tp-btn tp-btn-orange d-btn-<?php echo esc_attr($size2); ?> d-btn-<?php echo esc_attr($type1); ?>">
	<?php if($icon) { ?><i class="fa fa-<?php echo esc_attr($icon); ?>"></i> <?php } echo esc_attr($btntext); ?></a>
	
	<?php return ob_get_clean();
}

//Newsletters
add_shortcode('newsletter_insurance', 'newsletter_func');
function newsletter_func($atts, $content = null){
	extract(shortcode_atts(array(
		'title' 		=> '',
		'stitle' 		=> '',
		'btntext'		=> '',			
	), $atts));

	ob_start(); ?>
	<?php if($title) { ?><h1><?php echo htmlspecialchars_decode($title); ?></h1><?php } ?>
	<?php if($stitle) { ?><p><?php echo htmlspecialchars_decode($stitle); ?></p><?php } ?>		
	<form  method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/plugins/newsletter/do/subscribe.php" >
		<div class="form-group">
            <div class="row">
                <label class="col-md-4 control-label" for="newsletter"></label>
                <div class="col-md-12">
                  <input id="newsletter" name="ne" type="email" placeholder="<?php _e('Newsletter', 'insurance'); ?>" class="form-control input-md" required>
                </div>
            </div>
        </div>
		<input type="submit" value="<?php echo htmlspecialchars_decode($btntext); ?>" class="btn tp-btn tp-btn-orange" />
		<?php if($content) { ?><small><?php echo htmlspecialchars_decode($content); ?></small><?php } ?>
	</form>
	
	
	<?php return ob_get_clean();
}


// Form Search Agent
add_shortcode('searchagent', 'searchagent_func');
function searchagent_func($atts, $content = null){
	extract(shortcode_atts(array(
		'title' 		=> '',		
		'searchagent_type'		=> 'byname',	
		'btntext'		=> '',	
	), $atts));
	ob_start(); ?>
	
	<?php if($searchagent_type == 'byname'){ ?>
	<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">		             
	  <!-- Text input-->
	  <div class="form-group">
		<label for="name" class="control-label"><?php _e('Agent Name', 'insurance'); ?></label>
		<input type="text" value="" name="s" id="s" class="form-control" placeholder="<?php _e('Enter Agent name', 'insurance'); ?>">
	  </div>
	  
	  <!-- Select Basic -->
	  <div class="form-group">
		<label for="agentstate" class="control-label"><?php _e('State', 'insurance'); ?></label>
		<?php
			function get_terms_dropdown($taxonomies, $args){
				$myterms = get_terms($taxonomies, $args);
				$optionname = "state";
				$emptyvalue = "";
				$output ="<select class='form-control' id='agentstate' name='".$optionname."'><option selected='".$selected."' value='".$emptyvalue."'>Select a State</option>'";
				foreach($myterms as $term){
					$term_taxonomy=$term->state; //CHANGE ME
					$term_slug=$term->slug;
					$term_name =$term->name;
					$link = $term_slug;
					$output .="<option name='".$link."' value='".$link."'>".$term_name."</option>";
				}
				$output .="</select>";
			return $output;
			}

			$taxonomies = array('state'); // CHANGE ME
			$args = array('order'=>'ASC','hide_empty'=>true);
			echo get_terms_dropdown($taxonomies, $args);
		?> 
		</div>	  
	  <!-- Button -->
	  <div class="form-group">
		<input type="hidden" name="post_type" value="agent" /> 
		<button type="submit" id="searchsubmit" class="btn tp-btn tp-btn-orange"><?php echo htmlspecialchars_decode($btntext); ?></button>
	  </div>
	  <?php if($content) { ?><small><?php echo htmlspecialchars_decode($content); ?></small><?php } ?>
	</form>
    <?php }elseif($searchagent_type == 'bycity'){ ?>
		<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">                      
          <!-- Text input-->
          <div class="form-group">
            <label for="s" class="control-label"><?php _e('Enter a city', 'insurance'); ?></label>
            <input type="text" name="s" id="s" class="form-control" placeholder="<?php _e('city', 'insurance'); ?>">
          </div>          
          <!-- Select Basic -->
          <div class="form-group">
            <label for="agentstate" class="control-label"><?php _e('Select a State...', 'insurance'); ?></label>
			<select class="form-control" id="agentstate" name="state">
                <option value=""> <?php _e('Select a State...', 'insurance') ?> </option>
				<?php
					//list terms in a given taxonomy
					$taxonomy = 'state';
					$term_args=array(
					  'hide_empty' => false,
					  'orderby' => 'name',
					  'order' => 'ASC'
					);
					$tax_terms = get_terms($taxonomy,$term_args);					
					foreach ($tax_terms as $tax_term) { 
						if( $tax_term->count > 0 ) { ?>
						<option value="<?php echo $tax_term->name; ?>"><?php echo $tax_term->name; ?></option>					
					<?php 
						} 
					}
				?>								 
			</select>	
          </div>          
          <!-- Button -->
          <div class="form-group">
			<input type="hidden" name="post_type" value="agent" /> 
            <button type="submit" id="searchsubmit" class="btn tp-btn tp-btn-orange"><?php echo htmlspecialchars_decode($btntext); ?></button>
          </div>
          <?php if($content) { ?><small><?php echo htmlspecialchars_decode($content); ?></small><?php } ?>
        </form>
	<?php }elseif($searchagent_type == 'byzipcode'){ ?>
		<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
			<div class="form-group">				
				<label for="zip" class="control-label"><?php _e('Enter A Zip', 'insurance'); ?></label>				  
				<input type="text" class="form-control" value="" maxlength="5" name="s" id="s" placeholder="<?php _e('zip', 'insurance'); ?>">				
			</div>
			<div class="form-group">
				<input type="hidden" name="post_type" value="agent" /> 
				<button type="submit" id="searchsubmit" class="btn tp-btn tp-btn-orange"><?php echo htmlspecialchars_decode($btntext); ?></button>
			</div> 
			<?php if($content) { ?><small><?php echo htmlspecialchars_decode($content); ?></small><?php } ?>
		</form>
	<?php }else{} ?>
	
<?php 
	return ob_get_clean();
}

// Testimonial 
add_shortcode('testimonials','testimonials_func');
function testimonials_func($atts, $content = null){
	extract(shortcode_atts(array(
		'num'		=>		'',
		'style'		=> 		'style1',
	), $atts)); 
	 ob_start(); ?>

	<?php if($style == 'style1') { ?>
	<div class="tp-testimonial-two section-space">
		 <div class="circle-icon text-center">
			<p><span class="quote-circle orange-quote"><i class="fa fa-quote-left"> </i> </span><span class=" quote-circle blue-quote"><i class="fa fa-user"></i></span></p>
		 </div>
		<div id="testimonial">

			<?php
				$args = array(
					'post_type' => 'testimonial',
					'posts_per_page' => $num,
				);

				$testimonial = new WP_Query($args);
				if($testimonial->have_posts()) : while($testimonial->have_posts()) : $testimonial->the_post();

				$location = get_post_meta(get_the_ID(),'_cmb_location', true);

			?>
			<div class="col-md-12 quote-ct item">

				<div class="quote-text"><?php the_content(); ?></div>

				<div class="name"><?php the_title(); ?></div>

				<span class="location"><?php if($location) echo htmlspecialchars_decode($location); ?></span>

			</div>
			<?php endwhile; wp_reset_postdata(); endif; ?>
		</div>
	</div>
	
	<?php }elseif($style == 'style2'){ ?>
		<?php
			$args = array(
				'post_type' => 'testimonial',
				'posts_per_page' => $num,
			);

			$testimonial = new WP_Query($args);

			if($testimonial->have_posts()) : while($testimonial->have_posts()) : $testimonial->the_post();

			$location = get_post_meta(get_the_ID(),'_cmb_location', true);

		?>

			<div class="tp-testimonial section-space">
				<div class="col-md-12 circle-icon">
					<p><span class="quote-circle orange-quote"><i class="fa fa-quote-left"> </i> </span><span class=" quote-circle blue-quote"><i class="fa fa-quote-right "></i></span></p>
				</div>
				<div class="col-md-8 quote-ct">
					<div class="quote-text"><?php the_content(); ?></div>
			        <p class="name"><?php the_title(); ?></p>
			        <span class="location"><?php if($location) { ?> <?php echo htmlspecialchars_decode($location); ?> <?php } ?></span> 
		        </div>
		        <div class="col-md-4 client-pic">				
					<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());; ?>" alt="" class="img-responsive img-circle">
				</div>							
			</div>
		<?php endwhile; wp_reset_postdata(); endif; ?>
	<?php }else{ ?>	
		<div class="tp-testimonial story-page">
			<div class="story">    
				<div class="circle-icon title">
					<p>			
						<span class="quote-circle orange-quote"><i class="fa fa-quote-left"></i></span>			
						<span class="quote-circle blue-quote"><i class="fa fa-quote-right"></i></span>			
					</p>
				</div>
			</div>
		</div>
		<?php 
			$i=0;
			$args = array(
				'post_type' => 'testimonial',
				'posts_per_page' => $num,
			);

			$testimonial = new WP_Query($args);
			if($testimonial->have_posts()) : while($testimonial->have_posts()) : $testimonial->the_post(); $i++;
			$location = get_post_meta(get_the_ID(),'_cmb_location', true);
		?>
		<?php if($i%2 ==0){ ?>
		<div class="row tp-testimonial story-page">		
			<div class="col-md-4 client-pic"><!-- client image --> 
	       		<img src="<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>" alt="" class="img-responsive img-circle">
	      		<!-- /.client image --> 
	    	</div>
	      	<!-- /.circle icon -->
		    <div class="col-md-8 quote-ct"><!-- quote content -->
		        <div class="quote-text"><?php the_content(); ?></div>
		        <div class="name"><?php the_title(); ?></div>
		        <span class="location"><?php if($location) { ?> <?php echo htmlspecialchars_decode($location); ?> <?php } ?></span> 
		    </div>
	      	<!-- /.quote content -->	      	   		
   		</div>
   		<?php }else{ ?>
   		<div class="row tp-testimonial story-page">
		
	      	<!-- /.circle icon -->
		    <div class="col-md-8 quote-ct"><!-- quote content -->
		        <div class="quote-text"><?php the_content(); ?></div>
		        <div class="name"><?php the_title(); ?></div>
		        <span class="location"><?php if($location) { ?> <?php echo htmlspecialchars_decode($location); ?> <?php } ?></span> 
		    </div>
	      	<!-- /.quote content -->
	      	<div class="col-md-4 client-pic"><!-- client image --> 
	       		<img src="<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>" alt="" class="img-responsive img-circle">
	      		<!-- /.client image --> 
	    	</div>
   		
   		</div>
   		<?php } ?>
		<?php endwhile; wp_reset_postdata(); endif; ?>
	
	<?php } ?>
<?php
    return ob_get_clean();

}


// Clients Logo
add_shortcode('clients','clients_func');
function clients_func($atts, $content = null){
	extract(shortcode_atts(array(
		'row'			=>		'',
		'gallery'		=> 		'',
		'style'			=>		'style1',
	), $atts));

	ob_start(); ?>

	<?php if($style=='style1') { ?>
	<div class="width-100" id="logos-1">
	    <div id="client-demo">
	    	<?php 
			$img_ids = explode(",",$gallery);
			foreach( $img_ids AS $img_id ){
			$image_src = wp_get_attachment_image_src($img_id,''); 
			$meta = wp_prepare_attachment_for_js($img_id);
   			$caption = $meta['caption'];
			?>
			<div class="item">
				<div class="partner-box">
					<?php if($caption) { ?>
					<a target="_blank" href="<?php echo esc_url($caption) ?>"><img src="<?php echo esc_url($image_src[0]); ?>" alt="" class="img-responsive"></a>
					<?php }else{ ?>
					<img src="<?php echo esc_url($image_src[0]); ?>" alt="" class="img-responsive">
					<?php } ?>
				</div>
			</div>
			<?php } ?>
		</div>
		<div class="insurance-center"><div class="riva-insert-menu-here"></div></div>
	</div>
	<?php }else{ ?>
		<div class="logo-group" id="logo-group">
		<?php 
			$img_ids = explode(",",$gallery);
			foreach( $img_ids AS $img_id ){
			$image_src = wp_get_attachment_image_src($img_id,''); 
			$meta = wp_prepare_attachment_for_js($img_id);
   			$caption = $meta['caption'];
			?>
			<div class="col-md-3 partner-box">				
				<?php if($caption) { ?>
				<a target="_blank" href="<?php echo esc_url($caption) ?>"><img src="<?php echo esc_url($image_src[0]); ?>" alt="" class="img-responsive desaturate"></a>
				<?php }else{ ?>
				<img src="<?php echo esc_url($image_src[0]); ?>" alt="" class="img-responsive desaturate">
				<?php } ?>
			</div>
			<?php } ?>
		</div>
		
	<?php } ?>
<?php 
	return ob_get_clean();
}

// Annual Report
add_shortcode('reports', 'reports_func');
function reports_func($atts, $content = null){
	extract(shortcode_atts(array(
		'title' 	=> '',
		'photo'		=> '',
		'btn'		=> '',
		'link'		=> '',
	), $atts));

	ob_start(); ?>

	<?php $url = wp_get_attachment_image_src($photo, '');

	$image_src = $url[0]; ?>

	<div class="meeting-report">
		<div class="grey-box">
			<img src="<?php echo esc_url($image_src); ?>" alt="" class="img-responsive pull-left">
			<div class="report-caption">
				<?php if($title) { ?><h3><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>
				<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
				<?php if($btn) { ?><a href="<?php echo esc_url($link); ?>" class="btn tp-btn tp-btn-orange"><?php echo htmlspecialchars_decode($btn); ?></a><?php } ?>
			</div>
		</div>
	</div>
<?php 
	return ob_get_clean();
}

// Dropcap
add_shortcode('drop', 'drop_func');
function drop_func($atts, $content = null){
	extract(shortcode_atts(array(
		'character' 	=> '',
		'style'			=> 'style1',
	), $atts));

ob_start(); ?>
	<?php if($style=='style1') { ?>
		<?php if($character) { ?><span class="firstcharacter"><?php echo htmlspecialchars_decode($character); ?></span><?php } ?>
		<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
	<?php }else{ ?>
		<?php if($character) { ?><span class="firstcharacter box-style"><?php echo htmlspecialchars_decode($character); ?></span><?php } ?>
		<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
	<?php } ?>
<?php 
	return ob_get_clean();
}

// Product Thumb
add_shortcode('prothumb', 'prothumb_func');
function prothumb_func($atts, $content = null){
	extract(shortcode_atts(array(
		'title' 	=> '',
		'photo'		=> '',
		'btntext1' 	=> '',
		'btnlink1' 	=> '',
		'btntext2' 	=> '',
		'btnlink2' 	=> '',
		'style'		=> 'style1',
	), $atts));

	ob_start(); ?>

	<?php $url = wp_get_attachment_image_src($photo, '');
	$image_src = $url[0]; ?>

	<?php if($style=='style1') { ?>
		<div class="tp-product-page font-increase">
			<div class="product-img">
				<a href="<?php echo get_permalink(); ?>"><img src="<?php echo esc_url($image_src); ?>" alt="" class=""></a>
			</div>
			<div class="grey-box">
				<h1><a href="<?php echo get_permalink(); ?>"><?php echo htmlspecialchars_decode($title); ?></a></h1>
				<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
				<?php if($btntext1) { ?><a href="<?php echo esc_url($btnlink1); ?>" class="btn tp-btn tp-btn-orange"><?php echo htmlspecialchars_decode($btntext1); ?></a> 
				<?php }if($btntext2) { ?><a href="<?php echo esc_url($btnlink2); ?>" class="btn tp-btn tp-btn-grey"><?php echo htmlspecialchars_decode($btntext2); ?></a><?php } ?>
			</div>
		</div>
	<?php }else{ ?>
		<div class="lp-hero-section">
			<div class="image-block">
				<img src="<?php echo esc_url($image_src); ?>" alt="" class="img-responsive">
			<div class="lp-caption">
				<?php if($title) { ?><h2><?php echo htmlspecialchars_decode($title); ?></h2><?php } ?>
				<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
			</div>
			</div>
		</div>
	<?php } ?>
<?php 
	return ob_get_clean();
}


//Slider Project
add_shortcode('slider','slider_func');
function slider_func($atts, $content = null){
    extract( shortcode_atts( array(
      'number'   	=> '',
   ), $atts ) );
    $number = (!empty($number)) ? $number : 10;
    ob_start(); ?>
    	
    <div id="slider">
      <?php 
			$args = array(   
				'post_type' => 'Slider_text',   
				'posts_per_page' => $number,
			);  
			$wp_query = new WP_Query($args);
			while ($wp_query -> have_posts()) : $wp_query -> the_post(); 			
			$btnlink = get_post_meta(get_the_ID(),'_cmb_btnlink', true);
			$btntext = get_post_meta(get_the_ID(),'_cmb_btntext', true);			
	  ?>

    	<div class="item">
		  	<img src="<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>" alt="The Last of us" class="img-responsive">
		    <div class="container">
		      <div class="row">
		        <div class="col-md-6 slider-caption"><!-- slider caption-->
		          <h1><?php the_title(); ?></h1> 
		          <?php the_content(); ?>
		          <a href="<?php echo htmlspecialchars_decode($btnlink); ?>" class="btn tp-btn tp-btn-orange"> <?php echo htmlspecialchars_decode($btntext); ?></a> </div>
		        <!-- /.slider caption--> 
		      </div>
		    </div>
		  </div>

  	  <?php endwhile; wp_reset_postdata(); ?>
  	  
    </div>
<?php
    return ob_get_clean();
}

//Our Agent
add_shortcode('agent','agent_func');
function agent_func($atts, $content = null){
    extract( shortcode_atts( array(
      'number'   	=> '',
   ), $atts ) );
    $number = (!empty($number)) ? $number : 10;
    ob_start(); ?>
    	
    <div class="tp-agent-result" id="tp-agent-result">

      <?php 
			$args = array(   
				'post_type' => 'agent',   
				'posts_per_page' => $number,
			);  
			$wp_query = new WP_Query($args);
			while ($wp_query -> have_posts()) : $wp_query -> the_post(); 			
			$address = get_post_meta(get_the_ID(),'_cmb_address', true);
			$phone 	 = get_post_meta(get_the_ID(),'_cmb_phone', true);
			$btnlink = get_post_meta(get_the_ID(),'_cmb_btnlink', true);
			$btntext = get_post_meta(get_the_ID(),'_cmb_btntext', true);			
	  ?>
    	<div class="col-md-3 agent-thumb">
    		<div class="agent-pic">
		  	<a href="<?php echo get_permalink(); ?>"><img src="<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>" alt="" class="img-responsive"></a>
		  	</div>
		    <div class="agent-info">
		          <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2> 
		          <?php echo htmlspecialchars_decode($address); ?>
		          <p class="call"><i class="fa fa-phone-square"></i><?php echo htmlspecialchars_decode($phone); ?></p>
		          <a href="<?php echo htmlspecialchars_decode($btnlink); ?>" class="btn tp-btn tp-btn-orange"> <?php echo htmlspecialchars_decode($btntext); ?></a> 
		    </div>		        
		</div>
  	  <?php endwhile; wp_reset_postdata(); ?>
  	  
    </div>

<?php

    return ob_get_clean();

}

//Claim
add_shortcode('claim','claim_func');
function claim_func($atts, $content = null){
    extract( shortcode_atts( array(
      'number'    => '',
      'style'  => 'style1',
   ), $atts ) );
    $number = (!empty($number)) ? $number : 10;
    ob_start(); ?>
    <?php if($style == 'style1') { ?>
<?php 
   $icon = get_post_meta(get_the_ID(),'_cmb_icon', true);
   
   ?>
 <div class="tp-claim-center">
  
  <div class="claim-right-side">
  <div class="claim-pic">
  
   <img src="<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>" alt="" class="img-circle">
   <?php if($icon) { ?>
    <span class="claim-icon"><i class="fa fa-<?php echo esc_attr($icon); ?>"></i></span>
   <?php }?>
  </div>
  </div>
  </div>



     
    
<?php }else{ ?>


     
   <?php 
    $i=0;
   $args = array(   
    'post_type' => 'claim',   
    'posts_per_page' => $number,
   );  
   $wp_query = new WP_Query($args);
   while ($wp_query -> have_posts()) : $wp_query -> the_post(); $i++;
   
   $icon = get_post_meta(get_the_ID(),'_cmb_icon', true);
   $claim_ds = get_post_meta(get_the_ID(),'_cmb_claim_ds', true);
   $btntext = get_post_meta(get_the_ID(),'_cmb_btntext', true);
   $btnlink = get_post_meta(get_the_ID(),'_cmb_btnlink', true);
   ?>
  <?php if($i%2 ==1){ ?>
  <div class="tp-claim-center" id="tp-claim-center">
  <div class="row claim-product"><!--claim-product-->
        <div class="col-md-offset-1 col-md-6 claim-info">
          <h2><?php the_title(); ?></h2>
          <p><?php echo htmlspecialchars_decode($claim_ds); ?></p>
          <a href="<?php echo get_permalink(); ?>" class="btn tp-btn tp-btn-orange"> <?php echo htmlspecialchars_decode($btntext); ?></a>  
        </div>
        <div class="col-md-offset-1 col-md-3 claim-pic"> <img src="<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>" alt="" class="img-responsive img-circle"> <?php if($icon) { ?><span class="claim-icon"><i class="fa fa-<?php echo esc_attr($icon); ?>"></i></span><?php } ?> </div>
       </div> 
  </div>
     
        <?php }else{ ?>
        <div class="tp-claim-center" id="tp-claim-center">
        <div class="row claim-product"><!--claim-product-->
        <div class="col-md-offset-1 col-md-3 claim-pic"> <img src="<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>" alt="" class="img-responsive img-circle"> <?php if($icon) { ?><span class="claim-icon"><i class="fa fa-<?php echo esc_attr($icon); ?>"></i></span><?php } ?> </div>
        <div class="col-md-offset-1 col-md-6 claim-info">
          <h2><?php the_title(); ?></h2>
          <p><?php echo htmlspecialchars_decode($claim_ds); ?></p>
          <a href="<?php echo get_permalink(); ?>" class="btn tp-btn tp-btn-orange"> <?php echo htmlspecialchars_decode($btntext); ?></a>  
        </div>
        </div>
       </div>
<?php } ?>
<?php endwhile; wp_reset_postdata();?>
<?php } ?>
<?php return ob_get_clean();

}

//Career
add_shortcode('career','career_func');
function career_func($atts, $content = null){
    extract( shortcode_atts( array(
      'number'    => '',
      'catename'    => '',
      'idcate'  => '',
      'style'  => 'style1',
   ), $atts ) );
    $number = (!empty($number)) ? $number : 10;
    ob_start(); ?>
    <?php if($style == 'style1') { ?>
    
    <div class="category-box">
     <h2><?php echo htmlspecialchars_decode($catename); ?></h2>
    <?php 
    $args = array(    
     'tax_query' => array(
      array(
       'taxonomy' => 'category_career',
       'field' => 'id',
       'terms' => array($idcate)
      )
     ),
     'showposts' => $number
    );
    
   $wp_query = new WP_Query($args);     
   while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
   $cates = get_the_terms(get_the_ID(),'category_career'); 
   $location = get_post_meta(get_the_ID(),'_cmb_location', true);

  ?> 

<div class="category">
    <div class="grey-box">
          <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3> 
          <small><?php echo htmlspecialchars_decode($location); ?></small>
    </div>
</div>    
<?php endwhile; wp_reset_postdata(); ?>
</div>
<?php }else{ ?>
<?php 
   
	$wp_query = new WP_Query($args);     
   
	$cates = get_the_terms(get_the_ID(),'category_career');
	$cate_name ='';
	$cate_slug = '';
    foreach((array)$cates as $cate){
		if(count($cates)>0){
		  $cate_name .= $cate->name.'' ;
		  $cate_slug .= $cate->slug .' ';     
		} 
	} 
  ?> 
<?php 
$location = get_post_meta(get_the_ID(),'_cmb_location', true);
$btntext = get_post_meta(get_the_ID(),'_cmb_btntext', true);
$btnlink = get_post_meta(get_the_ID(),'_cmb_btnlink', true);
?>
 <div class="career-title"><!-- career title -->
  <div class="grey-box"><!-- greay box -->
   <div class="caption"> <h1><?php the_title(); ?></h1>
    <p class="job-info"><span class="job-category"><strong><?php _e('Job Category: ','insurance') ?></strong><a href="#"><?php echo htmlspecialchars_decode($cate_name); ?></a></span> 
      <span class="job-location"><strong><?php _e('Location: ','insurance') ?></strong><?php echo htmlspecialchars_decode($location); ?></span></p></div> 
      <div class="caption-btn"><?php if($btntext != '') { ?><a href="<?php echo esc_url($btnlink); ?>" class="btn tp-btn tp-btn-orange pull-right"><?php echo htmlspecialchars_decode($btntext); ?></a><?php } ?></div>
    </div><!-- /.greay box -->
</div>
<?php } ?>
<?php

    return ob_get_clean();

}

//Insurance Project
add_shortcode('propj','propj_func');
function propj_func($atts, $content = null){
    extract( shortcode_atts( array(
      'number'   	=> '',
      'style'   	=> 'style1',
   ), $atts ) );
    $number = (!empty($number)) ? $number : 10;
    ob_start(); ?>
    <?php if($style == 'style1') { ?>
    <div id="product">

      <?php 
			$i=1;
			$args = array(   
				'post_type' => 'insurance',   
				'posts_per_page' => $number,
			);  
			$wp_query = new WP_Query($args);
			while ($wp_query -> have_posts()) : $wp_query -> the_post(); $i++;
			
			$icon = get_post_meta(get_the_ID(),'_cmb_icon', true);
			$ins_deta = get_post_meta(get_the_ID(),'_cmb_ins_deta', true);
			
	  ?>
	  	<div class="col-md-12 product-thumb item <?php if($i%3==0){echo 'first';} ?>"> 
          <div class="grey-box">
            <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php echo htmlspecialchars_decode($ins_deta); ?></p>
           <?php if($icon != '') { ?><span class="icon"><i class="fa fa-<?php echo esc_attr($icon); ?>"></i></span><?php } ?>
        </div>
        </div>	 
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>
     <?php }elseif($style == 'style3'){ ?>
    

      <?php 
			$i=0;
			$args = array(   
				'post_type' => 'insurance',   
				'posts_per_page' => $number,
			);  
			$wp_query = new WP_Query($args);
			while ($wp_query -> have_posts()) : $wp_query -> the_post(); $i++;
			
			$icon = get_post_meta(get_the_ID(),'_cmb_icon', true);
			$ins_deta = get_post_meta(get_the_ID(),'_cmb_ins_deta', true);
	  ?>
	  <div class="tp-product-page font-increase <?php if($i%3==0){echo 'first';} ?>">
	  	<div class="col-md-4 product-thumb"> 
          <div class="grey-box">
            <h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
            <p><?php echo htmlspecialchars_decode($ins_deta); ?></p>
            <?php if($icon != '') { ?><span class="icon"><i class="fa fa-<?php echo esc_attr($icon); ?>"></i></span><?php } ?>
          </div>
        </div>	
       </div>  
         
    <?php endwhile; wp_reset_postdata(); ?>

    <?php }elseif($style == 'style4'){ ?>
    

      <?php 
			$i=0;
			$args = array(   
				'post_type' => 'insurance',   
				'posts_per_page' => $number,
			);  
			$wp_query = new WP_Query($args);
			while ($wp_query -> have_posts()) : $wp_query -> the_post(); $i++;
			
			$icon = get_post_meta(get_the_ID(),'_cmb_icon', true);
			$ins_deta = get_post_meta(get_the_ID(),'_cmb_ins_deta', true);
	  ?>
	  <div class="product-thumb item <?php if($i%3==0){echo 'first';} ?>"> <!-- Product thumb-->
          <div class="grey-box">
            <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php echo htmlspecialchars_decode($ins_deta); ?></p>
            <?php if($icon != '') { ?><span class="icon"><i class="fa fa-<?php echo esc_attr($icon); ?>"></i></span><?php } ?>
        </div>
         
    <?php endwhile; wp_reset_postdata(); ?>
     
	<?php }else{ ?>
	<?php 
				$i=0;
				$args = array(   
					'post_type' => 'insurance',   
					'posts_per_page' => $number,
				);  
				$wp_query = new WP_Query($args);
				while ($wp_query -> have_posts()) : $wp_query -> the_post(); $i++;
				
				$ins_deta = get_post_meta(get_the_ID(),'_cmb_ins_deta', true);
				$btnlink1 = get_post_meta(get_the_ID(),'_cmb_btnlink1', true);
				$btntext1 = get_post_meta(get_the_ID(),'_cmb_btntext1', true);
				$btnlink2 = get_post_meta(get_the_ID(),'_cmb_btnlink2', true);
				$btntext2 = get_post_meta(get_the_ID(),'_cmb_btntext2', true);
				
		  ?>
		<div class="tp-product-page font-increase <?php if($i%3==1){echo 'first';} ?>">
			<div class="col-md-4 product-thumb">
				<div class="product-img">

					<a href="<?php echo get_permalink(); ?>"><img src="<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>" alt="" ></a>

				</div>

				<div class="grey-box">
					<h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>

					<p><?php echo htmlspecialchars_decode($ins_deta); ?></p>

					<?php if($btntext1 != '') { ?><a href="<?php echo esc_url($btnlink1); ?>" class="btn tp-btn tp-btn-orange"><?php echo htmlspecialchars_decode($btntext1); ?></a> 
					<?php }if($btntext2 != '') { ?><a href="<?php echo get_permalink(); ?>" class="btn tp-btn tp-btn-grey"><?php echo htmlspecialchars_decode($btntext2); ?></a><?php } ?>

				</div>
			</div>
		</div>
	 <?php endwhile; wp_reset_postdata(); ?>
	 <?php } ?>
 
<?php return ob_get_clean();

}

// List Box
add_shortcode('list','list_func');
function list_func($atts, $content = null){
    extract( shortcode_atts( array(

      'title'  => '',

   ), $atts ) );

    ob_start(); ?>
  	<div class="list-box">	
	<a href="#" class="list-group-item">
	<h2 class="list-group-item-heading">
	<i class="fa fa-arrow-circle-right"></i> <?php if($title) { ?><?php echo htmlspecialchars_decode($title); ?><?php } ?></h2>
	<?php if($content) { ?><p class="list-group-item-text"><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
	</a>
	</div>
	

<?php return ob_get_clean();
}

// Career Box
add_shortcode('cabo','cabo_func');
function cabo_func($atts, $content = null){
    extract( shortcode_atts( array(

      'photo'   => '',

      'title'  	=> '',

      'btntext'	=> '',

      'btnlink'	=> '',

      'style'  	=> 'style1',

   ), $atts ) );

    ob_start(); ?>
    <?php $url = wp_get_attachment_image_src($photo, '');

		$image_src = $url[0]; ?>
    	<?php if($style == 'style1') { ?>
   
	<div class="tp-career-section">
	<div class="career-box">
	<div class="row">
	<div class="col-md-6 career-pic">
	<img src="<?php echo esc_url($image_src); ?>" alt="" class="img-responsive">
	</div>
	<div class="col-md-6 text-right career-caption">
	<?php if($title) { ?><h1><?php echo htmlspecialchars_decode($title); ?></h1><?php } ?>
	<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
	<?php if($btntext) { ?><a href="<?php echo htmlspecialchars_decode($btlclink); ?>" class="btn tp-btn tp-btn-orange"> <?php echo htmlspecialchars_decode($btntext); ?></a> <?php } ?>
	</div>
	</div>
	</div>
	</div>

<?php }else{ ?>
	<div class="tp-career-section">
	  <div class="agent-box"><!-- agent box -->
	    <div class="row">
	      <div class="col-md-6 agent-caption"><!-- agent caption -->
	        <?php if($title) { ?><h1><?php echo htmlspecialchars_decode($title); ?></h1><?php } ?>
	        <?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
	        <?php if($btntext) { ?><a href="<?php echo esc_url($btlclink); ?>" class="btn tp-btn tp-btn-orange"> <?php echo htmlspecialchars_decode($btntext); ?></a> <?php } ?>
	      </div>
	      <div class="col-md-6 agent-pic"><!-- agent pic -->
	      <img src="<?php echo esc_url($image_src); ?>" alt="" class="img-responsive">
	      </div><!-- /.agent pic -->
	    </div>
	  </div>
	</div>
<?php } ?>
<?php return ob_get_clean();
}

// Team
add_shortcode('team','team_func');

function team_func($atts, $content = null){

    extract( shortcode_atts( array(

      'name'   	=> '',

      'photo'   => '',

      'job'   	=> '',

      'icon1'   => '',

      'icon2'   => '',

      'icon3'   => '',

      'icon4'   => '',

      'soc1'   	=> '',

      'soc2'   	=> '',

      'soc3'   	=> '',

      'soc4'   	=> '',

   ), $atts ) );

    ob_start(); ?>


		<?php $url = wp_get_attachment_image_src($photo, '');

		$image_src = $url[0]; ?>

    <div class="tp-team-page" id="tp-team-page">
		
	        <div class="team-thumb">
	         <div class="team-pic">
			<a href="<?php echo esc_url($image_src); ?>"><img src="<?php echo esc_url($image_src); ?>" alt=""  class="img-responsive"></a>
			 </div>
			<div class="team-info">
			<?php if($name) { ?><h2><a href="#"><?php echo htmlspecialchars_decode($name); ?></a></h2><?php } ?>
			<?php if($job) { ?><p class="designation"><?php echo htmlspecialchars_decode($job); ?></p><?php } ?>
			<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>

			<ul>
			<?php if($icon1) { ?>
				<li><a href="<?php echo esc_url($soc1); ?>"><i class="fa fa-<?php echo esc_attr($icon1); ?>"></i></a></li>
			<?php }if($icon2) { ?>
				<li><a href="<?php echo esc_url($soc2); ?>"><i class="fa fa-<?php echo esc_attr($icon2); ?>"></i></a></li>
			<?php }if($icon3) { ?>
				<li><a href="<?php echo esc_url($soc3); ?>"><i class="fa fa-<?php echo esc_attr($icon3); ?>"></i></a></li>
			<?php }if($icon4) { ?>
				<li><a href="<?php echo esc_url($soc4); ?>"><i class="fa fa-<?php echo esc_attr($icon4); ?>"></i></a></li>
			<?php }?>
			</ul>

		</div>
    </div>	
   	</div>

<?php

    return ob_get_clean();

}

// Contact Info
add_shortcode('cinfo','cinfo_func');
function cinfo_func($atts, $content = null){
    extract( shortcode_atts( array(

      'icon'   => '',

      'title'  => '',

      'btn'	   => '',

	  'link'   => '',

      'style'  => 'style1',

   ), $atts ) );

    ob_start(); ?>
<?php if($style == 'style1') { ?>
    
	<div class="abt-feature">
	<div class="feature-box">

	<h2><i class="fa fa-<?php echo esc_attr($icon); ?>"></i><?php if($title) { ?><?php echo htmlspecialchars_decode($title); ?><?php } ?></h2>
	<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
	</div>
	</div>
	
<?php }  elseif($style == 'style3') { ?>  
	<div class="feature-box">
	<i class="feature-icon fa fa-<?php echo esc_attr($icon); ?>"></i> 
	<?php if($title) { ?><h3><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>
	<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
	</div>
<?php }  elseif($style == 'style4') { ?>  
<div class="feature-box">
	<?php if($title) { ?><h3><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>
	<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
	<?php if($btn) { ?><p><a href="<?php echo esc_url($link); ?>" class="btn tp-btn tp-btn-orange"><?php echo htmlspecialchars_decode($btn); ?></a></p><?php } ?>
	</div>
<?php }else{ ?>
<div class="feature-box">
	<i class="feature-icon fa fa-<?php echo esc_attr($icon); ?>"></i> 
	<?php if($title) { ?><h3><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>
	<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
</div>
	
<?php } ?>
<?php return ob_get_clean();
}

// Process Box
add_shortcode('processb','processb_func');
function processb_func($atts, $content = null){
    extract( shortcode_atts( array(

      'number'   => '',

      'title'  => '',

      'style'  => 'style1',

   ), $atts ) );
    $number = (!empty($number)) ? $number : 10;
    ob_start(); ?>
    	<?php if($style == 'style1') { ?>
   
	<div class="box">
	<?php if($number) { ?><span class="big-number"><?php echo htmlspecialchars_decode($number); ?></span><?php } ?>
	<div class="process-caption">
	<?php if($title) { ?><h3><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>
	<?php if($content) { ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
	</div>
	</div>

	

<?php }else{ ?>
<div class="agent-caption">
	<?php if($number) { ?><span class="small-number"><?php echo htmlspecialchars_decode($number); ?></span><?php } ?>
	
	<?php if($content) { ?><p calss="small"><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
	
</div>
	
<?php } ?>
<?php return ob_get_clean();
}

// Login
add_shortcode('pippin_login_form_fields','pippin_login_form_fields_func');
function pippin_login_form_fields_func($atts, $content = null) {
  extract( shortcode_atts( array(

      'title'   => '',

     
   ), $atts ) );

	ob_start(); ?>
	
	<div class="grey-box">
		<?php if($title) { ?><h2 class="tp-title"><?php echo htmlspecialchars_decode($title); ?></h2><?php } ?>
		<form action="<?php echo esc_url(home_url('/')); ?>wp-login.php" method="post">
		<div class="form-group">
			<label class="control-label" for="email"><?php _e('E - mail','insurance'); ?></label>
			<input type="text" name="log" id="log" class="form-control input-md" value="<?php echo htmlspecialchars_decode(stripslashes($user_login), 1); ?>" size="20" />
		</div>
		<div class="form-group">
			<label class="control-label" for="password"><?php _e('Password','insurance'); ?></label>  
			<input type="password" name="pwd" id="pwd" class="form-control input-md" size="20" />
		</div>
		<div class="form-group">
			<label class="control-label" for="button"></label>
			<input type="submit" name="submit" class="btn tp-btn tp-btn-orange" value="Login" class="button" />
		</div>
		<small><a href="<?php echo esc_url(home_url('/')); ?>wp-login.php?action=lostpassword"><?php _e('Forgot Password?','insurance'); ?></a></small>
		</form>
	</div>
	
	<?php return ob_get_clean();
}

// Register
add_shortcode('register','register_func');
function register_func($atts, $content = null) {
  extract( shortcode_atts( array(

      'title'   => '',
    
   ), $atts ) );

 ob_start(); ?>
 
 <div class="grey-box">
  <?php if($title) { ?><h2 class="tp-title"><?php echo htmlspecialchars_decode($title); ?></h2><?php } ?>
  <?php
  if( isset( $_POST['svalue'] ) )
  {
   if($_POST['svalue'] != $_SESSION['answer']) {
    $matherror = "Wrong math!";
   }
   else {
    $matherror = " ";
   }
  }
    if(defined('REGISTRATION_ERROR')){
   foreach(unserialize(REGISTRATION_ERROR) as $error){
    echo '<p class="error">'.$error.'</p';
   }         
    } elseif(defined('REGISTERED_A_USER')){
    echo '<p class="success">Successful registration, an email has been sent to '.REGISTERED_A_USER .'</p>';
    }       
  ?>
  <form action="<?php echo add_query_arg('do', 'register', get_permalink( $post->ID )); ?>" method="post">
  
  <div class="form-group">
   <label class="control-label" for="user"><?php _e('User name:','insurance'); ?></label>
   <input type="text" id="username" name="user" value="" class="form-control input-md" required="required">
  </div>
  <div class="form-group">
   <label class="control-label" for="fname"><?php _e('First Name:','insurance'); ?></label>
   <input type="text" name="fname" id="fname" value="" class="form-control input-md" required  >
  </div>
  <div class="form-group">
   <label class="control-label" for="lname"><?php _e('Last Name:','insurance'); ?></label>  
   <input type="text" name="lname" id="lname" class="form-control input-md" required >
  </div>
  
        <div class="form-group">
            <label class="control-label" for="email"><?php _e('E - mail','insurance'); ?></label>
            <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required>
        </div>
        <div class="form-group">
            <label class="control-label" for="pass"><?php _e('Password','insurance'); ?></label>
            <input id="pass" name="pass" type="password" placeholder="" class="form-control input-md" required>
        </div>
        <div class="form-group">
         <label class="control-label" for="pass1"><?php _e('Re-enter password','insurance'); ?></label>
   <input type="password" id="pass1" name="pass1" value="" class="form-control input-md" required="required">
  </div>
  <div class="form-group">
   <label class="control-label" for="button"></label>
   <input type="submit" name="submit" class="btn tp-btn tp-btn-orange" value="Submit" class="button" />
  </div>
  <small><a href="<?php echo esc_url(home_url('/')); ?>wp-login.php?action=lostpassword"><?php _e('Forgot Password?','insurance'); ?></a></small>
 </form>
 </div>
 
 <?php return ob_get_clean();
}


//------------------------   vc_map SHORT CODE

 ?>