<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <base href="/public/" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/img/favicon.ico">

    <title>
    @section('page-title')
    @show()
     - FOTCO VENTURES
    </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/elements.css" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <link href="fonts/font-awesome-4.0.3/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/css/bootstrapvalidator.min.css" rel="stylesheet"/>
    
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,400italic,600italic,700italic|Courgette' rel='stylesheet' type='text/css'/>
    
    <!-- Custom Script -- add your styles here -->
    <link href="/css/custom.css" rel="stylesheet"/>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  @include('navigation.top-nav')
    
  @yield('content')

	<!-- Modal -->
	<div class="modal fade" id="send_email_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope-o"></i> CONTACT US</h4>
	      </div>
	      <div class="modal-body">
		  	@include('pages.forms.contact_us')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary submit" data-form="#send_email_form">Send Request</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal -->  
      
  	@include('navigation.footer')
  	@include('navigation.legal')
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/scrolltopcontrol.js"></script><!-- Scroll to top javascript -->
    <script src="isotope/js/jquery.isotope.min.js"></script><!-- Isotope gallery -->
    <script src="js/isotope-custom.js"></script><!-- Isotope gallery custom file-->
    <script src="/js/all.app.js"></script>
    @yield('page-scripts')
  </body>
</html>