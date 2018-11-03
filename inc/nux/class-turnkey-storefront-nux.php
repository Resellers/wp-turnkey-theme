<?php
/**
 * Turnkey Storefront NUX
 *
 * Handles the New User Experience.
 *
 * @class    Turnkey_Storefront_NUX
 * @package  Turnkey_Storefront/Inc
 * @category Class
 * @author   Bryan Focht
 * @since    1.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Turnkey Storefront NUX
 *
 * Handles the New User Experience.
 *
 * @class    Turnkey_Storefront_NUX
 * @package  Turnkey_Storefront/Inc
 * @category Class
 * @author   Bryan Focht
 * @since    1.1.0
 */
class Turnkey_Storefront_NUX {

	/**
	 * Setup Page Slug
	 *
	 * @since 1.1.0
	 *
	 * @var string
	 */
	const PAGE_SLUG = 'admin.php?page=reseller-store-setup';

	/**
	 * Update Page Slug
	 *
	 * @since 1.1.0
	 *
	 * @var string
	 */
	const UPDATE_PAGE_SLUG = 'update.php?action=install-plugin';

	/**
	 * Setup class.
	 *
	 * @since 1.1.0
	 */
	public function __construct() {

		if ( false === ( current_user_can( 'install_plugins' ) && current_user_can( 'activate_plugins' ) ) ) {
			return;
		}

		if ( true === (bool) get_option( 'turnkey_storefront_nux_dismissed' ) ) {
			return;
		}

		if ( true === $this->is_admin_uri( self::PAGE_SLUG ) ||
			true === $this->is_admin_uri( self::UPDATE_PAGE_SLUG ) ) {
			return;
		}

		add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );

		add_action( 'admin_notices', array( $this, 'admin_notices' ), 99 );

		add_action( 'wp_ajax_turnkey_storefront_dismiss_notice', array( $this, 'dismiss_nux' ) );
	}

	/**
	 * Load admin scripts
	 *
	 * @return void
	 * @since  1.1.0
	 */
	public function admin_scripts() {

		wp_enqueue_script( 'turnkey-storefront-admin', get_stylesheet_directory_uri() . '/assets/js/admin.js', array( 'jquery', 'updates' ), PRIMER_CHILD_VERSION, true );

		$nonce = array(
			'nonce' => wp_create_nonce( 'turnkey_storefront_notice_dismiss' ),
		);

		wp_localize_script( 'turnkey-storefront-admin', 'turnkeyStorefrontAdmin', $nonce );

	}

	/**
	 * Output admin notices.
	 *
	 * @since 1.1.0
	 */
	public function admin_notices() {
		?>
		<div class="notice notice-info turnkey-storefront-notice-nux is-dismissible">
			<div class="notice-content">
				<h2><?php esc_attr_e( 'Thanks for installing Turnkey Storefront Theme', 'turnkey-storefront' ); ?></h2>
				<?php $this->install_plugin_button( 'reseller-store', 'reseller-store.php', 'Reseller Store' ); ?></p>
			</div>
		</div>
		<?php
	}

	/**
	 * AJAX dismiss notice.
	 *
	 * @since 1.1.0
	 */
	public function dismiss_nux() {

		if ( false === wp_verify_nonce( filter_input( INPUT_POST, 'nonce', FILTER_SANITIZE_STRING ), 'turnkey_storefront_notice_dismiss' ) ) {

			$data = esc_html__( 'Sorry, you are not allowed to do that.', 'turnkey-storefront' );

			wp_send_json_error( $data );

		}

		update_option( 'turnkey_storefront_nux_dismissed', true );

		wp_send_json_success();

	}

	/**
	 * Render a button that will install, activate, or setup Reseller Store Plugin
	 *
	 * @param string $plugin_slug The plugin slug.
	 * @param string $plugin_file The plugin file.
	 * @param string $plugin_name The name of the plugin.
	 */
	private function install_plugin_button( $plugin_slug, $plugin_file, $plugin_name ) {

		if ( current_user_can( 'install_plugins' ) && current_user_can( 'activate_plugins' ) ) {
			if ( is_plugin_active( $plugin_slug . '/' . $plugin_file ) ) {
				// The plugin is already active but isn't setup.
				$url = get_admin_url( null, self::PAGE_SLUG );

				$button = array(
					'message' => esc_attr__( 'Setup', 'turnkey-storefront' ),
					'url'     => esc_url( $url ),
					'classes' => array( 'turnkey-storefront-button' ),
				);

				$button['message'] = __( 'Setup Reseller Store', 'turnkey-storefront' );
			} elseif ( $this->is_plugin_installed( $plugin_slug ) ) {
				// The plugin exists but isn't activated yet.
				$button = array(
					'message' => esc_attr__( 'Activate', 'turnkey-storefront' ),
					'url'     => esc_url( $this->is_plugin_installed( $plugin_slug ) ),
					'classes' => array( 'turnkey-storefront-button', 'activate-now' ),
				);

				$button['message'] = __( 'Activate Reseller Store', 'turnkey-storefront' );
			} else {
				// The plugin doesn't exist.
				$url    = wp_nonce_url(
					add_query_arg(
						array(
							'action' => 'install-plugin',
							'plugin' => $plugin_slug,
						),
						self_admin_url( 'update.php' )
					),
					'install-plugin_' . $plugin_slug
				);
				$button = array(
					'message' => esc_attr__( 'Install now', 'turnkey-storefront' ),
					'url'     => esc_url( $url ),
					'classes' => array( 'turnkey-storefront-button', 'turnkey-storefront-install-now', 'install-now', 'install-' . $plugin_slug ),
				);

				$button['message'] = __( 'Install Reseller Store', 'turnkey-storefront' );
			} // End if().

			$button['classes'] = implode( ' ', $button['classes'] );

			?>
			<p>
				<?php esc_attr_e( 'To enable eCommerce features you need to install and activate the', 'turnkey-storefront' ); ?>&nbsp;<a href="https://wordpress.org/plugins/<?php echo esc_attr( $plugin_slug ); ?>" target="_blank"><?php esc_attr_e( 'Reseller Store plugin.', 'turnkey-storefront' ); ?></a>
			</p>
			<p>
				<span class="turnkey-storefront-plugin-card plugin-card-<?php echo esc_attr( $plugin_slug ); ?>">
					<a href="<?php echo esc_url( $button['url'] ); ?>" class="<?php echo esc_attr( $button['classes'] ); ?>" data-originaltext="<?php echo esc_attr( $button['message'] ); ?>" data-name="<?php echo esc_attr( $plugin_name ); ?>" data-slug="<?php echo esc_attr( $plugin_slug ); ?>" aria-label="<?php echo esc_attr( $button['message'] ); ?>"><?php echo esc_attr( $button['message'] ); ?></a>
				</span>
			</p>
			<?php
		} // End if().
	}

	/**
	 * Check if a plugin is installed and return the url to activate it if so.
	 *
	 * @param string $plugin_slug The plugin slug.
	 * @return bool
	 */
	private function is_plugin_installed( $plugin_slug ) {
		if ( file_exists( WP_PLUGIN_DIR . '/' . $plugin_slug ) ) {
			$plugins = get_plugins( '/' . $plugin_slug );
			if ( ! empty( $plugins ) ) {
				$keys        = array_keys( $plugins );
				$plugin_file = $plugin_slug . '/' . $keys[0];
				$url         = wp_nonce_url(
					add_query_arg(
						array(
							'action' => 'activate',
							'plugin' => $plugin_file,
						),
						admin_url( 'plugins.php' )
					),
					'activate-plugin_' . $plugin_file
				);
				return $url;
			}
		}
		return false;
	}

	/**
	 * Check if we are on a specific admin screen.
	 *
	 * @since 1.1.0
	 *
	 * @param  string $request_uri Request URL to check.
	 * @return bool  Returns `true` if the current admin URL contains the specified URI, otherwise `false`.
	 */
	private function is_admin_uri( $request_uri ) {

		$current = isset( $_SERVER['REQUEST_URI'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ) ) : null; // input var ok.
		$strpos  = strpos( basename( $current ), $request_uri );

		return ( is_admin() && ( false !== $strpos ) );

	}

}

return new Turnkey_Storefront_NUX();
