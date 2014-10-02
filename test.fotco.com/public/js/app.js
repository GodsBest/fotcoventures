//app.js
	$(function( $ )
	{
		var LINKS = {};
		(function( app )
		{
			app.init = function()
			{
				app.bound || app.bindings();
			};
			app.bindings = function()
			{
				app.bound = true;
				$(document).on('click', 'a[href="#"]', app.noop);
				$(document).on('submit', 'form', app.noop);
			};
			app.noop = function( e )
			{
				e.preventDefault();
			};
		})( LINKS );
		LINKS.init();
	});

	$(function( $ )
	{
		var PRODUCTS = {};
		(function( app )
		{
			app.init = function()
			{
				app.prodURL = '/xml/denbraven.xml';
				app.container = $('.container.products');
				app.modal = $('#product_order_modal');
				app.bound || app.bindings();
				app.setUp();				
			};
			app.bindings = function()
			{
				app.bound = true;
				$(document).on('click', 'li.product', app.openOrderForm);
				$(document).on('click', 'img[data-color]', app.selectColor);
				$('#place_order_now').on('click', app.placeOrderNow);
			};
			app.setUp = function()
			{
				var 
					div     = $('<div/>'),
					divsm12 = $('<div/>',{class:'col-sm-12'}),
					divfilt = $('<div/>',{class:'btn-group',id:'filters'}),
					filter  = $('<a/>',{class:'btn btn-default'}),
					pcontainer = $('<ul/>',{class:'row list-inline gallery-list',id:'isotope-container'}),
					prodli = $('<li/>',{class:'isotope-item product col-sm-4'}),
					spantmb = $('<span/>',{class:'gallery-thumnail'}),
					spantxt = $('<span/>',{class:'gallery-text'}),
					imgresp = $('<img/>',{class:'img-responsive'}),
					spantit = $('<span/>',{class:'gallery-title'});
				divfilt.html( filter.clone().attr('data-filter','*').text( 'All' ) );	
				$.get( app.prodURL ).done(function(data)
				{
					//console.log( $(data).find('product') );
					var cats = [];
					$.each( $(data).find('product'), function(i,p)
					{
						var 
							cls = $(p).find('category').text().trim().replace(/ /g, '-'),
							img = $(p).find('productImage').text().trim(),
							nam = $(p).find('productName').text().trim(),
							desc = $(p).find('description').text().trim(),
							colors = $(p).find('color');
						pcontainer
						.append( 
							prodli.clone().addClass( cls ).html( 
								$('<a href="javascript:;"/>').html( 
									spantmb.clone().html( imgresp.clone().attr('src',img) )
								).append(
									spantxt.clone().html( spantit.clone().html( nam ) )
									.append( desc )
								).append(
									spantxt.clone().html( 'Available Colors:<br>' )
									.append( 
										$.map( colors, function(color,i)
										{
											return $('<img/>',{src:'/img/' + $(color).text().trim() + '.png','data-color':$(color).text().trim()});
										})
									)
								)
							)						
						);
						cats.indexOf(cls) > -1 || divfilt.append( filter.clone().attr('data-filter','.' + cls).html( $('<span/>',{class:'hidden-xs'}).text( cls ) ) );
						cats.indexOf(cls) > -1 || cats.push( cls );
					});
					app.container.html( divfilt ).append( pcontainer );
					Isotope.init();
				});
			};
			app.openOrderForm = function()
			{
				var
					row = $('<div/>',{class:'row'}),
					fmg = $('<div/>',{class:'form-group col-sm-6'}),
					lbl = $('<label/>'),
					inp = $('<input/>',{class:'form-control',autocomplete:'off'}),
					frm = $('<form/>',{action:'/products/placeorder',method:'POST',role:'form',id:'product_order_form'}),
					fld = 
					[
						{name:'firstname',label:'First Name',a:{type:'text',placeholder:'John'}},
						{name:'lastname',label:'Last Name',a:{type:'text',placeholder:'Doe'}},
						{name:'email',label:'Email Address',a:{type:'email',placeholder:'John.Doe@Company.com'}},
						{name:'phone',label:'Phone Number',a:{type:'tel',placeholder:'+(233) (244) 755-555'}},
						{name:'address',label:'Address',a:{type:'text'}},
						{name:'city',label:'City/Town',a:{type:'text',placeholder:'Accra'}},
						{name:'country',label:'Country',a:{type:'text',placeholder:'Ghana'}},
						{name:'comments',label:'Comments',a:{type:'text'}},
						{name:'colour',label:'Colour',a:{type:'text',readonly:'readonly',title:'Click desired colour below.'}},
						{name:'quantity',label:'Quantity',a:{type:'number',value:1}}
					],
					validation_rules = 
					{
						message: 'This value is not valid',
				        feedbackIcons: 
				        {
				            valid: 'glyphicon glyphicon-ok',
				            invalid: 'glyphicon glyphicon-remove',
				            validating: 'glyphicon glyphicon-refresh'
				        },
				        fields: 
				        {
				            firstname: 
				            {
				                validators: { notEmpty: { message: 'The First Name is required' } }
				            },
				            lastname:
				            {
					         	validators: { notEmpty: { message: 'The Last Name is required' } }   
				            },
				            email:
				            {
					            validators:
					            {
						            notEmpty: { message: 'The E-Mail Address is required' },
						            emailAddress: { message: 'Please enter a valid E-mail Address' }
					            }
				            },
				            phone:
				            {
					         	validators: { notEmpty: { message: 'The Phone Number is required' } }   
				            },
				            colour:
				            {
					         	validators: { notEmpty: { message: 'The Colour is required' } }   
				            }
			            }
					};
				$.each(fld,function(i,field)
				{
					var field2 = (i+1 > fld.length) ? {name:'comments',label:'Comments'} : fld[i+1];
					i%2 !== 0 || frm.append(
						row.clone().append(
							fmg.clone().append(
								lbl.clone().text(field.label).append(': ')
							).append(
								inp.clone().attr({name:field.name}).attr(field.a)
							)
						).append(
							fmg.clone().append(
								lbl.clone().text(field2.label).append(': ')
							).append(
								inp.clone().attr({name:field2.name}).attr(field2.a)
							)
						)
					);	
				});
				app.modal.find('div.modal-body')
				.html( row.clone().html( $('a',this).html() ) ).find('>div.row > span').addClass('col-sm-6').end()
				.prepend( frm ).end().modal('show');				
				app.form = $(frm);
				app.form.bootstrapValidator( validation_rules )
				.append( $(':hidden[name=_token]',app.modal) );
				$('img[data-color]',app.modal)[0].click();
			};
			app.selectColor = function()
			{
				$(':input[name=colour]').val( $(this).data('color').toUpperCase() );	
			};
			app.placeOrderNow = function()
			{
				$.post( app.form.attr('action'), app.form.serialize() ).done(function(data)
				{
					if( console )
					{
						console.log( data );
					}
						
				});
			};
		})( PRODUCTS );
		$('.container.products').length === 0 || PRODUCTS.init();	
	});