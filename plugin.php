<?php
/**
 * Plugin Name:       Tests Scaffold
 * Plugin URI:        https://github.com/10up/plugin-scaffold
 * Description:       A brief description of the plugin.
 * Version:           0.1.0
 * Requires at least: 4.9
 * Requires PHP:      7.2
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       tests-scaffold
 * Domain Path:       /languages
 *
 * @package           TestsScaffold
 */

// Useful global constants.
define( 'TESTS_SCAFFOLD_VERSION', '0.1.0' );
define( 'TESTS_SCAFFOLD_URL', plugin_dir_url( __FILE__ ) );
define( 'TESTS_SCAFFOLD_PATH', plugin_dir_path( __FILE__ ) );
define( 'TESTS_SCAFFOLD_INC', TESTS_SCAFFOLD_PATH . 'includes/' );

// Require Composer autoloader if it exists.
if ( file_exists( TESTS_SCAFFOLD_PATH . 'vendor/autoload.php' ) ) {
	require_once TESTS_SCAFFOLD_PATH . 'vendor/autoload.php';
}

// Include files.
require_once TESTS_SCAFFOLD_INC . '/core.php';

// Activation/Deactivation.
register_activation_hook( __FILE__, '\TestsScaffold\Core\activate' );
register_deactivation_hook( __FILE__, '\TestsScaffold\Core\deactivate' );

// Bootstrap.
TestsScaffold\Core\setup();
