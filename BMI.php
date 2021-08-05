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
						
			<h2 style="margin-left: 50px"> What is BMI? </h2>
			<p style="margin-left: 70px">&emsp; Body Mass Index (BMI) is a person's weight in kilograms divided by the square of height
			<br /> in meters. A high BMI can be an indicator of high body fatness. BMI can be used to screen
			<br /> for weight categories that may lead to health problems but it is not diagnostic of the body 
			<br /> fatness or health of an individual. </p>
			
			<form id="form-container" action="" method="post">
				<div style="grid-area: header;">
					<strong>
						Body Mass Index Calculator
					</strong>
				</div>
				
				<div style="grid-area: content;"> 
					<table>
						<tr><td width="250px">Please enter your mass in <strong>kilograms</strong>:</td><td><input type="text" name="user_mass" /></td></tr>
						<tr><td>Please enter your height in <strong>meters</strong>:</td><td><input type="text" name="user_height" /></td></tr>
						<tr><td></td><td align="right"><input type="submit" value="Calculate"  /></td></tr>
					</table>
				</div>
				
				<div style="grid-area: result;">
					<?php
						$user_mass = (float)(isset($_POST['user_mass']) ? $_POST['user_mass'] : 0);
						$user_height = (float)(isset($_POST['user_height']) ? $_POST['user_height'] : 0);
						
						$BMI = 0;
						$result = ' ';
						
						if ($user_mass > 0 and $user_height > 0) {
							$BMI = $user_mass / ($user_height * $user_height);
							$result = round($BMI,2);
					
							if ($result < 18.5) {
								$comment = "<strong>underweight</strong>";
							}
							elseif ($result >= 18.5 and $result <= 24.9) {
								$comment = "<strong>normal</strong>";
							}
							elseif ($result >= 25.0 and $result <= 29.9) {
								$comment = "<strong>overweight</strong>";
							}
							elseif ($result >= 30.0) {
								$comment = "<strong>obese</strong>";
							}
							
							echo "Yout Body Mass Index is: $result <br />";
							echo "Your BMI status is: $comment";
						}
					?>
				</div>
			</form>
		</div>
		
		<div id="footer-container">
			<br /><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
		</div>
	</div>
</body>
</html>