<?php
  
  include_once "connection.php";


  $package_sql = "SELECT package_id, package_name, package_type FROM package";
  $result = mysqli_query($conn, $package_sql);
  $res = mysqli_fetch_assoc($result);

 
?>

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>CleanPhotography - Photography &amp; Portfolio Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
		<div id="main-ld">
			<div class="loader">
				<span class="loader-inner">CleanPhotography</span>
			</div>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
	
	<!-- <div class="fat-nav">
        <div class="fat-nav__wrapper">
            <ul>
                <li><a class="js-scroll-trigger" href="#home">Home</a></li>
                <li><a class="js-scroll-trigger" href="#about">About Me</a></li>
                <li><a class="js-scroll-trigger" href="wedding-gallery.html">Gallery</a></li>
                <li><a class="js-scroll-trigger" href="#services">Service</a></li>
				<li><a class="js-scroll-trigger" href="#reviews">Reviews</a></li>
				<li><a class="js-scroll-trigger" href="#pricing">Pricing</a></li>
				<li><a class="js-scroll-trigger" href="#contact">Contact Me</a></li>
            </ul>
        </div>
    </div> -->
	
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
			<img class="img-fluid" src="images/logo2.png" alt="" border-radius=" 8px"  width="150px"/>
		</a>
        <div id= "gallery" class="section_1b">
            <div class="container">
                <div class="gallery-menu text-center row">
                    <div class="col-md-12">
                        <div class="button-group filter-button-group">
                            <a href="index.php"> <button data-filter="*">Home</button></a>
                            <a href="wedding-gallery.html"> <button data-filter="*">Gallery</button></a>
                            <a href="about_me.php"><button data-filter=".photo_a">About </button> </a>
                            <!-- <a href="services.html"><button data-filter="">Service</button></a> -->
                            <!-- <a href="reviews.html"><button data-filter="">Reviews</button></a> -->
                            <a href="pricing.php"><button data-filter=".photo_a"> Packages</button></a>
                            <a href="contact_me.html"><button data-filter="">Contact Us</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </nav>

    <div class="all-page-title" style="background: url('images/main.jpg')">
      <!--Page -->
          <div class="page-info">
              <div class="container">
                <div class="inner-container">
                      <ul class="bread-crumb" ><br>
                          <li><a href="index.html">Home</a></li>
                          <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                          <li><span>Package</span></li>
                      </ul>
                  </div>
              </div>
          </div>
          <!--End Page-->
          <div class="container text-center">
            <h1>WE'RE HERE TO HELP YOU ENJOY IT to the fullest.</h1>
        </div>
      </div><!-- end section -->

	<!-- <div id="pricing" class="section lb">
		<div class="container" style="background-color: white;">
			<div class="section-title text-center">
                <h3>Pricing</h3>
                <p>Each one of the players needs to do so without any arrows. For some walkers, not some laughter.</p>
            </div>
			
			<div class="row">
                <div class="col-md-4 col-sm-6" style="height: auto;">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3 class="title">Silver</h3>
                        </div>
                        <div class="pricing-content">
                            
                            <ul>
                                <li>1 Professional Videographer</li>
                                <li>1 Professional photographer</li>
                                <li>1 Technical Assistant</li>
                                <li>1 Professional Full HD camera (for video)</li>
                                <li>1 Advanced DSLR Photography Camera</li>
                                <li>30 Post Edited Pics</li>
                                <li>Coverage (Morning preparations and Interviews, Church Session, Vows and Engagement Party, Photo session and Reception Coverage</li>
                                <li>1 A4 Sized Framed Photo Mount</li>
                                <li>1 Master Edited DVD Wedding Video</li>
                                <li>1 Master Edited 4GB Flash Disk Wedding Video</li>
                                
                            </ul>
                            <a href="#" class="pricingTable-signup">Order Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable yellow">
                        <div class="pricingTable-header">
                            <h3 class="title">Gold</h3>
                        </div>
                        <div class="pricing-content">
                            
                            <ul>
                              <li>1 Professional Videographer</li>
                              <li>1 Professional Photographer</li>
                              <li>1 Technical Assistant</li>
                              <li>1 Professional Full HD Camera (for video)</li>
                              <li>1 Advanced DSLR Photography Camera</li>
                              <li>30 Post Edited Pics</li>
                              <li>Coverage (Morning Preparations and Interviews, Church Session, Vows and Engagement Party, Photo session and Reception Coverage</li>
                              <li>1 A4 Sized Photo Mount</li>
                              <li>1 A2 Frame Enlargement</li>
                              <li>4 Master Edited DVD Wedding Video</li>
                              <li>1 Master Edited 4GB Flash Disk Wedding Video</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Order Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable purple">
                        <div class="pricingTable-header">
                            <h3 class="title">Diamond</h3>
                        </div>
                        <div class="pricing-content">
                            
                            <ul>
                              <li>1 Professional Videographer</li>
                              <li>1 Professional Photographer</li>
                              <li>1 Technical Assistant</li>
                              <li>1 Professional Full HD Camera (for video)</li>
                              <li>1 Advanced DSLR Photography Camera</li>
                              <li>30 Post Edited Pictures</li>
                              <li>Coverage (Morning Preparations and Interviews, Church Session, Vows and Engagement Party, Photo session and Reception Coverage</li>
                              <li>1 A4 Sized Photo Mount</li>
                              <li>1 A2 Frame Enlargement</li>
                              <li>200 Pictures Printed Album for the Couple</li>
                              <li>2 Parents Album (100 pics each)</li>
                              <li>4 Master Edited DVD Wedding Video</li>
                              <li>1 Master Edited 4GB Flash Disk Wedding Video</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
			
		</div>
	</div> -->

  <section>
    <div class="container py-5">
  
      <!-- Package  -->
      <header class="text-center mb-5 text-white">
        <div class="row">
          <div class="col-lg-7 mx-auto">
            <h1>Bootstrap pricing table</h1>
            <p>Easily create a classy pricing table in Bootstrap&nbsp;4.<br> <a href="https://bootstrapious.com/snippets" class="text-reset">Bootstrap snippet by Bootstrapious</a></p>
          </div>
        </div>
      </header>
      <!-- END -->
  
  
  
      <div class="row text-center align-items-end">
        <!-- Pricing Table-->
          
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="bg-white p-5 rounded-lg shadow">
            <!-- <h1 class="h6 text-uppercase font-weight-bold mb-4">Basic</h1> -->
            
          
            <h2 class="h1 font-weight-bold"><span class="text-small font-weight-normal ml-2">Silver </span></h2>
  
            <div class="custom-separator my-4 mx-auto bg-primary"></div>


            <ul class="list-unstyled my-5 text-small text-left" >
            <?php if ( $result && !empty($result) ) :?>
            <?php foreach ($result as $key =>$row) :{            
                $package_name = $row["package_name"]; 
                $package_type = $row["package_type"];
                    if ($package_name == 901) :
                        if($count++ < 9 ):
                          
                          
                          ?> <li class="mb-3"><i class="fa fa-check mr-2 text-primary"></i> <?php echo $package_type ?> </li><?php
                        
                        else:
                          ?><li class="mb-3 text-muted"><i class="fa fa-times mr-2"></i>
                          <del> <?php echo $package_type ?></del>
                          </li> <?php
                        endif;
                      
                      endif;     
                      
                      
            }?>
              
              <?php endforeach ?>
               <?php endif?>
            </ul>

            <a href="#" class="btn btn-primary btn-block p-2 shadow rounded-pill">Subscribe</a>
            
          </div>

        </div>
        <!-- END -->
  
  
        <!-- Pricing Table-->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="bg-white p-5 rounded-lg shadow">
            <!-- <h1 class="h6 text-uppercase font-weight-bold mb-4">Pro</h1> -->
            <h2 class="h1 font-weight-bold"><span class="text-small font-weight-normal ml-2">Gold</span></h2>
  
            <div class="custom-separator my-4 mx-auto bg-primary"></div>
  
            <ul class="list-unstyled my-5 text-small text-left">
            <?php if ( $result && !empty($result) ) :?>
            <?php foreach ($result as $key =>$row) :{            
                    $package_name = $row["package_name"]; 
                    $package_type = $row["package_type"];
                    if ($package_name == 902) {
                        if($count++ < 23 ){
                          
                          
                          ?> <li class="mb-3"><i class="fa fa-check mr-2 text-primary"></i> <?php echo $package_type ?> </li><?php
                        
                        }else{
                          $count++
                          ?><li class="mb-3 text-muted"><i class="fa fa-times mr-2"></i>
                          <del> <?php echo $package_type ?></del>
                          </li> <?php
                        }
                
                      }                
            }?>
              
              <?php endforeach ?>
               <?php endif?>
              
              
            </ul>
            <a href="#" class="btn btn-primary btn-block p-2 shadow rounded-pill">Subscribe</a>
          </div>
        </div>
        <!-- END -->
  
  
        <!-- Pricing Table-->
        <div class="col-lg-4">
          <div class="bg-white p-5 rounded-lg shadow">
            <!-- <h1 class="h6 text-uppercase font-weight-bold mb-4">Enterprise</h1> -->
            <h2 class="h1 font-weight-bold"><span class="text-small font-weight-normal ml-2">Diamond</span></h2>
  
            <div class="custom-separator my-4 mx-auto bg-primary"></div>
  
            <ul class="list-unstyled my-5 text-small text-left">
            <?php if ( $result && !empty($result) ) :?>
            <?php foreach ($result as $key =>$row) :{            
                $package_name = $row["package_name"]; 
                $package_type = $row["package_type"] ;
                    if ($package_name == 903) {
                        if($count++ < 42 ){
                          
                          
                          ?> <li class="mb-3"><i class="fa fa-check mr-2 text-primary"></i> <?php echo $package_type ?> </li><?php
                        
                        }else{
                          $count++
                          ?><li class="mb-3 text-muted"><i class="fa fa-times mr-2"></i>
                          <del> <?php echo $package_type ?></del>
                          </li> <?php
                        }
                
                      }                
            }?>
              
              <?php endforeach ?>
               <?php endif?>
           
              
              
            </ul>
            <a href="#" class="btn btn-primary btn-block p-2 shadow rounded-pill">Subscribe</a>
          </div>
        </div>
        <!-- END -->
  
      </div>
    </div>
  </section>
  

  <div class="section-title text-center">               
    <h3>Why Choose Us</h3>
    <p class="lead" style="text-align: center; padding: 10px 140px 10px 140px;">We offer unlimited solutions to all your business needs. in the installation package we prepare search engine optimization, social media support, we provide corporate identity and graphic design services.</p>
</div><!-- end title -->

        <!-- info section -->
  <section class="info_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="info_logo">
            <div>
              <a href="">
                <img src="images/logo2.png" alt="" />
                <span>
                  Petlor
                </span>
              </a>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available,
              but the majority have suffered alteration
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_links ">
            <h5>
              Get in touch
            </h5>
            <div class="info_contact">
              <div class="contact_link_box">
                <a href="">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span>
                    Location
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>
                    Call +01 1234567890
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>
                    demo@gmail.com
                  </span>
                </a>
              </div>
            </div>
            <div class="info_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_insta">
            <h5>
              INFORMATION
            </h5>
            <p class="pr-0 pr-md-4 pr-md-5">
              Until I hate. Each weekend a lot of eros. A lot of pain is a lot, onsectetuer undergraduate elite. Until then hate. Each weekend a lot of eros
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="pl-0 pl-lg-5 pl-md-4">
            <h5>
              Our Shop
            </h5>
            <p>
              Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec
              odio. Quisque volutpat mattis eros
            </p>

          </div>
        </div>
      </div>
    </div>
  </section>


  
  <!-- end info_section -->
    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-links">
                        <a href="#">Home</a>
                        <a href="#">Blog</a>
                        <a href="#">Pricing</a>
                        <a href="#">About</a>
                        <a href="#">Faq</a>
                        <a href="#">Contact</a>
                    </p>
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">CleanPhotography</a> Design By : 
					<a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-camera" aria-hidden="true"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<!-- Camera Slider -->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script> 
	<script src="js/parallaxie.js"></script>
	<script src="js/headline.js"></script>
	<script src="js/jquery.appear.min.js"></script>
	<script src="js/skill.bars.jquery.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
	<!-- <script src="js/jquery.fatNav.min.js"></script> -->
	<script src="js/main.js"></script>
    
    <script src="js/custom.js"></script>

</body>
</html>