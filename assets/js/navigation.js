/* global jQuery */

( function( $ ) {
	'use strict';

	$( document ).ready( function( $ ) {
		function toggle_login_tray( e ) {
			$( '#tray-dropdown-sign-in' ).slideToggle();
			$( '.rstore-login .login-link i.tray' ).toggleClass( 'uxicon-drop-down' );
			$( '.rstore-login .login-link i.tray' ).toggleClass( 'uxicon-drop-up' );
			e.preventDefault();
		}

		function toggle_shopper_tray( e ) {
			$( '#tray-dropdown' ).slideToggle();
			$( '.rstore-login .login-link i.tray' ).toggleClass( 'uxicon-drop-down' );
			$( '.rstore-login .login-link i.tray' ).toggleClass( 'uxicon-drop-up' );
			e.preventDefault();
		}

		$( '#rstore-shopper-link' ).on( 'click', function ( e ) {
			toggle_shopper_tray( e );
		} );

		$( '#rstore-shopper-close' ).on( 'click', function ( e ) {
			toggle_shopper_tray( e );
		} );

		$( '#rstore-login-link' ).on( 'click', function ( e ) {
			toggle_login_tray( e );
		} );

		$( '#rstore-login-close' ).on( 'click', function ( e ) {
			toggle_login_tray( e );
		} );

		$( '.utility-bar .rstore-cart-count' ).bind( 'DOMSubtreeModified', function () {
			if ( $( '.utility-bar .rstore-cart-count' ).text() === '0' ) {
				$( '.utility-bar .rstore-cart-count-wrapper' ).hide();
			}
            else {
				$( '.utility-bar .rstore-cart-count-wrapper' ).show();
			}
		} );

		$( '.mobile-menu-close' ).on( 'click', function() {
			$( '#site-navigation' ).add( '#menu-toggle' ).toggleClass( 'open' );
		} );
	} );
}( jQuery ) );
