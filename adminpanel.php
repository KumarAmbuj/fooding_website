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

$sql11="select * from admin where setmobilenumber='$getname'";
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
<html lang="en">
<head>
<title>magicpace.com</title>
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
<link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider --> 
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts --> 
<script src="js/owl.carousel.js"></script>  
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({ 
	  autoPlay: 3000, //Set AutoPlay to 3 seconds 
	  items :4,
	  itemsDesktop : [640,5],
	  itemsDesktopSmall : [480,2],
	  navigation : true
 
	}); 
}); 
</script>
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
<script src="js/bootstrap.js"></script>	
</head>
<body>
	
	
	<script>
		$('#myModal88').modal('show');
	</script> 
	<!-- header -->
	<?php include 'adminheader.php';
	$r="SELECT * from temp setmobilenumber";
	$t=mysqli_query($con,$r);
	if(mysqli_num_rows($t)>0)
	{
		$r1="SELECT DISTINCT setmobilenumber from temp";
	$t1=mysqli_query($con,$r1);
	
	}
	?>
	<!-- //header -->	
	
	<!-- add-products -->
	<hr>
    <hr>
	<?php
	 $query11 = "SELECT * FROM cancel  ";
	 $query_run = mysqli_query($con,$query11);
	 
	 $qty= 0;
	 while ($num = mysqli_fetch_array($query_run)) {
		 $qty += $num['setprice'];
	 }

	?> 

	<?php
	$query12 = "SELECT * FROM done  ";
	$query_run = mysqli_query($con,$query12);
	
	$qty1= 0;
	while ($num = mysqli_fetch_array($query_run)) {
		$qty1 += $num['setprice'];
	}
	?>



    <label style="float:left; font:34px;">Total Amount Rs.<input type="text" style="width:5em;" readonly value="<?php echo $qty1 ;?>"></label>
    <label style="float:right; font:34px;">Canceled Amount Rs.<input type="text" style="width:5em;" readonly value="<?php echo $qty ;?>"></label><br><br><br>

<?php
$i=0;
if(mysqli_num_rows($t)>0){
	
while($row=mysqli_fetch_assoc($t1)){
	echo '<div class="container">  
	<table class="table table-dark" style="background-color:lightgreen; border:1px solid red;">
	<form action="#" method="post">
    <thead>
    <tr>
      <th scope="col">Mobile No.</th>
      <td><input type="text" readonly name="mobilenumbers" value=" '.$row['setmobilenumber'].' "></td>
      
      <td><input type="submit" name="cancel" value="Cancel Order"></td>
	  </tr>
	  

      <thead>
    <tr>
	  <th scope="col">Room Number</th>';
	  $o=$row['setmobilenumber'];
	  $u="SELECT setroomnumber,setcollege,setname,setdate FROM usersignup where setmobilenumber='$o'";
	  $u1=mysqli_query($con,$u);
	$row2=mysqli_fetch_assoc($u1);
    echo '<td>'.$row2['setroomnumber'].'</td>
       
      <td><input type="submit" name="done'.$i.'" value=" Order Delivered"></td>
     
      </tr>
	  <thead>
	  
    <tr>
      <th scope="col">College</th>
	  <td>'.$row2['setcollege'].'</td>';

	  $query1 = "SELECT * FROM temp where setmobilenumber='$o' ";
$query_run = mysqli_query($con,$query1);

$qty= 0;
while ($num = mysqli_fetch_array($query_run)) {
    $qty += $num['setprice'];
}



	  
      
     echo  '<td>Total Amount = Rs.<b>'.$qty.'</b></td>
	  </tr>
	  
	  <tr>
	  <th> Name</th>
	  <th>'.$row2['setname'].'</th>
	   <td>'.$row2['setdate'].'</td>
	  </tr>	  

  <thead>
    <tr>
     
      <th scope="col">Item</th>
      <th scope="col">content</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody>';

$t3="SELECT * FROM temp where setmobilenumber='$o'";
$r3=mysqli_query($con,$t3);
while($row1=mysqli_fetch_assoc($r3)){
 echo '<tr>
      <td>'.$row1['setitem'].'</td>
      <td>'.$row1['setcontent'].'</td>
      <td>'.$row1['setprice'].'</td>
    </tr>';
}
    



   
 echo '</tbody>
 </form>
</table>
       
	</div> '; 
if(isset($_POST["done".$i]))
{$k[$i]=$_POST['mobilenumbers'];
	echo $k[$i];
$insert1="INSERT INTO done (id, setmobilenumber, setitem, setcontent, setprice, setdate)
SELECT id, setmobilenumber, setitem, setcontent, setprice, setdate FROM temp
WHERE setmobilenumber=$k[$i]";
$result=mysqli_query($con,$insert1);
if($insert1==true)
{

}
else
{

}
echo '<script>alert("h");</script>';
	$query1=" DELETE FROM temp WHERE setmobilenumber=$k[$i]";
	$result1=mysqli_query($con,$query1);
	if($result1==true)
	{}
		else
		{}

}
$i++;
}
}
?>





	<!-- //add-products -->


	<!-- coming soon -->
<!--
<div style="dispaly:none;">	
	<div class="soon">
		<div class="container">
			<h3>Mega Deal Of the Week</h3>
			<h4>Coming Soon Don't Miss Out</h4>  
			<div id="countdown1" class="ClassyCountdownDemo"></div>
		</div> 
	</div>
</div>	-->
	<!-- //coming soon -->


	<!-- menuitem -->
	<!--<?php include 'menuitem.php';?>-->
	<!-- //menu item --> 


	
	<!-- follow -->
	<?php include 'follow.php';?>
	<!-- follow --> 

	<!-- footer -->
	<?php include 'adminfooter.php';?>
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
	<!-- countdown.js -->	
	<script src="js/jquery.knob.js"></script>
	<script src="js/jquery.throttle.js"></script>
	<script src="js/jquery.classycountdown.js"></script>
		<script>
			$(document).ready(function() {
				$('#countdown1').ClassyCountdown({
					end: '1388268325',
					now: '1387999995',
					labels: true,
					style: {
						element: "",
						textResponsive: .5,
						days: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#1abc9c",
								lineCap: 'round'
							},
							textCSS: 'font-weight:300; color:#fff;'
						},
						hours: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#05BEF6",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						},
						minutes: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#8e44ad",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						},
						seconds: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#f39c12",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						}

					},
					onEndCallback: function() {
						console.log("Time out!");
					}
				});
			});
		</script>
	<!-- //countdown.js -->
	<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --> 
</body>
</html>