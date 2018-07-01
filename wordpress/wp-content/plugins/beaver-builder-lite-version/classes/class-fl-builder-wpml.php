<?php

/**
 * Logic to support various parts of WPML.
 *
 * @since 2.1
 */
final class FLBuilderWPML {

	/**
	 * @since 2.1
	 * @return void
	 */
	static public function init() {
		if ( ! defined( 'ICL_SITEPRESS_VERSION' ) ) {
			return;
		}

		add_filter( 'fl_get_wp_widgets_exclude', 		__CLASS__ . '::filter_wp_widgets_exclude' );
		add_filter( 'fl_builder_node_template_post_id', __CLASS__ . '::filter_node_template_post_id' );
	}

	/**
	 * Filter out the language switcher from the BB content panel
	 * as it must be added to a sidebar to work.
	 *
	 * @since 2.1
	 * @param array $exclude
	 * @return array
	 */
	static public function filter_wp_widgets_exclude( $exclude ) {
		$exclude[] = 'WPML_LS_Widget';
		return $exclude;
	}

	/**
	 * Returns the translated post ID for a node template. This makes
	 * it so the translated version of a global node will render.
	 *
	 * @since 2.1
	 * @param int $post_id
	 * @return int
	 */
	static public function filter_node_template_post_id( $post_id ) {
		global $sitepress;

		$post_type		= get_post_type( $post_id );
		$lang 			= $sitepress->get_current_language();
		$wpml_post 		= new WPML_Post_Element( $post_id, $sitepress );
		$trid 			= $sitepress->get_element_trid( $post_id, "post_$post_type" );
		$translations	= $sitepress->get_element_translations( $trid, "post_$post_type" );

		if ( is_array( $translations ) && isset( $translations[ $lang ] ) ) {
			$post_id = $translations[ $lang ]->element_id;
		}

		return $post_id;
	}
}

FLBuilderWPML::init();
