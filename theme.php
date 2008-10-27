<?php

/**
 * Rino Habariproject.org theme
 *
 */

define( 'THEME_CLASS', 'RinoTheme' );

class RinoTheme extends Theme
{
	/**
	 * Execute on theme init to apply these filters to output
	 */
	public function action_init_theme()
	{
		// Apply Format::autop() to post content...
		Format::apply( 'autop', 'post_content_out' );
		Format::apply( 'autop', 'post_content_excerpt' );
		// Apply Format::autop() to comment content...
		Format::apply( 'autop', 'comment_content_out' );
		// Apply Format::tag_and_list() to post tags...
		Format::apply( 'tag_and_list', 'post_tags_out' );
		// Apply Format::nice_date() to post date...
		Format::apply( 'nice_date', 'post_pubdate_out', 'F j, Y g:ia' );
		// Apply Format::nice_date() to comment date...
		Format::apply( 'nice_date', 'comment_date_out', 'F j, Y g:ia' );
		// Truncate content excerpt at "more" or 75 characters...
		Format::apply_with_hook_params( 'more', 'post_content_excerpt', 'Read More', 75 );
	}

	public function add_template_vars()
	{
		//Theme Options
		$this->assign( 'show_author' , true ); //Display author in posts 
		if( !$this->template_engine->assigned( 'pages' ) ) {
			$this->assign('pages', Posts::get( array( 'content_type' => 'page', 'status' => Post::status('published'), 'nolimit' => 1 ) ) );
		}

		parent::add_template_vars();
	}	

	public function action_template_header( $theme )
	{
		Stack::add( 'template_header_javascript', Site::get_url('scripts') . '/jquery.js', 'jquery' );
		Stack::add( 'template_header_javascript', Site::get_url('theme') . '/thickbox-compressed.js', 'thickbox' );
		Stack::add( 'template_header_javascript', Site::get_url( 'theme' ) . '/swfobject.js', 'swfobject' );
		Stack::add( 'template_header_javascript', Site::get_url( 'theme' ) . '/features.js', 'features' );
		Stack::add( 'template_stylesheet', array(Site::get_url('theme') . '/thickbox.css', 'screen'), 'thickbox' );
	}	

/*
	public function filter_rewrite_rules($rules)
	{
		foreach($rules as $rule) {
			if($rule->name == 'display_entries') {
				$rule->parse_regex = '%^(?:page/(?P<page>[1-9]|[1-9][0-9]+))/?$%';
				$rule->update();
			}
		}
		return $rules;
	}
*/

}


?>
