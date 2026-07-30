/**
 * Agancy — soumission AJAX du formulaire de contact vers FluentCRM.
 */
( function () {
	'use strict';

	if ( typeof agancyContact === 'undefined' ) {
		return;
	}

	var form = document.getElementById( 'agancy-contact-form' );
	var messageBox = document.getElementById( 'contact-form-message' );
	var submitBtn = document.getElementById( 'contact-submit-btn' );

	if ( ! form ) {
		return;
	}

	function showMessage( text, isError ) {
		messageBox.textContent = text;
		messageBox.className = isError ? 'form-error' : 'form-success';
		messageBox.style.display = 'block';
	}

	form.addEventListener( 'submit', function ( e ) {
		e.preventDefault();

		submitBtn.disabled = true;

		var formData = new FormData( form );
		formData.append( 'action', 'agancy_submit_contact' );
		formData.append( 'nonce', agancyContact.nonce );

		fetch( agancyContact.ajaxUrl, {
			method: 'POST',
			credentials: 'same-origin',
			body: formData,
		} )
			.then( function ( response ) {
				return response.json();
			} )
			.then( function ( data ) {
				submitBtn.disabled = false;
				if ( data.success ) {
					showMessage( data.data.message, false );
					form.reset();
				} else {
					showMessage( data.data.message, true );
				}
			} )
			.catch( function () {
				submitBtn.disabled = false;
				showMessage( 'Une erreur est survenue. Veuillez réessayer. / An error occurred. Please try again.', true );
			} );
	} );
} )();
