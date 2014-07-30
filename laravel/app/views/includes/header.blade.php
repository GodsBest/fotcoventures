    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar navbar-static-top navbar-fotco" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand logo" href="/staging">Fotco Ventures</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="@if(ends_with(Route::getCurrentRoute()->getPath(), 'staging')) active @endif"><a href="/staging">Home</a></li>
                <li class="xx-dropdown @if(ends_with(Route::getCurrentRoute()->getPath(), 'products')) active @endif">
                  <a href="/staging/products" class="xx-dropdown-toggle" data-toggle="xx-dropdown">Products <span class="xx-caret"></span></a>
                  <!--ul class="dropdown-menu" role="menu">
                    <li><a href="/staging/products">Foams</a></li>
                    <li><a href="/staging/products">Silicones</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Sealants & Adhesives</li>
                    <li><a href="/staging/products">Hybrid Sealants & Adhesives</a></li>
                    <li><a href="/staging/products">PU Sealants & Adhesives</a></li>
                    <li><a href="/staging/products">Adhesives (other)</a></li>
                    <li><a href="/staging/products">Acrylic Sealants & Adhesives</a></li>
                  </ul-->
                </li>
                <li class="@if(ends_with(Route::getCurrentRoute()->getPath(), 'about')) active @endif"><a href="/staging/about">About</a></li>
                <li class="@if(ends_with(Route::getCurrentRoute()->getPath(), 'contact')) active @endif"><a href="/staging/contact">Contact</a></li>
                <li class="@if(ends_with(Route::getCurrentRoute()->getPath(), 'news')) active @endif"><a href="/staging/news">News & Events</a></li>
                <li class="@if(ends_with(Route::getCurrentRoute()->getPath(), 'careers')) active @endif"><a href="/staging/careers">Careers</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
