/**
 * Agnsee — bascule FR/EN via cookie agnsee_lang.
 */
( function () {
	'use strict';

	if ( typeof agnseeLang === 'undefined' ) {
		return;
	}

	var buttons = document.querySelectorAll( '[data-lang-btn]' );

	function setLang( lang ) {
		document.documentElement.setAttribute( 'data-lang', lang );
		document.body.setAttribute( 'data-lang', lang );

		var expires = new Date();
		expires.setFullYear( expires.getFullYear() + 1 );
		document.cookie = 'agnsee_lang=' + lang + '; expires=' + expires.toUTCString() + '; path=/';

		buttons.forEach( function ( btn ) {
			btn.classList.toggle( 'is-active', btn.getAttribute( 'data-lang-btn' ) === lang );
		} );

		var formData = new FormData();
		formData.append( 'action', 'agnsee_set_lang' );
		formData.append( 'nonce', agnseeLang.nonce );
		formData.append( 'lang', lang );

		fetch( agnseeLang.ajaxUrl, {
			method: 'POST',
			credentials: 'same-origin',
			body: formData,
		} );
	}

	buttons.forEach( function ( btn ) {
		btn.addEventListener( 'click', function () {
			setLang( btn.getAttribute( 'data-lang-btn' ) );
		} );
	} );
} )();
