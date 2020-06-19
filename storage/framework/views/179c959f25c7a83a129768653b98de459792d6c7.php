
<?php $__env->startSection('content'); ?>
  
  <!--testimonial-->

  <section id="shop" class="section-padding">
    <div class="container">
      
		<style>
			/* carousel */
			.media-carousel 
			{
			  margin-bottom: 0;
			  padding: 0 40px 30px 40px;
			  margin-top: 30px;
			}
			/* Previous button  */
			.media-carousel .carousel-control.left 
			{
			  left: -12px;
			  background-image: none;
			  background: none repeat scroll 0 0 #222222;
			  border: 4px solid #FFFFFF;
			  border-radius: 23px 23px 23px 23px;
			  height: 40px;
			  width : 40px;
			  margin-top: 80px;
			  padding:5px
			}
			/* Next button  */
			.media-carousel .carousel-control.right 
			{
			  right: -12px !important;
			  background-image: none;
			  background: none repeat scroll 0 0 #222222;
			  border: 4px solid #FFFFFF;
			  border-radius: 23px 23px 23px 23px;
			  height: 40px;
			  width : 40px;
			  margin-top: 80px;
			  padding:5px
			}
			
			
			
			/* Changes the position of the indicators */
			.media-carousel .carousel-indicators 
			{
			  right: 50%;
			  top: auto;
			  bottom: 0px;
			  margin-right: -19px;
			}
			/* Changes the colour of the indicators */
			.media-carousel .carousel-indicators li 
			{
			  background: #c0c0c0;
			}
			.media-carousel .carousel-indicators .active 
			{
			  background: #333333;
			}
			.media-carousel img
			{
			  width: 250px;
			  height: 200px
			}
			/* End carousel */
			
			.starchecked {
			  color: orange;
			}
			
			hr.botm-line {
				height: 1px !important;
				width: 100% !important; 
				background: #ffb737;
				position: relative;
				border: 0;
				margin: 10px 0 10px 0;
			}
			.underline-text
			{
				display:inline-block;
				border-bottom:2px solid #ffb737;
				padding-bottom:2px;
			}
			
			@media(max-width:378px)
			{
				.media-carousel .carousel-control.left
				{
					margin-top: 235px;
				}
				.media-carousel .carousel-control.right
				{
					 margin-top: 235px;
				}
				.search
				{
					width: 190px !important;
					margin-bottom:10px !important;
				}
				.newletteremail
				{
					width: 100% !important;
					margin-bottom:10px !important;
				}
			}
			
		</style>
		<div class="row">
			<div class="col-md-12">
			  <h2 class="ser-title text-center">Featured Products</h2>
			  <hr class="botm-line">
			</div>
			
			<div class='col-md-12'>
			  <div class="carousel slide media-carousel" id="media">
				<div class="carousel-inner">
					<?php
						$f = 0; 
						foreach($featureproducts as $featureproductsrow)
						{
							$image_url_arr = explode("###",$featureproductsrow->image_url);
							if($f == 0)
							{
								echo '<div class="item active"><div class="row">';
							}
							else
							{
								if(($f%4) == 0)
								{
									echo '</div></div><div class="item"><div class="row">';
								}
							}	
					  ?>
						  <div class="col-md-3 col-sm-6">
							<a class="thumbnail" href="#"><img alt="<?php echo e($featureproductsrow->title); ?>" src="<?php echo e($image_url_arr[0]); ?>"></a>
							<span class="text-center" style="color:#e6510a"><?=$featureproductsrow->title?></span>
						  </div>
					  <?php
							if($f == count($featureproducts)-1)
							{
								echo '</div></div>';
							}
							$f++;
						}
					?>
				</div>
				<a data-slide="prev" href="#media" class="left carousel-control">‹</a>
				<a data-slide="next" href="#media" class="right carousel-control">›</a>
			  </div>                          
			</div>
		  </div>
	  
    </div>
  </section>
  <!--/ testimonial-->
  
   <!--service-->

   <section id="newsletter" class="section-padding" style="background-color:rgba(238, 238, 238, 0.15)">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <h2 class="ser-title">Newsletter</h2>
          <hr class="botm-line">
		  <div class="col-md-12">
			  <div class="col-md-6">
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. 
				</p>
			  </div>
			  <div class="col-md-6 pull-right">
				<form class="form-inline">
					<input class="form-control newletteremail" placeholder="Email Address" style="width:70%;border-radius:0px !important">
					<button class="btn btn-form" type="submit">Subscribe</button>
				</form>
			  </div>
		  </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ service--> 
  <section id="products" class="section-padding">
    <div class="container">
	   <?php
			$a = 0; 
			foreach($allproducts as $allproductsrow)
			{
				$all_image_url_arr = explode("###",$allproductsrow->image_url);
				if($a == 0)
				{
					echo '<div class="row"><div class="col-md-12 col-sm-12">';
				}
				else
				{
					if(($a%3) == 0)
					{
						echo '</div></div><div class="row"><div class="col-md-12 col-sm-12">';
					}
				}	
		?>
			<div class="col-md-4 col-sm-6" style="max-height:300px;margin-bottom:20px">
				<a class="thumbnail" href="#"><img alt="<?php echo e($allproductsrow->title); ?>" src="<?php echo e($all_image_url_arr[0]); ?>">
				<div style="clear:both"></div>
				<table style="width:100%">
					<tr>
						<td valign="top" width="60%"> 
							<font class="text-left" style="font-size:14px"><font style="color:#000"><?=$allproductsrow->title?></font> <br/><strong style="color:red">BDT <?=number_format($allproductsrow->price,2)?></strong></font>
						</td>
						<td valign="top" align="right">
							<?php
								$whole = floor($allproductsrow->rating);      
								$fraction = $allproductsrow->rating - $whole; 
								$blankstar = 0; 
								for($s = 0; $s < $whole; $s++)
								{
									echo '<span class="fa fa-star starchecked"></span>';
								}
								
								if($fraction != 0)
								{
									
									echo '<span class="fa fa-star-half-o" style="color:orange"></span>';
									$blankstar++;
									
								}
								
								if($whole > 0)
								{
									for($bs = 0; $bs < 5-($whole+$blankstar); $bs++)
									{
										echo '<span class="fa fa-star" style="color:#ccc"></span>';
									}
								}
								
							?>
						</td>
					</tr>
				</table>
				</a>
			</div>
		<?php
				if($a == count($allproducts)-1)
				{
					echo '</div></div>';
				}
				$a++;
			}
	   ?>
	   <a href="#shop" class="btn btn-appoint" style="float:right;margin-right:20px">SEE ALL</a>
    </div>
  </section>
   <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <h2 class="ser-title text-center">About Keeno-Test</h2>
          <hr class="botm-line">
		  <p>
			Largest online marketplace to make shopping simple and fast!
			Keeno-Test is the fastest online marketplace in Bangladesh. Start buying and selling today! Make shopping SIMPLE, SECURE and FAST on the largest marketplace in Bangladesh. Discover what you need and sell all sorts of products in our simple yet powerful platform.
		  </p>
		  <p>
			Be part of the biggest marketplace in the country, reach and sell to your target customers, offer secure payment and grow your business at keeno-test. Use our powerful platform to improve your competitiveness and increase profitability. Access your insights and detailed reporting to improve your business. With our Advertising and boosting, reach millions of new potential customers.
		  </p>
        </div>
      </div>
    </div>
  </section>
  
  <!--contact-->
  <section id="help" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title text-center">Need Any Help?</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <h3>Contact Info</h3>
          <div class="space"></div>
          <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>khaleed.mist@gmail.com</p>
          <div class="space"></div>
          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+880 155 652 2748</p>
		  <div class="space"></div>
          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+880 170 145 9895</p>
        </div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            <h3 class="cnt-ttl">Having Any Query! Please send us a message.</h3>
            <div class="space"></div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control br-radius-zero" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="form-action">
                <button type="submit" class="btn btn-form">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ contact-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp64\www\keeno-test\resources\views/index.blade.php ENDPATH**/ ?>