@extends('layouts.store-front')

@section('page-title')
	Our Team
@stop

@section('content')   
<!-- Main body
================== -->
  <div class="wrapper">
    <div class="section-header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <!-- Remove the .animated class if you don't want things to move -->
            <h1 class="animated slideInLeft"><span>Our Team</span></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="hl text-center top-zero">Our Team</h1>
          <p class="lead text-center">
            Meet our devoted team of Experts.
          </p>
          <br />
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="team">
            <div class="member-left">
              <img src="img/Adodo.jpg" alt="Team Member" class="left">
              <h4>Adodo Adih-Nuviadenu</h4>
              <p class="position">Architect</p>
              <p>With Training in Ghana and The Netherlands, Adodo is experienced with Urban design and management, medical facilities, institutions, commercial projects and individual houses. By way of design alone or design and build.</p>
            </div>
            <div class="member-right">
              <img src="img/Nukunu.jpg" alt="Team Member" class="right">
              <h4>Nukunu Nuviadenu</h4>
              <p class="position">Surveyor</p>
              <p>With Training in Ghana and The Netherlands, Nukunu is with land acquisition, cadastral survey, registration of lands and other documentations in Ghana.</p>
            </div>
            <div class="member-left">
              <img src="img/Demo4.jpg" alt="Team Member" class="left">
              <h4>Staff</h4>
              <p class="position">Trainers Visit</p>
              <p>Well trained staff. A day of Training with experts from Den Braven, South Africa.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="about-btn">
            <a class="btn btn-default" href="{{ URL::route('about') }}">Our Company</a> <a class="btn btn-default" href="{{ URL::route('contact') }}">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop