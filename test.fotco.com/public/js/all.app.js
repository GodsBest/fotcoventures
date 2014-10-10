    //all.app.js
	$(function( $ )
	{
		var LINKS = {};
		(function( app )
		{
			app.init = function()
			{
				app.modal = $('#send_email_modal');
				app.form  = $('#send_email_form');
				app.subscribe = $('#fotco_newsletter_form');
				app.bound || app.bindings();
			};
			app.bindings = function()
			{
				app.bound = true;
				$(document).on('click', 'a[href="#"]', app.noop);
				$(document).on('submit', 'form', app.noop);
				$(document).on('click', 'a[href="mailto:fotcovgp@gmail.com"],a[href="mailto:fotcovgp@yahoo.com"]', app.openSendEmailForm);
				$(document).on('click', '.submit[data-form]', app.submitForm);
				app.form.on('submit', app.sendEmail);
				app.subscribe.on('submit',app.newsletterSubscribe);
				app.modal.on('show.bs.modal', app.hideButton);
				$('#view_pocket_guide').on('show.bs.modal', app.showImage);
			};
			app.noop = function( e )
			{
				e.preventDefault();
			};
			app.openSendEmailForm = function( e )
			{
				e.preventDefault();
				app.modal.modal('show');
			};
			app.submitForm = function()
			{
				$( $(this).data('form') ).submit();
			};
			app.sendEmail = function( e )
			{
				e.preventDefault()
				$.post( app.form.attr('action'), app.form.serialize() ).done(function( data )
				{
					console.log( data );
				});
			};
			app.newsletterSubscribe = function( e )
			{
				e.preventDefault();
				$.post( $(this).attr('action'), $(this).serialize() )
				.done(function( data )
				{
					console.log( data );
				})
				.fail(function( resp )
				{
					console.log( resp );
				});
			};
			app.hideButton = function()
			{
				app.modal.find('.send-request').hide();
			};
			app.showImage = function( e )
			{
				
				$(this).find('.modal-body').addClass( 'text-center' ).html( $('<img/>',{src:$(e.relatedTarget).data('image'),width:$(this).find('.modal-dialog').width() * 0.9}) );
			};	
		})( LINKS );
		LINKS.init();
	});