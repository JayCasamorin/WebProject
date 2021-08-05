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
		
		li {
			margin-top: 20px;
			margin-left: 50px;
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
			<h2 style="margin-left: 50px"> Purpose: </h2>
			<p style="margin-left: 70px">&emsp;	 A website that mainly aims to increase the awareness of people on the nutrition 
			<br /> of the food that they eat. This also contains the following: </p>
			<ul>
				<li> Body Mass Index Calculator, that computes for a person body fat level. </li>
				<li> Calorie calculator, that computes for how much Calorie does a person need daily. </li>
				<li> Fluid Intake Calculator, that computes for how much water does a person needs everyday. </li>
				<li> Food Exchange List, that contains detailed information of the basic nutrient content of foods. </li>
			</ul>
			<p style="margin-left: 70px"> Lastly, the website contains contact information of nutritionist wherein users may schedule
			<br /> an appointment for consultations about personal diet planning. </p>
			<br />
			<h2 style="margin-left: 50px"> Objectives: </h2>
			<ul>
				<li> Improve nutrition and health outcomes of the population. </li>
				<li> Increase the awareness of consumers in terms of their health. </li>
				<li> Develop healthy diet systems for consumers. </li>
			</ul>
		</div>
		
		<div id="footer-container">
			<br /><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
		</div>
	</div>
</body>
</html>