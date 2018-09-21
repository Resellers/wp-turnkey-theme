<?php
/**
 * The template for displaying top nav menu.
 *
 * @package Turnkey
 * @since   1.0.0
 */

?>
<div class="rstore-top-nav">
	<?php echo apply_filters( 'turnkey_support_phone', '<div class="basic-container rstore-support-block"></div>' ); ?>
	<div class="basic-container rstore-help">
		<a href="<?php echo rstore()->api->url( 'www', 'help?pl_id={pl_id}&path=' ); ?>" target="_blank" class="help-link" rel="nofollow"><i class="fas fa-question-circle"></i> <span class="show-for-large-up"><?php esc_html_e( 'Help', 'turnkey' ); ?></span></a>
	</div>
	<div class="basic-container rstore-login">
		<div class="rstore-login-block">
			<a id="rstore-login-link" class="login-link" href="#" rel="nofollow">
				<i class="fas fa-user"></i> <span class="show-for-large-up">Sign In</span>
				<i class="fas fa-sort-down"></i>
			</a>
			<div id="tray-dropdown-sign-in" class="tray-dropdown">
				<div class="account-info row">
					<div class="medium-4 large-3 large-offset-5 columns">
						<h3><?php esc_html_e( 'New Customer', 'turnkey' ); ?></h3>
						<p>
							<?php
							/* translators: site title */
							printf( esc_html__( 'New to %s? Create an account to get started today.', 'turnkey' ), get_bloginfo( 'name' ) );
							?>
						</p>
						<a href="<?php echo rstore()->api->url( 'sso', 'account/create' ); ?>" class="link" rel="nofollow"><i class="fas fa-caret-right"></i><?php esc_html_e( 'Create my account', 'turnkey' ); ?></a>
					</div>
					<div class="medium-4 large-3 columns">
						<h3><?php esc_html_e( 'Registered Users', 'turnkey' ); ?></h3>
						<p><?php esc_html_e( 'Have an account? Sign in now.', 'turnkey' ); ?></p>
						<a href="<?php echo rstore()->api->url( 'account' ); ?>" class="button" rel="nofollow"><?php esc_html_e( 'Sign in', 'turnkey' ); ?></a>
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
							<a href="<?php echo rstore()->api->url( 'account', 'products' ); ?>" class="link" rel="nofollow"><h3 class="logged-in"><span class="firstname"></span>&nbsp;<span class="lastname"></span></h3></a>
							<p><?php esc_html_e( 'Customer #', 'turnkey' ); ?>: <span class="shopper-id"></span></p>
							<a href="<?php echo rstore()->api->url( 'account', 'products' ); ?>" class="link" rel="nofollow"><i class="fas fa-caret-right"></i> <?php esc_html_e( 'My Products', 'turnkey' ); ?></a>
							<a href="<?php echo rstore()->api->url( 'account' ); ?>" class="link" rel="nofollow"><i class="fas fa-caret-right"></i> <?php esc_html_e( 'Account Settings', 'turnkey' ); ?></a>
							<a href="<?php echo rstore()->api->url( 'account', 'billing' ); ?>" class="link" rel="nofollow"><i class="fas fa-caret-right"></i> <?php esc_html_e( 'My Renewals', 'turnkey' ); ?></a>
							<a class="link logout-link" href="<?php echo rstore()->api->url( 'sso', 'logout' ); ?>" rel="nofollow"><i class="fas fa-caret-right"></i> <?php esc_html_e( 'Log Out', 'turnkey' ); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="basic-container rstore-cart">
		<div class="rstore-view-cart">
			<a href="<?php echo rstore()->api->url( 'cart' ); ?>" class="checkout-link" rel="nofollow">
				<i class="fas fa-shopping-cart"></i> <span class="show-for-large-up"><?php esc_html_e( 'Checkout Now', 'turnkey' ); ?></span>(<span class="rstore-cart-count">0</span>)
			</a>
		</div>
	</div>
</div>
