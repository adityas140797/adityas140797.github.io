<?php
if(isset($_POST['s1'])){

$to = 'adityas140797@gmail.com';
$subject = 'Contact to Jolt for '.$_POST['subject'];
$message = $_POST['message'].' by '.$_POST['name'].' with email id as '.$_POST['email'].' and phone number as '.$_POST['phone'];
mail($to,$subject,$message);

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Jolt Rentals</title>
	<!-- RESPONSIVE -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- BOOTSTRAP v4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
		<nav style="position: fixed;background-color: #fff!important;width: 100vw;z-index: 10000;" class="navbar navbar-expand-lg navbar-light bg-light">
			<img width="72px" style="position: fixed;-webkit-filter: drop-shadow(0px 0px 5px rgba(0,0,0,0.1)); filter: drop-shadow(0px 0px 5px rgba(0,0,0,0.1));" class="mt-3 pr-2" height="auto" src="logo.png">
		  <a class="navbar-brand ml-5 pl-5" href="#">JOLT</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="#how">How Jolt works<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#why">Why Jolt</a>
		      </li>
		    </ul>
		    <a href="https://joltindiaelectric.ml/" target="blank" class="mr-3" style="color: red;">Jolt family</a>
		    <a href="purchase.html" class="btn btn-link mr-5 purchase">Rent Now!</a>
		  </div>
		</nav>
	<section>
		<div class="container-fluid" style="height: auto;min-height:415px; background: url('bg.svg');background-size: cover; background-repeat: no-repeat;background-position: center;">
			<div class="row pt-5">
				<div class="col-sm-5 pt-5">
					<h1 align="center" class="pt-5" style="color:#FF7463;"><em><strong>JOLT RENTALS</strong></em></h1>
					<h3 align="center" class="pt-3" style="color:#FF7463;">Best time to save is now!<br> Rent Jolt electric scooter<br>and get your work done</h3>
				</div>
				<div class="col-sm-6">
					<img class="img-fluid" src="white.png">
				</div>
			</div>
		</div>
	</section>
	<section id="how" style="background: #FEDE40;height: auto;margin-top: -2px;">
		<div class="container">
			<h2 align="center" class="pt-5 pb-3" style="color:#fff;text-shadow: 0 1px 2px rgba(0,0,0,.15);"><br>HOW JOLT WORKS</h2>
			<div align="center" class="row py-3 pb-3">
				<div align="center" class="col-md-3 col-sm-4 ml-auto mr-auto">
					<img class="p-4 img-fluid" src="step1.png">
					<h1 style="color: white;position: absolute;z-index: 1;font-size: 4rem;">01</h1>
					<h3 style="position: relative;z-index: 2;" class="pt-5 pl-3">CHOOSE BIKE</h3>
					<p align="left">We provide 2 models of electric scooty each with it's own benefits for you to take smart choices.</p>
				</div>
				<div align="center" class="col-md-3 col-sm-4 ml-auto mr-auto">
					<img class="p-4 img-fluid" src="step2.png">
					<h1 style="color: white;position: absolute;z-index: 1;font-size: 4rem;">02</h1>
					<h3 style="position: relative;z-index: 2;" class="pt-5 pl-3">CHOOSE PLAN</h3>
					<p align="left">We have monthly, half-yearly and yearly plans. Longer the time period bigger the savings.</p>
				</div>
				<div align="center" class="col-md-3 col-sm-4 ml-auto mr-auto">
					<img class="p-4 img-fluid" src="step3.png">
					<h1 style="color: white;position: absolute;z-index: 1;font-size: 4rem;">03</h1>
					<h3 style="position: relative;z-index: 2;" class="pt-5 pl-3">VOILA! ENJOY</h3>
					<p align="left">After we complete payment process you are ready to take Jolt on adventure with you.</p>
				</div>
			</div>
		</div>
	</section>
	<section id="why">
		<style type="text/css">
			.purchase{
				color:red;
				border: 1px solid red;
			}
			.purchase:hover{
				background-color: #FF818A;
				color:#fff;
			}
			.bar1{
				height: 42px;
				background: #E86951;
				display: inline-block;
				color: #fff;
				animation: 1s ease-out 0s 1 slideBar1;
				width: 78.57%;
			    border-right: 10px solid #D05E49;
			}
			@keyframes slideBar1 {
				0% {
			    	width: 0px;
			    	border-right: 0px solid #D05E49;
			 	}
			  	100% {
			    	width: 78.57%;
			    	border-right: 10px solid #D05E49;
			  	}
			}
			.bar2{
				height: 42px; width: 69.31%;
				background: #E89751;
				display: inline-block;
				color:#fff;
				animation: 1s ease-out 0s 1 slideBar2;
				width: 69.31%;
			    border-right: 10px solid #D08449;
			}
			@keyframes slideBar2 {
				0% {
			    	width: 0px;
			    	border-right: 0px solid #D08449;
			 	}
			  	100% {
			    	width: 69.31%;
			    	border-right: 10px solid #D08449;
			  	}
			}
			.bar3{
				height: 42px;
				background: #60E851;
				display: inline-block;
				color:#fff;
				animation: 1s ease-out 0s 1 slideBar3;
				width: 90%;
			    border-right: 10px solid #4DD049;
			}
			@keyframes slideBar3 {
				0% {
			    	width: 0px;
			    	border-right: 0px solid #4DD049;
			 	}
			  	100% {
			    	width: 90%;
			    	border-right: 10px solid #4DD049;
			  	}
			}
			.card {
			  	border: 0;
			  	border-radius: 0px;
			  	-webkit-box-shadow: 0 3px 0px 0 rgba(0, 0, 0, .08);
			  	box-shadow: 0 3px 0px 0 rgba(0, 0, 0, .08);
			  	transition: all .3s ease-in-out;
			  	padding: 2.25rem 0;
			  	position: relative;
			  	will-change:transform; 
			}
			.card:hover {
			    -webkit-box-shadow: 0 20px 35px 0 rgba(0, 0, 0, .08);
			    box-shadow: 0 20px 35px 0 rgba(0, 0, 0, .08);
			}
			.card-header {
			    background-color: #E9ECEF;
			    padding-left: 2rem;
			    border-bottom: 0px;
			}
			.card-title {
			    margin-bottom: 1rem;
			}
			.card-block {
			    padding-top: 0;
			}
			.list-group-item {
			    border: 0px;
			    padding: .25rem;
			    color: 808080;;
			    font-weight: 300;
			}

			// Price
			.currency {
			    font-size: 1.75rem;
			    position: relative;
			    font-weight: 400;
			    top: -45px;
			    letter-spacing: 0px;
			  }
			.period {
			    font-size: 1rem;
			    color: lighten(#808080, 20%);
			    letter-spacing: 0px;
			}

			// Buttons
			.btn {
			  text-transform: uppercase;
			  font-size: .75rem;
			  font-weight: 500;
			  color: lighten(#808080, 15%);
			  border-radius: 0;
			  padding: .75rem 1.25rem;
			  letter-spacing: 1px;
			}

			.btn-gradient { 
			  background-color: #f2f2f2;
			  transition: background .3s ease-in-out;
			} 
			.buy:hover {
			    color: white;
			    background-color: #57e2b2;
			}
		</style>
		<div class="container">
			<h2 align="center" class="pt-5 pb-3" style="color:#2C2929;text-shadow: 0 1px 2px rgba(0,0,0,.15);">WHY JOLT RENTALS</h2>
			<p><strong>Price of Petrol/ Diesel is shooting skies</strong></p>
			<div class="my-3" style="background: #F5F5F5;">
				<span class="bar1 p-2"><b>PETROL ₹ 78.47 /Ltr*</b></span>
			</div>
			<div class="my-3" style="background: #F5F5F5;">
				<span class="bar2 p-2"><b>DIESEL ₹ 69.31 /Ltr*</b></span>
			</div>
			<p class="pt-3"><strong>Electric bikes are big on savings</strong></p>
			<div class="my-3" style="background: #F5F5F5;">
				<span class="bar3 p-2"><b>RANGE 80 – 90KM / Charge*</b></span>
			</div>
			<div class="row py-3" align="center">
				<div align="center" class="col-sm-3 ml-auto">
					<span style="font-size: 3rem; color: #8E8E8E;"><b>400%*</b></span>
				</div>
				<div align="center" class="col-sm-3">
				</div>
				<div align="center" class="col-sm-3 mr-auto">
					<span style="font-size: 3rem; color: #8E8E8E;"><b>250%*</b></span>
				</div>
				<div align="left" class="col-sm-12">
					<p><strong>In terms of mileage Jolt bikes can provide 70 KM in ₹ 20* which is 250% cheaper than an average bike and 400% cheaper than an average scooty</strong></p>
				</div>
				<div align="center" class="col-sm-3 ml-auto mr-auto">
					<span style="font-size: 3rem; color: #8E8E8E;"><b>55 kmph*</b></span>
				</div>
				<div align="left" class="col-sm-12">
					<p><strong>Powered by powerful 800WATT engine which provides Top speed of 55 KM/ H which is more than enough for City like conditions.</strong></p>
				</div>
			</div>
		</div>
	</section>
	<section style="height: auto; background: #FFa574;">
		<div class="container pb-4">
			<h2 align="center" class="pt-5 pb-3" style="color:#fff;text-shadow: 0 1px 2px rgba(0,0,0,.15);">PRICING</h2>
			<h5 class="pb-3">Price is including all Taxes and varies with Model of Scooter (currently we provide 2 types), Type of Plan (3 types based on time period) and We provide special offer of 15% for students.</h5>
			<div class="row pb-5" align="center">
			    <!-- Table #1  -->
			    <div class="col-xs-12 col-lg-4">
			    	<div class="card text-xs-center" style="margin-top: -10px; border: 5px solid #57e2b2">
			        	<div class="card-header py-4">
			          		<h3 style="font-size: 4rem;" class="display-2"><span class="currency">₹</span>1333<span class="period">/month</span></h3>
			        	</div>
			        	<div class="card-block">
			          		<h4 style="background-color: #E9ECEF;margin-bottom: 0px; padding-bottom: .5rem;" class="card-title"> 
			            		Yearly plan
			          		</h4>
			          		<ul class="list-group">
			            		<li class="list-group-item">Unlimited kilometers</li>
			            		<li class="list-group-item">GPS enabled</li>
			            		<li class="list-group-item">Wrapped with ads</li>
			            		<li class="list-group-item">24/7 Support System</li>
			          		</ul>
			          		<a href="purchase.php" class="btn buy btn-gradient mt-2">Choose Plan</a>
		        		</div>
			      	</div>
			    </div>
			    <!-- Table #1  -->
			    <div class="col-xs-12 col-lg-4">
			    	<div class="card text-xs-center">
			        	<div class="card-header">
			          		<h3 style="font-size: 4rem;" class="display-2"><span class="currency">₹</span>1999<span class="period">/month</span></h3>
			        	</div>
			        	<div class="card-block">
			          		<h4 style="background-color: #E9ECEF;margin-bottom: 0px; padding-bottom: .5rem; class="card-title"> 
			            		Half-Yearly Plan
					        </h4>
			          		<ul class="list-group">
			            		<li class="list-group-item">Ultimate kilometers</li>
			            		<li class="list-group-item">GPS enabled</li>
			            		<li class="list-group-item">Wrapped with ads</li>
			            		<li class="list-group-item">24/7 Support System</li>
			          		</ul>
			          		<a href="purchase.php" class="btn buy btn-gradient mt-2">Choose Plan</a>
			        	</div>
			      	</div>
			    </div>
			    <!-- Table #1  -->
			    <div class="col-xs-12 col-lg-4">
			      	<div class="card text-xs-center">
			        	<div class="card-header">
			          		<h3 style="font-size: 4rem;" class="display-2"><span class="currency">₹</span>2999<span class="period">/month</span></h3>
			        	</div>
			        	<div class="card-block">
			          		<h4 style="background-color: #E9ECEF;margin-bottom: 0px; padding-bottom: .5rem;" class="card-title"> 
			            		Monthly Plan
			          		</h4>
			          		<ul class="list-group">
			            		<li class="list-group-item">Unlimited kilometers</li>
			            		<li class="list-group-item">GPS enabled</li>
			            		<li class="list-group-item">Wrapped with ads</li>
			            		<li class="list-group-item">24/7 Support System</li>
			          		</ul>
			          		<a href="purchase.php" class="btn buy btn-gradient mt-2">Choose Plan</a>
		        		</div>
			      	</div>
			    </div>
			</div>
			<table class="table" style="background: white;">
			  	<thead class="thead-light">
				    <tr>
				      	<th scope="col">Model</th>
				      	<th scope="col">Max. Range</th>
				      	<th scope="col">Top Speed</th>
				      	<th scope="col">Extra Charge</th>
				    </tr>
			</thead>
				<tbody>
			    	<tr>
			      		<th scope="row">High Speed scooter</th>
			      		<td>65 - 75* km</td>
			      		<td>55 Kmph</td>
			      		<td>20% Extra</td>
		    		</tr>
			    	<tr>
			      		<th scope="row">High Range scooter</th>
			      		<td>80 - 90* km</td>
			      		<td>40 Kmph</td>
			      		<td>0% Extra</td>
			    	</tr>
			  	</tbody>
			</table>
			<h5>₹4500 will be charged as a security deposit which is full refundable after returning scooter.</h5>
		</div>
	</section>
	<section style="background: url('rw-bg.jpg'); background-size: cover; background-position: center;background-repeat: no-repeat; height:auto;">
		<div class="container p-5">
			<div class="row" style="background: white;border-radius: 12px; box-shadow: 2px 3px 12px rgba(00,0,0,0.1);">
				<div align="center" class="col-sm-4 pt-5">
					<h4 class="mt-5">GREAT</h4>
					<hr width="50%">
					<p align="center">&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</p>
				</div>
				<div align="center" class="col-sm-8 px-3 py-5">
					<img class="pb-3" src="click.png" width="30px">
					<p>REIVIEW GOES HERE AHFDNEF FOINF OERVOER VKREOIRENORE RENOIRE VORE VOIRE VRE VOREIVOE REO VRE VOREV REV ERO REO REJ REOJ COJER COJRE COJRE OCRE OJC REOC REOJ CORE COER OJER JOV EROJV REO VREOJ VREOJ VOJRE VREO VREOJO ERO</p>
					<span>- Deepak Kalra</span>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<h2 align="center" class="pt-5 pb-3" style="color:#2C2929;text-shadow: 0 1px 2px rgba(0,0,0,.15);">CONTACT</h2>
			<div class="container extra-space" style="background-color: #e5e4f0;">
				<div class="row pb-5">
					<div class="col-12">
						<h2 class="m-3 py-3">Contact Information</h2>
					</div>
					<div class="col-md-4 ml-auto mr-auto">
						<div class="p-3" style="background-color: white;">
							<h4>JOLT INDIA ELECTRIC</h4>
							<p style="color: #5f6671;font-size: 1.1rem">BB - block, Janakpuri<br>New Delhi - 110058<br>India</p>
							<p style="color: #5f6671;font-size: 1.1rem"><i class="fa fa-phone mobile-reason-text" style="color: #5f6671;" aria-hidden="true"></i> &nbsp;+91 9716130797</p>
							<p style="color: #5f6671;font-size: 1.1rem"><i class="fa fa-envelope mobile-reason-text" style="color: #5f6671;" aria-hidden="true"></i> &nbsp;&nbsp;indiajoltelectric@gmail.com</p>
						</div>
					</div>
					<div class="col-md-7 mr-auto ml-auto">
						<form method="post" class="p-3" style="background-color: white;">
							<div class="row">
								<div class="col-sm-6 form-group">
								 	<span class="form-group-addon" id="Name">Name</span>
								 	<input type="text" required="required" class="form-control" name="name" placeholder="Mr./Mrs. X" aria-label="Name" aria-describedby="Name">
								</div><div class="col-sm-6"></div>
								<div class="col-sm-4 form-group">
								 	<span class="form-group-addon" id="Phone">Phone</span>
								 	<input type="number" required="required" class="form-control" name="phone" placeholder="+91 9876543210" aria-label="Phone" aria-describedby="Phone">
								</div>
								<div class="col-sm-8 form-group">
								 	<span class="form-group-addon" id="Email">Email</span>
								 	<input type="text" required="required" class="form-control" name="email" placeholder="username@mail.com" aria-label="Email" aria-describedby="Email">
								</div>
								<div class="col-sm-12 input-group">
								 	<span class="input-group-addon" id="subject">Subject</span>
								 	<input type="text" required="required" class="form-control" name="subject" placeholder="Reason for contact ..." aria-label="subject" aria-describedby="subject">
								</div>
								<textarea name="message" class="form-control m-3" id="message" rows="8"></textarea>
								<input type ="submit" class="btn btn-primary ml-3" name="s1" value="Send message"/>
							</div>
						</form>
					</div>
				</div>
			</div>
			<style type="text/css">
				@media only screen and (min-width: 600px) {
				    footer{
						margin-top: -40px;
					}
				}
				@media only screen and (max-width: 600px) {
				    footer{
						margin-top: 0px;
					}
				}
			</style>
			<div align="center" class="row mt-5">
				<div class="col-sm-3 ml-auto" style="background: #CEE0EF;">
					<h4 class="my-3">Advertise on Jolt</h4>
					<p class="my-5 px-1">Jolt bikes provides a way to help your business to reach potential audience's eyes</p>
					<button class="btn btn-warning my-3"><a href="#" style="color: black;">Learn more</a></button>
				</div>
				<div class="col-sm-1"></div>
				<div class="col-sm-3 mr-auto" style="background: #DEDEDE;">
					<h4 class="my-3">Sponsor Jolt</h4>
					<p class="my-5 px-1">Jolt is still a startup and needs your help in form of funding / assets / partnership/ promotion.</p>
					<button class="btn btn-warning my-3"><a href="#" style="color: black;"> Learn more</a></button>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div  style="background-image: url('ft-bg.jpg');background-size: cover; background-position: center;background-repeat: no-repeat; height:auto;">
			<div class="container" style="color: #fff;">
				<div class="row pt-4">
					<div class="col-6">
						<dl class="pt-4">
                            <dh><h4>Important links</h4></dh>
                            <dd><a href="#" target="blank" style="color:white;">Jolt Family</a></dd>
                            <dd><a href="#" target="blank" style="color:white;">Jolt Rentals</a></dd>
                            <dd><a href="#" target="blank" style="color:white;">Jolt Solar Solutions</a></dd>
                            <dd><a href="#" target="blank" style="color:white;">Jolt Advertising</a></dd>
                        </dl>
                    </div>
                    <div class="col-6">
                        <dl class="pt-4">
                            <dh><h4>Our socials</h4></dh>
                            <dd><a href="#" target="blank" style="color:white;">Facebook</a></dd>
                            <dd><a href="https://www.instagram.com/joltfamily" target="blank" style="color:white;">Instagram</a></dd>
                            <dd><a href="https://twitter.com/IndiaJolt" target="blank" style="color:white;">Twitter</a></dd>
                            <dd><a href="https://api.whatsapp.com/send?phone=919716130797" target="blank" style="color:white;">Whatsapp</a></dd>
                        </dl>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid" style="background: #231F1F">
			<div class="row" style="color: #fff">
				<div class="col-sm-8 p-2">All rights reserved &copy; copyright 2018</div>
				<div class="col-sm-4 p-1"><h4 align="right">+91 9716130797</h4></div>
		</div>
	</footer>
	<!-- JAVASCRIPT AT BOTTOM TO LOAD PAGE CONTENT FASTER -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>