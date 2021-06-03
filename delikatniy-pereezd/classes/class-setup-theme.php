<?php
/**
 * Setup theme features and core functions.
 *
 * @package LoremWP\Core
 */

namespace LoremWP;

/**
 * Setup theme main features
 *
 * @package LoremWP
 */
class Setup_Theme {

	const THEME_ID = 'LoremWP';

	/**
	 * Identifier to determine which assets to load
	 *
	 * @var string
	 */
	public $assets_id = null;

	/**
	 * Constructor.
	 */
	public function __construct() {

		define( 'THEME_VSN', 'v1' );

		add_action( 'after_setup_theme', [ $this, 'theme_features' ] );

		add_filter( 'template_include', [ $this, 'set_assets' ], PHP_INT_MAX );

		add_action( 'wp_enqueue_scripts', [ $this, 'theme_scripts' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'theme_styles' ] );
		add_action( 'admin_enqueue_scripts', [ $this, 'admin_assets' ] );

	}

	/**
	 * Add support for core features to theme.
	 *
	 * @return void
	 */
	public function theme_features() {

		// We do not need template overrides this time.
		add_theme_support( 'woocommerce' );
	}

	/**
	 * Reads Assets ID from template header and sets releveant class variable.
	 * Post meta 'assets_id' if set will override value from template.
	 *
	 * @param string $template - template name.
	 * @return string
	 */
	public function set_assets( $template ) {

		$data = get_file_data( $template, [ 'assetsID' => 'Assets ID' ] );

		if ( $data['assetsID'] ) {
			$this->assets_id = $data['assetsID'];
		} else {
			$this->assets_id = 'index';
		}

		if ( is_singular() ) {
			global $post;
			if ( get_post_meta( $post->ID, 'assets_id', true ) ) {
				$this->assets_id = get_post_meta( $post->ID, 'assets_id', true );
			}
		}

		return $template;
	}

	/**
	 * Register theme styles.
	 *
	 * @return void
	 */
	public function theme_styles() {

		// Dynamic style inclusion based on Assets ID.
		if ( $this->assets_id && file_exists( THEME_DIR . "/assets/css/{$this->assets_id}.css" ) ) {
			wp_enqueue_style( self::THEME_ID . "-{$this->assets_id}", THEME_URL . "/assets/css/{$this->assets_id}.css", [], THEME_VSN, 'all' );
		}
	}

	/**
	 * Register theme scripts.
	 *
	 * @return void
	 */
	public function theme_scripts() {

		// Common scripts.
		// ...
		wp_enqueue_script( 'runtime', THEME_URL . '/assets/js/runtime.js', [], THEME_VSN, true );
		wp_localize_script(
			'runtime',
			'tc_ajax',
			array(
				'url' => admin_url( 'admin-ajax.php' ),
				'nonce' => wp_create_nonce( 'tc-ajax-nonce' ),
			)
		);

		// Dynamic script inclusion based on Assets ID.
		if ( $this->assets_id && file_exists( THEME_DIR . "/assets/js/{$this->assets_id}.js" ) ) {
			wp_enqueue_script( "{$this->assets_id}", THEME_URL . "/assets/js/{$this->assets_id}.js", [], THEME_VSN, true );
		}
	}

	/**
	 * Register admin styles and scripts.
	 *
	 * @param string $screen - admin screen id.
	 * @return void
	 */
	public function admin_assets( $screen ) {
		// TODO.
		/* global $post_type; */
	}

}
