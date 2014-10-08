@extends('layouts.default')
@section('content')
	<div class="container" style="height:100px;"></div>
	<div class="container">
		<h1>Products</h1>

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="/assets/img/foams_up.png" alt="Generic placeholder image" style="width: 280px; height: 280px;">
          <h2>Foams</h2>
          <p>Polyurethane foam (OCF) is a spray-applied insulating foam that is installed as a liquid and then expands many times its original size.</p>
			<h3>Advantages</h3>
			<ul style="text-align:left;">
			<li>good adhesion to most common substrates</li>
			<li>restores the thermal insulation (ʎ-value ± 30 – 35 mW /m.K)</li>
			<li>contributes to noise reduction</li>
			<li>air and water tight</li>
			<li>very low density = high volume from one canister</li>
			<li>seal and fills all kinds of shapes</li>
			<li>easy to use</li>
			</ul>
          <p><a class="btn btn-default" href="/staging/products" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="/assets/img/silicons_up.png" alt="Generic placeholder image" style="width: 280px; height: 280px;">
          <h2>Silicones</h2>
          <p>Silicones are strong, flexible and can be used in many different applications. Den Braven is one of the leading silicone manufactures. </p>
			<h3>Advantages</h3>
			<ul style="text-align:left;">
			<li>excellent adhesion to glass, painted wood and ceramic surfaces</li>
			<li>Fast curing</li>
			<li>high temperature resistance</li>
			<li>no strong odour</li>
			<li>excellent UV resistance</li>
			</ul>
          <p><a class="btn btn-default" href="/staging/products" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="/assets/img/sealants_up.png" alt="Generic placeholder image" style="width: 280px; height: 280px;">
          <h2>Hybrid Sealants &amp; Adhesives</h2>
		    <p>Hybrids combine all benefits from both silicone based products and polyurethane based products. Hybrids are isocyanate-free, solvent-free and silicone-free.</p>
		    <h3>Advantages</h3>
		    <ul style="text-align:left;">
		    <li>good adhesion to most common substrates</li>
		    <li>hydrophilic; even adhesion to damp surfaces</li>
		    <li>high mechanical resistance</li>
		    <li>Free from isocyanate, solvents and silicones</li>
		    <li>good paintable performances</li>
		    </ul>
          <p><a class="btn btn-default" href="/staging/products" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
	  
	  @if( $info = fopen("http://www.denbraven.com/en/products/technologies/ms-polymers/high-tack_121/", "rb") )
		<!--{x{ stream_get_contents( $info ) }x}-->
	  @endif
	</div>
@stop