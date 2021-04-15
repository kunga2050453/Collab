<!DOCTYPE html>
<head>

    <title>Admin Login</title>
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
        <!--
        In the action attribute i have the specified the adminlogin.php file so the when i click the login-btn,this php file in the form will execute. For the method attribute i have specified post method so that I can submit the form data to the php file
         -->
        <h1>ADMIN LOGIN </h1>
        <br>

        <div class="form-group">
            <i class="fas fa-user"></i>
            <label>User Email</label>
            <input type="email" id="email" placeholder="Enter user Email" class="form-control" name="email" required />
            <span class="help-block"></span>
        </div>
        <div class="form-group>">
            <i class="fas fa-lock"></i>
            <label>Password</label>
            <input type="password"  placeholder="Enter Password" class="form-control" name="password" required />
            <span class="help-block"></span>
        </div>
        <div class="form-group">
            <input type="submit"  class="btn btn-primary" value="Login" name="login"/>
        </div>
    </form>
</div>


</body>
</html>

