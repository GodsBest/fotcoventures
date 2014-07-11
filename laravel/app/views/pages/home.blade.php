@extends('layouts.default')
@section('content')
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <!--img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <img src="/assets/img/sealants_up.png" height="100" /-->
          <div class="container">
            <div class="carousel-caption">
              <h1>Foams</h1>
              <p>Polyurethane foam (OCF) is a spray-applied insulating foam that is installed as a liquid and then expands many times its original size.</p>
              <p><a class="btn btn-lg btn-primary" href="/staging/products" role="button">Explore</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <!--img src="data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <img src="/assets/img/foams_up.png" height="100" /-->
          <div class="container">
            <div class="carousel-caption">
              <h1>Silicones</h1>
              <p>Silicones are strong, flexible and can be used in many different applications. Den Braven is one of the leading silicone manufactures.</p>
              <p><a class="btn btn-lg btn-primary" href="/staging/products" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <!--img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <img src="/assets/img/silicons_up.png" height="100" /-->
          <div class="container">
            <div class="carousel-caption">
              <h1>Hybrid Sealants &amp; Adhesives</h1>
              <p>Hybrids combine all benefits from both silicone based products and polyurethane based products. Hybrids are isocyanate-free, solvent-free and silicone-free.</p>
              <p><a class="btn btn-lg btn-primary" href="/staging/products" role="button">Details</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <!--img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <img src="/assets/img/silicons_up.png" height="100" /-->
          <div class="container">
            <div class="carousel-caption">
              <h1>PU Sealants &amp; Adhesives</h1>
              <p>Polyurethane is an organic compound with particularly good moisture- and corrosion-resistance characteristics. Den Braven provides a wide range of polyurethane sealants and adhesives.</p>
              <p><a class="btn btn-lg btn-primary" href="/staging/products" role="button">Explore</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <!--img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <img src="/assets/img/silicons_up.png" height="100" /-->
          <div class="container">
            <div class="carousel-caption">
              <h1>Adhesives (others)</h1>
              <p>Polyurethane is an organic compound with particularly good moisture- and corrosion-resistance characteristics. Den Braven provides a wide range of polyurethane sealants and adhesives.</p>
              <p><a class="btn btn-lg btn-primary" href="/staging/products" role="button">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <!--img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <img src="/assets/img/silicons_up.png" height="100" /-->
          <div class="container">
            <div class="carousel-caption">
              <h1>Acrylic Sealants &amp; Adhesives</h1>
              <p>Acrylic is a synthetic protective material used in a wide range of applications. It seals all types of materials to make them gap-free and paintable.</p>
              <p><a class="btn btn-lg btn-primary" href="/staging/products" role="button">Details</a></p>
            </div>
          </div>
        </div>        
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

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


      <!-- START THE FEATURETTES -->

      <!--hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider"-->

      <!-- /END THE FEATURETTES -->    
@stop
