<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package next_blog
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function next_blog_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'next-blog-padding-0',
				'label' => esc_html__( 'No Padding', 'next-blog' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'next-blog-post-author-card',
				'label' => esc_html__( 'Theme Style', 'next-blog' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'next-blog-button',
				'label'        => esc_html__( 'Plain', 'next-blog' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'next-blog-post-comments',
				'label'        => esc_html__( 'Theme Style', 'next-blog' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'next-blog-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'next-blog' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'next-blog-wp-table',
				'label'        => esc_html__( 'Theme Style', 'next-blog' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'next-blog-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'next-blog' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'next-blog-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'next-blog' ),
			)
		);
	}
	add_action( 'init', 'next_blog_register_block_styles' );
}
