/**
 * Agnsee — soumission AJAX du formulaire de contact vers FormSubmit.co.
 */
( function () {
	'use strict';

	var form = document.getElementById( 'agnsee-contact-form' );
	var messageBox = document.getElementById( 'contact-form-message' );
	var submitBtn = document.getElementById( 'contact-submit-btn' );

	if ( ! form ) {
		return;
	}

	var messages = {
		success: {
			fr: 'Merci ! Votre message a été envoyé, nous vous contacterons rapidement.',
			en: 'Thank you! Your message has been sent, we will contact you shortly.',
			es: '¡Gracias! Tu mensaje ha sido enviado, te contactaremos pronto.',
		},
		error: {
			fr: 'Une erreur est survenue. Veuillez réessayer.',
			en: 'An error occurred. Please try again.',
			es: 'Ocurrió un error. Por favor intenta de nuevo.',
		},
		required: {
			fr: 'Veuillez remplir tous les champs requis.',
			en: 'Please fill in all required fields.',
			es: 'Por favor completa todos los campos requeridos.',
		},
	};

	function currentLang() {
		var lang = document.documentElement.getAttribute( 'data-lang' );
		return messages.success[ lang ] ? lang : 'fr';
	}

	function showMessage( type, isError ) {
		messageBox.textContent = messages[ type ][ currentLang() ];
		messageBox.className = isError ? 'form-error' : 'form-success';
		messageBox.style.display = 'block';
	}

	form.addEventListener( 'submit', function ( e ) {
		e.preventDefault();

		var name = form.querySelector( '#name' ).value.trim();
		var email = form.querySelector( '#email' ).value.trim();
		var message = form.querySelector( '#message' ).value.trim();

		if ( ! name || ! email || ! message ) {
			showMessage( 'required', true );
			return;
		}

		submitBtn.disabled = true;

		fetch( form.getAttribute( 'action' ), {
			method: 'POST',
			headers: { Accept: 'application/json' },
			body: new FormData( form ),
		} )
			.then( function ( response ) {
				if ( ! response.ok ) {
					throw new Error( 'FormSubmit error' );
				}
				submitBtn.disabled = false;
				showMessage( 'success', false );
				form.reset();
			} )
			.catch( function () {
				submitBtn.disabled = false;
				showMessage( 'error', true );
			} );
	} );
} )();
