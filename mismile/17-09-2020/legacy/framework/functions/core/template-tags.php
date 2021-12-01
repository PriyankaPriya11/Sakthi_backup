<?php

/**
 * Custom Surge Template Tags
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WordPress
 * @subpackage Surge
 * @since Surge 1.9011dae
 *
 * Surge Entry Meta
 * Surge Entry Meta Bottom
 * Surge Entry Date
 * Surge Entry Cats
 * Surge Entry Tags
 * Surge Edit Entry
 * Surge Archive Title
 * Surge Excerpt
 * Surge Custom Post Navigation Links
 * Surge Site Meta
 *
 * Create your own template tags by overriding each of the functions below in a child theme.
 * 
 */

/*========================================================================
                Surge Entry Meta
========================================================================*/

if ( ! function_exists( 'surge_entry_meta' ) ) {

//Prints HTML with meta information for the current post.

	function surge_entry_meta() {

		echo '<div class="entry-meta entry-meta-top">';

		if ( 'post' === get_post_type() ) {
			$author_avatar_size = apply_filters( 'surge_author_avatar_size', 49 );
			printf( '<span class="byline"><span class="author vcard">%1$s<span class="screen-reader-text">%2$s </span><i class="fa fa-user fa-first"></i><a class="url fn n" href="%3$s">%4$s</a></span></span>',
				get_avatar( get_the_author_meta( 'user_email' ), $author_avatar_size ),
				_x( 'Author', 'Used before post author name.', 'surge' ),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				get_the_author()
			);
		}

		if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
			surge_entry_date();
		}

		$format = get_post_format();
		if ( current_theme_supports( 'post-formats', $format ) ) {
			printf( '<span class="entry-format"><i class="fa fa-file-text-o" aria-hidden="true"></i>%1$s<a href="%2$s">%3$s</a></span>',
				sprintf( '<span class="screen-reader-text">%s </span>', _x( 'Format', 'Used before post format.', 'surge' ) ),
				esc_url( get_post_format_link( $format ) ),
				get_post_format_string( $format )
			);
		}

		if ( 'post' === get_post_type() ) {
			surge_entry_cats();
		}

		if ( ! is_singular() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link"><i class="fa fa-comment-o"></i>';
			comments_popup_link( sprintf( __( 'Leave a comment<span class="screen-reader-text"> on %s</span>', 'surge' ), get_the_title() ) );
			echo '</span>';
		}

		echo '</div>';
	}
}

/*========================================================================
                Surge Entry Meta Bottom
========================================================================*/

if ( ! function_exists( 'surge_entry_meta_bottom' ) ) {

//Prints HTML with meta information for the current post.

	function surge_entry_meta_bottom() {

		echo '<div class="entry-meta entry-meta-bottom">';

		if ( has_category( 'blog') ) { 
			surge_entry_tags();
		}

		surge_edit_entry(); //Output Tags+Edit if it is a blog.

		echo '</div>';
	}
}

/*========================================================================
                Surge Entry Date
========================================================================*/

if ( ! function_exists( 'surge_entry_date' ) ) {

//Prints HTML with date information for current post.

	function surge_entry_date() {

		$archive_year  = get_the_time('Y'); 
		$archive_month = get_the_time('m'); 
		$archive_day   = get_the_time('d'); 

		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			get_the_date(),
			esc_attr( get_the_modified_date( 'c' ) ),
			get_the_modified_date()
		);

		printf( '<span class="posted-on"><i class="fa fa-calendar"></i><span class="screen-reader-text">%1$s </span><a href="%2$s" rel="bookmark">%3$s</a></span>',
			_x( 'Posted on', 'Used before publish date.', 'surge' ),
			esc_url( get_day_link( $archive_year, $archive_month, $archive_day) ),
			$time_string
		);
	}
}

/*========================================================================
                Surge Entry Cats
========================================================================*/

if ( ! function_exists( 'surge_entry_cats' ) ) {

//Prints HTML with category for current post.

	function surge_entry_cats() {
		$categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'surge' ) );
		if ( $categories_list ) {
			printf( '<span class="cat-links"><i class="fa fa-folder-open-o"></i><span class="screen-reader-text">%1$s </span>%2$s</span>',
				_x( 'Categories', 'Used before category names.', 'surge' ),
				$categories_list
			);
		}
	}
}

/*========================================================================
                Surge Entry Tags
========================================================================*/

if ( ! function_exists( 'surge_entry_tags' ) ) {

//Prints HTML with tags for current post.

	function surge_entry_tags() {
		$tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'surge' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links"><i class="fa fa-tags fa-first"></i><span class="screen-reader-text">%1$s </span>%2$s</span>',
				_x( 'Tags', 'Used before tag names.', 'surge' ),
				$tags_list
			);
		}
	}
}

/*========================================================================
                Surge Edit Entry
========================================================================*/

if ( ! function_exists( 'surge_edit_entry' ) ) {

//Prints HTML with Edit post link for current post.
 
	function surge_edit_entry() {
		edit_post_link( __( 'Edit', 'surge' ), '<p><span class="edit-link"><i class="fa fa-pencil-square-o fa-first"></i>', '</span></p>' );
	}
}

/*========================================================================
                Surge The Archive Title
========================================================================*/

if ( ! function_exists( 'surge_the_archive_title' ) ) {

//Prints HTML with Edit post link for current post.
 
	function surge_the_archive_title() {

		echo '<h1 class="page-title">';

		if ( is_category() ) {
			single_cat_title();
		}

		elseif ( is_tag() ) {
			single_tag_title();
		}

		elseif ( is_post_type_archive() ) {
			post_type_archive_title();
		}

		elseif ( is_tax() ) {
			$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
			printf( $term->name, 'surge' );
		}

		elseif ( is_author() ) {
			printf( __( 'Author: %s', 'surge' ), '<span class="vcard">' . get_the_author() . '</span>' );
		}

		elseif ( is_day() ) {
			printf( __( 'Day: %s', 'surge' ), '<span>' . get_the_date() . '</span>' );
		}

		elseif ( is_month() ) {
			printf( __( 'Month: %s', 'surge' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'surge' ) ) . '</span>' );
		}

		elseif ( is_year() ) {
			printf( __( 'Year: %s', 'surge' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'surge' ) ) . '</span>' );
		}

		elseif ( is_tax( 'post_format', 'post-format-aside' ) ) {
			_e( 'Asides', 'surge' );
		}

		elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
			_e( 'Galleries', 'surge');
		}

		elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
			_e( 'Images', 'surge');
		}

		elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
			_e( 'Videos', 'surge' );
		}

		elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
			_e( 'Quotes', 'surge' );
		}

		elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
			_e( 'Links', 'surge' );
		}

		elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
			_e( 'Statuses', 'surge' );
		}

		elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
			_e( 'Audios', 'surge' );
		}

		elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
			_e( 'Chats', 'surge' );
		}

		else {
			_e( 'Archives', 'surge' );
		}

		echo '</h1>';
	} //End fuction.
}

/*========================================================================
                Surge Custom Excerpt
========================================================================*/

if ( ! function_exists( 'surge_custom_excerpt' ) ) {

//Displays the optional excerpt. Wraps the excerpt in a div element.

	function surge_custom_excerpt( $class = 'entry-summary' ) {
		$class = esc_attr( $class );

		//if ( has_excerpt() || is_search() ) { 
		?>
			<div class="<?php echo $class; ?>">
				<?php the_excerpt(); ?>
			</div>
		<?php //}
	}

}

/*========================================================================
                Surge Custom Excerpt Link
========================================================================*/

if ( ! function_exists( 'surge_custom_excerpt_link' ) && ! is_admin() ) {
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link. Note this alters the_excerpt() function.
 * Currently replacing "[...]" with ... but commenting out the link as we may need it in other types.
 *
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
	function surge_custom_excerpt_link() {
		/* $link = sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
			esc_url( get_permalink( get_the_ID() ) ),
			//translators: %s: Name of current post
			sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'surge' ), get_the_title( get_the_ID() ) )
		); */
		return '&hellip; '; //. $link
	}

	add_filter( 'excerpt_more', 'surge_custom_excerpt_link' );

}

/*========================================================================
                Surge Custom Post Navigation Links
========================================================================*/

if ( ! function_exists( 'surge_custom_posts_navigation_links' ) ) {

//Displays the optional excerpt. Wraps the excerpt in a div element.

	function surge_custom_posts_navigation_links() {

		if ( ! is_page() ) {

			if ( has_category( 'blog') ) {
				$in_same_category = TRUE;
				$category_id = 'none';
			} else {
				$in_same_category = FALSE;
				$category_id = get_cat_ID('blog');
			}

			if ( has_category( 'services' ) ){
				$post_cat_name = 'Service';
			}
			elseif ( has_category( 'articles' )) {
				$post_cat_name = 'Article';
			}
			else{
				$post_cat_name = 'Post';
			}

			echo '<div class="post-navigation-links"><div class="row"><div class="col-md-6 col-sm-6 surge-previous-post-link">';
			previous_post_link( '%link', '<i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Previous ' . $post_cat_name . ': %title', $in_same_category, $category_id );
			echo '</div><div class="col-md-6 col-sm-6 text-right surge-next-post-link">';
			next_post_link( '%link', 'Next ' . $post_cat_name . ': %title <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>', $in_same_category, $category_id );
			echo '</div></div></div>';

		}

	}

}

/*========================================================================
                Surge Site Head Meta
========================================================================*/

if ( ! function_exists( 'surge_site_head_meta' ) ) {

//Displays Surge's Site Meta

	function surge_site_head_meta() {

		?>
		<meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php if ( get_post_meta( get_the_ID(), 'description_tag', true ) ) { ?>
        <?php }

	}

}