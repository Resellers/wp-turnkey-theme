/* global jQuery, ajaxurl, turnkeyStorefrontAdmin */
( function( wp, $ ) {
	'use strict';

	if ( ! wp ) {
		return;
	}

	$( function() {
		$( document ).on( 'click', '.turnkey-storefront-notice-nux .notice-dismiss', function() {
			$.ajax( {
				type: 'POST',
				url: ajaxurl,
				data: { nonce: turnkeyStorefrontAdmin.nonce, action: 'turnkey_storefront_dismiss_notice' },
				dataType: 'json'
			} );
		} );

		$( document ).on( 'click', '.turnkey-storefront-install-now', function( event ) {
			var $button = $( event.target );

			if ( $button.hasClass( 'activate-now' ) ) {
				return true;
			}

			event.preventDefault();

			if ( $button.hasClass( 'updating-message' ) || $button.hasClass( 'button-disabled' ) ) {
				return;
			}

			if ( wp.updates.shouldRequestFilesystemCredentials && ! wp.updates.ajaxLocked ) {
				wp.updates.requestFilesystemCredentials( event );

				$( document ).on( 'credential-modal-cancel', function() {
					var $message = $( '.turnkey-storefront-install-now.updating-message' );

					$message
						.removeClass( 'updating-message' )
						.text( wp.updates.l10n.installNow );

					wp.a11y.speak( wp.updates.l10n.updateCancel, 'polite' );
				} );
			}

			wp.updates.installPlugin( {
				slug: $button.data( 'slug' )
			} );
		} );
	} );
}( window.wp, jQuery ) );
