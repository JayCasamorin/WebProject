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
			text-align: center;
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
			<h2 style="margin-left: 50px"> What is the Food Exchange List? </h2>
			<p style="margin-left: 70px">&emsp; Detailed information on the nutrients of many foods and drinks is given by exchange lists. 
			<br /> They are designed to better combat diabetes, weight loss, cardiovascular risk prevention and 
			<br /> general healthier eating. Exchange lists, when used knowledgeably, tend to maintain harmony
			<br /> and moderation. </p>
			
			<table>
				<tr><td colspan="2"><strong>Vegetables</strong> contains 25 calories and 5 grams of carbohydrate. One serving equals:</td></tr>
				<tr><td width="25%"> <strong>Measurements</strong> </td><td align="left">&emsp; <strong>Ingredients</strong> </td></tr>
				<tr><td> 64 grams	</td><td align="left"> Cooked vegetables (carrots, broccoli, zucchini, cabbage, etc.)</td></tr>
				<tr><td> 128 grams	</td><td align="left"> Raw vegetables or salad greens </td></tr>
				<tr><td> 64 grams	</td><td align="left"> Vegetable juice </td></tr>
			</table>
			
			<table>
				<tr><td colspan="2"><strong>Fat-Free and Very Low-Fat Milk</strong> contain 90 calories per serving. One serving equals: </td></tr>
				<tr><td width="25%"> <strong>Measurements</strong> </td><td align="left">&emsp; <strong>Ingredients</strong> </td></tr>
				<tr><td> 128 grams	</td><td align="left"> 	Milk, fat-free or 1% fat </td></tr>
				<tr><td> 96 grams	</td><td align="left"> 	Yogurt, plain nonfat or low-fat </td></tr>
				<tr><td> 128 grams	</td><td align="left"> Yogurt, artificially sweetened </td></tr>
			</table>
			
			<table>
				<tr><td colspan="2"><strong>Very Lean Protein</strong> choices have 35 calories and 1 gram of fat per serving. One serving equals: </td></tr>
				<tr><td width="25%"> <strong>Measurements</strong> </td><td align="left">&emsp; <strong>Ingredients</strong> </td></tr>
				<tr><td> 30 grams	</td><td align="left"> Turkey breast or chicken breast, skin removed </td></tr>
				<tr><td> 30 grams	</td><td align="left"> Fish fillet (flounder, sole, scrod, cod, etc.) </td></tr>
				<tr><td> 30 grams	</td><td align="left"> Canned tuna in water </td></tr>
				<tr><td> 30 grams	</td><td align="left"> Shellfish (clams, lobster, scallop, shrimp) </td></tr>
				<tr><td> 96 grams	</td><td align="left"> Cottage cheese, nonfat or low-fat </td></tr>
				<tr><td> 2 whole	</td><td align="left"> Egg whites </td></tr>
				<tr><td> 30 grams 	</td><td align="left"> Egg substitute </td></tr>
				<tr><td> 30 grams 	</td><td align="left"> Fat-free cheese </td></tr>
				<tr>
					<td> 64 grams 	</td>
					<td align="left"> Beans, cooked (black beans, kidney, chick peas or lentils): 
						<br /> count as 1 starch/bread and 1 very lean protein </td>
				</tr>
			</table>
			
			<table>
				<tr><td colspan="2"><strong>Fruits</strong> contain 15 grams of carbohydrate and 60 calories. One serving equals:</td></tr>
				<tr><td width="25%"> <strong>Measurements</strong> </td><td align="left">&emsp; <strong>Ingredients</strong> </td></tr>
				<tr><td> 1 small	</td><td align="left"> Apple, banana, orange, nectarine </td></tr>
				<tr><td> 1 medium	</td><td align="left"> Fresh peach </td></tr>
				<tr><td> 1 whole	</td><td align="left"> Kiwi </td></tr>
				<tr><td> 1 / 2		</td><td align="left"> Grapefruit </td></tr>
				<tr><td> 1 / 2		</td><td align="left"> Mango </td></tr>
				<tr><td> 128 grams	</td><td align="left"> Fresh berries (strawberries, raspberries, or blueberries) </td></tr>
				<tr><td> 128 grams	</td><td align="left"> Fresh melon cubes </td></tr>
				<tr><td> 1 / 8 		</td><td align="left"> Honeydew melon </td></tr>
				<tr><td> 110 grams	</td><td align="left"> Unsweetened juice </td></tr>
				<tr><td> 4 tsp		</td><td align="left"> Jelly or jam </td></tr>
			</table>
			
			<table>
				<tr><td colspan="2"><strong>Lean Protein</strong> choices have 55 calories and 2-3 grams of fat per serving. One serving equals: </td></tr>
				<tr><td width="25%"> <strong>Measurements</strong> </td><td align="left">&emsp; <strong>Ingredients</strong> </td></tr>
				<tr><td> 30 grams	</td><td align="left"> Chicken-dark meat, skin removed </td></tr>
				<tr><td> 30 grams	</td><td align="left"> Turkey-dark meat, skin removed </td></tr>
				<tr><td> 30 grams	</td><td align="left"> Salmon, swordfish, herring </td></tr>
				<tr><td> 30 grams	</td><td align="left"> Lean beef (flank steak, London broil, tenderloin, roast beef)* </td></tr>
				<tr><td> 30 grams	</td><td align="left"> Veal, roast or lean chop* </td></tr>
				<tr><td> 30 grams	</td><td align="left"> Lamb, roast or lean chop* </td></tr>
				<tr><td> 30 grams	</td><td align="left"> Pork, tenderloin or fresh ham* </td></tr>
				<tr><td> 30 grams	</td><td align="left"> Low-fat cheese (with 3 g or less of fat per ounce) </td></tr>
				<tr><td> 30 grams	</td><td align="left"> Low-fat luncheon meats (with 3 g or less of fat per ounce) </td></tr>
				<tr><td> 128 grams	</td><td align="left"> 4.5% cottage cheese </td></tr>
				<tr><td> 2 medium	</td><td align="left"> Sardines </td></tr>
				<tr><td colspan="2" align="left">&emsp;<em>* Limit to 1 - 2 times per week</em></td></tr>
			</table>
			
			<table>
				<tr><td colspan="2"><strong>Medium-Fat Proteins</strong> have 75 calories and 5 grams of fat per serving. One serving equals: </td></tr>
				<tr><td width="25%"> <strong>Measurements</strong> </td><td align="left">&emsp; <strong>Ingredients</strong> </td></tr>
				<tr><td> 30 grams	</td><td align="left"> Beef (any prime cut), corned beef, ground beef** </td></tr>
				<tr><td> 30 grams	</td><td align="left"> Pork chop </td></tr>
				<tr><td> 1 whole	</td><td align="left"> Whole egg (medium)** </td></tr>
				<tr><td> 30 grams	</td><td align="left"> Mozzarella cheese </td></tr>
				<tr><td> 30 grams	</td><td align="left"> Ricotta cheese </td></tr>
				<tr><td> 110 grams	</td><td align="left"> Tofu (note this is a heart healthy choice) </td></tr>
				<tr><td colspan="2" align="left">&emsp;<em>** Choose these very infrequently</em> </td></tr>
			</table>
			
			<table>
				<tr><td colspan="2"><strong>Starches</strong> contain 15 grams of carbohydrate and 80 calories per serving. One serving equals: </td></tr>
				<tr><td width="25%"> <strong>Measurements</strong> </td><td align="left">&emsp; <strong>Ingredients</strong> </td></tr>
				<tr><td> 1 slice	</td><td align="left"> Bread (white, pumpernickel, whole wheat, rye) </td></tr>
				<tr><td> 2 slice	</td><td align="left"> 	Reduced-calorie or "lite" bread </td></tr>
				<tr><td> 30 grams	</td><td align="left"> 	Bagel (varies) </td></tr>
				<tr><td> 1 / 2 		</td><td align="left"> 	English muffin </td></tr>
				<tr><td> 1 / 2		</td><td align="left"> Hamburger bun </td></tr>
				<tr><td> 96 grams	</td><td align="left"> Cold cereal </td></tr>
				<tr><td> 43 grams	</td><td align="left"> Rice, brown or white, cooked </td></tr>
				<tr><td> 43 grams	</td><td align="left"> Barley or couscous, cooked </td></tr>
				<tr><td> 43 grams	</td><td align="left"> Legumes (dried beans, peas or lentils), cooked </td></tr>
				<tr><td> 64 grams	</td><td align="left"> 	Pasta, cooked </td></tr>
				<tr><td> 64 grams	</td><td align="left"> Bulgar, cooked </td></tr>
				<tr><td> 64 grams	</td><td align="left"> 	Corn, sweet potato, or green peas </td></tr>
				<tr><td> 85 grams	</td><td align="left"> 	Baked sweet or white potato </td></tr>
				<tr><td> 20 grams	</td><td align="left"> Pretzels </td></tr>
				<tr><td> 384 grams	</td><td align="left"> Popcorn, hot air popped or microwave (80% light) </td></tr>
			</table>
			
			<table>
				<tr><td colspan="2"><strong>Fats</strong> contain 45 calories and 5 grams of fat per serving. One serving equals: </td></tr>
				<tr><td width="25%"> <strong>Measurements</strong> </td><td align="left">&emsp; <strong>Ingredients</strong> </td></tr>
				<tr><td> 1 tsp	  </td><td align="left"> Oil (vegetable, corn, canola, olive, etc.) </td></tr>
				<tr><td> 1 tsp	  </td><td align="left"> Butter </td></tr>
				<tr><td> 1 tsp	  </td><td align="left"> Stick margarine </td></tr>
				<tr><td> 1 tsp	  </td><td align="left"> Mayonnaise </td></tr>
				<tr><td> 1 Tbsp	  </td><td align="left"> Reduced-fat margarine or mayonnaise </td></tr>
				<tr><td> 1 Tbsp	  </td><td align="left"> Salad dressing </td></tr>
				<tr><td> 1 Tbsp	  </td><td align="left"> Cream cheese </td></tr>
				<tr><td> 2 Tbsp	  </td><td align="left"> Lite cream cheese </td></tr>
				<tr><td> 1 / 8	  </td><td align="left"> Avocado </td></tr>
				<tr><td> 8 Large  </td><td align="left"> Black olives </td></tr>
				<tr><td> 10 Large </td><td align="left"> Stuffed green olives </td></tr>
				<tr><td> 1 slice  </td><td align="left"> Bacon </td></tr>
			</table>
		</div>
		
		<div id="footer-container">
			<br /><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
		</div>
	</div>
</body>
</html>