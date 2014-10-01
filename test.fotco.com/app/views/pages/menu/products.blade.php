@extends('layouts.store-front')

@section('page-title')
	Products &amp; Services
@stop

@section('content')    
<!-- Main body
================== -->
  <div class="wrapper">
    <div class="section-header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <!-- Remove the .animated class if you don't want things to move -->
            <h1 class="animated slideInLeft"><span>Products</span></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="hl text-center top-zero"><i class="fa fa-plane"></i> Distribution &amp; Export</h1>
          <p class="lead text-center">Export and distribution of Den braven Sealants throughout West Africa. For more information, visit the <a href="http://www.denbraven.com/en/" target="_blank">Netherlands site</a> and <a href="http://www.denbraven.co.za/" target="_blank">South Africa site</a>.</p>
        </div>
      </div>
     </div>
    <div class="container products"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="hl text-center top-zero"><i class="fa fa-building-o"></i> Housing</h1>
          <p class="lead text-center">Estate housing projects in Ghana.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h1 class="hl text-center top-zero"><i class="fa fa-briefcase"></i> Consultancy</h1>
          <p class="lead text-center">
          	<ol>
	          	<li class="col-sm-3">Architecture
	          		<ul>
	          			<li>Architectural design</li>
	          			<li>Urban design & management</li>
	          			<li>Medical facilities,</li>
	          			<li>Institutions,</li>
	          			<li>Commercial projects and </li>
	          			<li>Individual houses</li>
	          			<li>General construction</li>
	          		</ul>
	          	</li>
	          	<li class="col-sm-3">Survey
	          		<ul>
	          			<li>land survey looking at general survey work,</li>
	          			<li>land acquisition</li>
	          			<li>cadastral survey,</li>
	          			<li>registration of lands</li>
	          			<li>other documentation</li>
	          			<li>Consultation and Advisory.</li>
	          		</ul>
	          	</li>
	          	<li class="col-sm-3">Environment management
	          		<ul>
	          			<li>Urban design</li>
	          			<li>Advocacy</li>
	          			<li>mapping, </li>
	          			<li>adaptation</li>
	          			<li>climate change etc</li>
	          		</ul>
	          	</li>
	          	<li class="col-sm-3">Education
	          		<ul>
	          			<li>Training</li>
	          			<li>Research</li>
	          			<li>construction management</li>
	          			<li>survey techniques</li>
	          		</ul>
	          	</li>
			 </ol>
          </p>
        </div>
      </div>
      <div class="row">
      	<div class="clearfix"></div>
        <div class="col-md-12">
          <h1 class="hl text-center top-zero"><i class="fa fa-heart"></i> Charity</h1>
          <p class="lead text-center">
          	We believe in corporate social responsibility.
          	<ol>
          		<li class="col-sm-4">Projects: Mosaic project (***** link to foundation for technical corporation web site)
          			<ul>
          				<li>Providing training, livelihood and employment</li>
          				<li>Project is aimed to be self sustaining  and cyclical.</li>
          				<li>Thankful hands work on projects acquired and get paid for it.</li>
          				<li>They are also encouraged and assisted to set up businesses and projects on their own.</li>
          			</ul>
          		</li>
          		<li class="col-sm-4">Sponsorship
          			<ul>
          				<li>Needy fund</li>
          				<li>Gender development</li>
          			</ul>
          		</li>
          		<li class="col-sm-4">Creative Organic Concept 'COC' project(organic farming)
          			<ul>
          				<li>*****Check us out on this link</li>
          			</ul>
          		</li>
          	</ol>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="about-btn">
          </div>
        </div>
      </div>
    </div>
  </div>
  
	<!-- Modal -->
	<div class="modal fade" id="product_order_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-check-square-o"></i> Product Order Form</h4>
	      </div>
	      <div class="modal-body">
	        ... Please enable JavaScript or use a different browser ....
	      </div>
	      {{ Form::token() }}
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary" id="place_order_now">Place Order</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal -->
@stop