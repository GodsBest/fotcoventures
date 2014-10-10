@extends('layouts.store-front')

@section('page-title')
	Contact us
@stop

@section('content')    
<!-- Main body
================== -->
  <div class="wrapper">
    <div class="section-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Remove the .animated class if you don't want things to move -->
            <h1 class="animated slideInLeft"><span>Contact Us</span></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <!-- Contact us form -->
        <div class="col-sm-8">
          <h2 class="hl top-zero">Contact Us</h2>
          <hr>
          <p>To provide you with the best possible service, your questions, suggestions  and inquiries are welcomed through any of the following:</p>
          @include('pages.forms.contact_us')
        </div>
        <!-- Right column -->
        <div class="col-sm-4">
          <!-- Out Address -->
          <h4>Our Address</h4>
          <hr>
          <p>
            	P.O Box CT1695,<br>
	            Cantonments Accra<br>
				Ghana West Africa<br>
	            OR <br>
				Bachlaan 65,5654 HN,Eindoven,<br>
				The Netherlands <br> 
	            Ghana: 0208177979, 0208408080 <br>
				Netherland: 0031(0)681898028<br>
	            Email: <a href="mailto:fotcovgp@gmail.com">fotcovgp@gmail.com</a> or <a href="mailto:fotcovgp@yahoo.com">fotcovgp@yahoo.com</a>
          </p>
          <hr>
          <!-- Google Maps -->
          <h4>Google Maps</h4>
          <hr>
          <div class="google-maps">
            <!--iframe width="350" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=San+Francisco,+CA,+United+States&amp;aq=0&amp;oq=san+f&amp;sll=37.77493,-122.419416&amp;sspn=0.158751,0.338173&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%A1%D0%B0%D0%BD-%D0%A4%D1%80%D0%B0%D0%BD%D1%86%D0%B8%D1%81%D0%BA%D0%BE,+%D0%9A%D0%B0%D0%BB%D0%B8%D1%84%D0%BE%D1%80%D0%BD%D0%B8%D1%8F,+%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D0%B5%D0%BD%D0%BD%D1%8B%D0%B5+%D0%A8%D1%82%D0%B0%D1%82%D1%8B+%D0%90%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B8&amp;t=m&amp;ll=37.774921,-122.419453&amp;spn=0.023745,0.030041&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=San+Francisco,+CA,+United+States&amp;aq=0&amp;oq=san+f&amp;sll=37.77493,-122.419416&amp;sspn=0.158751,0.338173&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%A1%D0%B0%D0%BD-%D0%A4%D1%80%D0%B0%D0%BD%D1%86%D0%B8%D1%81%D0%BA%D0%BE,+%D0%9A%D0%B0%D0%BB%D0%B8%D1%84%D0%BE%D1%80%D0%BD%D0%B8%D1%8F,+%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D0%B5%D0%BD%D0%BD%D1%8B%D0%B5+%D0%A8%D1%82%D0%B0%D1%82%D1%8B+%D0%90%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B8&amp;t=m&amp;ll=37.774921,-122.419453&amp;spn=0.023745,0.030041&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127066.75857679037!2d-0.17972945000002716!3d5.591208699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9084b2b7a773%3A0xbed14ed8650e2dd3!2sAccra%2C+Ghana!5e0!3m2!1sen!2sus!4v1410352972693" width="400" height="300" frameborder="0" style="border:0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop