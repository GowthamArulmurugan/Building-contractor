<?php
	function Title()
	{
		echo "BUILDING CONSTRUCTION - DASHBOARD";
	} 
	function Menu()
	{

?>	
 
			
<div class="main-sec" id="home">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light shift">
                <div class="logo">
                    <h3>
                        <a class="navbar-brand" href="Index.php">
                           
                         <h1>BUILDING CONSTRUCTION - DASHBOARD</h1>
                        </a>
                    </h3>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">
                               HOME PAGE
                                <span class="sr-only">(current)</span>
                            </a>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">INFO ABOUT</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link dropdown-toggle" href="service.php" >
                                OUR SERVICE
                               
                            </a>
                           
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="project.php">PREVIOUS PROJECT</a>
                        </li>
						 <li class="nav-item">
                            <a class="nav-link" href="gallery.php">CONSTRUCTION GALLERY</a>
                        </li>
                            <li class="nav-item">
                            <a class="nav-link" href="admin">BOOK CONTRACT</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--//header-->
    </div>
<?php 
	}
	function Footer()
	{
?>
<footer class="footer-sec-w3layouts py-lg-5 py-3">
        <div class="container">
            <div class="w3ls-inner-sec py-lg-4 py-3">
                <div class="row">
                    <div class="col-lg-6 footer-left-info text-left">
                       
                        <div class="logo">
                            <img src="images/page/logo.jpg" style="width:60px" />
                            <h2>
                                <a href="index-2.html">

                                     Building  Construction - DASHBOARD
                                </a>
                            </h2>
                        </div>
                        <p class="my-5">Building construction Pvt. Ltd Tamilnadu based company which is working in Building Construction from 10 years. We make house of your dream.</p>


                    </div>
                    <div class="col-lg-6 footer-right-info text-right">
                        <h6>Get In Touch</h6>
                        <address class="ad-info mt-5">
                            <strong>Building construction pvt.ltd</strong>
                            <br> C 14/98 A, ATTUR (TK), SALEM(DT),
                            <br> Opp. CUB Bank, TAMIL NADU 6336100
                            <br>
                            <abbr title="Phone">PH:</abbr> 9876542108
                        </address>

                    </div>
                </div>
                <div class="row copyright-info mt-3">
                    <div class="col-lg-6 copyright">
                        <p>
                            &copy; 2023 Building construction. All Rights Reserved | Power by
                            <a href="http://girfa.co.in/"> Construction-Dashboard </a>
                        </p>
                    </div>
                    <div class="col-lg-6 social_media footer-icons text-right">
                        <ul class="text-right">
                            <li>
                                <a href="https://www.facebook.com/girfahelp/" class="facebook text-center">
                                    <i class="fa fa-facebook-f" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/rajkumar9795" class="twitter text-center">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                           
                           <li>
                                <a href="https://www.instagram.com/rajkumar9795/" class="twitter text-center">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul><br />
                        <a href="admin" rel=nofollow> Login</a>
                    </div>
                </div>

            </div>
        </div>
    </footer>
<?php
	}
	function TopLink()
	{
?>

   
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/examples.css" rel="stylesheet" type="text/css">
    <link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css">
    <link href="css/slider-pro.css" rel='stylesheet' type='text/css' />
    <link href="css/timeline.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="css/gcss.css" rel="stylesheet">
	   <link rel="icon" href="images/page/logo.png">
<?php 
	}
	function BottomLink()
	{
?>
<!-- ==========================================
        This tempalte is created by https://w3layouts.com/
       ==========================================-->
<script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
	<script>
        $(document).ready(function($) {
            $('#example2').sliderPro({
                width: 350,
                height: 400,
                visibleSize: '100%',
                forceSize: 'fullWidth',
                autoSlideSize: true
            });

            // instantiate fancybox when a link is clicked
            $(".slider-pro").each(function() {
                var slider = $(this);

                slider.find(".sp-image").parent("a").on("click", function(event) {
                    event.preventDefault();

                    if (slider.hasClass("sp-swiping") === false) {
                        var sliderInstance = slider.data("sliderPro"),
                            isAutoplay = sliderInstance.settings.autoplay;

                        $.fancybox.open(slider.find(".sp-image").parent("a"), {
                            index: $(this).parents(".sp-slide").index(),
                            afterShow: function() {
                                if (isAutoplay === true) {
                                    sliderInstance.settings.autoplay = false;
                                    sliderInstance.stopAutoplay();
                                }
                            },
                            afterClose: function() {
                                if (isAutoplay === true) {
                                    sliderInstance.settings.autoplay = true;
                                    sliderInstance.startAutoplay();
                                }
                            }

                        });
                    }
                });
            });
        });
    </script>
   <!-- //Custom-JavaScript-File-Links -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!--slider-->
    <!-- banner slider -->
    <script src="js/responsiveslides.min.js"></script>
	    <!-- //dropdown nav -->
    <script src="js/jquery.sliderPro.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
	 <script src="js/bootstrap.js"></script>
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>

<?php 
	}
?>