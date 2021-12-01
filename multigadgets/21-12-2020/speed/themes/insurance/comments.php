<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
<?php  ?>
<?php if ( have_comments() ) : ?>
<div class="comments">
			<?php wp_list_comments('callback=insurance_theme_comment'); ?>
		<?php
			// Are there comments to navigate through?
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
    
			<nav class="navigation comment-navigation" role="navigation">		   
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'insurance' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'insurance' ) ); ?></div>
			</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
			<p class="no-comments"><?php _e( 'Comments are closed.' , 'insurance' ); ?></p>
		<?php endif; ?>	
</div>		
<?php endif; ?>		

<div class="grey-section">
    <?php
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
                'id_form' => '',                                
                'title_reply'=> '<h2>Leave a Comments</h2> ',
                'fields' => apply_filters( 'comment_form_default_fields', array(
                    'author' => '<div class="form-group"><label class="control-label>Name</label><input id="author" class="form-control" name="author" id="name" type="text" value="" placeholder="Name" /></div>',
                    'email' => '<div class="form-group"><label class="control-label">Email Address</label><input value="" id="email" class="form-control" name="email" type="text" placeholder="Email" /></div>', 
                    'website' => '<div class="form-group"><label class="control-label">Subject</label><input value="" id="subject" class="form-control" name="Subject" type="text" placeholder="Subject" /></div>',                                                                           
                ) ),                                
                 'comment_field' => '<div class="form-group"><label class="control-label">Comments</label><textarea name="comment"'.$aria_req.' id="comment" class="form-control" placeholder="Comments" ></textarea></div>',                                                   
                 'label_submit' => __('Submit Comments', 'insurance'),
                 'comment_notes_before' => '',
                 'comment_notes_after' => '',               
        )
    ?>
    <?php comment_form($comment_args); ?>
</div><!-- //LEAVE A COMMENT -->
                