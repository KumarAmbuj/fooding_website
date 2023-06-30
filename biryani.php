<?php
session_start();
$getname=$_SESSION['setsession'];
if($getname=="")
{
header("location:homepage.php");
}


include 'dbconnection.php';

$getdate=date('d/m/Y',time());
date_default_timezone_set('Asia/Kolkata');
$gettime= date(' H:i:s a');

$sql11="select * from usersignup where setmobilenumber='$getname'";
$result11=mysqli_query($con,$sql11);
$row11=mysqli_fetch_array($result11);
$getn=$row11['setname'];
$getmobilenumber=$row11['setmobilenumber'];



?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>magicpace/biryani</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->  
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />   
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<script src="js/owl.carousel.js"></script>
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts --> 
<!-- scroll to fixed--> 
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scroll();  
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10, 
                zIndex: 999
            });
        });
    });
</script>
<!-- //scroll to fixed--> 
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
	$(document).ready(function() {
	
		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
		};
		
		$().UItoTop({ easingType: 'easeOutQuart' });
		
	});
</script>
<!-- //smooth-scrolling-of-move-up -->  
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" id="sourcecode">
	$(function()
	{
		$('.scroll-pane').jScrollPane();
	});
</script>
<!-- //the jScrollPane script -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<!-- the mousewheel plugin --> 





</head>
<body>
	<!-- header -->
	<?php include 'header.php';?>
    <!-- //header --> 	
    
	





	<!-- products -->
	<div class="products">	 
		<div class="container">
			<div class="col-md-9 product-w3ls-right">
				<!-- breadcrumbs --> 
				<ol class="breadcrumb breadcrumb1">
					<li><a href="index.php">Home</a></li>
					<li class="active">Biryani</li>
				</ol> 
				<div class="clearfix"> </div>
				<!-- //breadcrumbs -->
				<div class="product-top">
					<h4>Biryani</h4>
					
					<div class="clearfix"> </div>
				</div>
				<div class="products-row">
					<div class="col-md-3 product-grids"> 
						<div class="agile-products">
							<div class="new-tag"><h6>20%<br>Off</h6></div>
							<a href="#"><img src="images/vegaaloobiryani.jpg" class="img-responsive" style="height:100px;" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="#">Veg aaloo Biryani</a></h5> 
								<h6><del>Rs.80</del> Rs.60</h6> 
								<form action="#" method="post" enctype="multipart/form-data">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Veg aaloo biryani" />  
									<input type="hidden" name="amount" value="60.00" /> 
									<input type="submit"  name="veg_aaloo_biryani" value="Add to cart" onclick="myFunction()">
								</form> 
							</div>
						</div> 
					</div>
					
<?php
if(isset($_POST["veg_aaloo_biryani"]))
{

$insert="insert into cart(id,setmobilenumber,setitem,setcontent,setprice,setdate,settime)values(NULL,'$getmobilenumber','veg aaloo birayani','1','60','$getdate','$gettime')";
$result=mysqli_query($con,$insert);
if($insert==true)
{

}
else
{

}
}
?>



					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>New</h6></div>
							<a href="javascript:void(0);"><img src="images/eggbiryani.jpg" class="img-responsive" style="height:100px;" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="#">Egg biryani</a></h5> 
								<h6><del>Rs.80</del> Rs.70</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Egg Biryani" /> 
									<input type="hidden" name="amount" value="70.00" /> 
									<input type="submit" name="egg_biryani" value="Add to cart">
								</form>
							</div>
						</div>
					</div>
<?php
if(isset($_POST["egg_biryani"]))
{

$insert="insert into cart(id,setmobilenumber,setitem,setcontent,setprice,setdate,settime)values(NULL,'$getmobilenumber','Egg Biryani','1','70','$getdate','$gettime')";
$result=mysqli_query($con,$insert);
if($insert==true)
{

}
else
{

}
}
?>


					<div class="col-md-3 product-grids"> 
						<div class="agile-products">
							<div class="new-tag"><h6>5% <br> Off</h6></div>
							<a href="#"><img src="images/chickenbiryani.jpg" class="img-responsive" 0" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="#">Chicken Biryani</a></h5> 
								<h6><del>Rs.100</del> Rs.80</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/> 
									<input type="hidden" name="w3ls_item" value="Chicken Biryani"/> 
									<input type="hidden" name="amount" value="80.00"/> 
									<input type="submit" name="chicken_biryani" value="Add to cart">
								</form>
							</div>
						</div>  
					</div>
<?php
if(isset($_POST["chicken_biryani"]))
{

$insert="insert into cart(id,setmobilenumber,setitem,setcontent,setprice,setdate,settime)values(NULL,'$getmobilenumber','Chicken Biryani','1','80','$getdate','$gettime')";
$result=mysqli_query($con,$insert);
if($insert==true)
{

}
else
{

}
}
?>



					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>New</h6></div>
							<a href="#"><img src="images/eggchickenbiryani.jpg" class="img-responsive" 0" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="#">Egg Chicken Biryani</a></h5> 
								<h6><del>Rs.110</del> Rs.90</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/> 
									<input type="hidden" name="w3ls_item" value="Egg chicken biryani"/> 
									<input type="hidden" name="amount" value="90.00"/> 
									<input type="submit" name="egg_chicken_biryani" value="Add to cart">
								</form>
							</div>
						</div>
					</div> 

<?php
if(isset($_POST["egg_chicken_biryani"]))
{

$insert="insert into cart(id,setmobilenumber,setitem,setcontent,setprice,setdate,settime)values(NULL,'$getmobilenumber','Egg Chicken Biryani','1','90','$getdate','$gettime')";
$result=mysqli_query($con,$insert);
if($insert==true)
{

}
else
{

}
}
?>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>New</h6></div>
							<a href="#"><img src="images/muttonbiryani.jpg" class="img-responsive" 0" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="#">Mutton Biryani</a></h5> 
								<h6><del>Rs.150</del>Rs.120</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/> 
									<input type="hidden" name="w3ls_item" value="Mutton Biryani"/> 
									<input type="hidden" name="amount" value="120.00"/> 
									<input type="submit" name="mutton_biryani" value="Add to cart">
								</form>
							</div>
						</div>
					</div>
<?php
if(isset($_POST["mutton_biryani"]))
{

$insert="insert into cart(id,setmobilenumber,setitem,setcontent,setprice,setdate,settime)values(NULL,'$getmobilenumber','Mutton Biryani','1','120','$getdate','$gettime')";
$result=mysqli_query($con,$insert);
if($insert==true)
{

}
else
{

}
}
?>	



					<div class="clearfix"> </div>
				</div>
				<!-- add-products --> 
				<div class="w3ls-add-grids w3agile-add-products">
					<a href="#"> 
						<h4> <span></span> </h4>
						<h6> </h6>
					</a>
				</div> 
				<!-- //add-products -->
				
			</div>

			<div class="col-md-3 rsidebar">
				<div class="rsidebar-top">
					<div class="slider-left">
						<h4>Filter By Price</h4>            
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>0 - $100 </label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$100 - $200 </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$200 - $250  </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$250 - $300 </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$350 - $400 </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$450 - $500  </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>More</label> 
						</div> 
					</div>
					<div class="sidebar-row">
						<h4> Electronics</h4>
						<ul class="faq">
							<li class="item1"><a href="#">Mobile phones<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#">Smart phones</a></li>										
									<li class="subitem1"><a href="#">Accessories</a></li>										
									<li class="subitem1"><a href="#">Tabs</a></li>										
								</ul>
							</li>
							<li class="item2"><a href="#">Large appliances<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#">Refrigerators </a></li>										
									<li class="subitem1"><a href="#">Washing Machine </a></li>										
									<li class="subitem1"><a href="#">Kitchen Appliances </a></li>										
									<li class="subitem1"><a href="#">Air Conditioner</a></li>										
								</ul>
							</li>
							<li class="item3"><a href="#">Entertainment<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#"> Tv & Accessories</a></li>										
									<li class="subitem1"><a href="#">Digital Camera </a></li>										
									<li class="subitem1"><a href="#">Computer</a></li>										
								</ul>
							</li>
						</ul>
						<!-- script for tabs -->
						<script type="text/javascript">
							$(function() {
							
								var menu_ul = $('.faq > li > ul'),
									   menu_a  = $('.faq > li > a');
								
								menu_ul.hide();
							
								menu_a.click(function(e) {
									e.preventDefault();
									if(!$(this).hasClass('active')) {
										menu_a.removeClass('active');
										menu_ul.filter(':visible').slideUp('normal');
										$(this).addClass('active').next().stop(true,true).slideDown('normal');
									} else {
										$(this).removeClass('active');
										$(this).next().stop(true,true).slideUp('normal');
									}
								});
							
							});
						</script>
						<!-- script for tabs -->
					</div>
					<div class="sidebar-row">
						<h4>DISCOUNTS</h4>
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Upto - 10% (20)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>70% - 60% (5)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>50% - 40% (7)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (2)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (5)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
						</div>
					</div>
					<div class="sidebar-row">
						<h4>Color</h4>
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>White</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Pink</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Gold</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Blue</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Orange</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i> Brown</label> 
						</div>
					</div>			 
				</div>
				<div class="related-row">
					<h4>Related Searches</h4>
					<ul>
						<li><a href="products.php">Air conditioner </a></li>
						<li><a href="products.php">Gaming</a></li>
						<li><a href="products.php">Monitors</a></li>
						<li><a href="products.php">Pc </a></li>
						<li><a href="products.php">Food Processors</a></li>
						<li><a href="products.php">Oven</a></li>
						<li><a href="products.php">Purifiers</a></li>
						<li><a href="products.php">Oven</a></li>
						<li><a href="products.php">Cleaners</a></li>
						<li><a href="products.php">Small devices</a></li>
					</ul>
				</div>
				<div class="related-row">
					<h4>YOU MAY ALSO LIKE</h4>
					<div class="galry-like">  
						<a href="#"><img src="images/e1.png" class="img-responsive" alt="img"></a>             
						<h4><a href="products.php">Audio speaker</a></h4> 
						<h5>$100</h5>       
					</div>
				</div>
			</div>
			
			<div class="clearfix"> </div>
			
		</div>
    </div>

    <!--//products-->  
    
<!-- dmenu -->
<?php include 'menuitem.php';?>
<!-- //menu item --> 


	<!-- footer-top -->
	
	<!-- //footer-top -->  
	<!-- follow -->
	<?php include 'follow.php';?>
	<!-- //follow --> 
	<!-- footer -->
	<?php include 'footer.php';?>
	<!-- cart-js -->
	<!-- <script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  -->
	<!-- //cart-js -->  
	<!-- menu js aim -->
	<!--<script src="js/jquery.menu-aim.js"> </script>-->
	<!--<script src="js/main.js"></script>  Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="js/bootstrap.js"></script>-->
</body>
</html>