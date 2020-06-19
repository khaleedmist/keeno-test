<!-- Bootstrap core JavaScript
================================================= -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/contactform/contactform.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
		
		var isLoggedinForm = "";
		if(isLoggedinForm == "login")
		{
			$('html, body').animate({
				scrollTop: $("#cta-2").offset().top
			}, 2000);
		}else{
			window.scrollTo(0,0);
		}
		
		$('#topmedia').carousel({
			// autoplay: true,
			pause: false,
			interval: false,
	    });
		
        $('#media').carousel({
			pause: true,
			interval: false,
	    });
    });
</script>
