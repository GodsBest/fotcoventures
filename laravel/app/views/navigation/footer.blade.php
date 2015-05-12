<!-- Foooter
================== footer.blade.php -->
  <footer class="footer-fotco">
    <div class="container">
      <div class="row">
        <!-- Contact Us 
        =================  -->
        <div class="col-sm-4">
          <div class="headline"><h3>Contact us</h3></div>
          <div class="content">
          	<p>
          		<strong>BY MAIL:</strong><br>
				P.O Box CT1695,<br>
	            Cantonments Accra<br>
				Ghana West Africa<br>
	            OR <br>
				Bachlaan 65,5654 HN,Eindoven,<br>
				The Netherlands <br><br>
				<strong>BY PHONE:</strong><br> 
	            Ghana: 0208177979, 0208408080<br>
				Netherland: 0031(0)681898028<br>
	            Email: <a href="mailto:fotcovgp@gmail.com">fotcovgp@gmail.com</a> or <a href="mailto:fotcovgp@yahoo.com">fotcovgp@yahoo.com</a>
          	</p>
           </div>
        </div>
        <!-- Social icons 
        ===================== -->
        <div class="col-sm-4">
          <div class="headline"><h3>Go Social</h3></div>
          <div class="content social">
            <p>Stay in touch with us:</p>
            <ul>
                <li><a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-youtube"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-github"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-vk"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- Subscribe 
        =============== -->
        <div class="col-sm-4">
          <div class="headline"><h3>Subscribe</h3></div>
          <div class="content">
            <p>Enter your e-mail below to subscribe to our free newsletter.<br />We promise not to bother you often!</p>
            {{ Form::open(array('url'=>'/newsletter/subscribe', 'method'=>'POST', 'role'=>'form', 'id'=>'fotco_newsletter_form')) }}
              <div class="row">
                <div class="col-sm-8">
                  <div class="input-group">
                    <label class="sr-only" for="subscribe-email">Email address</label>
                    <input type="email" name="email" autocomplete="off" class="form-control" id="subscribe-email" placeholder="Enter email">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-default">OK</button>
                    </span>
                  </div>
                </div>
              </div>
            {{ Form::close() }}
          </div>
        </div>
      </div>
    </div>
  </footer>