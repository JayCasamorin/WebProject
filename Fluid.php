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
		
		#form-container {
			margin: 20px auto; 
			width: 58%;
			border: solid #000000 2px;
			display: grid;
			grid-gap: 10px;
			grid-template-areas:
				" header "
				" content "
				" result " ;
			padding: 10px;
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
			<h2 style="margin-left: 50px"> Fluid Intake Calculator: </h2>
			<p style="margin-left: 70px">&emsp; Drinking enough water every day is good for overall health. As plain drinking water has
				<br /> zero calories, it can also help with managing body weight and reducing caloric intake when
				<br /> substituted for drinks with calories, like regular soda. Drinking water can prevent dehydration,
				<br /> a condition that can cause unclear thinking, mood change, the body to overheat, constipation,
				<br /> and kidney stones.
			</p>
			
			<form id="form-container" action="" method="post">
				<div style="grid-area: header;">
					<strong>
						Body Mass Index Calculator
					</strong>
				</div>
				
				<div style="grid-area: content;"> 
					<table>
						<tr><td width="250px">Please enter your mass in <strong>kilograms</strong>:</td><td><input type="text" name="user_mass" /></td></tr>
						<tr><td></td><td align="right"><input type="submit" value="Calculate"  /></td></tr>
					</table>
				</div>
				
				<div style="grid-area: result;">
					<?php
						$user_mass = (float)(isset($_POST['user_mass']) ? $_POST['user_mass'] : 0);
						$fluid = 0;
						$result = ' ';
						
						if ($user_mass < 0) {
							$result = "Sorry I cannot process your given input";
						}
						elseif ($user_mass > 0 and $user_mass < 10) {
							$fluid = $user_mass * 100;
							$result = "Your total maintenance fluid is: $fluid mL / day";
						}
						elseif ($user_mass >= 10 and $user_mass < 20) {
							$fluid = 1000 + ($user_mass * 50);
							$result = "Your total maintenance fluid is: $fluid mL / day";
						}
						elseif ($user_mass >= 20) {
							$fluid = 1500 + ($user_mass * 20);
							$result = "Your total maintenance fluid is: $fluid mL / day";
						}
						else {
							$result = ' ';
						}
						echo "$result";
					?>
				</div>
			</form>
			
			<h3 style="margin-left: 50px"> Additional Information </h3>
			<ul>
				<li> Daily fluid intake (total water) is defined as the amount of water consumed from foods,
				<br /> plain drinking water, and other beverages. Daily fluid intake recommendations vary
				<br /> by age, sex, pregnancy, and breastfeeding status. </li>
				
				<li> Although there is no recommendation for how much plain water adults and youth should 
				<br /> drink daily, there are recommendations for daily total water intake that can be obtained
				<br /> from a variety of beverages and foods.
				
				<li> Although daily fluid intake can come from food and beverages, plain drinking water is 
				<br /> one good way of getting fluids as it has zero calories.
			</ul>
		</div>
		
		<div id="footer-container">
			<br /><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
		</div>
	</div>
</body>
</html>