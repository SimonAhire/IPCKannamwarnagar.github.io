<?php
  
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
  		$showmsg = false;
  		$showmsg2 = false;
	  	include 'databaseconnection.php';

	    $name1 = $_POST['name'];
	    $email2= $_POST['emaili'];
	    $location3= $_POST['locationi'];
	    $contano4 = $_POST['mnumberi'];
	    $text5 = $_POST['prequest'];
	    



	    $sql="INSERT INTO prayerrequest (name, email, location, mnumber, prequest) VALUES ('$name1', '$email2', '$location3', '$contano4', '$text5');";
	  	//Execute the query and returning a message
		 
		 $result = mysqli_query($conn,$sql);

		 if ($result) {
		 	$showmsg = true;
		 	// code...
		 }else{
		 	echo "unsucessful";
		 }

	}
	else{
		$showmsg = false;
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Prayer Request</title>
	<link rel="stylesheet" type="text/css" href="prayerrequest.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Mate+SC&display=swap" rel="stylesheet"> -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Mate+SC&family=Viaoda+Libre&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Mate+SC&family=Stint+Ultra+Condensed&family=Viaoda+Libre&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Mate+SC&family=Stint+Ultra+Condensed&family=Titillium+Web:ital,wght@1,300&family=Viaoda+Libre&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">
	<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poly&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400&family=Poly&display=swap" rel="stylesheet"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400&family=Playfair+Display:wght@500&family=Podkova:wght@800&family=Poly&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400&family=Playfair+Display:wght@500&family=Podkova:wght@800&family=Poly&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
	


</head>

<body>
	<div id="wrapper">


		<div id="container">


			<header>

				<div id="logo-img">
				 	<a href="file:///C:/myChurchWebsite/church.html"><img src="images/logo5.png" alt="logo for IPC church kannamwar nagar"></a>
			    </div>

				
				<div class="main-nav" id="check-class" >
					<ul id="nav" class="animated slideInDown" >
						<li id="a"><a   href="church.php">HOME</a></li>
						<li><a   href="preaching.php">PREACHING</a></li>
						<li><a  href="gallery.php">GALLERY</a></li>
						<li><a   href="contact.php">CONTACT</a></li>
						<li><a   href="testimony.php">TESTIMONY</a></li>
						<li><a  href="prayerrequest.php">PRAYER REQUEST</a></li>
					</ul>

				</div>
				<a href="#" class="mobile-icon" onclick="slideshow()"> <i class="fa fa-bars" style="font-size:37px; color: black;"></i></a>

			</header>
			
			<div class="pre1">
				
				<div class="pret1">

					<p>Prayer Request</p>
				</div>
	
			</div>
			<?php
		    if($showmsg){
		    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert" class="test-center">
		        <strong>Success! </strong> You are Credentials has been submitted
		        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
		        </button>
		    </div> ';
		    }
		    ?>
			<div class="prayer-section">
				<div class="prayer-quote">
					 <p>Pray with us</p>
					<p>" The greatest gift we can give each other is to pray for one another "</p>
				</div>
			</div>
			
			<div class="forminfo">
				 	<div class="prayer-form" >
				 		<form action="prayerrequest.php" method ="post">
							<h2>Your Request</h2>
							<input type="text " class="field"  name="name" placeholder=" Your Name" required="required"><br>
							<input type="email" class="field"  name="emaili" placeholder="E-mail" required="required"><br>
							<input type="text " class="field"  name="locationi" placeholder="Where do you live" required="required"><br>
							<input type="tel" class="field"  name="mnumberi" placeholder="Contact No" pattern="[789][0-9]{9}" required="required"><br>
							<textarea  class="field" name="prequest" placeholder="Prayer Request" required="required"></textarea><br>
							<input type="submit"  name="" placeholder="Submit">
						</form>
				 	</div>
			</div>
			

		</div>




		


		<div class="bottom-section">
			<div class="bottom-links">

				<div class="cu">
					<p>follow us on</p>
				</div>

				<div class="cui">
					
					<section class="m">
						<a class="img" href="https://www.facebook.com/IPC-Kannamwar-Nagar-Church-220065458515705"><img src="images/bfb.jpg"></a>
					</section>

					<section class="m">
						<a class="img" href="https://youtube.com/channel/UCqgVN8qSfNGS_ttbMAnfsBg"><img src="images/ytnew.jpg"></a>
					</section>

					<section class="m">
						<a class="img" href="https://www.instagram.com/ipckannamwarnagarchurch/"><img src="images/binsta.png"></a>
					</section>
				</div>

			</div>

			<div class="bottom-info">
				<p>Contact No:</p>
				<p>7506563389 / 9594792904</p>
				<p>Email:</p>
				<p><a href="mailto:ipckannamwarnagarchurch@gmail.com" style="text-decoration: none; color: #00C896 ;">ipckannamwarnagarchurch@gmail.com</a></p>
				<p>Prayer Meeting</p>
				<p> 10am to 1pm (Sunday)</p>
				<p> 8pm to 9pm (Monady-Saturday)</p>
				<p> 7pm to 9:30pm (Thursday)</p>
				<p>Address</p>
				<p> Mali Samaj Kalyan Kendra Hall, near utkarsh school , kannamwar nagar 2, Vikhroli (e), Mumbai-400083</p>
			</div>

			<div class="bottom-footer">

				<div class="first-para"><p>Indian Pentcostal Church of God (kannamwar nagar). ?? All rights reserved. </p></div>

				<div class="last-para"><p><a  href="TermsandCondition.php" style=" text-decoration: none; color: black;">Terms and Condition</a>  |  <a  href="PrivacyPolicy.php" style=" text-decoration: none; color: black;">Privacy Policy</a> </p></div>
				
			</div>
			
		</div>







		<!-- <footer></footer> -->
	</div>
		<script type="text/javascript">
    		var counter = 1;
    		setInterval(function(){
      		document.getElementById('radio' + counter).checked = true;
      		counter++;
      		if(counter > 4){
       		counter = 1;
     		 }
    		}, 3000);

    		function slideshow(){
    			var x = document.getElementById('check-class');
    			if (x.style.display === "none"){
    				x.style.display="block";

    			}else{
    				x.style.display="none";
    			}

    			// alert("Hello! I am an alert box!!");


    		}
    		
    	</script>
</body>
</html>





