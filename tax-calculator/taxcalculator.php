<?php
  // set default value of variable for initial page load 
    if (!isset($grossIncome)) { $grossIncome = ''; }
    if (!isset($state)) { $state = ''; }
    
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
            <div class="dropdown">
                <select name="formGender" class="form-control">
                  <option value="">Gender</option>
                  <option value="M">Male</option>
                  <option value="F">Female</option>
                </select>
                <select name="formState" class="form-control">
                  <option value="">Marital Status</option>
                  <option value="M">Married</option>
                  <option value="U">Unmarried</option>
                </select>
            </div>
            <br>
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