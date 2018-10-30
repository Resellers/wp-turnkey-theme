/* global jQuery */

( function( $ ) {
	'use strict';

	$( document ).ready( function( $ ) {
		$( '#rstore-shopper-link' ).on( 'click', function () {
			$( '#tray-dropdown' ).toggleClass( 'show' );
			$( '.rstore-login .login-link i.fas' ).toggleClass( 'fa-sort-down' );
			$( '.rstore-login .login-link i.fas' ).toggleClass( 'fa-sort-up' );
		} );

		$( '#rstore-login-link' ).on( 'click', function () {
			$( '#tray-dropdown-sign-in' ).toggleClass( 'show' );
			$( '.rstore-login .login-link i.fas' ).toggleClass( 'fa-sort-down' );
			$( '.rstore-login .login-link i.fas' ).toggleClass( 'fa-sort-up' );
		} );
	} );
}( jQuery ) );
