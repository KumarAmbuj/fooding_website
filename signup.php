<?php
include 'dbconnection.php';
error_reporting(0);
$getdate=date('d/m/Y',time());
date_default_timezone_set('Asia/Kolkata');
$gettime= date(' H:i:s a');
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
<title>magicpace.com/Sign Up</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /><!-- animation -->
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script><!-- fixed nav js -->
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scroll();  
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scroll({
                marginTop: $('.header-two').outerHeight(true) + 10, 
                zIndex: 999
            });
        });
    });
</script>
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'> 
<!-- web-fonts -->  
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
</head>
<body>
	<!--top header -->
	
		<!-- header -->
	<?php include 'homepageheader.php';?>
	
														
					
	<!-- sign up-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Create your account</h3>  
			<div class="login-body">
				<form action="#" method="post">

				<input type="text" class="user" name="mobile_number" placeholder="Enter your Mobile number" pattern="[6-9]{1}[0-9]{9}" title="Phone number with 6-9 and remaing 9 digit with 0-9" required="">
					<input type="text" class="user" name="name" placeholder="Enter your Name" required="">
					<input type="text" class="user" name="email" placeholder="Enter your email" required="";
 >
					
					<input type="password" name="password" class="lock" placeholder="Password" required="">
					<select class="form-control bfh-states" name="college"   required="">
						<option value="">Select Your college</option>
						<option value="Techno India college, Kolkata">Techno India college</option>
						<option value="Heritage college Kolkata">Heritage college Kolkata</option>
						
					</select><br>
					<input type="text" name="roomnumber" placeholder="Enter your Room Number" required="">
					<input type="submit" name="signup" value="Sign Up ">
					<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Remember me</label>
						<div class="forgot">
							<a href="#"></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>  
			<h6>Already have an account? <a href="login.php">Login Now »</a> </h6>  
		</div>
	</div>
<?php

if(isset($_POST["signup"]))
{
$getmobilenumber=$_POST['mobile_number'];
$getname=$_POST['name'];
$getemail=$_POST['email'];
$getpassword=$_POST['password'];
$getcollege=$_POST['college'];
$getroomnumber=$_POST['roomnumber'];

$check="select * from usersignup where setmobilenumber='$getmobilenumber'";
$checkresult=mysqli_query($con,$check);
$countcheck=mysqli_num_rows($checkresult);

$row=mysqli_fetch_array($checkresult);
$getuserrow=$row['setmobilenumber'];


if($countcheck!=1)
{

 $insert="insert into usersignup(id,setmobilenumber,setname,setemail,setpassword,setcollege,setroomnumber,setdate)values(NULL,'$getmobilenumber','$getname','$getemail','$getpassword','$getcollege','$getroomnumber','$getdate')";
$result=mysqli_query($con,$insert);
if($insert==true)
{

	?>
 
		<script>
		$(function() {
		$("#myModal").modal();//if you want you can have a timeout to hide the window after x seconds
		});
		</script>
		 
		<!-- Modal -->
		  <div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
		 
			  <!-- Modal content-->
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title"> Alert </h4>
				</div>
				<div class="modal-body">
				  <p style="color:green; font-size:20px;">Successfully signedup</p>
				  <p style="color:blue; font-size:16px;"><a href="login.php"><b>login</b></a> to start shopping</p>
				</div>
				
			  </div>
		 
			</div>
		  </div>
		 
		<?php

	

}
else
{
	?>
 
	<script>
	$(function() {
	$("#myModal").modal();//if you want you can have a timeout to hide the window after x seconds
	});
	</script>
	 
	<!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
	 
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title"> Alert </h4>
			</div>
			<div class="modal-body">
			  <p style="color:red; font-size:20px;">Some Error occured </p>
			  <p style="color:blue; font-size:16px;">try again</p>
			</div>
			
		  </div>
	 
		</div>
	  </div>
	 
	<?php
}


}
else
{

	 ?>
 
		<script>
		$(function() {
		$("#myModal").modal();//if you want you can have a timeout to hide the window after x seconds
		});
		</script>
		 
		<!-- Modal -->
		  <div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
		 
			  <!-- Modal content-->
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title"> Alert </h4>
				</div>
				<div class="modal-body">
				  <p style="color:red; font-size:20px;">User already exist with this number</p>
				  <p style="color:blue; font-size:16px;">Try some other number to <a href="signup.php"><b>signup</b></a></p>
				</div>
				
			  </div>
		 
			</div>
		  </div>
		 
		<?php }


}

?>





	<!-- //sign up-page --> 

	
	<!-- follow -->
	<?php include 'follow.php';?>
	<!-- follow --> 
	<!-- footer -->
	<?php include 'homepagefooter.php';?>
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
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
    </script>  
	<!-- //cart-js --> 	 
	<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>