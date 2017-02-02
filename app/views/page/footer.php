<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--==============================
              footer
=================================-->
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8  col-md-10">
                    <style>
					span.copyright{position: relative;
					top: -4px;
					color: #000000;
					font: 300 24px/20px 'Roboto Condensed', sans-serif;}
					.copyright{
					font-weight: normal;
					color: #4b4a4a;}
					footer{
					padding: 25px 0;
					border-top: 1px solid #5c5c5c;}
					</style>
					<p class="copyright text-muted"><span class="copyright"><?php echo $this->settings_model->get_options('textfooter') //mendapatkan text footer ?></span> <span class="copyright-year">&copy; <?php echo date('Y')?></span> | <a id="BtnModalPolicy" href="#">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </footer>
	<a href="#" id="toTop" class="fa fa-chevron-up"></a>

		

		<!-- jQuery -->
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
		

		<!-- Bootstrap Core JavaScript -->
		<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
		<script src="<?php echo base_url() ?>assets/js/jquery-1.10.2.js"></script>
		<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/jquery-migrate-1.1.1.js"></script>
		<script src="<?php echo base_url() ?>assets/js/jquery.easing.1.3.js"></script>
		<script src="<?php echo base_url() ?>assets/js/script.js"></script> 
		<script src="<?php echo base_url() ?>assets/js/superfish.js"></script>
		<script src="<?php echo base_url() ?>assets/js/jquery.equalheights.js"></script>
		<script src="<?php echo base_url() ?>assets/js/jquery.mobilemenu.js"></script>
		<script src="<?php echo base_url() ?>assets/js/tmStickUp.js"></script>
		<script src="<?php echo base_url() ?>assets/js/jquery.ui.totop.js"></script>
		<script src="<?php echo base_url() ?>assets/js/scrollspy.min.js"></script>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		
		

		<!--stuck menu-->
		<script>
		 $(window).load(function(){
		  $().UItoTop({ easingType: 'easeOutQuart' });
		  $('#stuck_container').tmStickUp({});  
		 }); 
		</script>

		<!--landing page-->
		<script>
		$(document).ready(function(){
		  // Add scrollspy to <body>
		  $('body').scrollspy({target: ".navbar", offset: 5000});   

		  // Add smooth scrolling on all links inside the navbar
		  $("#myNavbar a").on('click', function(event) {
			// Make sure this.hash has a value before overriding default behavior
			if (this.hash !== "") {
			  // Prevent default anchor click behavior
			  event.preventDefault();

			  // Store hash
			  var hash = this.hash;

			  // Using jQuery's animate() method to add smooth page scroll
			  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
			  $('html, body').animate({
				scrollTop: $(hash).offset().top
			  }, 800, function(){
		   
				// Add hash (#) to URL when done scrolling (default click behavior)
				window.location.hash = hash;
			  });
			}  // End if
		  });
		  
		});
		</script>


		
		<!--slider coursel-->
		<script>
		$(document).ready(function(){
			// Activate Carousel
			$("#myCarousel").carousel();
			
			// Enable Carousel Indicators
			$(".item1").click(function(){
				$("#myCarousel").carousel(0);
			});
			$(".item2").click(function(){
				$("#myCarousel").carousel(1);
			});
			$(".item3").click(function(){
				$("#myCarousel").carousel(2);
			});
			$(".item4").click(function(){
				$("#myCarousel").carousel(3);
			});
			
			// Enable Carousel Controls
			$(".left").click(function(){
				$("#myCarousel").carousel("prev");
			});
			$(".right").click(function(){
				$("#myCarousel").carousel("next");
			});
		});
		</script>
		
		<!--sticky header-->
		<script>
		$(window).scroll(function() {
		if ($(this).scrollTop() > 1){  
			$('header').addClass("sticky");
		  }
		  else{
			$('header').removeClass("sticky");
		  }
		});
		</script>
		
		<!--modal email konfirmasi-->
		<script>
		$(document).ready(function(){
			$("#btnSend").click(function(){
				$("#myModal").modal();
			});
		});
		</script>
		<!--modal policy-->
		<script>
		$(document).ready(function(){
			$("#BtnModalPolicy").click(function(){
				$("#ModalPolicy").modal();
			});
		});
		</script>

</body>
</html>