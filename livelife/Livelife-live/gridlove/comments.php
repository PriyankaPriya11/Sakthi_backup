<?php if ( post_password_required() ) { return; } ?>

<?php if ( comments_open() || get_comments_number() ) : ?>

	<div id="comments" class="gridlove-comments gridlove-box box-inner-p-bigger">

		<?php
			ob_start();
			comments_number( __gridlove( 'no_comments' ), __gridlove( 'one_comment' ), __gridlove( 'multiple_comments' ) );
			$comments_title = ob_get_contents();
			ob_end_clean();

			echo gridlove_get_heading(
				array(
					'title' => '<h4 class="h2">'.$comments_title.'</h4>',
					'actions' => get_comment_pages_count() > 1 && get_option( 'page_comments' ) ? paginate_comments_links( array( 'echo' => false, 'prev_text' => '<i class="fa fa-chevron-left"></i>', 'next_text' => '<i class="fa fa-chevron-right"></i>', 'type' => 'list'  ) ) : ''
				)
			);
			

			$commenter = wp_get_current_commenter();
			$req = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true'" : '' );

			$comment_form_args = array(
				'title_reply' => '',
				'label_submit' => __gridlove( 'comment_submit' ),
				'cancel_reply_link' => __gridlove( 'comment_cancel_reply' ),
				'comment_notes_before' => '',
				'comment_notes_after' => '',
				'comment_field' =>  '<p class="comment-form-comment"><label for="comment">' . __gridlove( 'comment_text' ) .'</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .'</textarea></p>',
				'fields' => apply_filters( 'comment_form_default_fields', array(
						'author' =>
						'<p class="comment-form-author">' .
						'<label for="author">' . __gridlove( 'comment_name' ) . ( $req ? '<span class="required"> *</span>' : '' ) . '</label> ' .
						'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
						'" size="30"' . $aria_req . ' /></p>',

						'email' =>
						'<p class="comment-form-email"><label for="email">' . __gridlove( 'comment_email' ) . ( $req ? '<span class="required"> *</span>' : '' ).'</label> '  .
						'<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
						'" size="30"' . $aria_req . ' /></p>',

						'url' =>
						'<p class="comment-form-url"><label for="url">' .
						__gridlove( 'comment_website' ) . '</label>' .
						'<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
						'" size="30" /></p>'
					) ),
			);

			comment_form( $comment_form_args );

		?>

		<?php if ( have_comments() ) : ?>

			<ul class="comment-list">
			<?php $args = array(
				'avatar_size' => 50,
				'reply_text' => __gridlove( 'comment_reply' )
			); ?>
				<?php wp_list_comments( $args ); ?>
			</ul>
		<?php endif; ?>

	
	</div>

<?php endif; ?>
