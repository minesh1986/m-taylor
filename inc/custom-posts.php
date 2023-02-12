<?php
/**
 * m_taylor custom Posts
 *
 * @package m_taylor
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/*
* Custom fields for Pages 
*/
function add_hero_page_meta_boxes() {
	add_meta_box("hero_meta", "Hero banner text", "add_hero_details_meta_box", 'page', "normal", "high");
	
}

/*
* The fields for Pages
*/
function add_hero_details_meta_box()
{
 
	?>
	<div style="width:50%;">
		<hr>
		<label>Sub heading text (Below title):</label><br>
		<textarea type="textarea" name="subheading" style="margin-top:1rem;width:100%" /><?php echo get_post_meta(get_the_ID(), 'subheading', TRUE); ?></textarea>
	</div>

<?php
}

/*
* Saves the custom fields for Pages
*/
function save_hero_custom_fields(){
  global $post;
 
  if ( $post )
  {
	 
    update_post_meta($post->ID, "subheading", @$_POST["subheading"]);

  }
}
add_action( 'admin_init', 'add_hero_page_meta_boxes' );
add_action( 'save_post', 'save_hero_custom_fields' );