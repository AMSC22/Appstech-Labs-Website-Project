<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CEC 319 DYNAMIC WEB DESIGN</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <!---link rel="stylesheet" href="style.css"-->
    <link rel="stylesheet" href="css/fixed.css">
	<link rel="stylesheet" href="fontawesome.min.css">
	<link rel="stylesheet" href="animate.css">
	<link rel="stylesheet" href="stylehome.css">
<script>
	$(document).ready(function(){
    $("container").click(function(){
            $(this).hide();
        });
        $(".test").dblclick(function(){
            alert("You entered p1")
            //$(this).hide();
        });
    });

    $("button").click(function(){
        $("form").faldeToggle();
    });
</script>
</head>

<body data-spy="scroll" data-target="#navbarResponsive">

    <!-- Start Home Section -->
    <div id="home">

		<!-- Navigation -->
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<p>CEC 319 DYNAMIC WEB DESIGN</p>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
					</li>
					<li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
				</ul>	
			</div>
			<div> 
				<button type="button" class="navbar-toggle collapsed btn btn-primary btn-sm" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			</div>
        </nav>
        <!-- End Navigation -->

        <!-- Start Landing Page Section-->
		<div class="landing">
				<div class="home-wrap">
					<div class="home-inner">
							<div class="container-fluid h" >
									<!--Carousel Begins-->
									<div class="carousel slide carousel-fade" id="my-carousel" data-ride = "carousel">
						<!--Start Carousel Indicators Begins-->
						
						<ol class="carousel-indicators cd">
							<li data-target="#my-carousel" data-slide-to="0" class="fa fa-star active"></li>
							<li data-target="#my-carousel" data-slide-to="1" class = "fa fa-star" ></li>
							<li data-target="#my-carousel" data-slide-to="2" class = "fa fa-star"></li>
							<li data-target="#my-carousel" data-slide-to="3" class = "fa fa-star"></li>
							<li data-target="#my-carousel" data-slide-to="4" class = "fa fa-star"></li>
							<li data-target="#my-carousel" data-slide-to="5" class = "fa fa-star"></li>
						</ol>
						<!--Carousel Inner-->
						<div class="carousel-inner cai">
							<!--Slie COMPUTERS-->
							<div class="carousel-item text-center active ci" >
						
									<div class="imgdiv cm ">
										<img src="images/computers.png"  alt="">
										<h1 class="animated bounceInUp" style="animation-delay: 1s ">We are <span class="animated bounceInDown" style="animation-delay: 2s">The Best</span> </h1>
									<h3 class= "animated slideInLeft" style="animation-delay: 3s ">We Nuture <span class="animated slideInUp" style="animation-delay: 6s ">Innovation</span></h3>
									</div>
								</div>
								<!--Slide UI/UX-->
								<div class="carousel-item text-center ci " >
						
										<div class="imgdiv" style="background-color: rgb(8, 40, 41)">
											<img src="images/3db55480-5fb4-43c3-baf5-791d33796ad2.jpg"  alt="">
										</div>
								</div>
								
						<!--Artificial Intelligence-->
						<div class="carousel-item ci " >
						
								<div class="imgdiv ai">
									<img src="images/artifiticial-intelligence-1250x585.jpg"  alt="">
									<h1 class="animated bounceInDown" style="animation-delay: 1s ">We Think </h1>
									<h1 class="animated bounceInUp" style="animation-delay: 2s ">Smart</h1>
								</div>
							</div>
						
							
						
								   
							</div>    
						</div>
					</div>
				</div>
			</div>
		
						<!--Carousel Inner Ends-->
						<!--Carousel Controls-->
						<a href="#my-carousel" class="carousel-control-prev" role="button" data-slide-to="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
							</a>
							<a href="#my-carousel" class="carousel-control-next" role="button" data-slide-to="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
									</a>
									</div>
								</div>
				</div>
			</div>
		</div>

			    <!-- FORMS -->
				<div class="container">
						<form action="<?php	$_PHP_SELF ?>" method="GET">
								<label>Log in to check our services</label>
						  <div class="form-group">
							<input type="email" class="form-control" placeholder="Enter Email">
							<input type="password" class="form-control" placeholder="Enter Password">
						    <button type="submit" class="btn btn-default">Log In</button>
						  </form>				  
        </div>
        
            <!-- Start About Section -->
            <div id="about" class="offset">
                <div>
                    <!--Start of Fixed background-->
                    <!--Start of Jumbotron Section-->
                    <div class="">
                        <div class="narrow">
                            <div class="row dark text-center">
    
                                <div class="col-12">
                                    <h3 id="a" class="heading">About Us</h3>
                                    <div class="heading-underline"></div>
                                    <p class="p1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae culpa</p>
                                    <p class="p1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae culpa</p>
    
    
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <div class="about">
                                            <i class="fas fa-play-circle fa-4x" data-fa-transform="shrink-3 up-5"></i>
                                            <h3> HTML5 Makup</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim voluptate animi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim voluptate animi.</p>
                                        </div>
                                    </div>
    
                                    <div class="col-md-4">
                                        <div class="about">
                                            <i class="fas fa-play-circle fa-4x" data-fa-transform="shrink-4.5 up-4.5"></i>
                                            <h3> CSS3 Styling</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim voluptate animi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim voluptate animi.</p>
                                        </div>
                                    </div>
    
                                    <div class="col-md-4">
                                        <div class="about">
                                            <i class="fab fa-wpforms fa-4x" data-fa-transform="shrink-4 up-5"></i>
                                            <h3> Graphic Design</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim voluptate animi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim voluptate animi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End of Row Dark-->
    
                        </div>
    
                        <!--End Narrow-->
                    </div>
                    <!--End Jumbotron-->
                    <div class="fixed-wrap">
                        <div class="fixed">
                        </div>
                    </div>
                </div>
                <!--End of fixed-background-->
    
            </div>
            <!-- End About Section-->

        <!--End Landing Page Section-->
        <!-- End Home Section-->
            <!--- Script Source Files -->
            
            <script src="js/jquery-3.4.1.min.js"></script>
            <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
            <script src="js/all.js"></script>
                
            <!--- End of Script Source Files -->
            <?php
        $Email = ["abcd@gmail.com", "efgh@gmail.com", "igkl@gmail.com"];
        $Password = ["0000", "1111", "2222"];
for($i=0; $i < 4; $i++){
    if( $_GET["email"] == $Email && $_GET["password"] == $Password ){
        echo "Good";
        break;
    }
}
?>
</body>

</html>