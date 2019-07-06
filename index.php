<?php
 include 'Admin/include/db_connect.php';
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Meghna One page parallax responsive HTML Template ">
        
        <meta name="author" content="Muhammad Morshed">
		
        <title>U-Geeks</title>
		
		<!-- Mobile Specific Meta
		================================================== -->
        <meta name="viewport" contevalwallet/viewsnt="width=device-width, initial-scale=1">
		
		<!-- Favicon -->
		<!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" /> -->
		
		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="plugins/themefisher-font/style.css">
		<!-- bootstrap.min css -->
        <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
		<!-- Animate.css -->
        <link rel="stylesheet" href="plugins/animate-css/animate.css">
        <!-- Magnific popup css -->
        <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
		<!-- Slick Carousel -->
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/style.css">

			
    </head>
	
    <body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
	    <!--
	    Start Preloader
	    ==================================== 
		<div id="preloader">
			<div class="preloader">
				<div class="sk-cube-grid">
				  <div class="sk-cube sk-cube1"></div>
				  <div class="sk-cube sk-cube2"></div>
				  <div class="sk-cube sk-cube4"></div>
				  <div class="sk-cube sk-cube4"></div>
				  <div class="sk-cube sk-cube5"></div>
				  <div class="sk-cube sk-cube6"></div>
				  <div class="sk-cube sk-cube7"></div>
				  <div class="sk-cube sk-cube8"></div>
				  <div class="sk-cube sk-cube9"></div>
				</div>
			</div>
		</div>
        <!--
        End Preloader
        ==================================== 

 <!-- 
  Fixed Navigation
  ==================================== -->
    <header id="navigation" class="navbar navigation">
        <div class="container">
            <div class="navbar-header">
              <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- /responsive nav button -->
    
                <!-- logo -->
                <a class="navbar-brand logo" href="#body">
                    <!-- <img src="images/logo.png" alt="Website Logo" /> -->
                    <svg width="40px" height="40px" viewBox="0 0 45 44" version="1.1" xmlns="http://www.w4.org/2000/svg" xmlns:xlink="http://www.w4.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Group" transform="translate(2.000000, 2.000000)" stroke="#57CBCC" stroke-width="4">
                                <ellipse id="Oval" cx="20.5" cy="20" rx="20.5" ry="20"></ellipse>
                                <path d="M6,7 L44.5,44.5" id="Line-2" stroke-linecap="square"></path>
                                <path d="M21,20 L44,7" id="Line-4" stroke-linecap="square"></path>
                            </g>
                        </g>
                    </svg>
                </a>
            <!-- /logo -->
        </div>

        <!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="Navigation">
            <ul id="nav" class="nav navbar-nav navigation-menu">
                <li><a data-scroll href="#body">Home</a></li>
                <li><a data-scroll href="#about">About Us</a></li>
                <li><a data-scroll href="#services">Services</a></li>
                <li><a data-scroll href="#portfolio">Our works</a></li>
                <li><a data-scroll href="#our-team">Team</a></li>
                <li><a data-scroll href="#contact-us">Contact</a></li>
            </ul>
        </nav>
        <!-- /main nav -->
  
      </div>
  </header>
  <!--
  End Fixed Navigation
  ==================================== -->


 <!--
Welcome Slider
==================================== -->

<?php
$sql=mysqli_query($connect,"SELECT * FROM intro");
if(mysqli_num_rows($sql)>0){
while($row=mysqli_fetch_assoc($sql)){
?>

<section class="hero-area" style="background-image: url(<?php echo "Admin".substr($row['Picture'], 2) ;?>)">
	<div class="block" id="slidet">
		<p id="welcome-text"><?php echo $row['Intro'];?></p><hr id="line">
		<h1><?php echo $row['Title'];?></h1>
		<p id="text-area">O<?php echo $row['Caption'];?></p>
		<a data-scroll href="#services" class="btn btn-transparent">What we offer</a>
	</div>
</section>
 <?php
	}
}
 ?>


<?php
$sql=mysqli_query($connect,"SELECT * FROM about");
if(mysqli_num_rows($sql)){
	while ($row=mysqli_fetch_assoc($sql)) {
?>
<section class="section about-2 padding-0 bg-dark" id="about">
	<div class="container">
		<div class="row">
			<div class="title text-center wow fadeIn" data-wow-duration="800ms" style="margin-top: 5%;">
						<h2>About <span class="color">Us</span> </h2>
						<div class="border"></div>
					</div>
			<div class="col-md-6 padding-0 ">
				<img class="img-responsive" src="<?php echo "Admin".substr($row['Picture'],2);?>" alt="" style="margin-bottom: 4%;">
			</div>
			<div class="col-md-6">
				<div class="content-block" style="margin-top: -10%;">
					<h2><?php echo $row['F_Title'];?></h2>
					<p><?php echo $row['F_Content'];?>.</p>
					
				
					<div class="row">
						<div class="col-md-6">
							<div class="media">
								<div class="pull-left">
									<i class="tf-circle-compass"></i>	
								</div>
								<div class="media-body">
								<h4 class="media-heading"><?php echo $row['S_Title'];?></h4>
									<p><?php echo $row['S_Content'];?>.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="media">
								<div class="pull-left">
									<i class="tf-hotairballoon"></i>	
								</div>
								<div class="media-body">
									<h4 class="media-heading"><p><?php echo $row['F_Title'];?>.</p></h4>
									<p><p><?php echo $row['F_Content'];?>.</p>.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } }?>
<!-- Start About Section ==================================== -->
		<section class="bg-one about section" style="margin-top: %;">
			<div class="container">
				<div class="row">
				
					<!-- section title -->
					
					<!-- /section title -->
					
					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" >
						<div class="block">							
							<div class="icon-box">
								<i class="tf-tools"></i>
							</div>					
							<!-- Express About Yourself -->
							<div class="content text-center">
								<h4 class="ddd">We're Creative</h4>								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
						<div class="block">
							<div class="icon-box">
								<i class="tf-strategy"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="content text-center">
								<h4>We're Professional</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
					<!-- About item -->					
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="block kill-margin-bottom">
							<div class="icon-box">
								<i class="tf-anchor2"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="content text-center">
								<h4>We're Genius</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->



<!-- Start Services Section
==================================== -->
	
<section id="services" class="bg-one section">
	<div class="container" style="margin-top: -8%;">
		<div class="row">
			
			<!-- section title -->
			<div class="title text-center wow fadeIn" data-wow-duration="500ms">
				<h2>Our <span class="color">Services</span></h2>
				<div class="border"></div>
			</div>
			<!-- /section title -->
<?php
$icons= array
('
	<div class="service-icon text-center">
	<i class="tf-globe"></i>
	</div>', 
	'<div class="service-icon text-center">
	<i class="tf-ion-laptop"></i>
	</div>',
	'<div class="service-icon text-center">
	<i class="tf-genius"></i>
	</div>',
	'<div class="service-icon text-center">	
	<i class="tf-dial"></i>
	</div>',
	'<div class="service-icon text-center">
	<i class="tf-dial"></i>
	</div>',
	'<div class="service-icon text-center">
	<i class="tf-lifesaver"></i>
	</div>'

				);
$count=0;
$sql=mysqli_query($connect,"SELECT * FROM services WHERE Status='Active'");
if(mysqli_num_rows($sql)>0){
while ($row=mysqli_fetch_assoc($sql)){

?>
            <!-- Single Service Item -->
		<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<?php echo $icons[$count];?>
					</div>
					<h4><?php echo $row['Service'];?></h4>
					<p><?php echo $row['Caption'];?>.</p>
				</div>
		</article>
            <!-- End Single Service Item -->
<?php
	$count++;}
}
?>
				
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!--
Start Call To Action
==================================== -->
<section class="call-to-action section-sm bg-1 overly">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Great Design & Incredible Features</h2>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis magni explicabo cum aperiam recusandae sunt accusamus totam. Quidem quos fugiat sapiente numquam accusamus quas hic, itaque in libero reiciendis tempora.</p>
				<a href="#contact" class="btn btn-main">Start a project with us</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->
	

<!-- Start Team Skills
		=========================================== -->
		
		<section id="team-skills" class="parallax-section section section-bg overly">
			<div class="container">
				<div class="row" >
					<!-- section title -->
					<div class="col-md-12">
						<div class="title text-center">
							<h2>Our <span class="color">Skills</span></h2>
							<div class="border"></div>
						</div>
					</div>
					<!-- /section title -->
				</div>  
					<!-- End row -->
				<div class="row">
					<div class="col-md-6">
						<h2>We’ve skilled in wide range of web and <br>
							Other digital market tools.</h2>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis magni explicabo cum aperiam recusandae sunt accusamus totam. Quidem quos fugiat sapiente numquam accusamus quas hic, itaque in libero reiciendis tempora!</p>
							<img class="img-responsive" src="images/about/company-growth.png" alt="">
					</div>
					
					
<?php 
					$count=1;
$sql=mysqli_query($connect,"SELECT * FROM skills");
if(mysqli_num_rows($sql)){
	while ($row=mysqli_fetch_assoc($sql)) {
?>
					<div class="col-md-6">
						<ul class="skill-bar">
							<li>
								<p><span>#<?php echo $count;?>-</span><?php echo $row['Skill_Name'];?></p>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $row['Level'];?>"
									aria-valuemin="0" aria-valuemax="100" style="width:90%">
									</div>
								</div>
							</li>
							
						</ul>
					</div>

<?php 
$count++;
	}
}
?>



				</div>
			</div>   	<!-- End container -->
		</section>   <!-- End section -->

<!-- Start Portfolio Section
		=========================================== -->
		
		<section class="portfolio section" id="portfolio">
			<div class="container">
				<div class="row " >
					<div class="col-lg-12">
					
						<!-- section title -->
						<div class="title text-center">
							<h2>Our <span class="color">Works</span></h2>
							<div class="border"></div>
						</div>
						<!-- /section title -->
					</div> <!-- /end col-lg-12 -->
				</div> <!-- end row -->

				
					<div class="row portfolio-items-wrapper">
					
				<?php
				$sql=mysqli_query($connect,"SELECT * FROM works WHERE Status='Active'");
				if(mysqli_num_rows($sql)>0){
					while ($row=mysqli_fetch_assoc($sql)) {
				?>
					<div class="mix col-md-4 ">
							<div class="portfolio-block">
									<img class="img-responsive" src="<?php echo 'admin'.substr($row['Picture'], 2);?>" alt="" style="height: 250px;">
									<div class="caption">
										<a class="search-icon image-popup" data-effect="mfp-with-zoom" href="<?php echo 'admin'.substr($row['Picture'], 2);?>" data-lightbox="image-1">
											<i class="tf-ion-android-search"></i>
										</a>
										<h4><a href=""><?php echo $row['Title'];?></a></h4>
										<p><?php echo $row['Description'];?></p>
									</div>
								</div>
						</div>
		 	<?php
				}
			}
			?>

						
						
			</div>	<!-- end container -->
		</section>   <!-- End section -->

<!--
Start Counter Section
==================================== -->
		
<section id="counter" class="parallax-section bg-1 section overly">
	<div class="container">
		<div class="row">
		
			<!-- first count item -->
			<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms">
				<div class="counters-item">
					<i class="tf-ion-android-happy"></i>
					<span data-speed="4000" data-to="420">420</span>
					<h4>Happy Clients</h4>
				</div>
			</div>
			<!-- end first count item -->
		
			<!-- second count item -->
			<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
				<div class="counters-item">
					<i class="tf-ion-archive"></i>
					<span data-speed="4000" data-to="565">565</span>
					<h4>Projects completed</h4>
				</div>
			</div>
			<!-- end second count item -->
		
			<!-- third count item -->
			<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
				<div class="counters-item">
					<i class="tf-ion-thumbsup"></i>
					<span data-speed="4000" data-to="95">95</span>
					<h4>Positive feedback</h4>
					
				</div>
			</div>
			<!-- end third count item -->
			
			<!-- fourth count item -->
			<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
				<div class="counters-item kill-margin-bottom">
					<i class="tf-ion-coffee"></i>
					<span data-speed="4000" data-to="2500">2500</span>
					<h4>Cups of Coffee</h4>
				</div>
			</div>
			<!-- end fourth count item -->
			
		</div> 		<!-- end row -->
	</div>   	<!-- end container -->
</section>   <!-- end section -->

<!-- 
Start Our Team
=========================================== -->

<section id="our-team" class="section">
	<div class="container">
		<div class="row">
		
			<!-- section title -->
			<div class="title text-center " data-wow-duration="">
				<h2>Our <span class="color">Team</span></h2>
				<div class="border"></div>
			</div>
			<!-- /section title -->
			<?php 
			$sql=mysqli_query($connect,"SELECT * FROM team WHERE Status='Active'");
				if(mysqli_num_rows($sql)>0){
					while ($row=mysqli_fetch_assoc($sql)) {
				?>
			<!-- team member -->
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  " data-wow-duration="" >
               <div class="team-member">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-responsive" src="<?php echo 'admin'.substr($row['Picture'], 2);?>" alt="Meghna" style="height: 300px;width: 100%;">
						<!-- /member photo -->
						
						<!-- member social profile 
						<div class="mask">
							<ul class="list-inline">
								<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
							</ul>
						</div>
						 /member social profile -->
					</div>
					
					<!-- member name & designation -->
					<div class="member-meta">
						<h4><?php echo $row['First_Name'].' '.$row['Last_Name'];?></h4>
						<span><?php echo $row['Title'];?></span>
						<p><?php echo $row['Description'];?></p>
						<p><?php echo $row['Skills'];?></p>
					</div>
					<!-- /member name & designation -->
					<!-- /about member -->
				   
               </div>
            </div>
			<!-- end team member -->
			<?php
		}
	}
			?>	
			
			
		</div>  	<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->
		

<!--
Start Blog Section
=========================================== -->
		
<section id="blog" class="section">
	<div class="container" style="margin-top: -10%;">
		<div class="row">

			<!-- section title -->
			<div class="title text-center wow fadeInDown" data-wow-duration="100ms">
				<h2> Latest <span class="color">Stories</span></h2>
			<div class="border"></div>
			</div>
			<!-- /section title -->

			<div class="clearfix">

			<?php 
			$sql=mysqli_query($connect,"SELECT * FROM stories WHERE Status='Active'");
				if(mysqli_num_rows($sql)>0){
					while ($row=mysqli_fetch_assoc($sql)) {
				?>
				<!-- single blog post -->
				<article class="col-md-4 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="200ms">
					<div class="post-block">
						<div class="media-wrapper">
							<img src="<?php echo 'admin'.substr($row['Picture'], 2);?>" alt="amazing caves coverimage" class="img-responsive"   style="height: 250px;width: 100%">
						</div>
						
						<div class="content">
							<h3><a href="Admin/views/moreStories.php?id=<?php echo $row['ID'];?>"><?php  echo $row['Author'];?></a></h3>
							<h4><a href="Admin/views/moreStories.php?id=<?php echo $row['ID']?>" style="color: white;"><?php  echo $row['Title'];?></a></h4>
							<p><?php  echo $row['Content'];?></p>
							<a class="btn btn-transparent" href="Admin/views/moreStories.php?id=<?php echo $row['ID']?>">Read more</a>
						</div>
					</div>						
				</article>
				<!-- /single blog post -->
			<?php 
		}
	}

			?>
			</div>

			

		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->

<!-- Srart Contact Us
=========================================== -->		
<section id="contact-us" class="contact-us section-bg" >
	<div class="container">
		<div class="row">
			
			<!-- section title -->
			<div class="title text-center wow fadeIn" data-wow-duration="500ms" id="contact">
				<h2>Get In <span class="color">Touch</span></h2>
				<div class="border"></div>
			</div>
			<!-- /section title -->
			
			<!-- Contact Details -->
			<div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
				<h4>Contact Details</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore adipisci.</p>
				<div class="contact-details">
					<div class="con-info clearfix">
						<i class="tf-map-pin"></i>
						<span>Khaja Road, Bayzid, Chittagong, Bangladesh</span>
					</div>
					
					<div class="con-info clearfix">
						<i class="tf-ion-ios-telephone-outline"></i>
						<span>Phone: +880-41-000-000</span>
					</div>
					
					<div class="con-info clearfix">
						<i class="tf-ion-iphone"></i>
						<span>Fax: +880-41-000-000</span>
					</div>
					
					<div class="con-info clearfix">
						<i class="tf-ion-ios-email-outline"></i>
						<span>Email: hello@meghna.com</span>
					</div>
				</div>
			</div>
			<!-- / End Contact Details -->
				
			<!-- Contact Form -->
			<div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms" >
				<form id="contact-form" method="post" action="Admin/class/sendMail.php" role="form">
				
					<div class="form-group">
						<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
					</div>
					
					<div class="form-group">
						<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
					</div>
					
					<div class="form-group">
						<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
					</div>
					
					<div class="form-group">
						<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
					</div>
					
					<div id="mail-success" class="success">
						Thank you. The Mailman is on His Way :)
					</div>
					
					<div id="mail-fail" class="error">
						Sorry, don't know what happened. Try later :(
					</div>
					
					<div id="">
						<input type="submit" id="" class="btn btn-transparent" value="Submit" name="submit">
					</div>						
					
				</form>
			</div>
			<!-- ./End Contact Form -->
		
		</div> <!-- end row -->
	</div> <!-- end container -->
	
	<!-- Google Map 
	<div class="google-map">
		<div id="map-canvas"></div>
	</div>	
	<!-- /Google Map -->
	
</section> <!-- end section -->
	


		
		
		<!-- end Contact Area
		========================================== -->
		
		<footer id="footer" class="bg-one">
			<div class="container">
			    <div class="row wow fadeInUp" data-wow-duration="500ms">
					<div class="col-lg-12">
						
						<!-- Footer Social Links -->
						<div class="social-icon">
							<ul class="list-inline">
								<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-youtube"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-pinterest-outline"></i></a></li>
							</ul>
						</div>
						<!--/. End Footer Social Links -->

						<!-- copyright -->
						<div class="copyright text-center">
							<a href="index.html">
								<!-- <img src="images/logo-meghna.png" alt="Meghna" />  -->
								<svg width="40px" height="40px" viewBox="0 0 45 44" version="1.1" xmlns="http://www.w4.org/2000/svg" xmlns:xlink="http://www.w4.org/1999/xlink">
		                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		                            <g id="Group" transform="translate(2.000000, 2.000000)" stroke="#57CBCC" stroke-width="4">
		                                <ellipse id="Oval" cx="20.5" cy="20" rx="20.5" ry="20"></ellipse>
		                                <path d="M6,7 L44.5,44.5" id="Line-2" stroke-linecap="square"></path>
		                                <path d="M21,20 L44,7" id="Line-4" stroke-linecap="square"></path>
		                            </g>
		                        </g>
		                    </svg>
							</a>
							<br />
							
							<p>Design And Developed by <a href="http://www.themefisher.com"> Themefisher Team</a>. Copyright &copy; <script>document.write(new Date().getFullYear())</script>. All Rights Reserved.
								<br>Get More <a href="https://themefisher.com/free-bootstrap-templates/" target="_blank">Free Bootstrap Templates</a>
							</p>
						</div>
						<!-- /copyright -->
						
					</div> <!-- end col lg 12 -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</footer> <!-- end footer -->

		<div id="scroll-up">
			up
		</div>
		
	    
		
		
		
		
		
		
		


		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
		<script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap 4.1 -->
		<script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- Slick Carousel -->
		<script type="text/javascript" src="plugins/slick-carousel/slick/slick.min.js"></script>
		<!-- Portfolio Filtering -->
		<script type="text/javascript" src="plugins/mixitup/dist/mixitup.min.js"></script>
		<!-- Smooth Scroll -->
		<script type="text/javascript" src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
		<!-- Magnific popup -->
		<script type="text/javascript" src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
		<!-- Google Map API -->
		<script type="text/javascript"  src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Sticky Nav -->
		<script type="text/javascript" src="plugins/Sticky/jquery.sticky.js"></script>
		<!-- Number Counter Script -->
		<script type="text/javascript" src="plugins/count-to/jquery.countTo.js"></script>
		<!-- wow.min Script -->
		<script type="text/javascript" src="plugins/wow/dist/wow.min.js"></script>
		<!-- Custom js -->
		<script type="text/javascript" src="js/script.js"></script>
		
    </body>
</html>