<?php
  // set default value of variable for initial page load 
  if (!isset($grossIncome)) { $grossIncome = ''; }
?> 

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title> Tax Calculator </title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body> 
	<main> 
    <h1> Tax Calculator </h1> 
     <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php } ?>

	<form action="progressive_income_tax.php" method="post">

		<div id="data">
			<label> Income: </label>
			<input type="text" name="grossIncome" 
		       value="<?php echo htmlspecialchars($grossIncome); ?>">
		    <br>
		</div>

		<div id = "buttons">
			<label>&nbsp;</label>
        	<input type="submit" value="Calculate">
        	<br>
        </div>

	</form>
	</main>
</body>
</html> 