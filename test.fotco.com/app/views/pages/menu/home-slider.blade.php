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
      <!--div class="row">
        <div class="col-md-12">
          <div class="services">
            <ul>
                <li>
                  <i class="fa fa-briefcase fa-3x"></i>
                  <p>Lorem ipsum dolor sit amet<br /><a href="#">Action...</a></p>
                </li>
                <li>
                  <i class="fa fa-cloud-upload fa-3x"></i>
                  <p>Lorem ipsum dolor sit amet<br /><a href="#">Action...</a></p>
                </li>
                <li>
                  <i class="fa fa-laptop fa-3x"></i>
                  <p>Lorem ipsum dolor sit amet<br /><a href="#">Action...</a></p>
                </li>
                <li>
                  <i class="fa fa-gears fa-3x"></i>
                  <p>Lorem ipsum dolor sit amet<br /><a href="#">Action...</a></p>
                </li>
                <li>
                  <i class="fa fa-compass fa-3x"></i>
                  <p>Lorem ipsum dolor sit amet<br /><a href="#">Action...</a></p>
                </li>
            </ul>
            <div class="clearfix"></div>
          </div>
        </div>
      </div-->
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
            <p>We are excited to announce the arrival of Denbraven Sealants in Ghana. Fotco Ventures is the only distributor of Danbraven Sealants in Ghana and the whole of West Africa.</p>
          </div>
        </div>
        
      <!-- Recent Works
        =================== --
      <div class="row">
        <div class="col-md-12 block-header">
          <h2>
            <span class="title">Recent Works</span><span class="decoration"></span><span class="decoration"></span><span class="decoration"></span>
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img src="img/works1.jpg" class="img-responsive" alt="...">
            <div class="visit"><a href="#"><i class="fa fa-question-circle"></i> More details...</a></div>
            <div class="caption">
              <h4>Project #1</h4>
                <div class="rating">
                  <i class="fa fa-star"></i> 
                  <i class="fa fa-star"></i> 
                  <i class="fa fa-star"></i> 
                  <i class="fa fa-star"></i> 
                  <i class="fa fa-star"></i>
                </div>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img src="img/works2.jpg" class="img-responsive" alt="...">
            <div class="visit"><a href="#"><i class="fa fa-question-circle"></i> More details...</a></div>
            <div class="caption">
              <h4>Project #2</h4>
                <div class="rating">
                  <i class="fa fa-star"></i> 
                  <i class="fa fa-star"></i> 
                  <i class="fa fa-star"></i> 
                  <i class="fa fa-star"></i> 
                </div>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm"></div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img src="img/works3.jpg" class="img-responsive" alt="...">
            <div class="visit"><a href="#"><i class="fa fa-question-circle"></i> More details...</a></div>
            <div class="caption">
              <h4>Project #3</h4>
                <div class="rating">
                  <i class="fa fa-star"></i> 
                  <i class="fa fa-star"></i> 
                  <i class="fa fa-star"></i> 
                  <i class="fa fa-star"></i> 
                  <i class="fa fa-star-half"></i>
                </div>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img src="img/works4.jpg" class="img-responsive" alt="...">
            <div class="visit"><a href="#"><i class="fa fa-question-circle"></i> More details...</a></div>
            <div class="caption">
              <h4>Project #4</h4>
                <div class="rating">
                  <i class="fa fa-star"></i> 
                  <i class="fa fa-star"></i> 
                  <i class="fa fa-star"></i> 
                  <i class="fa fa-star"></i> 
                  <i class="fa fa-star"></i>
                </div>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
@stop