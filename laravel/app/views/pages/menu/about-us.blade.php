@extends('layouts.store-front')

@section('page-title')
	About us
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
            <h1 class="animated slideInLeft"><span>About Us</span></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="hl text-center top-zero">Our Company</h1>
          <p class="lead text-center">
            <strong>Fotco Ventures group.</strong>
Since their establishment in 2005 in Ghana and 2012 in the Netherlands Fotco Ventures has served as a solution to knowledge gap. Fotco Ventures was born out of the need and the desire to reach out positively to society with knowledge and services filling in gaps identified in development by serving as a link pin to Africa and West Africa in particular.
Fotco brings exposure and technology to business areas where they are needed most in West Africa and vice versa to develop countries.
          </p>
          <br />
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="about-icon"><i class="fa fa-plane"></i></div>
          <h4><a href="http://www.denbraven.com/en/">Den Braven Sealant Distribution</a></h4>
          <p class="about-p">
            Export and distribution of Den braven Sealants throughout West Africa. For more information, visit <br><i class="fa fa-bullseye"></i> Netherlands site at <a href="http://www.denbraven.com/en/" target="_blank">http://www.denbraven.com/en/</a> and <br><i class="fa fa-bullseye"></i> South Africa site at <a href="http://www.denbraven.co.za/" target="_blank">http://www.denbraven.co.za/</a></p>
          </p>
          <div class="clearfix"></div>
        </div>
        <div class="col-md-4">
          <div class="about-icon"><i class="fa fa-briefcase"></i></div>
          <h4><a href="#">Consultancy</a></h4>
          <p class="about-p">
            <i class="fa fa-bullseye"></i> Architecture - Architectural Designs<br>
            <i class="fa fa-bullseye"></i> Survey - Land Surveying<br>
            <i class="fa fa-bullseye"></i> Environment Management - Urban Design<br>
            <i class="fa fa-bullseye"></i> Education - Training and Research<br>
          </p>
          <div class="clearfix"></div>
        </div>
        <div class="col-md-4">
          <div class="about-icon"><i class="fa fa-heart"></i></div>
          <h4><a href="#">Charity</a></h4>
          <p class="about-p">
            We believe in corporate social responsibility.<br>
            <strong>Mosaic project</strong> : This is a project for disables known as "thankful hearts"<br>
            <i class="fa fa-bullseye"></i> Providing training, livelihood and employment.<br>
            <i class="fa fa-bullseye"></i> Project is aimed to be self sustaining  and cyclical.<br>
            <i class="fa fa-bullseye"></i> Thankful hands work on projects acquired and get paid for it.<br>
            <i class="fa fa-bullseye"></i> They are also encouraged and assisted to set up businesses and projects on their own.<br>
          </p>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="about-btn">
            <a class="btn btn-default" href="{{ URL::route('team') }}">Our Team</a> <a class="btn btn-default" href="{{ URL::route('contact') }}">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop