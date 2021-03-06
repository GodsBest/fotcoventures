@extends('layouts.store-front')

@section('page-title')
	HOME
@stop

@section('content')
<div class="wrapper">    
  @include('navigation.showcase')
    <div class="container">
      <!-- Services
        ================ -->
      <div class="row">
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
      </div>
      <div class="row">
        <!-- Welcome message
            ================= -->
        <div class="col-md-8">
        <div class="block-header">
          <h2>
            <span class="title">Welcome Message</span><span class="decoration"></span><span class="decoration"></span><span class="decoration"></span>
          </h2>
        </div>
          <img src="img/about.jpg" class="img-about img-responsive" alt="About">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Nullam id ipsum varius, tincidunt odio nec, placerat enim. 
            Sed sit amet auctor augue, nec dignissim ligula. 
            Nullam euismod quis odio eu commodo. Duis vitae dignissim eros.
            <br /><br />
            Nunc in neque nec arcu vulputate ullamcorper. Ut id orci ac arcu consectetur fringilla. 
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
            Duis hendrerit enim id arcu lacinia, id commodo ante semper. 
            Sed vel ante nec nisi vestibulum congue. Pellentesque non lacus in tortor rutrum tristique. 
          </p>
          <div class="info-board info-board-blue">
            <h4>Important info</h4>
            <p>Nunc in neque nec arcu vulputate ullamcorper. Ut id orci ac arcu consectetur fringilla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
          </div>
        </div>
        <!-- Last updated
            ================== -->
        <div class="col-md-4">
        <div class="block-header">
          <h2>
            <span class="title">Last Updates</span><span class="decoration"></span><span class="decoration"></span><span class="decoration"></span>
          </h2>
        </div>
        <ul class="nav nav-tabs">
          <li class="active"><a href="#blog" data-toggle="tab">Blog</a></li>
          <li><a href="#comments" data-toggle="tab">Comments</a></li>
          <li><a href="#events" data-toggle="tab">Events</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="blog">
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="img/blog-1.jpg" alt="Blog Message">
              </a>
              <div class="media-body">
                <h4 class="media-heading"><a href="#">Story title</a></h4>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.
              </div>
            </div>
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="img/blog-2.jpg" alt="Blog Message">
              </a>
              <div class="media-body">
                <h4 class="media-heading"><a href="#">Story title</a></h4>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.
              </div>
            </div>
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="img/blog-3.jpg" alt="Blog Message">
              </a>
              <div class="media-body">
                <h4 class="media-heading"><a href="#">Story title</a></h4>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.
              </div>
            </div>
            <a href="#" class="read-more">Read more stories...</a>
          </div>
          <div class="tab-pane" id="comments">
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="img/face1.jpg" alt="Blog Message">
              </a>
              <div class="media-body">
                <a href="#">Alex Smith</a> <span class="text-muted">20 minutes ago</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius...</p>
              </div>
            </div>
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="img/face2.jpg" alt="Blog Message">
              </a>
              <div class="media-body">
                <a href="#">Dan Smith</a> <span class="text-muted">1 hour ago</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius...</p>
              </div>
            </div>
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="img/face3.jpg" alt="Blog Message">
              </a>
              <div class="media-body">
                <a href="#">David Smith</a> <span class="text-muted">11/10/2013</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius...</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="events">
            <h5>Moblie Web+DevCon San Francisco 2014 <small>January 28, 2014</small></h5>
            <p class="text-muted"><i class="fa fa-map-marker"></i> Kuala Lumpur, Malaysia</p>
            <hr>
            <h5>2013 The 2nd International Conference on Information and Intelligent Computing(ICIIC 2013) <small>December 29, 2013</small></h5>
            <p class="text-muted"><i class="fa fa-map-marker"></i> San Francisco, California, United States</p>
            <hr>
            <h5>International Conference on Cloud Computing and eGovernances 2014 <small>November 20, 2013</small></h5>
            <p class="text-muted"><i class="fa fa-map-marker"></i> Saigon, Ho Chi Minh, Vietnam</p>
          </div>
        </div>
        </div>
      </div>
      <!-- Recent Works
        =================== -->
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
        </div>
      </div>
    </div>
  </div>
@stop