	<hr class="featurette-divider">
 	<div class="copyright text-center">&copy; Copyright 2014 Fotco Ventures</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/assets/js/docs.min.js"></script>
    <script>
    	$('ul.nav > li > a').on('click', function(e)
    	{
    		//e.preventDefault();
    		thisLi = $(this).parent();
    		toggLi = thisLi.siblings('.active');
    		thisLi.hasClass('active') || toggLi.add( thisLi );
    		toggLi.toggleClass('active')
    	});
    	var nav = $('ul.nav > li'),
    	route = window.location.href.split('/').pop(),
    	toggLi = nav.filter(function() {return $(this).children('a')[0].href.split('/').pop() == route;});
    	toggLi.length != 0 || toggLi.add( nav.filter(function(){return $(this).children('a')[0].href == '/';}));
    	toggLi.is( nav.filter('.active') ) || toggLi.add( nav.filter('.active') );
    	toggLi.toggleClass( 'active' );
    </script>