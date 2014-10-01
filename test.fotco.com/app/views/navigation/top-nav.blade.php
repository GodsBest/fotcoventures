 <!-- Navbar
    ============= top-nav.blade.php -->
    <div class="navbar navbar-inverse navbar-fixed-top navbar-fotco">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle navbar-toggle-fotco" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ URL::to('/') }}">Fotco Ventures</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="@if(str_is(Route::getCurrentRoute()->getPath(),"/")) active @endif">
              <a href="@if(str_is(Route::getCurrentRoute()->getPath(),"/"))javascript:;@else{{ URL::route('home') }}@endif">Home</a>
            </li>
            <li class="@if(str_is(Route::getCurrentRoute()->getPath(),"products")) active @endif">
              	<a href="@if(str_is(Route::getCurrentRoute()->getPath(),"products"))javascript:;@else{{ URL::route('products') }}@endif">Products</a>
            </li>
            <li class="@if(str_is(Route::getCurrentRoute()->getPath(),"about") || str_is(Route::getCurrentRoute()->getPath(),"team")) active @endif">
              	<a href="@if(str_is(Route::getCurrentRoute()->getPath(),"about"))javascript:;@else{{ URL::route('about') }}@endif">About us</a>
             </li>
            <li class="@if(str_is(Route::getCurrentRoute()->getPath(),"contact")) active @endif">
              	<a href="@if(str_is(Route::getCurrentRoute()->getPath(),"contact"))javascript:;@else{{ URL::route('contact') }}@endif">Contact us</a>
            </li>
            <li class="@if(str_is(Route::getCurrentRoute()->getPath(),"news")) active @endif">
              	<a href="@if(str_is(Route::getCurrentRoute()->getPath(),"news"))javascript:;@else{{ URL::route('news') }}@endif">News &amp; Events</a>
             </li>
            <li class="@if(str_is(Route::getCurrentRoute()->getPath(),"careers")) active @endif">
            	<a href="@if(str_is(Route::getCurrentRoute()->getPath(),"careers"))javascript:;@else{{ URL::route('careers') }}@endif">Careers</a>
            </li>
            <!-- Profile links for extra small screens -->
            <li class="visible-xs"><a href="sign-in.html">Sign In</a></li>
            <li  class="visible-xs"><a href="#">Sign Out</a></li>
          </ul>
          <!-- Search form for extra small screens -->
          <form class="navbar-form navbar-left visible-xs" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-blue">Go!</button>
          </form>
          <ul class="nav navbar-nav navbar-right hidden-xs">
            <!-- Sign in & Sign up -->
            <li id="sign-up" class="show"><a href="sign-up.html">Sign Up</a></li>
            <li id="sign-in" class="show"><a href="#">Sign In</a></li>
            <!-- Signed in. Profile Menu -->
            <li id="cogs-menu" class="hidden">
              <a href="edit-profile.html">
                <i class="fa fa-gears fa-lg"></i>
              </a>
            </li>
            <li id="profile-menu" class="dropdown hidden">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrator <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="account">
                  <div class="avatar"></div>
                  <p><b>Administrator</b><br />admin@mysite.com</p>
                  <p><a href="profile.html">Profile</a> | <a href="#" id="sign-out">Sign out</a></p>
                  <div class="clearfix"></div>
                </li>
              </ul>
            </li>
            <!-- Search Button -->
            <li id="search">
              <a href="#" id="search-btn"><i class="fa fa-search" id="search-icon"></i> Search</a>
              <div class="search-box hidden" id="search-box">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>