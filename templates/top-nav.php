<?php
/**
 * The template for displaying utility bar.
 * This menu will only display if the Reseller Store plugin is activated
 *
 * @package Turnkey Storefront
 * @since   1.0.0
 */

?>
<div class="utility-bar">
	<div title="<?php esc_html_e( 'Contact Us', 'turnkey-storefront' ); ?>" class="<?php echo esc_attr( apply_filters( 'turnkey_storefront_support_phone_classes', 'basic-container' ) ); ?>" ></div>
	<div class="basic-container rstore-help">
		<a href="<?php turnkey_storefront_rstore_url( 'www', 'help?pl_id={pl_id}&path=' ); ?>" target="_blank" class="help-link" rel="nofollow"><span class="show-for-large-up"><?php esc_html_e( 'Help', 'turnkey-storefront' ); ?></span></a>
	</div>
	<div class="basic-container rstore-login">
		<div class="rstore-login-block">
			<a id="rstore-login-link" class="login-link" href="#" rel="nofollow">
				<i class="uxicon uxicon-user"></i>
				<span class="show-for-large-up"><?php esc_html_e( 'Sign in', 'turnkey-storefront' ); ?><i class="uxicon tray uxicon-drop-down"></i></span>
			</a>
			<div id="tray-dropdown-sign-in" class="tray-dropdown">
				<button id="rstore-login-close" class="rstore-close-button" ></button>
				<div class="account-info row">
					<div class="medium-5 large-3 columns">
						<div class="h3"><?php esc_html_e( 'Registered Users', 'turnkey-storefront' ); ?></div>
						<p><?php esc_html_e( 'Have an account? Sign in now.', 'turnkey-storefront' ); ?></p>
						<a href="<?php turnkey_storefront_rstore_url( 'account' ); ?>" class="button" rel="nofollow"><?php esc_html_e( 'Sign in', 'turnkey-storefront' ); ?></a>
					</div>
					<div class="medium-7 large-4 columns">
						<div class="h3"><?php esc_html_e( 'New Customer', 'turnkey-storefront' ); ?></div>
						<p>
							<?php
							/* translators: site title */
							printf( esc_html__( 'New to %s? Create an account to get started today.', 'turnkey-storefront' ), esc_html( get_bloginfo( 'name' ) ) );
							?>
						</p>
						<a href="<?php turnkey_storefront_rstore_url( 'sso', 'account/create' ); ?>" class="button btn-default-purchase" rel="nofollow"><i class="uxicon uxicon-car"></i><?php esc_html_e( 'Create my account', 'turnkey-storefront' ); ?></a>
					</div>
				</div>
			</div>
		</div>
		<div class="rstore-welcome-block dropdown" style="display: none;">
			<a id="rstore-shopper-link" class="login-link" href="#" class="dropbtn" >
				<i class="uxicon uxicon-user"></i>
				<span class="firstname show-for-large-up"></span>
				<span class="show-for-large-up"><i class="uxicon tray uxicon-drop-down"></i></span>
			</a>
			<div id="tray-dropdown" class="tray-dropdown">
				<button id="rstore-shopper-close" class="rstore-close-button" ></button>
				<div class="account-info row">
					<div class="large-offset-5 columns">
						<a href="<?php turnkey_storefront_rstore_url( 'account', 'products' ); ?>" class="link" rel="nofollow"><div class="h3 logged-in"><span class="firstname"></span>&nbsp;<span class="lastname"></span></div></a>
						<p>
							<strong><?php esc_html_e( 'Customer #:', 'turnkey-storefront' ); ?> </strong><span class="shopper-id"></span> |
							<strong><?php esc_html_e( 'PIN:', 'turnkey-storefront' ); ?></strong>
							<a href="<?php turnkey_storefront_rstore_url( 'account', 'security/login-info/edit' ); ?>" class="pin-link" rel="nofollow"><?php esc_html_e( 'View', 'turnkey-storefront' ); ?></a>
						</p>
						<a href="<?php turnkey_storefront_rstore_url( 'account', 'products' ); ?>" class="link quick-links" rel="nofollow"><i class="uxicon uxicon-drop-right"></i> <?php esc_html_e( 'My Products', 'turnkey-storefront' ); ?></a>
						<a href="<?php turnkey_storefront_rstore_url( 'account' ); ?>" class="link quick-links" rel="nofollow"><i class="uxicon uxicon-drop-right"></i> <?php esc_html_e( 'Account Settings', 'turnkey-storefront' ); ?></a>
						<a href="<?php turnkey_storefront_rstore_url( 'account', 'billing' ); ?>" class="link quick-links" rel="nofollow"><i class="uxicon uxicon-drop-right"></i> <?php esc_html_e( 'My Renewals', 'turnkey-storefront' ); ?></a>
						<a href="<?php turnkey_storefront_rstore_url( 'account', 'products' ); ?>" class="button my-account-button" rel="nofollow"><?php esc_html_e( 'Visit My Account', 'turnkey-storefront' ); ?></a>
						<a class="link logout-link" href="<?php turnkey_storefront_rstore_url( 'sso', 'logout' ); ?>" rel="nofollow"><?php esc_html_e( 'Log Out', 'turnkey-storefront' ); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="basic-container rstore-cart">
		<div class="rstore-view-cart">
			<a href="<?php turnkey_storefront_rstore_url( 'cart' ); ?>" class="checkout-link" rel="nofollow">
				<i class="uxicon uxicon-cart"></i> <span class="show-for-large-up"></span><span class="rstore-cart-count-wrapper" style="display:none;">(<span class="rstore-cart-count"></span>)</span>
			</a>
		</div>
	</div>
</div>
