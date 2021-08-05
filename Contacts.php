<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php
		define('NAME', "CASAMORIN, Jay V.");
	?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<style>
		#main-container {
			margin: auto;
			height: 600px;
			width: 900px;
			display: grid;
			grid-template-rows: 90px auto 50px;
			grid-template-columns: 150px auto;
			grid-template-areas:
				"header header"
				"nav content"
				"footer footer";
			text-align: center;
		}
		
		#header-contatiner {
			background-color: #999999;
			grid-area: header;
		}
		
		#nav-contatiner {
			background-color: #73A431;
			grid-area: nav;
			text-align: left;
		}
		
		#content-container {
			background-color: #CCCCCC;
			grid-area: content;
			text-align: justify;
		}
		
		#footer-container {
			background-color: #999999;
			grid-area: footer;
		}
		
		a:link {
			color: #FFFFFF;
			text-decoration: none;
		}
		
		a:hover {
			color: #00FFFF;
			background-color: #0000CC;
		}
		
		a:visited {
			color: #FFFFFF;
			text-decoration: none;
		}
		
		a:active {
			color: #FFFFFF;
			text-decoration: none;
			background-color: #00FFCC;
		}
		
		table {
			margin: 20px auto;
			width: 90%;
			border: solid 2px #000000;
			text-align: left;
		}
	</style>
</head>
<body>
	<div id="main-container">
		<div id="header-contatiner">
			<h1> FOOD & NUTRITION </h1>
		</div>
		
		<div id="nav-contatiner">
			<div style="margin: 20px 20px;"><a href="Homepage.php"> HOME </a></div>
			<div style="margin: 20px 20px;"><a href="BMI.php"> BODY MASS INDEX CALCULATOR </a></div>
			<div style="margin: 20px 20px;"><a href="Calorie.php"> CALORIE CALCULATOR </a></div>
			<div style="margin: 20px 20px;"><a href="Fluid.php"> FlUID INTAKE CALCULATOR</a></div>
			<div style="margin: 20px 20px;"><a href="FoodList.php"> THE FOOD EXCHANGE LIST </a></div>
			<div style="margin: 20px 20px;"><a href="Contacts.php"> CONTACT US </a></div>
		</div>
		
		<div id="content-container">
			<h2 style="margin-left: 50px"> For Inquiries:</h2>
			<p style="margin-left: 70px"> Please contact the following:</p>
			<table>
				<tr>
					<td colspan="2">
						<h4 align="left" style="margin-left: 20px;"> LACATAN, Carl Danielle A.</h4>
						<ul>
							<li><strong>Resident Nutritionist</strong></li>
							<li>Currently 3rd year taking Bachelor of Science in Nutrition and Dietetics on the Polytechnic University of the Philippines (PUP)</li>
						</ul>
					</td>
				</tr>
				
				<tr><td><p align="left" style="margin-left: 20px;">Email Address: </p></td><td>cdlacatan@iskolarngbayan.pup.edu.ph</td></tr>
				<tr><td><p align="left" style="margin-left: 20px;">Mobile Number: </p></td><td>(+63)966 7894 258</td></tr>
				<tr><td><p align="left" style="margin-left: 20px;">Facebook Account: </p></td><td>facebook.com/carldanielle.lacatan</td></tr>
			</table>
			<table>
				<tr>
					<td colspan="2">
						<h4 align="left" style="margin-left: 20px;"><?php echo NAME ?></h4>
						<ul>
							<li><strong>Website Manager</strong></li>
							<li>Currently 3rd year taking Bachelor of Science in Computer Engineering on the Polytechnic University of the Philippines (PUP)</li>
						</ul>
					</td>
				</tr>
				<tr><td><p align="left" style="margin-left: 20px;">Email Address: </p></td><td>jvcasamorin@iskolarngbayan.pup.edu.ph</td></tr>
				<tr><td><p align="left" style="margin-left: 20px;">Mobile Number: </p></td><td>(+63)995 0970 315</td></tr>
				<tr><td><p align="left" style="margin-left: 20px;">Facebook Account: </p></td><td>facebook.com/shijay2017</td></tr>
			</table>
		</div>
		
		<div id="footer-container">
			<br /><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
		</div>
	</div>
</body>
</html>