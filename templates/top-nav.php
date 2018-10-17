<?php
/**
 * The template for displaying top nav menu.
 * This menu will only display if the Reseller Store plugin is activated
 *
 * @package Turnkey Storefront
 * @since   1.0.0
 */

?>
<div class="rstore-top-nav">
	<div class="<?php echo apply_filters( 'turnkey_storefront_support_phone', 'basic-container' ); ?>" ></div>
	<div class="basic-container rstore-help">
		<a href="<?php turnkey_storefront_rstore_url( 'www', 'help?pl_id={pl_id}&path=' ); ?>" target="_blank" class="help-link" rel="nofollow"><i class="fas fa-question-circle"></i> <span class="show-for-large-up"><?php esc_html_e( 'Help', 'turnkey-storefront' ); ?></span></a>
	</div>
	<div class="basic-container rstore-login">
		<div class="rstore-login-block">
			<a id="rstore-login-link" class="login-link" href="#" rel="nofollow">
				<i class="fas fa-user"></i> <span class="show-for-large-up"><?php esc_html_e( 'Sign in', 'turnkey-storefront' ); ?></span>
				<i class="fas fa-sort-down"></i>
			</a>
			<div id="tray-dropdown-sign-in" class="tray-dropdown">
				<div class="account-info row">
					<div class="medium-4 large-3 large-offset-5 columns">
						<h3><?php esc_html_e( 'New Customer', 'turnkey-storefront' ); ?></h3>
						<p>
							<?php
							/* translators: site title */
							printf( esc_html__( 'New to %s? Create an account to get started today.', 'turnkey-storefront' ), get_bloginfo( 'name' ) );
							?>
						</p>
						<a href="<?php echo turnkey_storefront_rstore_url( 'sso', 'account/create' ); ?>" class="link" rel="nofollow"><i class="fas fa-caret-right"></i><?php esc_html_e( 'Create my account', 'turnkey-storefront' ); ?></a>
					</div>
					<div class="medium-4 large-3 columns">
						<h3><?php esc_html_e( 'Registered Users', 'turnkey-storefront' ); ?></h3>
						<p><?php esc_html_e( 'Have an account? Sign in now.', 'turnkey-storefront' ); ?></p>
						<a href="<?php echo turnkey_storefront_rstore_url( 'account' ); ?>" class="button" rel="nofollow"><?php esc_html_e( 'Sign in', 'turnkey-storefront' ); ?></a>
					</div>
				</div>
			</div>
		</div>
		<div class="rstore-welcome-block dropdown" style="display: none;">
			<a id="rstore-shopper-link" class="login-link" href="#" class="dropbtn" >
				<i class="fas fa-user"></i>
				<span class="firstname show-for-large-up"></span>
				<i class="fas fa-sort-down"></i>
			</a>
			<div id="tray-dropdown" class="tray-dropdown">
				<div class="account-info">
					<div class="row">
						<div class="medium-4 large-3 large-offset-5 columns">
							<a href="<?php echo turnkey_storefront_rstore_url( 'account', 'products' ); ?>" class="link" rel="nofollow"><h3 class="logged-in"><span class="firstname"></span>&nbsp;<span class="lastname"></span></h3></a>
							<p><?php esc_html_e( 'Customer #', 'turnkey-storefront' ); ?>: <span class="shopper-id"></span></p>
							<a href="<?php echo turnkey_storefront_rstore_url( 'account', 'products' ); ?>" class="link" rel="nofollow"><i class="fas fa-caret-right"></i> <?php esc_html_e( 'My Products', 'turnkey-storefront' ); ?></a>
							<a href="<?php echo turnkey_storefront_rstore_url( 'account' ); ?>" class="link" rel="nofollow"><i class="fas fa-caret-right"></i> <?php esc_html_e( 'Account Settings', 'turnkey-storefront' ); ?></a>
							<a href="<?php echo turnkey_storefront_rstore_url( 'account', 'billing' ); ?>" class="link" rel="nofollow"><i class="fas fa-caret-right"></i> <?php esc_html_e( 'My Renewals', 'turnkey-storefront' ); ?></a>
							<a class="link logout-link" href="<?php echo turnkey_storefront_rstore_url( 'sso', 'logout' ); ?>" rel="nofollow"><i class="fas fa-caret-right"></i> <?php esc_html_e( 'Log Out', 'turnkey-storefront' ); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="basic-container rstore-cart">
		<div class="rstore-view-cart">
			<a href="<?php echo turnkey_storefront_rstore_url( 'cart' ); ?>" class="checkout-link" rel="nofollow">
				<i class="fas fa-shopping-cart"></i> <span class="show-for-large-up"><?php esc_html_e( 'Checkout Now', 'turnkey-storefront' ); ?></span>(<span class="rstore-cart-count">0</span>)
			</a>
		</div>
	</div>
</div>
