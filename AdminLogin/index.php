<!DOCTYPE html>
<head>

    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif;
        .wrapper{ width: 350px; padding: 20px; }


    </style>
</head>
<body>

<div class="wrapper">
    <form method="post" action="adminlogin.php">
        
        <h1>LOGIN SUCCESS!! </h1>
        <div class="alert alert-success">
    <strong>Success!</strong> You have successfully logged in!!
  </div>
        <br>
        <a href="login.php?logout=1" class="logout">Logout</a>
        <div class="form-group">
        	Welcome to Tax Calculating System!
        	Please feel free to input your Tax 
        	and determine your Tax Rate!
            
        </div>
    </form>
</div>


</body>
</html>

