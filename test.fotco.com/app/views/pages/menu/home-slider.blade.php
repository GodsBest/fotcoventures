@extends('layouts.store-front')

@section('page-title')
	HOME
@stop

@section('content')  
  <div class="wrapper">    
    @include('navigation.showcase-slide')
    <div class="container">
      <!-- Services
        ================ -->
      <div class="row">
        <!-- Welcome message
            ================= -->
        <div class="col-md-12">
        <div class="block-header">
          <h2>
            <span class="title">Welcome Message</span><span class="decoration"></span><span class="decoration"></span><span class="decoration"></span>
          </h2>
        </div>
          <img src="img/dash8.png" class="img-about img-responsive" alt="About">
          <p>
            Welcome to Fotco Ventures! We are here to serve as a solution to your knowledge gap.
            <br /><br />
            At Fotco Ventures we desire to reach out positively to society with knowledge and services filling in gaps identified in development by serving as a link pin to Africa and West Africa in particular.
          </p>
          <div class="info-board info-board-blue info-board-right">
            <h4>Important info</h4>
            <p>We are excited to announce the arrival of Denbraven Sealants in Ghana. Fotco Ventures is the only distributor of Denbraven Sealants in Ghana and the whole of West Africa.</p>
          </div>
          <a class="btn btn-lg btn-success" data-toggle="modal" href="#view_pocket_guide" data-image="/img/Den-Braven-Pocket-Guide.png">
          	<i class="fa fa-eye fa-2x pull-left"></i> Click Here For The<br> Pocket Guide
          </a>
          <a class="btn btn-lg btn-success" data-toggle="modal" href="#view_pocket_guide" data-image="/img/pocket-guide.png">
          	<i class="fa fa-eye fa-2x pull-left"></i> Click Here To View The<br>Product Pocket Guide
          </a>
        </div>
        
      </div>
    </div>
  </div>
        
		<!-- Modal -->
		<div class="modal fade" id="view_pocket_guide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <!--div class="modal-content"-->
		      <!--div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-book"></i> Den Braven Product Pocket Guide</h4>
		      </div-->
		      <div class="modal-body">
			  	   .... Loading ... .. .
		      </div>
		      <!--div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div-->
		    <!--/div-->
		  </div>
		</div>
		<!-- Modal -->  
        
@stop