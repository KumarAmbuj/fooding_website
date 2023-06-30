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
<!DOCTYPE php>
<php lang="en">
<head>
<title>magicpace/dosa</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
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
					<li class="active">Dosa</li>
				</ol> 
				<div class="clearfix"> </div>
				<!-- //breadcrumbs -->
				<div class="product-top">
					<h4>Dosa</h4>
					
					<div class="clearfix"> </div>
				</div>
				<div class="products-row">
					<div class="col-md-3 product-grids"> 
						<div class="agile-products">
							<div class="new-tag"><h6>20%<br>Off</h6></div>
							<a href="#"><img src="images/plaindosa.jpg" class="img-responsive" style="height:120px;" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="#">plain Dosa</a></h5> 
								<h6><del>Rs.40</del> Rs.30</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="plain dosa" /> 
									<input type="hidden" name="amount" value="30.00" /> 
									<input type="submit" name="plain_dosa" value="Add to cart">
								</form> 
							</div>
						</div> 
					</div>


<?php
if(isset($_POST["plain_dosa"]))
{

$insert="insert into cart(id,setmobilenumber,setitem,setcontent,setprice,setdate,settime)values(NULL,'$getmobilenumber','plain_dosa','1','30','$getdate','$gettime')";
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
							<a href="#"><img src="images/masaladosa.jpg" class="img-responsive" style="height:120px;" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="#">Masala Dosa</a></h5> 
								<h6><del>Rs.50</del> Rs.40</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Masala Dosa" /> 
									<input type="hidden" name="amount" value="40.00" /> 
									<input type="submit" name="masala_dosa" value="Add to cart">
								</form> 
							</div>
						</div> 
					</div>


<?php
if(isset($_POST["masala_dosa"]))
{

$insert="insert into cart(id,setmobilenumber,setitem,setcontent,setprice,setdate,settime)values(NULL,'$getmobilenumber','masala dosa','1','40','$getdate','$gettime')";
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
							<a href="#"><img src="images/buttermasaladosa.jpg" class="img-responsive" style="height:120px;" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="#">Butter Masala Dosa</a></h5> 
								<h6><del>Rs.65</del> Rs.50</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/> 
									<input type="hidden" name="w3ls_item" value="Butter Masala Dosa"/> 
									<input type="hidden" name="amount" value="50.00"/> 
									<input type="submit" name="butter_masala_dosa" value="Add to cart">
								</form> 
							</div>
						</div> 
					</div>


<?php
if(isset($_POST["butter_masala_dosa"]))
{

$insert="insert into cart(id,setmobilenumber,setitem,setcontent,setprice,setdate,settime)values(NULL,'$getmobilenumber','Butter Masala Dosa','1','50','$getdate','$gettime')";
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
							<a href="#"><img src="images/cheesemasaladosa.jpg" class="img-responsive" style="height:120px;" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="#">Cheese Masala Dosa</a></h5> 
								<h6><del>Rs.75</del> Rs.60</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/> 
									<input type="hidden" name="w3ls_item" value="Cheese Masala Dosa"/> 
									<input type="hidden" name="amount" value="60.00"/> 
									<input type="submit" name="cheese_masala_dosa" value="Add to cart">
								</form> 
							</div>
						</div> 
					</div>


<?php
if(isset($_POST["cheese_masala_dosa"]))
{

$insert="insert into cart(id,setmobilenumber,setitem,setcontent,setprice,setdate,settime)values(NULL,'$getmobilenumber','cheese masala dosa','1','60','$getdate','$gettime')";
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
							<a href="#"><img src="images/cheesemasaladosa.jpg" class="img-responsive" style="height:120px;" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="#">Butter Cheese Masala Dosa</a></h5> 
								<h6><del>Rs.85</del>Rs.70</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/> 
									<input type="hidden" name="w3ls_item" value="Butter Cheese Masala Dosa"/> 
									<input type="hidden" name="amount" value="70.00"/> 
									<input type="submit" name="butter_cheese_masala_dosa" value="Add to cart">
								</form> 
							</div>
						</div> 
					</div>


<?php
if(isset($_POST["butter_cheese_masala_dosa"]))
{

$insert="insert into cart(id,setmobilenumber,setitem,setcontent,setprice,setdate,settime)values(NULL,'$getmobilenumber','Butter cheese masala dosa','1','70','$getdate','$gettime')";
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
							<a href="#"><img src="images/mehsoormasaladosa.jpg" class="img-responsive" style="height:120px;" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="#">Mehsoor Masala Dosa</a></h5> 
								<h6><del>Rs.85</del> Rs.70</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/> 
									<input type="hidden" name="w3ls_item" value="Mehsoor Masala Dosa"/> 
									<input type="hidden" name="amount" value="70.00"/> 
									<input type="submit" name="mehsoor_masala_dosa" value="Add to cart">
								</form> 
							</div>
						</div> 
					</div>


<?php
if(isset($_POST["mehsoor_masala_dosa"]))
{

$insert="insert into cart(id,setmobilenumber,setitem,setcontent,setprice,setdate,settime)values(NULL,'$getmobilenumber','mehsoor masala dosa','1','70','$getdate','$gettime')";
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
							<div class="new-tag"><h6>20%<br>Off</h6></div>
							<a href="#"><img src="images/mehsoorbuttermasaladosa.jpg" class="img-responsive" style="height:120px;" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="#">Mehsoor Butter Masala Dosa</a></h5> 
								<h6><del>Rs.95</del> Rs.80</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Mehsoor butter masala dosa" /> 
									<input type="hidden" name="amount" value="80.00" /> 
									<input type="submit" name="mehsoor_butter_masala_dosa" value="Add to cart">
								</form> 
							</div>
						</div> 
					</div>


<?php
if(isset($_POST["mehsoor_butter_masala_dosa"]))
{

$insert="insert into cart(id,setmobilenumber,setitem,setcontent,setprice,setdate,settime)values(NULL,'$getmobilenumber','mehsoor butter masala dosa','1','80','$getdate','$gettime')";
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
							<a href="#"><img src="images/mehsoorbuttermasaladosa.jpg" class="img-responsive" style="height:120px;" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="#">Mehsoor Cheese masala Dosa</a></h5> 
								<h6><del>Rs.110</del> Rs.90</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Mehsoor Cheese masala dosa " /> 
									<input type="hidden" name="amount" value="90.00" /> 
									<input type="submit" name="mehsoor_cheese_masala_dosa" value="Add to cart">
								</form> 
							</div>
						</div> 
					</div>


<?php
if(isset($_POST["mehsoor_cheese_masala_dosa"]))
{

$insert="insert into cart(id,setmobilenumber,setitem,setcontent,setprice,setdate,settime)values(NULL,'$getmobilenumber','Mehsoor cheese masala dosa','1','90','$getdate','$gettime')";
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
							<div class="new-tag"><h6>20%<br>Off</h6></div>
							<a href="#"><img src="images/oniondosa.jpg" class="img-responsive" style="height:120px;" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="#">Onion Dosa</a></h5> 
								<h6><del>Rs.50</del> Rs.35</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="onion dosa" /> 
									<input type="hidden" name="amount" value="35.00" /> 
									<input type="submit" name="onion_dosa" value="Add to cart">
								</form> 
							</div>
						</div> 
					</div>


<?php
if(isset($_POST["onion_dosa"]))
{

$insert="insert into cart(id,setmobilenumber,setitem,setcontent,setprice,setdate,settime)values(NULL,'$getmobilenumber','onion dosa','1','35','$getdate','$gettime')";
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
							<a href="#"><img src="images/hinesedosa.jpg" class="img-responsive" style="height:120px;" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="#">Chinese Dosa</a></h5> 
								<h6><del>Rs.60</del> Rs.50</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Chinese Dosa" /> 
									<input type="hidden" name="amount" value="50.00" /> 
									<input type="submit" name="chinese_dosa" value="Add to cart">
								</form> 
							</div>
						</div> 
					</div>


<?php
if(isset($_POST["chinese_dosa"]))
{

$insert="insert into cart(id,setmobilenumber,setitem,setcontent,setprice,setdate,settime)values(NULL,'$getmobilenumber','Chinese dosa','1','50','$getdate','$gettime')";
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
							<a href="#"><img src="images/pawbhajidosa.jpg" class="img-responsive" style="height:120px;" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="#">Paw bhaji Dosa</a></h5> 
								<h6><del>Rs.65</del> Rs.50</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/> 
									<input type="hidden" name="w3ls_item" value="Paw Bhaji dosa"/> 
									<input type="hidden" name="amount" value="50.00"/> 
									<input type="submit" name="paw_bhaji_dosa" value="Add to cart">
								</form> 
							</div>
						</div> 
					</div>


<?php
if(isset($_POST["paw_bhaji_dosa"]))
{

$insert="insert into cart(id,setmobilenumber,setitem,setcontent,setprice,setdate,settime)values(NULL,'$getmobilenumber','paw bhaji dosa','1','50','$getdate','$gettime')";
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
							<a href="#"><img src="images/paneermasaladosa.jpg" class="img-responsive" style="height:100px;" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="#">Paneer Masala Dosa</a></h5> 
								<h6><del>Rs.605</del> Rs.50</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/> 
									<input type="hidden" name="w3ls_item" value="paneer masala dosa"/> 
									<input type="hidden" name="amount" value="50.00"/> 
									<input type="submit" name="paneer_masala_dosa" value="Add to cart">
								</form> 
							</div>
						</div> 
					</div>


<?php
if(isset($_POST["paneer_masala_dosa"]))
{

$insert="insert into cart(id,setmobilenumber,setitem,setcontent,setprice,setdate,settime)values(NULL,'$getmobilenumber','paneer masala dosa','1','50','$getdate','$gettime')";
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
						<a href="single.php"><img src="images/e1.png" class="img-responsive" alt="img"></a>             
						<h4><a href="products.php">Audio speaker</a></h4> 
						<h5>$100</h5>       
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
			
		</div>
	</div>
	<!--//products-->  

<!-- deals -->
<div class="deals"> 
	<div class="container"> 
		<h3 class="w3ls-title">MENU ITEM</h3>
		<div class="deals-row">
			<div class="col-md-3 focus-grid"> 
				
				<a href="breakfast.php" class="wthree-btn"> 
					<div class="focus-image"></div>
					<h4 class="clrchg"> Breakfast </h4> 
				</a>
			</div>
			<div class="col-md-3 focus-grid"> 
				<a href="#" class="wthree-btn wthree1"> 
					<div class="focus-image"></div>
					<h4 class="clrchg"> Lunch </h4> 
				</a>
			</div> 
			<div class="col-md-3 focus-grid"> 
				<a href="#" class="wthree-btn wthree2"> 
					<div class="focus-image"></div>
					<h4 class="clrchg"> Evening-snacks </h4>
				</a>
			</div> 
			<div class="col-md-3 focus-grid"> 
				<a href="#" class="wthree-btn wthree3"> 
					<div class="focus-image"></div>
					<h4 class="clrchg"> Dinner </h4>
				</a>
			</div> 
			<div class="col-md-2 focus-grid w3focus-grid-mdl"> 
				<a href="momo.php" class="wthree-btn wthree3"> 
					<div class="focus-image"></div>
					<h4 class="clrchg"> Momos </h4> 
				</a>
			</div>
			<div class="col-md-2 focus-grid w3focus-grid-mdl"> 
				<a href="roll.php" class="wthree-btn wthree4"> 
					<div class="focus-image"></div>
					<h4 class="clrchg"> roll </h4>
				</a>
			</div>
			<div class="col-md-2 focus-grid w3focus-grid-mdl"> 
				<a href="dosa.php" class="wthree-btn wthree2"> 
					<div class="focus-image"></div>
					<h4 class="clrchg"> dosa </h4>
				</a>
			</div> 
			<div class="col-md-2 focus-grid w3focus-grid-mdl"> 
				<a href="chowmein.php" class="wthree-btn wthree"> 
					<div class="focus-image"></div>
					<h4 class="clrchg"> chowein </h4>
				</a>
			</div> 
			<div class="col-md-2 focus-grid w3focus-grid-mdl"> 
				<a href="#" class="wthree-btn wthree5"> 
					<div class="focus-image"></div>
					<h4 class="clrchg"> Rice </h4> 
				</a>
			</div> 
			<div class="col-md-2 focus-grid w3focus-grid-mdl"> 
				<a href="#" class="wthree-btn wthree1"> 
					<div class="focus-image"></div>
					<h4 class="clrchg"> thali </h4> 
				</a>
			</div>
			<div class="col-md-3 focus-grid"> 
				<a href="#" class="wthree-btn wthree2"> 
					<div class="focus-image"></div>
					<h4 class="clrchg"> chinese </h4> 
				</a>
			</div>
			<div class="col-md-3 focus-grid"> 
				<a href="biryani.php" class="wthree-btn wthree5"> 
					<div class="focus-image"></div>
					<h4 class="clrchg"> biryani </h4> 
				</a>
			</div> 
			<div class="col-md-3 focus-grid"> 
				<a href="#" class="wthree-btn wthree3"> 
					<div class="focus-image"></div>
					<h4 class="clrchg">Fruits</h4> 
				</a>
			</div> 
			<div class="col-md-3 focus-grid"> 
				<a href="#" class="wthree-btn "> 
					<div class="focus-image"></div>
					<h4 class="clrchg">combo</h4> 
				</a>
			</div> 
			<div class="clearfix"> </div>
		</div>  	
	</div>  	
</div> 
<!-- //menu item --> 



	<!-- footer-top -->
	
	<!-- //footer-top -->  
	<!-- subscribe -->
	<div class="subscribe"> 
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
				<h4>Follow us on</h4>  
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#" class="fa fa-instagram icon instagram"> </a></li>
					<li><a href="#" class="fa fa-youtube icon youtube"> </a></li> 
				</ul>
				
			</div> 
			<div class="col-md-6 subscribe-right">
				<h4>Sign up for email and get 25%off!</h4>  
				<form action="#" method="post"> 
					<input type="text" name="email" placeholder="Enter your Email..." required="">
					<input type="submit" value="Subscribe">
				</form>
				<div class="clearfix"> </div> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //subscribe --> 
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				<div class="col-md-4 address-left agileinfo">
					<div class="footer-logo header-logo">
						<h2><a href="index.php"><span>M</span>agicpace </a></h2>
						<h4>speed at your finger tip</h4>
					</div>
					<ul>
						
						<li><i class="fa fa-mobile"></i> +91 9123-832-514 </li>
						
						
					</ul> 
				</div>
				<div class="col-md-8 address-right">
					<div class="col-md-4 footer-grids">
						<h3>Company</h3>
						<ul>
							<li><a href="about.php">About Us</a></li>
							
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Services available at</h3>
						<ul>
							<li><a href="#">Techno India College,Kolkata</a></li>
							<li><a href="#">Heritage college, Kolkata</a></li> 
							<li><a href="#">C.U.J , Ranchi</a></li> 
							
						</ul> 
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Payment Methods</h3>
						<ul>
							<li><i class="fa fa-mobile" aria-hidden="true"></i> paytm </li>
							<li><i class="fa fa-money" aria-hidden="true"></i> Cash On Delivery</li>
							
						</ul>  
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //footer -->		
	<div class="copy-right"> 
		<div class="container">
			<p>© 2019 magicpace.com . All rights reserved | Design by  Mr. K.A. </a></p>
		</div>
	</div> 
	<!-- cart-js -->
	
</body>
</html>