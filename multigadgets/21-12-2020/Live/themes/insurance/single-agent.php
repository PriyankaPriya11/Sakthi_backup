
<?php
 global $insurance_option;
get_header();
?>
 
<div class="tp-page-header"><!-- full page header -->
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="page-header"> <!-- page header  -->
          <h1><?php _e('Agent Detail','insurance') ?></h1>
          <?php 
          $agent_sub = get_post_meta(get_the_ID(),'_cmb_agent_sub', true); 
          ?>
          <p class="lead"><?php echo esc_attr($agent_sub); ?></p>
        </div>
        <!-- page header  --> 
      </div>
      <div class="col-md-5 header-pic">
        <div class="img-responsive">
           <?php if( function_exists( 'rwmb_meta' ) ) { ?>
            <?php $images = rwmb_meta( '_cmb_image_agent', "type=image" ); ?>
            <?php if($images){ ?>         
            <?php                                                        
            foreach ( $images as $image ) {                              
            ?>
            <?php $img = $image['full_url']; ?>
            <img src="<?php echo esc_url($img); ?>" alt="" class="img-responsive">
            <?php } ?>           
            <?php } ?>  
            <?php } ?>
      </div>
      </div>
      <!-- page header pic --> 
    </div>
  </div>
</div>

 <div class="tp-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        
          <?php insurance_breadcrumbs(); ?>
        
      </div>
    </div>
  </div>
</div>
<div class="main-container" id="main-container">

  <?php while (have_posts()) : the_post()?>
      <?php the_content(); ?>
  <?php endwhile; ?>

<div class="container"> 
<?php
if(isset($_POST['submitted'])) {
  if(trim($_POST['contactName']) === '') {
    $nameError = 'Please enter your name.';
    $hasError = true;
  } else {
    $name = trim($_POST['contactName']);
  }

  if(trim($_POST['phone']) === '') {
    $phoneError = 'Please enter your phone.';
    $hasError = true;
  } else {
    $phone = trim($_POST['phone']);
  }

    if(trim($_POST['stat']) === '') {
    $statError = 'Please enter your stat.';
    $hasError = true;
  } else {
    $stat = trim($_POST['stat']);
  }

  if(trim($_POST['email']) === '')  {
    $emailError = 'Please enter your email address.';
    $hasError = true;
  } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
    $emailError = 'You entered an invalid email address.';
    $hasError = true;
  } else {
    $email = trim($_POST['email']);
  }

  if(trim($_POST['comments']) === '') {
    $commentError = 'Please enter a message.';
    $hasError = true;
  } else {
    if(function_exists('stripslashes')) {
      $comments = stripslashes(trim($_POST['comments']));
    } else {
      $comments = trim($_POST['comments']);
    }
  }

  if(!isset($hasError)) {
    $emailTo = get_post_meta(get_the_ID(),'_cmb_mailto', true);
    if (!isset($emailTo) || ($emailTo == '') ){
      $emailTo = get_option('admin_email');
    }
    $subject = '[PHP Snippets] From '.$name;
    $body = "Name: $name \n\nEmail: $email \n\nPhone: $phone\n\nStat: $stat\n\nComments: $comments";
    $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

    wp_mail($emailTo, $subject, $body, $headers);
    $emailSent = true;
  }

} ?>
  
    
      <div class="row contact-me">
      
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
       
          <div class="entry-content">
            <?php if(isset($emailSent) && $emailSent == true) { ?>
              <div class="container">
                <h1><?php _e('Thanks, your email was sent successfully.', 'insurance') ?></h1>
                <h1> <?php _e('Contact Me', 'insurance'); ?> </h1>
            <form action="<?php echo get_permalink(); ?>" id="contactForm" class="form-horizontal" method="post">
              
              <div class="form-group">
                <div class="col-md-5">
                <label class="col-md-5 sr-only control-label" for="fname"></label> 
                <input type="text" name="contactName" id="contactName" placeholder="<?php _e('First Name', 'insurance'); ?>"value="<?php if(isset($_POST['contactName'])) { echo esc_attr($_POST['contactName']);}?>" class="form-control input-md" required/>
               
                </div>
                <div class="col-md-5">
                <label class="col-md-5 sr-only control-label" for="email"></label>  
                <input type="text" name="email" id="email" placeholder="<?php _e('E-mail', 'insurance'); ?>"value="<?php if(isset($_POST['email'])) { echo esc_attr($_POST['email']);}?>" class="form-control input-md" required/>                
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-5">
                  <label class="col-md-5 sr-only control-label" for="phone"></label>  
                  <input id="phone" name="phone" type="text" placeholder="<?php _e('Phone', 'insurance'); ?>" value="<?php if(isset($_POST['phone'])) { echo esc_attr($_POST['phone']);}?>" class="form-control input-md" required>                  
                </div>                 
                  <div class="col-md-5">
                  <label class="control-label sr-only"  for="stat"></label>
                  <select id="stat" name="stat" value="<?php if(isset($_POST['stat'])) { echo esc_attr($_POST['stat']);}?>" class="form-control">
                    <option value="1"><?php _e('Option one', 'insurance'); ?></option>
                    <option value="2"><?php _e('Option two', 'insurance'); ?></option>
                    <option value="3"><?php _e('Option three', 'insurance'); ?></option>
                    <option value="4"><?php _e('Option four', 'insurance'); ?></option>
                    <option value="5"><?php _e('Option five', 'insurance'); ?></option>
                  </select>
                  </div>                 
              </div>

              <div class="form-group">
                <label class="col-md-10 control-label" for="comments"></label>
                <div class="col-md-10">  
                <textarea name="comments" id="commentsText" rows="3" placeholder="<?php _e('Comment', 'insurance'); ?>" class="form-control"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo esc_attr($_POST['comments']); } } ?></textarea>
                </div>
                
              </div>

              <div class="form-group">
                <label class="col-md-12 sr-only control-label" for="submit"></label>
                <div class="col-md-12">
                <button id="submit" name="submit" class="btn tp-btn-orange"><?php _e('Submit', 'insurance'); ?></button>
                </div>
              </div>
              
              <input type="hidden" name="submitted" id="submitted" value="true" />
            </form>     
              </div>
            <?php } else { ?>
      
              <?php if(isset($hasError) || isset($captchaError)) { ?>
                <h1 class="container"><?php _e('Sorry, an error occured.', 'insurance'); ?> </h1>
              <?php } ?>
            <div class="container"> 
            
              <h1> <?php _e('Contact Me', 'insurance'); ?> </h1>
            
            <form action="<?php echo get_permalink(); ?>" id="contactForm" class="form-horizontal" method="post">
              
              <div class="form-group">
                <div class="col-md-5">
                <label class="col-md-5 sr-only control-label" for="fname"></label> 
                <input type="text" name="contactName" id="contactName" placeholder="<?php _e('First Name', 'insurance'); ?>"value="<?php if(isset($_POST['contactName'])) { echo esc_attr($_POST['contactName']);}?>" class="form-control input-md" required/>
                
                </div>
                <div class="col-md-5">
                <label class="col-md-5 sr-only control-label" for="email"></label>  
                <input type="text" name="email" id="email" placeholder="<?php _e('E-mail', 'insurance'); ?>"value="<?php if(isset($_POST['email'])) { echo esc_attr($_POST['email']);}?>" class="form-control input-md" required/>
               
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-5">
                  <label class="col-md-5 sr-only control-label" for="phone"></label>  
                  <input id="phone" name="phone" type="text" placeholder="<?php _e('Phone', 'insurance'); ?>" value="<?php if(isset($_POST['phone'])) { echo esc_attr($_POST['phone']);}?>" class="form-control input-md" required>
                  
                </div>                 
                  <div class="col-md-5">
                  <label class="control-label sr-only"  for="stat"></label>
                  <select id="stat" name="stat" value="<?php if(isset($_POST['stat']))  echo esc_attr($_POST['stat']);?>" class="form-control">
                    <option value="1"><?php _e('Option one', 'insurance'); ?></option>
                    <option value="2"><?php _e('Option two', 'insurance'); ?></option>
                    <option value="3"><?php _e('Option three', 'insurance'); ?></option>
                    <option value="4"><?php _e('Option four', 'insurance'); ?></option>
                    <option value="5"><?php _e('Option five', 'insurance'); ?></option>
                  </select>
                  </div>                 
              </div>

              <div class="form-group">
                <label class="col-md-10 control-label" for="comments"></label>
                <div class="col-md-10">  
                <textarea name="comments" id="commentsText" rows="3" placeholder="<?php _e('Comment', 'insurance'); ?>" class="form-control"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo esc_attr($_POST['comments']); } } ?></textarea>
                </div>
               
              </div>

              <div class="form-group">
                <label class="col-md-12 sr-only control-label" for="submit"></label>
                <div class="col-md-12">
                <button id="submit" name="submit" class="btn tp-btn-orange"><?php _e('Submit', 'insurance'); ?></button>
                </div>
              </div>
              
              <input type="hidden" name="submitted" id="submitted" value="true" />
            </form>         
              <?php } ?>
            </div><!-- .entry-content -->
          </div><!-- .post -->
        </div>
      </div><!-- #content -->
   </div> 
</div>
<?php get_footer(); ?>
 