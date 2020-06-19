<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <style>
	.bg-color{
		/* background-color: #4092da38 !important; */
		background-color: #FFF !important;
	}
	.navbar-default
	{
		background-color: rgba(28,74,90, 0.9) !important;
	}
  </style>
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <form class="form-inline">
				<a style="float:left" class="navbar-brand" href="">Keeno-Test</a>
				<input class="form-control mr-sm-2 search" type="search" placeholder="Search..." style="border-radius:0px !important;height:35px;margin-top:7px;width:325px">
			  </form>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#banner"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                <li class=""><a href="#about"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a></li>
                <li class=""><a href="#shop"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Shop</a></li>
                <li class=""><a href="#help"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a></li>
                <li class=""><a href="#cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> My Cart</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <!-- <img src="{{ asset('https://keeno.app/web/assets/images/logo/logo.svg') }}" class="img-responsive"> -->
            </div>
            <div class="banner-text text-center">
              <h1 class="">Shop from your home.</h1>
              <p style="color:blue">
			  Keeno-Test is an online platform to buy and sell different types of products from website easily.
			  <br/>Easy search of products and flexibility of requesting new product. 
			  <br/>Easy Order and Faster Delivery.
			  </p>
			  
			  <div class="col-md-8 col-md-offset-2">
				  <div class="carousel slide media-carousel" id="topmedia">
					<div class="carousel-inner">
						  <?php
							$c = 0; 
							foreach($categories as $categoriesrow)
							{
								
								if($c == 0)
								{
									echo '<div class="item active"><div class="row">';
								}
								else
								{
									if(($c%2) == 0)
									{
										echo '</div></div><div class="item"><div class="row">';
									}
								}	
						  ?>
							  <div class="col-md-6">
								<a class="thumbnail" href="#"><img alt="{{ $categoriesrow->name }}" src="{{asset('assets/img/category/').'/'.$categoriesrow->image_url}}"></a>
								<h3 class="text-center" style="color:#e6510a"><?=$categoriesrow->name?></h3>
							  </div>
						  <?php
								if($c == count($categories)-1)
								{
									echo '</div></div>';
								}
								$c++;
							}
						  ?>					  
					</div>
					<a data-slide="prev" href="#topmedia" class="left carousel-control">‹</a>
					<a data-slide="next" href="#topmedia" class="right carousel-control">›</a>
				  </div>                          
				</div>
				<div style="clear:both"></div>
              <a href="#shop" class="btn btn-appoint" style="border-radius:0px !important">SHOP NOW</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->