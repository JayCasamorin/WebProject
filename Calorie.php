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
			<h2 style="margin-left: 50px"> What is Calorie Calculator? </h2>
			<ul>
				<li> Counting calories can help you lose weight by giving you an overview of what you eat 
				<br /> each day. This can help you identify eating patterns to modify, keeping you on track to
				<br /> reach your goals. </li>
				<li> If you are just looking at whether you will lose weight, a calorie is a calorie and you 
				<br /> will need to consume fewer calories than you burn. But in terms of health, not all
				<br /> calories are created equal. </li>
			</ul>
			
			<form id="form-container" action="" method="post">
				
				<div style="grid-area: header;">
					<strong>
						Calorie calculator
					</strong>
				</div>
				
				<div style="grid-area: content;"> 
					<table>
						<tr><td width="250px"> Please enter your age: <strong>(15 - 80)</strong></td><td><input type="text" name="user_age" /></td></tr>
						<tr><td>Sex:</td>
							<td>
								<input type="radio" id="male" name="user_sex" value="male" />
								<label for="male">Male</label>
								<input type="radio" id="female" name="user_sex" value="female" />
								<label for="female">Female</label>
							</td>
						</tr>
						<tr><td>Please enter your mass in <strong>kilograms</strong>:</td><td><input type="text" name="user_mass" /></td></tr>
						<tr><td>Please enter your height in <strong>meters</strong>:</td><td><input type="text" name="user_height" /></td></tr>
						<tr><td></td><td align="right"><input type="submit" value="Calculate"  /></td></tr>
					</table>
				</div>
				
				<div style="grid-area: result;">
					<?php
						$user_age = (float)(isset($_POST['user_age']) ? $_POST['user_age'] : 0);
						$user_sex = isset($_POST['user_sex']) ? $_POST['user_sex'] : ' ';
						$user_mass = (float)(isset($_POST['user_mass']) ? $_POST['user_mass'] : 0);
						$user_height = (float)(isset($_POST['user_height']) ? $_POST['user_height'] : 0);
						$BMR = 0;
						
						if ($user_sex == "male") {
							$BMR = (13.397 * $user_mass) + (4.799 * $user_height * 100) - (5.677 * $user_age) + 88.362;
							$result = round($BMR,2);
							echo "Your Basal Metabolic Rate is: $result Calories/day <br />";
						}
						elseif ($user_sex == "female"){
							$BMR = (9.247 * $user_mass) + (3.098 * $user_height * 100) - (4.330 * $user_age) + 447.593;
							$result = round($BMR,2);
							echo "Your Basal Metabolic Rate is: $result Calories/day <br />";
						}
					?>
				</div>
			</form>
			
			<h3 style="margin-left: 50px"> Additional Information </h3>
			<ul>
				<li> Calories are used to describe the energy your body gets from foods or expends on 
				<br /> various activities.</li>
				<li> Your body gets calories from the foods you eat and uses them to fuel basal metabolic 
				<br /> rate, digestion and physical activity.</li>
				<li> In order to lose weight, you always need to burn more calories than you eat. </li>
				<li> Certain factors help explain why calories can seem irrelevant to weight loss. However, 
				<br /> studies controlling for these factors consistently show that a calorie deficit is needed. </li>
				<li> To count your calories most accurately, use a food journal combined with scales or 
				<br /> measuring cups. </li>
			</ul>
			
		</div>
		
		<div id="footer-container">
			<br /><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
		</div>
	</div>
</body>
</html>