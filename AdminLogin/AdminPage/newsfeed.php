<?php require_once "newsController.php";
$results = mysqli_query($con, "SELECT * FROM info");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>News Feed</title>
</head>

<body>
    <header class="main-header">
        <div class="container row">
            <div class="page-title">
                <h1>Blogs</h1>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="taxcalculator.php">Tax Calculator</a></li>
                    <li><a href="userfeed.php">User Feed</a></li>
                </ul>
            </nav>

            <div class="search-bar">
                <nav class="main-nav">
                    <ul>
                        <li><button type="button"><a href="login.php">Logout</a></button></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="blog-box">
        <div class="blog-title">
            <p>Title</p>
        </div>
        <div class="blog-image">
            <img src="<?php echo "../../public/storage/images/blog/" . $row['image']; ?>" class="myDIV" alt="">
        </div>
        <div class="blog-description">
            <p>
                Description
            </p>
        </div>
    </div>
</body>

</html>