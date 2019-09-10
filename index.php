<!DOCTYPE html>
<html>
<head>
	<title>Aleksa Djuric - Projektni zadatak</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Chilanka" rel="stylesheet">
</head>
<body>
	<h1>Multiplication Table</h1>
	<h3>(Click to see result)</h3>
	<div class="container">
	<!-- Pop-Up div for result  -->
	<div class="pop-up">
		<h1 class="message"></h1>
	</div>
	<!--  -->
		<table border="1"  onclick="getParams(event)">
		<?php	
			// PHP code to draw table 
			for ($row=1; $row <= 10; $row++) { 
			echo "<tr>";
				for ($col=1; $col <= 10; $col++) { 
				   echo "<td>$row x $col</td> \n";	
				}
			echo "</tr>"; 	
			}	
		?>		
		</table>
	</div>
	<script type="text/javascript" src="calculator.js"></script>
</body>
</html>