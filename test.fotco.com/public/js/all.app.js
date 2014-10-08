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
		})( LINKS );
		LINKS.init();
	});