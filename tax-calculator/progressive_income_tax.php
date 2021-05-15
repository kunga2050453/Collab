<?php
	$grossIncome = filter_input(INPUT_POST, 'grossIncome',
        FILTER_VALIDATE_FLOAT);
    if(isset($_POST['formSubmit']) )
    {
      $varGender = $_POST['formGender'];
      $errorMessage = ""; 
    }
    $state = filter_input(INPUT_POST, 'formGender',
        FILTER_VALIDATE_FLOAT);
    // validate grossIncome
    if ($grossIncome === FALSE ) {
        $error_message = 'Investment must be a valid number.'; 
    }
    else if ($grossIncome < 1000 ) {
        $error_message = 'Investment must be at least or greater than Rs. 1,000.'; 
    }
    // set error message to empty string if no invalid entries
    else {
        $error_message = ''; 
    }

     // if an error message exists, go to the form page
    if ($error_message != '') {
        include('taxcalculator.php');
        exit(); 
    }

    // calculations 

    // calculate taxable income, which is gross income minus 10,000
	$taxableIncome = $grossIncome - 0;
	/* use conditionals to decide tax rate, perform computation to get
	total income tax */
    if ($_POST["formGender"] == "M" && $_POST["formState"] == "M") {
        if ($taxableIncome <= 450000) {
            $totalIncomeTax = ($taxableIncome * 1) / 100;
        }
        elseif ($taxableIncome >= 450001 && $taxableIncome <= 550000) {
            $totalIncomeTax = ((($taxableIncome - 400000) * 10) / 100) + 4500;
        }
        elseif ($taxableIncome >= 550001 && $taxableIncome <= 750000) {
            $totalIncomeTax = ((($taxableIncome - 500000) * 20) / 100) + 14500;
        }
        elseif ($taxableIncome >= 750001 && $taxableIncome <= 2000000) {
            $totalIncomeTax = ((($taxableIncome - 600000) * 30) / 100) + 54500; 
        }
        else {
            $totalIncomeTax = ((($taxableIncome - 1500000) * 36) / 100) + 429500;
        }
    }
    elseif ($_POST["formGender"] == "M" && $_POST["formState"] == "U") {
        if ($taxableIncome <= 400000) {
            $totalIncomeTax = ($taxableIncome * 1) / 100;
        }
        elseif ($taxableIncome >= 400001 && $taxableIncome <= 500000) {
            $totalIncomeTax = ((($taxableIncome - 400000) * 10) / 100) + 4000;
        }
        elseif ($taxableIncome >= 500001 && $taxableIncome <= 600000) {
            $totalIncomeTax = ((($taxableIncome - 500000) * 20) / 100) + 14000;
        }
        elseif ($taxableIncome >= 600001 && $taxableIncome <= 2000000) {
            $totalIncomeTax = ((($taxableIncome - 600000) * 30) / 100) + 54000; 
        }
        else {
            $totalIncomeTax = ((($taxableIncome - 1500000) * 36) / 100) + 444000;
        }
    }
    elseif ($_POST["formGender"] == "F" && $_POST["formState"] == "M") {
        if ($taxableIncome <= 450000) {
            $totalIncomeTax = ($taxableIncome * 1) / 100;
        }
        elseif ($taxableIncome >= 450001 && $taxableIncome <= 550000) {
            $totalIncomeTax = ((($taxableIncome - 400000) * 10) / 100) + 4500;
        }
        elseif ($taxableIncome >= 550001 && $taxableIncome <= 750000) {
            $totalIncomeTax = ((($taxableIncome - 500000) * 20) / 100) + 14500;
        }
        elseif ($taxableIncome >= 750001 && $taxableIncome <= 2000000) {
            $totalIncomeTax = ((($taxableIncome - 600000) * 30) / 100) + 54500; 
        }
        else {
            $totalIncomeTax = ((($taxableIncome - 1500000) * 36) / 100) + 429500;
        }
    }
    else {
        if ($taxableIncome <= 400000) {
            $totalIncomeTax = ($taxableIncome * 1) / 100;
        }
        elseif ($taxableIncome >= 400001 && $taxableIncome <= 500000) {
            $totalIncomeTax = ((($taxableIncome - 400000) * 10) / 100) + 4000;
        }
        elseif ($taxableIncome >= 500001 && $taxableIncome <= 600000) {
            $totalIncomeTax = ((($taxableIncome - 500000) * 20) / 100) + 14000;
        }
        elseif ($taxableIncome >= 600001 && $taxableIncome <= 2000000) {
            $totalIncomeTax = ((($taxableIncome - 600000) * 30) / 100) + 54000; 
        }
        else {
            $totalIncomeTax = ((($taxableIncome - 1500000) * 36) / 100) + 444000;
        }
    }

	// calculate effectiveTaxRate and store 
	$effectiveTaxRate = $totalIncomeTax / $grossIncome;
	$effectiveTaxRate *= 100;
	$effectiveTaxRate = round($effectiveTaxRate, 1); //round to 1 place after decimal

    // apply formatting

	$grossIncome_f = number_format($grossIncome);
	$taxableIncome_f = number_format($taxableIncome);
	$totalIncomeTax_f = number_format($totalIncomeTax, 2);
?>

<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8" />
	<title> Income Tax </title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<main> 
		<h1> Tax Calculator </h1> 
		<?php
		echo "As a single taxpayer with a gross annual income of Rs. " . $grossIncome_f
			 . ", your taxable income is Rs. " . $taxableIncome_f . ".";
			
		$newline = "\n";     // create a newline in php with these 2 lines
		echo nl2br($newline);
		$newline = "\n";     // creating another newline 
		echo nl2br($newline);
			
		echo "Your total income tax is Rs. " . $totalIncomeTax_f;
	    ?>
	</main>
</body>
</html>
