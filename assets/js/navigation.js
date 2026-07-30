/**
 * Agnsee — navigation sticky, hamburger, sous-menu mobile.
 */
( function () {
	'use strict';

	var header = document.getElementById( 'site-header' );
	var hamburger = document.getElementById( 'hamburger-toggle' );
	var mobileNav = document.getElementById( 'mobile-nav' );

	function onScroll() {
		if ( ! header ) {
			return;
		}
		if ( window.scrollY > 8 ) {
			header.classList.add( 'is-scrolled' );
		} else {
			header.classList.remove( 'is-scrolled' );
		}
	}

	window.addEventListener( 'scroll', onScroll, { passive: true } );
	onScroll();

	if ( hamburger && mobileNav ) {
		hamburger.addEventListener( 'click', function () {
			var isOpen = mobileNav.classList.toggle( 'is-open' );
			hamburger.classList.toggle( 'is-active', isOpen );
			hamburger.setAttribute( 'aria-expanded', isOpen ? 'true' : 'false' );
			document.body.style.overflow = isOpen ? 'hidden' : '';
		} );
	}

	var submenuToggles = document.querySelectorAll( '.mobile-submenu-toggle' );
	submenuToggles.forEach( function ( toggle ) {
		toggle.addEventListener( 'click', function () {
			var submenu = toggle.nextElementSibling;
			if ( ! submenu ) {
				return;
			}
			var isOpen = submenu.classList.toggle( 'is-open' );
			toggle.setAttribute( 'aria-expanded', isOpen ? 'true' : 'false' );
		} );
	} );
} )();
