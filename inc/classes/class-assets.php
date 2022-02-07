<?php

namespace ANACOURS_THEME\Inc;

use ANACOURS_THEME\Inc\Traits\Singleton;

class Assets {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action( 'wp_footer', [ $this, 'register_scripts' ] );
	}

	public function register_styles() {
		// Register styles.
		wp_register_style( 'main-css', ANACOURS_BUILD_CSS_URI . '/main.css', filemtime( ANACOURS_BUILD_CSS_DIR_PATH . '/main.css' ), 'all' );

		// Enqueue Styles.
		wp_enqueue_style( 'main-css' );
	}

	public function register_scripts() {
		// Register scripts.
		wp_register_script( 'main-js', ANACOURS_BUILD_JS_URI . '/main.js', filemtime( ANACOURS_BUILD_JS_DIR_PATH . '/main.js' ), true );
		
		// Enqueue Scripts.
		wp_enqueue_script( 'main-js' );
	}
}
