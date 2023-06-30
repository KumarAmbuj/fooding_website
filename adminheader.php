<?php
$getname11=$_SESSION['setsession'];
$sql11="select * from admin where setmobilenumber='$getname11'";
$result11=mysqli_query($con,$sql11);
$row11=mysqli_fetch_array($result11);
$getn=$row11['setname'];

?>




<div class="header">
		<div class="w3ls-header"><!--header-one--> 
			<div class="w3ls-header-left">
					<p><a href="#">Founder :- Diwesh Dutta</a></p>
			</div>
			<div class="w3ls-header-right">
          <div style="display:none;"  >
			<a href="signup.php" style="color:white; padding:10px; ">Sign Up</a> 
			<a href="login.php" style="color:white; padding:10px;">Login </a>
		</div>	
				<a href="adminlogout.php" style="color:white; padding:10px;">Logout</a>


            <div style="display:none;">
				<ul>
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
						<ul class="dropdown-menu">
						    <li><a href="#">My Profile</a></li> 
							<li><a href="myorder.php">My Orders</a></li>  
							<li><a href="login.php">Wallet</a></li> 
						</ul> 
					</li> 
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-percent" aria-hidden="true"></i> Today's Deals<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="offers.php">Cash Back Offers</a></li> 
							<li><a href="#"></a></li>
							<li><a href="#"></a></li> 
						</ul> 
					</li> 
			</div>
					
					
						
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle"></i> </a>
						</li>
				</ul>
			</div>
			<div class="clearfix"> </div> 
		</div>
		<div class="header-two"><!-- header-two -->
			<div class="container">
				<div class="header-logo">
					<h1><a href="#"><span>M</span>agicpace </a></h1>
					<h4>speed at your finger tip...</h4> 
				</div>	

                <div style="margin:right;">Welcome: <?php echo "$getn";?></div>
				<!-- //search bar -->
				<div class="header-search">
					<form action="#" method="post">
						<input type="search" name="Search" placeholder="Search for a Product..." required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				</div>

				<!-- contactus -->
              <div style="display:none;"  >
				<div class="header-cart"> 
					<div class="my-account">
						<a href="contact.php"><i class="fa fa-map-marker" aria-hidden="true"></i> CONTACT US</a>						
					</div>
					<!-- //view cart -->
					<div class="cart"> 
						<form action="cart.php" method="post" class="last"> 
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="display" value="1" />
							<button class="w3view-cart" type="submit" onclick="myFunction()" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
						</form>  
					</div>
					<div class="clearfix"> </div> 
				</div> 
              </div>

				<div class="clearfix"> </div>
			</div>		
		</div>
		<script>
function myFunction() {
  location.replace("cart.php")
}
</script>
		
		<!-- //header-two -->
		<!-- store categories in slider top -->
		<div class="header-three"><!-- header-three -->
			<div class="container">
				
				<div class="move-text">
					<div class="marquee" style="color:white; font-size:14px;"> best fooding site for college students </div>
					<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
					<script>
					  $('.marquee').marquee({ pauseOnHover: true });
					  //@ sourceURL=pen.js
					</script>
				</div>
			</div>
		</div>
	</div>